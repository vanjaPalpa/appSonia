<template>
  <div>
    <nav class="w-full bg-red-500 items-center">
      <ul class="text-base bg-gray-900 text-gray-100 flex flex-row  overflow-hidden">
        <li class="m-4 text-xl text-red-400">APPsonia</li>
        <div class="flex flex-row float-right">
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
