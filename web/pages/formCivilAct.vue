<template>


<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Information personnel</h3>
        <p class="mt-1 text-sm text-gray-600">
          ACTE DE NAISSANCE
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form @submit.prevent="sendForm">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Anarana:</label>
                <input v-model="form.first_name" type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Fanampin'anarana:</label>
                <input v-model="form.last_name" type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">teraka tamin'ny:</label>
                <input v-model="form.first_name" type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Tao amin'ny:</label>
                <input v-model="form.last_name" type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6">
                <label for="street-address" class="block text-sm font-medium text-gray-700">Zanak'i:</label>
                <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6">
                <label for="street-address" class="block text-sm font-medium text-gray-700">Sy i:</label>
                <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</template>

<script>
import download from 'downloadjs'

export default {
  data(){
    return{
      form:{
        first_name:null,
        last_name:null,
        bithday:null,
        city:null
      }
    }
  },
  methods:{
    // async sendPDFtoSign(pdfContent){
    //   let response = await fetch('localhost:8080/upload',{ method: 'POST', body:JSON.stringify({
    //           file: new FormData(pdfContent),
    //   }) });

    //   console.log(response.data)

    // },
    async sendForm(){
    //   this.$axios.setHeader('Content-Type', 'blob', [
    //   'post'
    // ])
    //   let response = await this.$axios.post('/api/generate-pdf',this.form,{responseType: 'blob'})

    //   // let pdf = download(response.data,'actedenaissacen.pdf',response.headers['content-type'])


    //   let res = await fetch('http://localhost:8080/upload',{ method: 'POST', body:JSON.stringify({
    //           file: new FormData(response.data),
    //   }) });

    let response = await this.$axios.post('/api/generate-pdf',this.form)

      console.log(response.data)
    }
  }
}
</script>
