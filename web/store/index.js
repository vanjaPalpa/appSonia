export const state = () => ({
  auth:{
    user:null,
    loggedIn:false
  },
  profile:null
})

export const mutations = {
  setUser(state, user) {
    state.auth.user = user,
    state.auth.loggedIn = true
  },
  logout(state) {
    state.auth.user = null,
    state.auth.loggedIn = false
  },
  setProfile(state,profile){
    state.profile = profile
  }
}

export const getters = {
  getStatus(state){
    return state.auth.loggedIn
  },
  getUser(state){
    return state.auth.user.user
  },
  getToken(state){
    return state.auth.user.token
  },
  getProfile(state){
    return state.profile
  }
}

export const actions = {
  async login({commit},user){
    let response = await this.$axios.post('/api/login', user)

    commit('setUser',response.data)
    localStorage.setItem('user', JSON.stringify(response.data))
    this.$router.push('citoyen')
  },
  async logout({commit},token){
    commit('logout')
    this.$axios.setToken(token, 'Bearer')
    // this.$axios.defaults.headers.common.Authorization = `Bearer ${token}`
    let response = await this.$axios.post('/api/logout')
    localStorage.removeItem('user')
    console.log(response.data.message)
    this.$router.push('connexion')

  },
  async register({commit},user){
    let response = await this.$axios.post('/api/register', user)

    commit('setUser',response.data)
    localStorage.setItem('user', JSON.stringify(response.data))
    console.log('register succes')
  },
  async getProfile({commit},token){
    this.$axios.setToken(token, 'Bearer')
    let response = await this.$axios.get('/api/profile')
    commit('setProfile',response.data.citizen_data)
  }
}
