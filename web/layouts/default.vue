<template>
  <div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <nav class="w-full bg-red-500 ">
      <ul class="text-base bg-gray-900 text-gray-100 flex flex-col pr-4 pl-4  md:flex-row md:justify-between md:pr-12 md:pl-12">
        <div class="flex flex-row space justify-between items-center md:inline-block ">
          <h3 class="m-4 text-2xl font-semibold text-red-400  md:ml-0">APPsonia</h3>
          <span class="m-4 md:hidden">X</span>
        </div>
        <div class="flex flex-col md:flex-row">
          <li class="m-4"><a href="/">Home</a></li>
          <li class="m-4"><a href="/connexion">Connexion</a></li>
          <li class="m-4"><a href="/checkID">Verifier un document</a></li>
        </div>
      </ul>
    </nav>
    <div>
      <Nuxt />
    </div>
  </div>
</template>
