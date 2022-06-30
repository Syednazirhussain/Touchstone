<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Checkout Faq
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Checkout Faq</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">( Total Checkout Faq : {{ checkoutFaqs.total }} )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="checkoutFaqs.total > 0">

							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Question</th>
													<th>Answer</th>
													<th>Order</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(checkoutFaq, index) in checkoutFaqs.data" :key="index">
													<td>{{ checkoutFaq.id }}</td>
													<td>{{ getText(checkoutFaq.question) }}</td>
													<td>{{ getText(checkoutFaq.answer) }}</td>
													<td>{{ checkoutFaq.order }}</td>
													<td>
														<router-link class="btn btn-success" :to="{ name: 'checkoutFaq_show', params: { id: checkoutFaq.id } }">
															<i class="fa fa-eye"></i>
														</router-link>
														<router-link class="btn btn-primary" :to="{ name: 'checkoutFaq_edit', params: { id: checkoutFaq.id } }">
															<i class="fa fa-pencil"></i>
														</router-link>
														<button @click="deleteCheckoutFaq(checkoutFaq.id)" type="button" class="btn btn-danger">
															<i class="fa fa-trash"></i>
														</button>
													</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="checkoutFaqs" :limit=3 @align="{center}" @pagination-change-page="getCheckoutFaq">
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
				checkoutFaqs: {},
			}
		},
		mounted () {
			this.getCheckoutFaq()
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
			async getCheckoutFaq (page = 1) {

				this.page = page
				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_checkoutFaq+'?page='+this.page
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.checkoutFaqs = response.data.payload
				})
			},
			async deleteCheckoutFaq (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_checkoutFaq_destroy, '/', 3)
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