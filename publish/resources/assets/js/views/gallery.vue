<template>
	<div>
		<div v-for="(model, index) in models" class="hero"  >
			<h1 class="title is-1 has-text-centered centered">
				Gallery {{ model.id }}
			</h1>
		</div>
	</div>
</template>


<style>

</style>


<script>
	import GalleryDetail from '../../components/gallery/gallery-detail';

	export default {

		data(){
			return {
				models:	[],
			};
		},
		created(){
			axios.get('/db/gallery').then( response => this.models = response.data );
		},
		mounted(){

		},
		methods:{

		},
		components:{
			'gallery-detail': GalleryDetail,
		}
	};
</script> 
