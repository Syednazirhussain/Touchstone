<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Products
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Products</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">( Total Products : {{ products.total }} )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="products.total > 0">
							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Sku</th>
													<th>Title</th>
													<th>Url</th>
													<th>Order</th>
													<th>Supply</th>
													<th>Price Retail</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(product, index) in products.data" :key="index">
													<td>{{ product.id }}</td>
													<td>{{ product.sku }}</td>
													<td>{{ getText(product.title) }}</td>
													<td>{{ product.url }}</td>
													<td>{{ product.order }}</td>
													<td>{{ getText(product.supply) }}</td>
													<td>{{ product.price_retail }}</td>
													<td>
														<router-link class="btn btn-success" :to="{ name: 'product_show', params: { id: product.id } }">
															<i class="fa fa-eye"></i>
														</router-link>														
														<router-link class="btn btn-primary" :to="{ name: 'product_edit', params: { id: product.id } }">
															<i class="fa fa-pencil"></i>
														</router-link>
													</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="products" :limit=3 @align="{center}" @pagination-change-page="getProducts">
										<span slot="prev-nav">&lt; Previous</span>
										<span slot="next-nav">Next &gt;</span>
									</pagination>
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
				products: [],
			}
		},
		mounted () {

			this.getProducts(1)
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
			async getProducts (page = 1) {

				let url = window.touchStone.routes.shop_admin_products+"?page="+page

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.products = response.data.payload
					
					// console.log(this.products)

				})
			},
		}
	}

</script>