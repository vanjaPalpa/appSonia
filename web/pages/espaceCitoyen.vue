<template>
  <div>

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
          <profil :data_citizen="getProfile" @editBouton="showModal"></profil>

          <transition name="fade">

            <div v-show="show_modal" class="fixed inset-0 z-30">


              <div v-show="show_modal" @click="showModal()" class="bg-filter bg-white opacity-25 fixed inset-0 w-full h-full z-20">
              </div>

              <main class="flex flex-col items-center justify-center h-full w-full">
                <transition name="fade-up-down">
                  <div v-show="show_modal" class="modal-wrapper inline-block flex items-center z-30">
                    <div class="modal px-4 max-w-md mx-auto xl:max-w-5xl lg:max-w-5xl md:max-w-2xl ml-11 bg-white max-h-screen shadow-lg flex-row rounded relative">
                      <class class="modal-body p-5 border-solid border-red-500">
                        <button class="px-5 py-2 absolute float-right" @click="showModal()">X</button>
                          <modal-form></modal-form>
                      </class>
                      <div class="modal-footer py-3 px-5 border0-t text-right">
                      </div>
                    </div>
                  </div>
                </transition>
              </main>
            </div>
          </transition>
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
  layout:"adminLayout",
  mounted(){
    this.user = JSON.parse(localStorage.getItem('user'));

    if(this.user){
      this.$store.commit('setUser',this.user)
    }
  },
  computed: {
      isAuthenticated() {
        return this.$store.getters.getStatus;  // it check if user isAuthenticated
      },
      async getProfile(){
        let token = this.$store.getters.getToken
        this.$axios.setToken(token, 'Bearer')
        let response = await this.$axios.get('/api/profile')
        console.log(response.data)

        return response.data.citizen_data

      }
  },
  data(){
    return {
      user:'',
      show_modal: false,
      showEditForm:false,
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
    },
    edit(){
      if(this.showEditForm == true){
        this.showEditForm = false
      }
      this.showEditForm = true
    },
    showModal(){
            if(this.show_modal){
              //stop screen scrolling
              document.getElementsByTagName("html")[0].classList.remove('overflow-y-hidden');
              this.show_modal = false;
            }else{
              document.getElementsByTagName("html")[0].classList.add('overflow-y-hidden');
              this.show_modal = true;
            }
          }
  }
}
</script>

<style>

  .modal-body{
    max-height: 500px;
  }
  .bg-gray-800-opacity{
    background-color: #2D374850;
  }
  @media screen and (max-width: 768px){
    .modal-body {
        max-height: 400px;
    }
  }

  /* animation for vue transition tag */

  .fade-up-down-enter-active {
    transition: all 0.3s ease;
  }
  .fade-up-down-leave-active {
    transition: all 0.3s ease;
  }
  .fade-up-down-enter {
    transform: translateY(10%);
    opacity: 0;
  }
  .fade-up-down-leave-to {
    transform: translateY(10%);
    opacity: 0;
  }

  .fade-enter-active{
      -webkit-transition: opacity 2s;
      transition: opacity .3s;

  }
  .fade-leave-active {
      transition: opacity .3s;
  }

  .fade-enter,
  .fade-leave-to{
      opacity: 0;
  }


  </style>
