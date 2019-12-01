<template>
		 <div class="row">
		 	<!-- se hace el llamado al componente spiner
		 	y se crea la variable loading para validar cuando se debe mostrar
		 	la variable es llamada en la data -->
		 	<spiner v-show="loading"></spiner>
 	 	<div class="col-sm" v-for="pokemon in pokemons">
 	 		<br>
 	 		<div class="card text-center" style="width: 18rem; margin-top: 40px">
 	 				<img v-bind:src="pokemon.picture" class="card-img-top rounded-circle mx-auto d-block imagenpokemon" alt="...">
 	 			<div class="card-body">
 	 				<div class="card-body">
 	 					<h5 class="card-title">{{ pokemon.name }}</h5>
 	 					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	 					<a href="/trainers/" class="btn btn-primary">Ver más</a>
 	 				</div>
 	 			</div>
 	 		</div>
 	 	</div>
 	 </div>
</template>

<script>
import EventBus from '../../event-bus';
	 export default {
	 	data(){
	 		return{
	 			pokemons:[],
	 			loading:true
	 		}
	 	},
	 	//created sera ejecuatdo luego de que el pokemon sea creado
	 	created(){
	 		EventBus.$on('pokemon-added',data=>{
	 			this.pokemons.push(data)
	 		})
	 	},
        mounted() {
        	//esta line apermite se usa para hacer interpolacion de cadenas 
        	
        	let currentRoute = window.location.pathname
        	axios
        	.get(`http://127.0.0.1:8000${currentRoute}/pokemons`)
        	.then((res)=>{
        		console.log(res)
        		this.pokemons = res.data
        		this.loading=false
        	})
     
        }
    }
</script>