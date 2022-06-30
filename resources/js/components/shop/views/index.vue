<template>
	<div>
		<router-view/>
	</div>
</template>

<script type="text/javascript">
	
	import router from '../routes/shop.js';
	
	export default {

		mounted () {

			router.push({ name: 'home'})
		},
		methods: {
		},
	}
</script>