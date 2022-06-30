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
								    <h3 class="box-title" v-if="isFound">{{ checkoutFaq.question.en }}</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body">
									<div class="panel panel-default">
									    <div class="panel-body" v-if="isFound">

									    	<form @submit.prevent="update" action="javascript:void(0);">

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="checkoutFaq.question.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="checkoutFaq.question.pl" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="checkoutFaq.question.ja" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="checkoutFaq.question.es" class="form-control">
									    			</div>
									    		</div>
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="checkoutFaq.question.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer en</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="checkoutFaq.answer.en" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer en</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="checkoutFaq.answer.en" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer pl</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="checkoutFaq.answer.pl" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer ja</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="checkoutFaq.answer.ja" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer es</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="checkoutFaq.answer.es" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer th</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="checkoutFaq.answer.th" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isUpdating" :disabled="isUpdating">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Update</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Update</span>
									    		</button>
							        			<router-link class="btn btn-warning" :to="{ name: 'checkoutFaq_listing' }">
													Back
												</router-link>
									    	</form>
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
	
	import router from '../../routes/shop.js'

	// Advanced Use - Hook into Quill's API for Custom Functionality
	import { VueEditor, Quill } from "vue2-editor"

	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				isUpdating:false,
				isLoaded: false,

				checkoutFaq: {},
				isFound: false,

			    customToolbar: [
			      ["bold", "italic", "underline"],
			      [{ list: "ordered" }, { list: "bullet" }],
			      ["code-block"]
			    ],
			}
		},
		mounted () {

			this.getCheckoutFaq(this.$route.params.id)
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
			async getCheckoutFaq (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_checkoutFaq_edit, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +id+ '/edit'

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.checkoutFaq = response.data.payload

					if (Object.keys(this.checkoutFaq).length > 0) {

						this.isFound = true
					}

					this.checkoutFaq.question = JSON.parse(this.checkoutFaq.question)
					this.checkoutFaq.answer = JSON.parse(this.checkoutFaq.answer)
				})
			},
			async update () {

				this.isUpdating = true

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_checkoutFaq_update, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.$route.params.id+ '/update'

				await axios.put(url, this.checkoutFaq).then(response => {

					this.isUpdating = false
					if (response.data.error == 0) {

						alert(response.data.message)
					}

					router.push({ name: 'checkoutFaq_listing' })
				})

			},
		}
	}

</script>