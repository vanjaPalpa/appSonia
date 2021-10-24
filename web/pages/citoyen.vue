<template>

<div>
  <h1>Profile</h1>
  <pre>
    {{ profil }}
  </pre>
  <div>
    <h1>form get acte civils</h1>
    <form @submit.prevent="sendrequest">
      <label>choix des actes civil</label>

      <span>acte de naissance</span>
      <input type="radio" value="acte de naissance" v-model="formRequest.name_civils_status">
      <span>acte de deces</span>
      <input type="radio" value="acte de deces" v-model="formRequest.name_civils_status">


      <label>motif</label>
      <input type="text" v-model="formRequest.pattern">

      <input type="submit" value="envoie ma demande">
    </form>
  </div>
  <button @click="logout">logout</button>
</div>

</template>

<script>
export default {

  // TODO:fix it to refresh page
  fetch ({store, redirect}) {
    if (!store.state.auth.user) {
      redirect('/connexion')
    }
  },
  async mounted(){
    let token = this.$store.getters.getToken
    this.$store.dispatch('getProfile',token)
    this.profil = this.$store.state.profile
  },
  data(){
    return{
      profil:null,
      formRequest:{
        pattern:'mettre ici le motif',
        name_civils_status:''
      }
    }
  },
  methods:{
    logout(){
      let token = this.$store.getters.getToken
      this.$store.dispatch('logout',token)
    },
    sendrequest(){
      let token = this.$store.getters.getToken
      let data = {
        'token':token,
        'form':this.formRequest
      }
      this.$store.dispatch('sendRequest',data)
    }
  }
}
</script>
