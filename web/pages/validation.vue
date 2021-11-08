<template>
 <div>
    <div class="relative min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center">
	<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
	<div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
		<div class="text-center">
			<h2 class="mt-5 text-3xl font-bold text-gray-900">
				Validation
			</h2>
			<p class="mt-2 text-sm text-gray-400">validation des documents</p>
		</div>
        <form @submit.prevent="uploadDocument" class="mt-8 space-y-3" action="#" method="POST">

                    <div class="grid grid-cols-1 space-y-2">
                                    <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                    </div>
                                    <p class="pointer-none text-gray-500 "><span class="text-sm">Deplacer le fichier ici! </span><br /> or <a href="" id="" class="text-blue-600 hover:underline">Choisir le fichier </a> dans votre machine</p>
                                </div>
                                <input type="file" class="hidden">
                            </label>
                        </div>
                    </div>
                            <p class="text-sm text-gray-300">
                                <span>File type: doc,pdf,types of images</span>
                            </p>
                    <div>
                        <button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Valider
                    </button>
                    </div>
        </form>
	</div>
</div>

  </div>
</template>

<style>
	.has-mask {
		position: absolute;
		clip: rect(10px, 150px, 130px, 10px);
	}
</style>

<script>
export default {
  data(){
    return {
      document:''
    }
  },
  methods:{
    async uploadDocument(){
      const fileInput = document.querySelector('.hidden') ;
      const formData = new FormData();

      formData.append('file', fileInput.files[0]);

      const options = {
        method: 'POST',
        body: formData,
        // If you add this, upload won't work
        // headers: {
        //   'Content-Type': 'multipart/form-data',
        // }
      };

      let response = await fetch('http://localhost:8080/upload', options);

      console.log(response)

    }
  }
}
</script>
