import axios from '@nuxtjs/axios'

export const state = () => ({
  auth:{
    user:null,
    loggedIn:false
  }
})

export const mutations = {
  setUser(state, user) {
    state.auth.user = user,
    state.auth.loggedIn = true
  },
  logout(state) {
    state.auth.user = null,
    state.auth.loggedIn = false
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
  }
}

export const actions = {
  async login({commit},user){
    let response = await this.$axios.post('/api/login', user)

    commit('setUser',response.data)
    localStorage.setItem('user', JSON.stringify(response.data))
    console.log('login succes')
  },
  async logout({commit},token){
    commit('logout')
    axios.defaults.headers.common.Authorization = `Bearer ${token}`
    let response = await axios.post('/api/logout')
    localStorage.removeItem('user')
    console.log(response.data.message)

  },
  async register({commit},user){
    let response = await axios.post('/api/register', user)

    commit('setUser',response.data)
    localStorage.setItem('user', JSON.stringify(response.data))
    console.log('register succes')
  },
}
