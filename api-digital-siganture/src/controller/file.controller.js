const uploadFile = require("../middleware/upload");
const fs = require('fs');
const crypto = require('crypto')

const private_key = fs.readFileSync('keys/privateKey.pem', 'utf-8');
const public_key = fs.readFileSync('keys/publicKey.pem', 'utf-8');

const baseUrl = "http://localhost:8080/files/";

const upload = async (req, res) => {
  try {
    await uploadFile(req, res);
    
    if (req.file == undefined) {
      return res.status(400).send({ message: "Please upload a file!" });
    }

    console.log('this path -> '+req.file.path)

    const doc = fs.readFileSync(req.file.path);
    let signer = crypto.createSign('RSA-SHA256');

    signer.write(doc);
    signer.end();

    let signature = signer.sign(private_key, 'base64');

    console.log('Digital Signature: ', signature);
    fs.writeFileSync('signatures/'+req.file.originalname+'.txt', signature);

    res.status(200).send({
      message: "Uploaded the file successfully: ",
      signature: signature
    });
  } catch (err) {
    console.log(err);

    if (err.code == "LIMIT_FILE_SIZE") {
      return res.status(500).send({
        message: "File size cannot be larger than 2MB!",
      });
    }

    res.status(500).send({
      message: `Could not upload the file: ${req.file.originalname}. ${err}`,
    });
  }
};

const uploadVerify = async (req, res) => {
  try {
    await uploadFile(req, res);

    if (req.file == undefined) {
      return res.status(400).send({ message: "Please upload a file!" });
    }

    const signature = req.body.sign

    console.log('this path -> '+req.file.path+' this sign '+signature)

    const doc = fs.readFileSync(req.file.path);
    const verifier = crypto.createVerify('RSA-SHA256');

    verifier.write(doc);
    verifier.end();

    const result = verifier.verify(public_key, signature, 'base64');

    console.log('Resultat: ', result);

    res.status(200).send({
      message: "Resultat de verification: " + result,
    });
  } catch (err) {
    console.log(err);

    if (err.code == "LIMIT_FILE_SIZE") {
      return res.status(500).send({
        message: "File size cannot be larger than 2MB!",
      });
    }

    res.status(500).send({
      message: `Could not upload the file: ${req.file.originalname}. ${err}`,
    });
  }
};

const getListFiles = (req, res) => {
  const directoryPath = __basedir + "/resources/static/assets/uploads/";

  fs.readdir(directoryPath, function (err, files) {
    if (err) {
      res.status(500).send({
        message: "Unable to scan files!",
      });
    }

    let fileInfos = [];

    files.forEach((file) => {
      fileInfos.push({
        name: file,
        url: baseUrl + file,
      });
    });

    res.status(200).send(fileInfos);
  });
};

const download = (req, res) => {
  const fileName = req.params.name;
  const directoryPath = __basedir + "/resources/static/assets/uploads/";

  res.download(directoryPath + fileName, fileName, (err) => {
    if (err) {
      res.status(500).send({
        message: "Could not download the file. " + err,
      });
    }
  });
};

module.exports = {
  upload,
  getListFiles,
  download,
  uploadVerify
};
