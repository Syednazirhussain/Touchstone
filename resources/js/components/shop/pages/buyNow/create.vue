<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Buy Now
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Buy Now</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
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
									    				<label>Name</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="buyNow.name" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Products</label>
									    			</div>
									    			<div class="col-md-8">
									    				<a href="javascript:void(0);" @click="addProduct">Add Products</a>
									    				<div v-for="(selectedProduct, index) in selectedProducts" :key="index" class="form-inline">
									    					<select class="form-control" v-model="selectedProduct.id">
									    						<option v-for="(product, key) in products" :value="product.id" :key="key">
									    							{{ product.description }}
									    						</option>
									    					</select>
										    				<input type="number" v-model="selectedProduct.quantity" class="form-control min-input">
										    				<a href="javascript:void(0);" @click="removeProduct(index)">Remove</a>
									    				</div>
									    			</div>
									    		</div>


									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Coupon Code</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="buyNow.coupon_code" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Auto Ship</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="checkbox" v-model="buyNow.is_auto_ship">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Active</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="checkbox" v-model="buyNow.is_active">
									    			</div>
									    		</div>


									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Save</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Save</span>
									    		</button>

							        			<router-link class="btn btn-warning" :to="{ name: 'buyNow_listing' }">
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
	
	// Advanced Use - Hook into Quill's API for Custom Functionality
	import { VueEditor, Quill } from "vue2-editor"

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

				buyNow: {
					name: null,
					coupon_code: null,
					is_auto_ship: false,
					is_active: false
				},

				products: [],
				selectedProducts: [],

				isStoring:false,

			    customToolbar: [
			      ["bold", "italic", "underline"],
			      [{ list: "ordered" }, { list: "bullet" }],
			      ["code-block"]
			    ],


			}
		},
		mounted () {

			this.getProducts()

		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
			'vue-editor': VueEditor,
		},
		methods: {
			addProduct () {

				let product = {
					id: null,
					quantity: null
				}

				this.selectedProducts.push(product)
			},
			async getProducts () {

				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_buynow_create
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.products = response.data.payload

					// console.log(this.products)
				})
			},
			async store () {

				this.isStoring = true

				this.buyNow['products'] = this.selectedProducts
				console.log(this.buyNow)

				let url = window.touchStone.routes.shop_admin_buynow_store
				await axios.post(url, this.buyNow).then(response => {

					this.isStoring = false
					if (response.data.error == 0) {

						alert(response.data.message)
						router.push({ name: 'buyNow_listing'})
					} else {
						
						this.errorMsg = response.data.message

						this.displayErrors = true
						setTimeout(() => {

							this.displayErrors = false
						}, 5000)
					}
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