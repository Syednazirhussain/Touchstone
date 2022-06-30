<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Product
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Product</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-body">
									<div class="panel panel-default" v-if="isFound">
										<div class="panel-heading">
											{{ getText(product.title) }}
										</div>
									    <div class="panel-body">

										<router-link class="btn btn-primary" :to="{ name: 'product_edit', params: { id: product.id } }">
											<i class="fa fa-pencil"></i>
										</router-link>														
										<button @click="deleteProduct(product.id)" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</button>

									        <div class="table-responsive">
									            <table class="table table-borderless">
									                <tbody>
									                <tr>
									                    <th>ID</th>
									                    <td>{{ product.id }}</td>
									                </tr>
									                <tr>
									                    <th>Sku</th>
									                    <td>{{ product.sku }}</td>
									                </tr>
									                <tr>
									                    <th>ID</th>
									                    <td>{{ product.description }}</td>
									                </tr>
									                <tr>
									                    <th>Title</th>
									                    <td>{{ getText(product.title) }}</td>
									                </tr>
									                <tr>
									                    <th>Url</th>
									                    <td>{{ product.url }}</td>
									                </tr>
									                <tr>
									                    <th>Order</th>
									                    <td>{{ product.order }}</td>
									                </tr>
									                <tr>
									                    <th>Supply</th>
									                    <td>{{ getText(product.supply) }}</td>
									                </tr>
									                <tr>
									                    <th>Price Retail</th>
									                    <td>{{ product.price_retail }}&nbsp;<i class="fa fa-usd"></i></td>
									                </tr>
									                <tr>
									                    <th>Price Wholesale</th>
									                    <td>{{ product.price_wholesale }}&nbsp;<i class="fa fa-usd"></i></td>
									                </tr>
									                <tr>
									                    <th>Price Discounted</th>
									                    <td>{{ product.price_discounted }}&nbsp;<i class="fa fa-usd"></i></td>
									                </tr>
									                <tr>
									                    <th>Price Retail GBP</th>
									                    <td>{{ product.price_retail_gbp }}&nbsp;<i class="fa fa-gbp"></i></td>
									                </tr>
									                <tr>
									                    <th>Price Wholesale GBP</th>
									                    <td>{{ product.price_wholesale_gbp }}&nbsp;<i class="fa fa-gbp"></i></td>
									                </tr>
									               	<tr>
									                    <th>Price Discounted GBP</th>
									                    <td>{{ product.price_discounted_gbp }}&nbsp;<i class="fa fa-gbp"></i></td>
									                </tr>

									                </tbody>
									            </table>
									        </div>
						        			<router-link class="btn btn-warning" :to="{ name: 'product_listing' }">
												Back
											</router-link>
									    </div>
									</div>
									<div class="panel panel-default" v-else>
								    	<div class="well text-center">
								    		Not Found
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
	
	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				isLoaded: false,
				product: {},
				isFound: false
			}
		},
		mounted () {

			this.getProduct(this.$route.params.id)
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
			async getProduct (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_products_show, '/', 3)
				let url = _.join(urlArr, '/')+'/'+id

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.product = response.data.payload

					if (Object.keys(this.product).length > 0) {

						this.isFound = true
					}

					console.log(this.product)
				})
			},
		}
	}

</script>