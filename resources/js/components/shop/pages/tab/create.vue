<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Tab
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Tab</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">Create</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
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
									    				<label>Title en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="tab.title.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="tab.title.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="tab.title.ja" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="tab.title.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="tab.title.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Body en</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="tab.body.en" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Body en</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="tab.body.en" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Body pl</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="tab.body.pl" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Body ja</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="tab.body.ja" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Body es</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="tab.body.es" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Body th</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="tab.body.th" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Order</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="checkbox" v-model="tab.order">
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Save</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Save</span>
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

				tab: {
					title: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null
					},
					body: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null
					},
					order: false
				},

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

			this.id = this.$route.params.id
			this.product_id = this.$route.params.product_id
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

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_tab_store, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/tabs/create'

				await axios.post(url, this.tab).then(response => {

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