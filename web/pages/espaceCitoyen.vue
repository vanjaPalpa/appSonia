<template>
  <div>
    <!-- component -->
      <main v-if="isAuthenticated" class="flex w-full h-screen">
        <aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
          <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
              <div class="text-sm">
                <div class="bg-gray-900 text-white p-5 rounded cursor-pointer">Profil</div>
                <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Mes documents</div>
              </div>

              <div class="flex p-3 text-white bg-red-500 rounded cursor-pointer text-center text-sm">
                <button @click="logout" class="rounded inline-flex items-center">
                  <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fillRule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clipRule="evenodd" /></svg>
                  <span class="font-semibold">Logout</span>
                </button>
              </div>
          </div>
        </aside>
        <section class="w-full p-4 ">
          <div class="w-full h-64  p-4 text-md">
            <profil :data_citizen="data_citizen"></profil>

          </div>
        </section>
      </main>
      <div v-else>
        <a href="connexion">connexion</a>
      </div>

  </div>
</template>

<script>
export default {
  layout:"admin",
  async mounted(){

    this.user = JSON.parse(localStorage.getItem('user'));

    if(this.user){
      this.$store.commit('setUser',this.user)
    }

    let token = this.$store.getters.getToken
    this.$axios.setToken(token, 'Bearer')
    let response = await this.$axios.get('/api/profile')
    console.log(response.data)

    this.data_citizen = response.data.citizen_data

  },
  computed: {
      isAuthenticated() {
        return this.$store.getters.getStatus;  // it check if user isAuthenticated
      }
  },
  data(){
    return {
      user:'',
      data_citizen:{
        nom :"DAVID",
				prenom : 'Christiano',
				datenaiss:'17 mai 2001',
				lieunaiss: 'Ambatomitsangana',
				pere:'ANDRIANTSITOHAINA',
				mere: 'Ranjavanirina',
				CIN: 1018798798278289,
				dateCIN: '14-05-20',
				lieuCIN: 'Arivonimamo',
				adresse: 'IVC 12 AMBATOMITSANGANA',
				arrondissement: 'Tana III',
      }
    }
  },
  methods:{
    async logout(){
      let token = this.$store.getters.getToken
      this.$store.dispatch('logout',token)
    }
  }
}
</script>
