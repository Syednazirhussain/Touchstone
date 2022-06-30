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

						<div class="col-md-12">
						    <div class="box box-primary">
								<div class="box-header with-border">
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
											      	{{ error }}
											      </li>
											    </ol>
									        </div>
									    	<form @submit.prevent="store" action="javascript:void(0);">

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.name.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.name.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.name.ja" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.name.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Name th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.name.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Url</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.url" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Order</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="number" v-model="category.order" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Textarea en</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="category.comment.en" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Textarea pl</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="category.comment.pl" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Textarea ja</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="category.comment.ja" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Textarea es</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="category.comment.es" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-2">
									    				<label>Textarea th</label>
									    			</div>
									    			<div class="col-md-10 pull-left">
									    				<vue-editor v-model="category.comment.th" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>
									    		
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Show on Desktop Menu</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
												        <input type="checkbox" :value="category.is_show_on_menu" v-model="category.is_show_on_menu">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Show on Mobile Menu</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
												        <input type="checkbox" :value="category.is_show_mobile_menu" v-model="category.is_show_mobile_menu">
									    			</div>
									    		</div>


									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Title en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_title.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Title pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_title.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Title ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_title.ja" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Title es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_title.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Title th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_title.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Description en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_description.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Description pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_description.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Description ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_description.ja" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Description es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_description.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Description th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_description.th" class="form-control">
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Save</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Save</span>
									    		</button>

							        			<router-link class="btn btn-warning" :to="{ name: 'product_category_listing' }">
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

				errors: [],
				errorMsg: null,
				displayErrors: false,

				category: {
					name: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null
					},
					comment: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null
					},
					meta_title: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null
					},
					meta_description: {
						en: null,
						pl: null,
						ja: null,
						es: null,
						th: null
					},
					is_show_mobile_menu: true,
					is_show_on_menu: false,
					order: null,
					url: null
				},


				isStoring:false,

			    customToolbar: [
			      ["bold", "italic", "underline"],
			      [{ list: "ordered" }, { list: "bullet" }],
			      ["code-block"]
			    ],


			}
		},
		mounted () {

		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
			'vue-editor': VueEditor,
		},
		methods: {
			async store () {

				if (this.validate()) {

					this.isStoring = true

					let url = window.touchStone.routes.shop_admin_product_category_store
					await axios.post(url, this.category).then(response => {

						this.isStoring = false
						if (response.data.error == 0) {

							alert(response.data.message)
							router.push({ name: 'product_category_listing' })
						} else {
							
							this.errorMsg = response.data.message

							this.displayErrors = true
							setTimeout(() => {

								this.displayErrors = false
							}, 5000)
						}
					}).catch(error => {

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
				}
			},
			validate () {

				this.errors = []

				if (_.isEmpty(this.category.name.en)) {

					this.errors.push('Please enter name en')
				}

				if (_.isEmpty(this.category.name.pl)) {

					this.errors.push('Please enter name pl')
				}

				if (_.isEmpty(this.category.name.ja)) {

					this.errors.push('Please enter name ja')
				}

				if (_.isEmpty(this.category.name.es)) {

					this.errors.push('Please enter name es')
				}

				if (_.isEmpty(this.category.name.th)) {

					this.errors.push('Please enter name th')
				}

				if (_.isEmpty(this.category.comment.en)) {

					this.errors.push('Please enter comment en')
				}

				if (_.isEmpty(this.category.comment.pl)) {

					this.errors.push('Please enter comment pl')
				}

				if (_.isEmpty(this.category.comment.ja)) {

					this.errors.push('Please enter comment ja')
				}

				if (_.isEmpty(this.category.comment.es)) {

					this.errors.push('Please enter comment es')
				}

				if (_.isEmpty(this.category.comment.th)) {

					this.errors.push('Please enter comment th')
				}

				if (_.isEmpty(this.category.meta_title.en)) {

					this.errors.push('Please enter meta title en')
				}

				if (_.isEmpty(this.category.meta_title.pl)) {

					this.errors.push('Please enter meta title pl')
				}

				if (_.isEmpty(this.category.meta_title.ja)) {

					this.errors.push('Please enter meta title ja')
				}

				if (_.isEmpty(this.category.meta_title.es)) {

					this.errors.push('Please enter meta title es')
				}

				if (_.isEmpty(this.category.meta_title.th)) {

					this.errors.push('Please enter meta title th')
				}

				if (_.isEmpty(this.category.meta_description.en)) {

					this.errors.push('Please enter meta description en')
				}

				if (_.isEmpty(this.category.meta_description.pl)) {

					this.errors.push('Please enter meta description pl')
				}

				if (_.isEmpty(this.category.meta_description.ja)) {

					this.errors.push('Please enter meta description ja')
				}

				if (_.isEmpty(this.category.meta_description.es)) {

					this.errors.push('Please enter meta description es')
				}

				if (_.isEmpty(this.category.meta_description.th)) {

					this.errors.push('Please enter meta description th')
				}

				if (_.isEmpty(this.category.order)) {

					this.errors.push('Please enter order')
				}

				if (_.isEmpty(this.category.url)) {

					this.errors.push('Please enter url')
				}

				if (this.errors.length > 0) {

					this.errorMsg = "Please fix the following errors:"
					this.displayErrors = true
					setTimeout(() => {

						this.displayErrors = false
					}, 5000)

					return false
				}

				return true
			},
		}
	}

</script>