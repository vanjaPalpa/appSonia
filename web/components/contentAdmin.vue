<template>
  <div class="bg-gray-200">
    <section class="container mx-auto p-6 font-mono">
      <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                <th class="px-4 py-3" v-for="th in tableHead" v-bind:key="th.id">
                  {{ th }}
                </th>
              </tr>
            </thead>
            <tbody class="bg-white">
              <tr v-for="user in users" v-bind:key="user.id" class="text-gray-700">
                <td class="px-4 py-3 border">
                  <div class="flex items-center text-sm">
                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold text-black">{{ user.name }}</p>
                      <p class="text-xs text-gray-600">{{ user.profession }}</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm border">prenom</td>
                <td class="px-4 py-3 text-ms font-semibold border">{{ user.bithday }}</td>
                <td class="px-4 py-3 text-sm border">{{ user.birthplace_city }}</td>
                <td class="px-4 py-3 text-xs border">CIN</td>
                <td class="px-4 py-3 text-xs border">
                  <span v-bind:class="user.color" class="px-2 py-1 font-semibold leading-tight rounded-sm">{{ user.status }}</span>
                </td>


              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  props: {
    users:Object,
    tableHead:Array
  }
}
</script>
