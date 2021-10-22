<template>
  <div>
    <nav class="w-full bg-red-500 ">
      <ul class="text-base bg-gray-900 text-gray-100 flex flex-col pr-4 pl-4  md:flex-row md:justify-between md:pr-12 md:pl-12">
        <div class="flex flex-row space justify-between items-center md:inline-block ">
          <h3 class="m-4 text-2xl font-semibold text-red-400  md:ml-0">APPsonia</h3>
          <span class="m-4 md:hidden">X</span>
        </div>
        <div class="flex flex-col md:flex-row">
          <li class="m-4"><a href="/">Home</a></li>
          <li class="m-4"><a href="/connexion">Connexion</a></li>
          <li class="m-4"><a href="/checkID">checkID</a></li>
        </div>
      </ul>
    </nav>
    <div>
      <Nuxt />
    </div>
  </div>
</template>
