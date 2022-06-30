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
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-body">
									<div class="panel panel-default" v-if="isFound">
										<div class="panel-heading"></div>
									    <div class="panel-body">
									        <div class="table-responsive">
									            <table class="table table-borderless">
									                <tbody>
									                <tr>
									                    <th>ID</th>
									                    <td>{{ bundle.id }}</td>
									                </tr>
									                <tr>
									                    <th>Product</th>
									                    <td>{{ getText(bundle.product.title) }}</td>
									                </tr>
									                <tr>
									                    <th>Bundle Product</th>
									                    <td>{{ getText(bundle.bundle_product.title) }}</td>
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
				
				bundle: {},
				isFound: false,

				id: 0,
				product_id: 0,

			}
		},
		mounted () {

			this.id = this.$route.params.id
			this.product_id = this.$route.params.product_id

			this.getBundleProduct(this.$route.params.id)
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
			async getBundleProduct (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_bundle_show, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/bundles/' +this.id

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.bundle = response.data.payload

					if (Object.keys(this.bundle).length > 0) {

						this.isFound = true
					}

					console.log(this.bundle)
				})
			},
		}
	}

</script>