<style>
.bgim{
  background-image:url('https://consultation.avocat.fr/userfiles/articles/47635-20210111-113141-signature-electronique.png');
  background-repeat: no-repeat;
  background-position: bottom right;
}

.deg{
  background: rgb(0, 14, 36);
  width: 100vh;
  height: 100vh;
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(33,76,131,1) 35%, rgba(0,212,255,1) 100%);
  clip-path: circle(68.8% at 100% 18%);
  position: absolute;
  right: 0%;
  z-index: -5;
}

</style>
<template>

  <div class="px-8 bgim" >
    <div class="deg"></div>
    <div class="mb-14 max-w-md bottom-44">
      <h1 class="text-2xl font-black text-gray-700 mb-4 pt-10">Description du projet</h1>
      <p class="text-gray-900 text-xl text-right text-justify"> Application créant un Identité unique des citoyens tout en visant à certifier les documents d'état civil par un sceau digital et une signature numérique.
        l'application garantit la vérification, authenticité des citoyens et des documents d'état civil.
      </p>
    </div>

    <div class="max-w-lg ">
      <h1  class="text-2xl font-black text-gray-700 my-4">Aide d'utilisation de cette application</h1>

      <div class="r text-xl">

        <p class="text-gray-900 pb-3">
          Tout d'abord, les utilisateurs doivent s'inscrire:<br>
        </p>

        <p class="text-gray-900 pl-5 text-justify pb-3">
          * Remplir les formulaires.<br>
          * Sauvegarder et envoyer toutes les informations.<br>
          * Attendre la validation des données <br>
          * Telecharger le PDF reçus <br>
        </p>

        <p class="text-gray-900 text-left">
          Puis veuillez attendre jusqu'à ce que l'administrateur approuve toutes les informations que vous avez saisis<br>
          Enfin, vous pouvez telecharger les documents.
        </p>
      </div>
    </div>
</div>
</template>
<script>
export default {}
</script>
