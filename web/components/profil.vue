<template>
	<div>
		<!-- front profil -->
		<section>
			<div>
				<div class="border-green-600 border-2">
					<div class="flex items-center justify-center ">
						<img src="https://st.depositphotos.com/2101611/3925/v/600/depositphotos_39258143-stock-illustration-businessman-avatar-profile-picture.jpg" class="rounded-full w-32">
					</div>
					<div class="mb-4 mt-4 grid flex grid-cols-2 md:ml-10 sm:ml-0">
						<div class="mb-4 md:mr-2 md:mb-0">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
							Anarana : <span class="font-normal">{{nom}}</span>
							</label>
						</div>
					
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Fanampiny : <span class="font-normal">{{prenom}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Daty nahaterahana : <span class="font-normal">{{datenaiss}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Tao : <span class="font-normal">{{lieunaiss}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Ray niteraka : <span class="font-normal">{{pere}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Reny niteraka : <span class="font-normal">{{mere}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Laharana karapanondro : <span class="font-normal">{{CIN}}</span>
							</label>
						</div>
						<div class="inline-flex">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Natao t@ : <span class="font-normal">{{dateCIN}}</span>
							</label>
							<label class="block mb-2 text-sm font-bold text-gray-700 ml-2" for="c_password">
							tao : <span class="font-normal">{{lieuCIN}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Fonenana : <span class="font-normal">{{adresse}}</span>
							</label>
						</div>
						<div class="">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
							Boriboritany : <span class="font-normal">{{arrondissement}}</span>
							</label>
						</div>
						<div></div>
						<div>
							<button class="bg-green-600 max-w-14 text-white p-1 px-2 rounded" @click="edited">Edit <i class="fas fa-user-edit"></i></button>
						</div>
					</div>
				</div>
            </div>
			<form >
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="name">
						ANARANA/ Nom: 
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="name"
						type="text"
					/>
				</div>

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="fname">
						FANAMPIN' ANARANA / Prénom:  
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="fname"
						type="text"
					/>
				</div>
			</form>
		</section>

		<section>
			<form>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="birth">
						TERAKA TAMIN' NY / Né(e) le:
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="birth"
						type="text"
					/>
				</div>

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="place">
						TAO / à: 
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="place"
						type="text"
					/>
				</div>

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="sign">
						FAMANTARANA MANOKANA / Signe particulier: 
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="sign"
						type="text"
					/>
				</div>

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="legnth">
						TAILLE / Refy:  
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="legnth"
						type="text"
					/>
				</div>
			</form>
		</section>
		
		<section>
			<form>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="adress">
						FONENANANA / Adresse:
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="adress"
						type="text"
					/>
				</div>

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="fathername">
						BORIBORINTANY / Arrondissement:
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="fathername"
						type="text"
					/>
				</div>

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="job">
						ASA ATAO / Profession:
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="job"
						type="text"
					/>
				</div>
			</form>
		</section>

		<section>
			<form>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="fathername">
						RAY NITERAKA / Père
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="fathername"
						type="text"
					/>
				</div>

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="mothername">
						RENY NITERAKA / Mère:
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="mothername"
						type="text"
					/>
				</div>
			</form>
		</section>

		<section>
			<form>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="cin">
						LAHARANA KARAPANONDRO / Numéro CIN:
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="cin"
						type="text"
					/>
				</div>	

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="placeCin">
						NATAO TAO / Fait à: 
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="placeCin"
						type="text"
					/>
				</div>

				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="dateCin">
						TAMIN' NY / Le:
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						id="dateCin"
						type="text"
					/>
				</div>
			</form>
		</section>
		<!-- back profil -->
		<section></section>
	</div>

</template>
<script>
		export default{
			name:'profil',
			data : ()=>({
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
				edit: false
			}),
			methods:{
				edited : ()=>{
					this.edit = true
				},
				confirm : ()=>{
					this.edit = false
				}
			}
		}
</script>