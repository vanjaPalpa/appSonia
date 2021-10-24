<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Acte de naissance</title>

    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            margin: 7;
            padding: 10;
            width: 900px;
            border-style: solid;
        }
    </style>
</head>
<body>
    <h1 style="color:red">{{ $title }}</h1>
    <p>{{ $date }}</p>

    <p>{{ $first_name }}</p>
    <p>{{ $last_name }}</p>
    <p>{{ $bithday }}</p>
    <p>{{ $city }}</p>

     <div class="container">
    	<div class="header">
    		<div align="left">
	    		<h3>REPOBLIKAN' NY MADAGASIKARA</h3> <br>
	    		<p>Fitiavana - Tanindrazana - Fandrosoana</p>
                <hr width="30%">
    		</div>
    		<div>
	    		<h4 align="center">ACTE DE NAISSANCE</h4>
    		</div>
    	</div>

    	<div>
    		<strong>Anarana :</strong> <i>RANDRIAMANALINA</i> <br>
    		<strong>Fanampiny : </strong><i>Harimampionona Jennica</i> <br>
    		<strong>Teraka tamin' ny :</strong> <i><time>10 mars 2002</time></i> <strong>tao</strong> <i><address>Itasy</address></i> <br>
    		<strong>Zanak' i :</strong> <i>RANDRIAMANALINA Alain</i> <br>
    		<strong>Sy :</strong> <i>RAHOVAHOAKA Verotiana</i> <br>
    	</div>
        <div align="right">
            Natao tamin' ny ,...................................
        </div>

    </div>

</body>
</html>
