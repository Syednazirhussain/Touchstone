<style scoped>
	.min-input {
	        max-width: 94px;
	}
</style>

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

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title" v-if="isFound">{{ buyNow.name }}</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body">
									<div class="panel panel-default">
									    <div class="panel-body" v-if="isFound">
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
									    	<form @submit.prevent="update" action="javascript:void(0);">

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
									    						<option v-for="(product, key) in products" :value="product.id" :key="key" :selected="product.id == selectedProduct.id">
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

									    		<button type="submit" class="btn btn-primary" v-if="isUpdating" :disabled="isUpdating">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Update</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Update</span>
									    		</button>

							        			<router-link class="btn btn-warning" :to="{ name: 'buyNow_listing' }">
													Back
												</router-link>
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
	
    import { Fragment } from 'vue-fragment'

	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {

				errors: {},
				errorMsg: null,
				displayErrors: false,

				isUpdating:false,
				isLoaded: false,
				buyNow: {},
				isFound: false,

				products: [],
				selectedProducts: []

			}
		},
		mounted () {

			this.getBuyNow(this.$route.params.id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
           	'fragment': Fragment,
		},
		methods: {
			getTitle (object) {

				let jsObj = JSON.parse(object)
				let tArr = _.split(jsObj.en, '|')

				return tArr[0]
			},
			addProduct () {

				let product = {
					id: null,
					quantity: null
				}

				this.selectedProducts.push(product)
			},
			removeProduct (index) {

				this.selectedProducts.splice(index, 1)
			},
			async getBuyNow (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_buynow_edit, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +id+ '/edit'

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.buyNow = response.data.payload.buyNow
					this.products = response.data.payload.products

					if (Object.keys(this.buyNow).length > 0) {

						this.isFound = true
					}

					if (!_.isEmpty(this.buyNow.buy_now_products)) {

						_.forEach(this.buyNow.buy_now_products, (item, index) => {

							let product = {
								id: item.product_id,
								quantity: item.quantity
							}

							this.selectedProducts.push(product)
						})
					}
				})
			},
			async update () {

				this.buyNow['products'] = this.selectedProducts
				console.log(this.buyNow)

				this.isUpdating = true

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_buynow_update, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.$route.params.id+ '/update'

				await axios.put(url, this.buyNow).then(response => {

					this.isUpdating = false
					if (response.data.error == 0) {

						alert(response.data.message)
					} else {
						
						this.errorMsg = response.data.message

						this.displayErrors = true
						setTimeout(() => {

							this.displayErrors = false
						}, 5000)
					}
				})
				.catch(error => {

					this.isUpdating = false
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
