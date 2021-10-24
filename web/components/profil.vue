<template>
	<div>
			<div>
				<div class="border-green-600 border-2">
					<div class="flex items-center justify-center ">
						<img src="https://st.depositphotos.com/2101611/3925/v/600/depositphotos_39258143-stock-illustration-businessman-avatar-profile-picture.jpg" class="rounded-full w-32">
					</div>
					<div class="mb-4 mt-4 grid flex grid-cols-2 md:ml-10 sm:ml-0">
						<div class="mb-4 md:mr-2 md:mb-0">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
							Anarana : <span class="font-normal">{{data_citizen.name}}</span>
							</label>
						</div>

						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Fanampiny : <span class="font-normal">{{data_citizen.first_name}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Daty nahaterahana : <span class="font-normal">{{data_citizen.birthday}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Tao : <span class="font-normal">{{data_citizen.birthplace_city}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Ray niteraka : <span class="font-normal">{{data_citizen.father}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Reny niteraka : <span class="font-normal">{{data_citizen.mother}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Laharana karapanondro : <span class="font-normal">{{data_citizen.national_identity}}</span>
							</label>
						</div>
						<div class="inline-flex">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Natao t@ : <span class="font-normal">{{data_citizen.cardID_was_created}}</span>
							</label>
							<label class="block mb-2 text-sm font-bold text-gray-700 ml-2" for="c_password">
							tao : <span class="font-normal">{{data_citizen.city_cardID_was_created}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Fonenana : <span class="font-normal">{{data_citizen.residence}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Boriboritany : <span class="font-normal">{{data_citizen.arrondissement}}</span>
							</label>
						</div>
						<div></div>
						<div>
							<button class="bg-green-600 max-w-14 text-white p-1 px-2 rounded" @click="send_editBoutton">Edit <i class="fas fa-user-edit"></i></button>
						</div>
					</div>
				</div>
    </div>
	</div>

</template>
<script>
		export default{
			name:'profil',
      props:{
        data_citizen:Object
      },
			data : ()=>({
				edit: false
			}),
			methods:{
				send_editBoutton(){
          this.$emit('editBouton')
        }
			}
		}
</script>
