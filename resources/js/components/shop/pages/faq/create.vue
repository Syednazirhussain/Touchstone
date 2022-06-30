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
						<div class="col-md-12">
						    <div class="box box-primary">
								<div class="box-body">
									<div class="panel panel-default">
									    <div class="panel-body">
											<div class="alert alert-danger alert-dismissible" v-if="displayErrors">
									            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									            <h4><i class="icon fa fa-ban"></i> {{ errorMsg }}</h4>
											    <ol>
											      <li v-for="(error, index) in errors" v-bind:key="index">
											      	{{ index }}
											      	<ul v-for="(item, i) in error" v-bind:key="i">
											      		<li>{{ item }}</li>
											      	</ul>
											      </li>
											    </ol>
									        </div>
									    	<form @submit.prevent="store" action="javascript:void(0);">

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="faq.question.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="faq.question.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="faq.question.ja" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="faq.question.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Question th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="faq.question.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer en</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="faq.answer.en" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer en</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="faq.answer.en" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer pl</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="faq.answer.pl" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer ja</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="faq.answer.ja" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer es</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="faq.answer.es" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Answer th</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="faq.answer.th" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Order</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="number" v-model="faq.order" class="form-control">
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Store</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Store</span>
									    		</button>

							        			<router-link class="btn btn-warning" :to="{ name: 'product_listing' }">
													Back
												</router-link>

									    	</form>
									    </div>
									</div>
							    </div>
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

				errors: {},
				errorMsg: null,
				displayErrors: false,

				isStoring:false,
				isLoaded: false,
				faq: {
					order: null, 
					question: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null,
					},
					answer: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null,
					}
				},
				isFound: false,

				id: 0,
				product_id: 0,

			    customToolbar: [
			      ["bold", "italic", "underline"],
			      [{ list: "ordered" }, { list: "bullet" }],
			      ["code-block"]
			    ],


			}
		},
		mounted () {

			this.product_id = this.$route.params.product_id
			console.log(this.product_id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
			'vue-editor': VueEditor,
		},
		methods: {
			async store () {

				this.isStoring = true

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_faq_store, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/faq/create'

				await axios.post(url, this.faq).then(response => {

					this.isStoring = false
					if (response.data.error == 0) {

						alert(response.data.message)
					} else {
						
						this.errorMsg = response.data.message

						this.displayErrors = true
						setTimeout(() => {

							this.displayErrors = false
						}, 5000)
					}

					router.push({ name: 'product_listing' })
				})
				.catch(error => {

					this.isStoring = false
					console.log(error.response.data)

					if (_.has(error.response.data, 'errors')) {

						this.errors = error.response.data.errors
					}

					this.errorMsg 	= error.response.data.message

					this.displayErrors = true
					setTimeout(() => {

						this.displayErrors = false
					}, 5000)
					
				})
			},
		}
	}

</script>