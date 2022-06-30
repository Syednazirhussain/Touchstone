<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Payment Information
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Payment Information</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">( Total Payment Informations : {{ paymentInformations.total }} )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="paymentInformations.total > 0">
									<router-link class="btn btn-primary btn-sm" :to="{ name: 'payment_information_create' }">
										<span class="glyphicon glyphicon-plus"></span>
									</router-link>
							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Image</th>
													<th>Order</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(paymentInformation, index) in paymentInformations.data" :key="index">
													<td>{{ paymentInformation.id }}</td>
													<td>{{ paymentInformation.name }}</td>
													<td>
														<img :src="paymentInformation.icon">
													</td>
													<td>{{ paymentInformation.order }}</td>
													<td>
														<router-link class="btn btn-primary" :to="{ name: 'payment_information_edit', params: { id: paymentInformation.id } }">
															<i class="fa fa-pencil"></i>
														</router-link>
														<button @click="deletePaymentInformation(paymentInformation.id)" type="button" class="btn btn-danger">
															<i class="fa fa-trash"></i>
														</button>
													</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="paymentInformations" :limit=3 @align="{center}" @pagination-change-page="getPaymentInformations">
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
				paymentInformations: {},
			}
		},
		mounted () {

			this.getPaymentInformations(1)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async getPaymentInformations (page = 1) {

				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_paymentInformation+'?page='+page
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.paymentInformations = response.data.payload
				})
			},
			async deletePaymentInformation (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_paymentInformation_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getPaymentInformations(1)
						}
					})
				}
			}
		}
	}

</script>