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

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">( Total Free Shipping : {{ freeShippings.total }} )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="freeShippings.total > 0">

									<router-link class="btn btn-primary btn-sm" :to="{ name: 'fsbar_create' }">
										<span class="glyphicon glyphicon-plus"></span>
									</router-link>

							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Country</th>
													<th>Text</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(freeShipping, index) in freeShippings.data" :key="index">
													<td>{{ freeShipping.id }}</td>
													<td>{{ getText(freeShipping.country.name) }}</td>
													<td>{{ getText(freeShipping.text) }}</td>
													<td>
														<router-link class="btn btn-success" :to="{ name: 'fsbar_show', params: { id: freeShipping.id } }">
															<i class="fa fa-eye"></i>
														</router-link>
														<router-link class="btn btn-primary" :to="{ name: 'fsbar_edit', params: { id: freeShipping.id } }">
															<i class="fa fa-pencil"></i>
														</router-link>
														<button @click="deleteFreeShipping(freeShipping.id)" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
													</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="freeShippings" :limit=3 @align="{center}" @pagination-change-page="getFreeShipping">
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

	import router from '../../routes/shop.js'

	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				page: 1,
				isLoaded: false,
				freeShippings: {},
			}
		},
		mounted () {
			this.getFreeShipping()
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
			async getFreeShipping (page = 1) {

				this.page = page
				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_fsbar+'?page='+this.page
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.freeShippings = response.data.payload

					// console.log(this.countries)
				})
			},
			async deleteFreeShipping (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_fsbar_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getFreeShipping(this.page)
						}
					})
				}

			}
		}
	}

</script>