<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Free Shipping
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Free Shipping</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">Add Free Shipping</h3>
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
									    				<label>Country</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<select class="form-control" v-model="freeShipping.country_id">
									    					<option v-for="(country, index) in countries" :key="index" :value="country.id" :selected="country.id == freeShipping.country_id">
									    						{{ getText(country.name) }}
									    					</option>
									    				</select>
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Text en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="freeShipping.text.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Text pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="freeShipping.text.pl" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Text ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="freeShipping.text.ja" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Text es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="freeShipping.text.es" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Text th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="freeShipping.text.th" class="form-control">
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Save</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Save</span>
									    		</button>
							        			<router-link class="btn btn-warning" :to="{ name: 'fsbar_listing' }">
													Back
												</router-link>

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

				countries: [],
				freeShipping: {
					text: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null
					},
					country_id: '',
				},

				isFound: false,
				isStoring: false,
			}
		},
		mounted () {

			this.getCountries()
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getCountries (page = 1) {
				
				let url = window.touchStone.routes.shop_admin_fsbar_create+'?page='+page
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.countries = response.data.payload

				})
			},
			async store () {

				this.isStoring = true

	    		let url = window.touchStone.routes.shop_admin_fsbar_store
				await axios.post(url, this.freeShipping).then(response => {

					this.isStoring = false
					if (response.data.error == 0) {

						alert(response.data.message)
					}

					router.push({ name: 'fsbar_listing' })
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