<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Product Category
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Product Category</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title" v-if="isFound">{{ getCategoryName(category.name) }}</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body">
									<div class="panel panel-default" v-if="isFound">
									    <div class="panel-body">
									        <div class="table-responsive">
									            <table class="table table-borderless">
									                <tbody>
									                <tr>
									                    <th>ID</th>
									                    <td>{{ category.id }}</td>
									                </tr>
									                <tr>
									                    <th>Name</th>
									                    <td>{{ getCategoryName(category.name) }}</td>
									                </tr>
									                <tr>
									                    <th>Url</th>
									                    <td>{{ category.url }}</td>
									                </tr>
									                <tr>
									                    <th>Order</th>
									                    <td>{{ category.order }}</td>
									                </tr>
									                <tr>
									                    <th>Comment</th>
									                    <td v-html="getCategoryComment(category.comment)"></td>
									                </tr>
									                </tbody>
									            </table>
									        </div>

						        			<router-link class="btn btn-warning" :to="{ name: 'product_category_listing' }">
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
				category: {},
				isFound: false
			}
		},
		mounted () {

			this.getCategory(this.$route.params.id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async getCategory (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_category_show, '/', 3)
				let url = _.join(urlArr, '/')+'/'+id

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.category = response.data.payload

					if (Object.keys(this.category).length > 0) {

						this.isFound = true
					}

					// console.log(this.category)
				})
			},
			getCategoryName (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en	
			},
			getCategoryComment (object) {

				return object.en
			}
		}
	}

</script>