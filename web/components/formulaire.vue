<template>
    <div class="m-auto mb-16 w-4/5 max-w-5xl flex flex-col justify-self-center">
    
    <p class="text-2xl m-6 font-semibold text-blue-900"><center>Formulaire de demande d'acte d'État Civil pour les particuliers</center></p>
    <p class="text-lg font-semibold text-gray-700 mt-5 mb-5">Vos coordonnées : (pour permettre l'envoi des pièces d'état-civil demandées)</p>
      
    <div class="flex text-gray-700">
     
      <div class="w-28 font-bold">
        <p class="ml-7 ">
          Mme
          <input type="checkbox" name="" id="acte_naiss">
        </p>
         <p class="ml-7 ">
           M.
          <input type="checkbox" name="" id="acte_naiss">
        </p>
      </div>

      <div  class="w-full ml-5 ">

        <div class="flex flex-row">
          <div class="mb-4 w-full">
            <label class="block mb-2 text-sm font-bold " for="email">
              Nom:
            </label>
            <input
              class="px-3 py-2 mb-3 text-sm leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              id=""
              type=""
              placeholder=""
            />
          </div>
          <div class="mb-4 ml-3 w-full">
            <label class="block mb-2 text-sm font-bold" for="email">
              Prénom:
            </label>
            <input
              class="w-full px-3 py-2 mb-3 text-sm leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              id=""
              type=""
              placeholder=""
            />
          </div>
        </div>

        <div class="mb-4 ">
          <label class="block mb-2 text-sm font-bold t" for="email">
            Adresse:
          </label>
          <input
            class="w-full px-3 py-2 mb-3 text-sm leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            id=""
            type=""
            placeholder=""
          />
        </div>

        <div class="flex flex-row">
          <div class="mb-4 w-full">
            <label class="block mb-2 text-sm font-bold" for="email">
              Code postal:
            </label>
            <input
              class=" px-3 py-2 mb-3 text-sm leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              id=""
              type=""
              placeholder=""
            />
          </div>
          <div class="mb-4 w-full ml-3">
            <label class="block mb-2 text-sm font-bold" for="email">
              Ville:
            </label>
            <input
              class=" px-3 py-2 mb-3 text-sm leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              id=""
              type=""
              placeholder=""
            />
          </div>
        </div>

      </div>
   </div>

   <p class="text-lg font-semibold text-gray-700 mt-5 mb-5">Type d'acte d'état Civil souhaité :</p>  
    <div class="flex flex-col mb-4 text-gray-900">
      <p class="ml-7 ">
        <input type="checkbox" name="" id="Acte_mariage">
        Acte de mariage
      </p>

      <p class="ml-7">
        <input type="checkbox" name="" id="Acte_naissance">
        Acte de naissance
      </p>
      
      <p class="ml-7">
        <input type="checkbox" name="" id="Acte_Décès">
        Acte de Décès
      </p>

      <p class="ml-7">
        <input type="checkbox" name="" id="Copie_intégrale">
        Copie intégrale
      </p>

      <p class="ml-7">
        <input type="checkbox" name="" id="Extrait">
        Extrait
      </p>
    </div>

    <div class="mb-4">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
        Date de naissance (JJ/MM/AA)
      </label>
      <input
        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
        id="naissance"
        type=""
        placeholder="Date de naissance"
      />
    </div>

    <div class="mb-4">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
        Lieu de l'événement :
      </label>
      <input
        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
        id="Lieu"
        type="Lieu"
        placeholder="Lieu"
      />
    </div>

    <div class="mb-4">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
        Nom de naissance du titulaire de l'acte:
      </label>
      <input
        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
        id="Nom"
        type="Nom"
        placeholder="Nom"
      />
    </div>

    <div class="mb-4">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
        Prénoms:
      </label>
      <input
        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
        id="Prénoms"
        type="Prénoms"
        placeholder="Prénoms"
      />
    </div>

    <div class="mb-4 text-gray-700">
      <label class="inline mb-2 text-sm font-bold " for="email">
        Numéro de CNI du demandeur:
      </label>
      <input
        class="w-full px-3 py-2 mb-3 text-sm leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
        id="CIN"
        type="numero"
        placeholder="Numero CIN"
      />
    </div>

    <p class="text-lg font-semibold text-gray-700 mt-5 mb-5">Les information suivantes sont obligatoires pour une copie integrale :</p>
    <div class="mb-4 text-gray-700">
      <label class="inline mb-2 text-sm font-bold" for="email">
        Nom du père:
      </label>
      <input
        class="w-full px-3 py-2 mb-3 text-sm leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
        id="nom_pere"
        type="nom"
        placeholder="Nom du père"
      />
    </div>

    <div class="mb-4 text-gray-700">
      <label class="inline mb-2 text-sm font-bold " for="email">
        Nom de la mère:
      </label>
      <input
        class="w-full px-3 py-2 mb-3 text-sm leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
        id="nom_mere"
        type="nom"
        placeholder="Nom de la mère"
      />
    </div>

    <p class="text-lg font-semibold text-gray-700 mt-5 mb-5">Précisez le motif de la demande :</p>
    <div class="flex flex-col text-gray-800">
      <p class="ml-7 ">
        <input type="checkbox" name="" id="">
        Carte d'identité
      </p>
      
      <p class="ml-7 ">
        <input type="checkbox" name="" id="">
        Passeport
      </p>
      <p class="ml-7">
        <input type="checkbox" name="" id="">
        Certificat de nationalité française
      </p>
      <p class="ml-7">
        <input type="checkbox" name="" id="">
        Succession
      </p>

      <p class="ml-7">
        <input type="checkbox" name="" id="">
        Autre motif à préciser:
      </p>
      <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>
    
  </div>
</template>