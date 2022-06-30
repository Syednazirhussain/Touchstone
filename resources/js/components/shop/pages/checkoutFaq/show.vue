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
								    <h3 class="box-title" v-if="isFound">ID:&nbsp;{{ checkoutFaq.id }}</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body">
									<div class="panel panel-default">
									    <div class="panel-body" v-if="isFound">
									        <div class="table-responsive">
									            <table class="table table-borderless">
									                <tbody>
									                	<tr>
									                		<td>ID</td>
									                		<td>{{ checkoutFaq.id }}</td>
									                	</tr>
									                    <tr>
									                    	<th>Question</th>
									                    	<td>{{ getText(checkoutFaq.question) }}</td>
									                    </tr>
									                    <tr>
									                    	<th>Answer</th>
									                    	<td>{{ getText(checkoutFaq.answer) }}</td>
									                    </tr>
									                </tbody>
									            </table>
							        			<router-link class="btn btn-warning" :to="{ name: 'checkoutFaq_listing' }">
													Back
												</router-link>
									        </div>
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
	
	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				isLoaded: false,
				checkoutFaq: {},
				isFound: false
			}
		},
		mounted () {

			this.getCheckoutFaq(this.$route.params.id)
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
			async getCheckoutFaq (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_checkoutFaq_show, '/', 3)
				let url = _.join(urlArr, '/')+'/'+id

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.checkoutFaq = response.data.payload

					if (Object.keys(this.checkoutFaq).length > 0) {

						this.isFound = true
					}
				})
			}
		}
	}

</script>