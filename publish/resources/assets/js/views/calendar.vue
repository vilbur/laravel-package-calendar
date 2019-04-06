<template>
	<div>
		<div v-for="(model, index) in models" class="hero"  >
			<h1 class="title is-1 has-text-centered centered">
				Calendar {{ model.id }}
			</h1>
		</div>
	</div>
</template>


<style>

</style>


<script>
	import CalendarDetail from '../../components/calendar/calendar-detail';

	export default {

		data(){
			return {
				models:	[],
			};
		},
		created(){
			axios.get('/db/calendar').then( response => this.models = response.data );
		},
		mounted(){

		},
		methods:{

		},
		components:{
			'calendar-detail': CalendarDetail,
		}
	};
</script> 
