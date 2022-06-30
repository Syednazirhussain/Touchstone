<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Country
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Country</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title" v-if="isFound">( Country : {{ getCountryName(country.name) }} )</h3>
								    <h3 class="box-title" v-else>( Country :  )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body">
									<div class="panel panel-default">
									    <div class="panel-body" v-if="isFound">

									    	<form @submit.prevent="update" action="javascript:void(0);">

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="country.name.en" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="country.name.pl" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="country.name.ja" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="country.name.es" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="country.name.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Iso3</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="country.iso3" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Min Checkout Price</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="number" v-model="country.min_checkout_price" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Max Checkout Price</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="number" v-model="country.max_checkout_price" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Max Checkout Unit Count</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="number" v-model="country.max_checkout_unit_count" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Currency</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
												        <input type="radio" v-model="country.currency" :value="country.currency" :checked="country.currency == 'usd'"> USD
												        <input type="radio" v-model="country.currency" :value="country.currency" :checked="country.currency == 'gbp'"> GBP
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Active</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
												        <input type="checkbox" :value="country.is_active" v-model="country.is_active">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Show ontraport subscribing</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
												        <input type="checkbox" :value="country.show_subscribing_ontraport" v-model="country.show_subscribing_ontraport">
									    			</div>
									    		</div>
									    		
									    		<button type="submit" class="btn btn-primary" v-if="isUpdating" :disabled="isUpdating">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Update</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Update</span>
									    		</button>

									    	</form>
									    </div>
									    <div class="panel-body" v-else>
									    	<div class="well text-center">
									    		Not Found
									    	</div>
									    </div>
									</div>
							    </div>
						    </div>
					    </div>
			    		<div class="col-md-12" v-else>
							<div class="well text-center">
								<span>
									<i class="fa fa-spinner fa-3x fa-spin"></i>
								</span>
							</div>
						</div>

					</div>
				</section>
			</div>
			<admin-footer></admin-footer>
		</div>
	</div>
</template>

<script type="text/javascript">
	
	import router from '../../routes/shop.js'

	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				isUpdating:false,
				isLoaded: false,
				country: {},
				isFound: false
			}
		},
		mounted () {

			this.getCountry(this.$route.params.id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async getCountry (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_country_edit, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +id+ '/edit'

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.country = response.data.payload

					if (Object.keys(this.country).length > 0) {

						this.isFound = true
					}

					console.log(this.country)
				})
			},
			getCountryName (object) {

				return object.en
			},
			async update () {

				this.isUpdating = true

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_country_update, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.$route.params.id+ '/update'

				await axios.put(url, this.country).then(response => {

					this.isUpdating = false
					if (response.data.error == 0) {

						alert(response.data.message)
					}

					router.push({ name: 'country_listing' })
				})

			},
		}
	}

</script>