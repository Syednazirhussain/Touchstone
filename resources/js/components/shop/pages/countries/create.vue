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

						<div class="col-md-12">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">Add Country</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse">
								        	<i class="fa fa-minus"></i> 
								        </button> 
								    </div>
								</div>
								<div class="box-body">
									<div class="panel panel-default">
									    <div class="panel-body">
											<div class="alert alert-danger alert-dismissible" v-if="displayErrors">
									            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									            <h4><i class="icon fa fa-ban"></i> {{ errorMsg }}</h4>
											    <ol>
											      <li v-for="(error, index) in errors" v-bind:key="index">
											      	{{ index }}
											      	<ul v-for="(item, i) in error" v-bind:key="i">
											      		<li>{{ item }}</li>
											      	</ul>
											      </li>
											    </ol>
									        </div>
									    	<form @submit.prevent="store" action="javascript:void(0);">

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
												        <input type="radio" :value="country.currency" v-model="country.currency"> USD
												        <input type="radio" :value="country.currency" v-model="country.currency"> GBP
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
									    		
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Can be shipping country</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
												        <input type="checkbox" :value="country.has_shipping" v-model="country.has_shipping">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Can be resident country</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
												        <input type="checkbox" :value="country.has_residence" v-model="country.has_residence">
									    			</div>
									    		</div>


									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Save</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Save</span>
									    		</button>

									    	</form>
									    </div>
									</div>
							    </div>
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

				errors: {},
				errorMsg: null,
				displayErrors: false,

				country: {
					name: {
						en: '',
						pl: '',
						ja: '',
						es: '',
						th: ''
					},
					iso3: '',
					min_checkout_price: 0,
					max_checkout_unit_count: 0,
					currency: 'usa',
					is_active: false,
					show_subscribing_ontraport: false,
					has_shipping: false,
					has_residence: false
				},

				isFound: false,
				isStoring: false,
			}
		},
		mounted () {

		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async store () {

				this.isStoring = true

	    		let url = window.touchStone.routes.shop_admin_country_store
				await axios.post(url, this.country).then(response => {

					this.isStoring = false
					if (response.data.error == 0) {

						alert(response.data.message)
					}
					router.push({ name: 'country_listing' })
				})
				.catch(error => {

					this.isStoring = false
					console.log(error.response.data)

					if (_.has(error.response.data, 'errors')) {

						this.errors = error.response.data.errors
					}

					this.errorMsg 	= error.response.data.message

					this.displayErrors = true
					setTimeout(() => {

						this.displayErrors = false
					}, 5000)
					
				})

			},
		}
	}

</script>