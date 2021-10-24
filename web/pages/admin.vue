<template>
  <div>
    <main v-if="isAuthenticated" class="flex w-full h-screen">
      <aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
        <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
            <div class="text-sm">
              <div class="bg-gray-900 text-white p-5 rounded cursor-pointer">APPsonia</div>

              <div @click="switchContent(tableHeadID)" class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Verification identité citoyens</div>
              <div @click="switchContent(tableHeadDocument)" class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">verification documents</div>
              <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Creation documents</div>

            </div>

            <div class="flex p-3 text-white bg-red-500 rounded cursor-pointer text-center text-sm">
              <logout-button @logout="logout"></logout-button>
            </div>
        </div>
      </aside>

      <section class="w-full p-4">
        <div class="w-full h-64   text-md">

          <content-admin :tableHead="tableHead" :users="users"></content-admin>

        </div>
      </section>
    </main>
    <div v-else>
      <a href="/connexion">Login</a>
      <form>
        <label>Admin login </label>
        <input type="text" name="user" id="">
        <input type="password" name="password" id="">

        <button type="submit">connexion</button>
      </form>
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
    }else{
      return this.$router.push('connexion')
    }

  },
  computed: {
    isAuthenticated() {
      return this.$store.getters.getStatus;  // it check if user isAuthenticated
    }
  },
  data(){
    return {
      user:'',
      tableHead:[
        'dashbaord'
      ],
      tableHeadID:[
        'Name','prenom','birthday','birthplace_city','national_identity','status'
      ],
      tableHeadDocument:[
        'Name document','path','status','date'
      ],
      contentAdmin:false,
      users:[
        {
          name:"Jennica",
          birthplace_city: 'Itasy',
          profession:'developer',
          status: "Acceptable",
          bithday: "10/03/2002",
          color: "bg-green-100"
        },
        {
          name:"malala",
          birthplace_city: 'fianara',
          profession:'student',
          status: "pending",
          bithday: "04/02/2001",
          color: "text-orange-700 bg-gray-100"
        },
        {
          name:"safidy",
          birthplace_city: 'tana',
          profession:'professor',
          status: "Unacceptable",
          bithday: "17/07/2000",
          color: "bg-red-100 text-red-700"
        }
      ]
    }
  },
  methods:{
    logout(){
      this.$store.dispatch('logout')
    },
    switchContent(content){
      this.tableHead = content
    }
  }
}
</script>
