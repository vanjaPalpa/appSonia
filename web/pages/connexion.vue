<template>
  <div class="max-w-full">
    <div class="min-w-full justify-center " :class="statusForm? 'hidden' : 'block'">
      <div class="flex justify-center">
      <!-- Row -->

        <!-- Col -->
        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
          <h3 class="cursor-pointer pt-4 text-2xl text-center" v-on:click="shown">Create an Account!</h3>
          <h3 class="cursor-pointer pt-4 text-2xl text-center text-blue-500" v-on:click="hide">Login</h3>

          <form @submit.prevent="login" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                Email or username
              </label>
              <input
                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                id="email"
                type="email"
                placeholder="Email"

                v-model="formLogin.email"
              />
            </div>

            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                Password
              </label>
              <input
                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                id="email"
                type="password"
                placeholder="***************"
                v-model="formLogin.password"
              />
            </div>


            <div class="mb-6 text-center">
              <button
                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="submit"
              >
                Login
              </button>
            </div>
            <hr class="mb-6 border-t" />
            <div class="text-center">
              <a
                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                href="#"
              >
                Forgot Password?
              </a>
            </div>
            <div class="text-center">
              <a
                class="cursor-pointer inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                  v-on:click="shown"
              >
                Create your compte
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="container min-w-full justify-center" :class="statusForm? 'block' : 'hidden'">
      <div class="flex justify-center">
      <!-- Row -->

        <!-- Col -->
        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
          <h3 class="cursor-pointer pt-4 text-2xl text-center text-blue-500" v-on:click="hide">Create an Account!</h3>
          <h3 class="cursor-pointer pt-4 text-2xl text-center" v-on:click="shown">Login</h3>

          <form @submit.prevent="register" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
            <div class="mb-4 md:flex md:justify-between">
              <div class="mb-4 md:mr-2 md:mb-0">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                  First Name
                </label>
                <input
                  class="w-full pr-20 pl-2 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="firstName"
                  type="text"
                  placeholder="First Name"

                  v-model="formRegister.name"
                />
              </div>
              <div class="md:ml-2">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                  Last Name
                </label>
                <input
                  class="w-full pr-20 pl-2 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="lastName"
                  type="text"
                  placeholder="Last Name"
                />
              </div>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                Email
              </label>
              <input
                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                id="email"
                type="email"
                placeholder="Email"

                v-model="formRegister.email"
              />
            </div>
            <div class="mb-4 md:flex md:justify-between">
              <div class="mb-4 md:mr-2 md:mb-0">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                  Password
                </label>
                <input
                  class="w-full pr-20 pl-2 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="password"
                  type="password"
                  placeholder="******************"

                  v-model="formRegister.password"
                />

              </div>
              <div class="md:ml-2">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                  Confirm Password
                </label>
                <input
                  class="w-full pr-20 pl-2 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  id="c_password"
                  type="password"
                  placeholder="******************"

                  v-model="formRegister.password_confirmation"
                />
              </div>
            </div>
            <div class="mb-6 text-center">
              <button
                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="submit"
              >
                Register Account
              </button>
            </div>
            <hr class="mb-6 border-t" />
            <div class="text-center">
              <a
                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                href="#"
              >
                Forgot Password?
              </a>
            </div>
            <div class="text-center">
              <a
                class="cursor-pointer inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                  v-on:click="hide"
              >
                Already have an account? Login!
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name : 'connexion',
  data: () => ({
    formRegister:{
      name:null,
      email:null,
      password:null,
      password_confirmation:null
    },
    formLogin:{
      email:null,
      password:null
    },
    statusForm: false
  }),
  methods : {
    shown : function(){
      this.statusForm = true
    },
    hide : function(){
      this.statusForm = false
    },

    register() {
      console.log('this register')
      this.$router.push("espaceCitoyen")
    },
    async login() {
      try{
        this.$store.dispatch('login',this.formLogin)
        console.log('this login')
        this.$router.push("espaceCitoyen")
      }catch (error) {
        console.log(error.response.data.errors)
      }
    }
  }
}
</script>
