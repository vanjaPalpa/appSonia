<template>

<div>
  <h1>Profile</h1>
  <pre>
    {{ profil }}
  </pre>
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
      profil:null
    }
  },
  methods:{
    logout(){
      let token = this.$store.getters.getToken
      this.$store.dispatch('logout',token)
    }
  }
}
</script>
