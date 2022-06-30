<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Faq
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Faq</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-body">
									<div class="panel panel-default" v-if="isFound">
									    <div class="panel-body">
									        <div class="table-responsive">
									            <table class="table table-borderless">
									                <tbody>
									                <tr>
									                    <th>ID</th>
									                    <td>{{ faq.id }}</td>
									                </tr>
									                <tr>
									                    <th>Product</th>
									                    <td>{{ getText(faq.product.title) }}</td>
									                </tr>
									                <tr>
									                    <th>Question</th>
									                    <td v-html="getText(faq.question)"></td>
									                </tr>
									                <tr>
									                    <th>Answer</th>
									                    <td v-html="getText(faq.answer)"></td>
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
				faq: {},
				isFound: false,

				id: 0,
				product_id: 0,

			}
		},
		mounted () {

			this.id = this.$route.params.id
			this.product_id = this.$route.params.product_id

			this.getFaq(this.$route.params.id)
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
			async getFaq (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_faq_show, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/faq/' +this.id

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.faq = response.data.payload

					if (Object.keys(this.faq).length > 0) {

						this.isFound = true
					}

					console.log(this.faq)
				})
			},
		}
	}

</script>