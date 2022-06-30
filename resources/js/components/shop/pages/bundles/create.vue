<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Product Bundle
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Product Bundle</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
						    <div class="box box-primary">
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
									    				<label>Title en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.title.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.title.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.title.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.title.ja" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.title.th" class="form-control">
									    			</div>
									    		</div>


									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Product</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<select class="form-control" v-model="bundle.product_id">
									    					<option :value="product.id" v-for="(product, index) in products" :key="index">
									    						{{ getText(product.title) }}
									    					</option>
									    				</select>
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Bundle Product</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<select class="form-control" v-model="bundle.bundle_product_id">
									    					<option :value="product.id" v-for="(product, index) in products" :key="index">
									    						{{ getText(product.title) }}
									    					</option>
									    				</select>
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Price Text en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.price_text.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Price Text pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.price_text.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Price Text es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.price_text.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Price Text ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.price_text.ja" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Price Text th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="bundle.price_text.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Count Product</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="number" v-model="bundle.count_product" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Order</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="number" v-model="bundle.order" class="form-control">
									    			</div>
									    		</div>


									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Store</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Store</span>
									    		</button>

							        			<router-link class="btn btn-warning" :to="{ name: 'product_listing' }">
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

	// Advanced Use - Hook into Quill's API for Custom Functionality
	import { VueEditor, Quill } from "vue2-editor"

	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {

				errors: {},
				errorMsg: null,
				displayErrors: false,

				isStoring:false,
				isLoaded: false,

				products: [],
				bundle: {
					title: {
						en: null,
						pl: null,
						es: null,
						ja: null,
						th: null
					},
					price_text: {
						en: null,
						pl: null,
						es: null,
						ja: null,
						th: null
					},
					product_id: 0,
					bundle_product_id: 0,
					order: 0,
					count_product: 0
				},
				isFound: false,

				id: 0,
				product_id: 0,

			    customToolbar: [
			      ["bold", "italic", "underline"],
			      [{ list: "ordered" }, { list: "bullet" }],
			      ["code-block"]
			    ],


			}
		},
		mounted () {

			this.product_id = this.$route.params.product_id

			this.getProducts()
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
			'vue-editor': VueEditor,
		},
		methods: {
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getProducts () {

				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_product_similar_create
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.products = response.data.payload
				})
			},
			async store () {

				this.isStoring = true

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_bundle_store, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/bundles/store'

				this.bundle.product_id = this.product_id

				await axios.post(url, this.bundle).then(response => {

					this.isStoring = false
					if (response.data.error == 0) {

						alert(response.data.message)
					} else {
						
						this.errorMsg = response.data.message

						this.displayErrors = true
						setTimeout(() => {

							this.displayErrors = false
						}, 5000)
					}

					router.push({ name: 'product_listing' })
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