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
									<div class="panel panel-default">
									    <div class="panel-body" v-if="isFound">
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
									    	<form @submit.prevent="update" action="javascript:void(0);">

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
									    				<input type="text" v-model="category.meta_description.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Description pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_description.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Description ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_description.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Meta Description es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="category.meta_description.th" class="form-control">
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

									    		<button type="submit" class="btn btn-primary" v-if="isUpdating" :disabled="isUpdating">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Update</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Update</span>
									    		</button>

							        			<router-link class="btn btn-warning" :to="{ name: 'product_category_listing' }">
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

				errors: {},
				errorMsg: null,
				displayErrors: false,

				isUpdating:false,
				isLoaded: false,
				category: {},
				isFound: false,

			    customToolbar: [
			      ["bold", "italic", "underline"],
			      [{ list: "ordered" }, { list: "bullet" }],
			      ["code-block"]
			    ],


			}
		},
		mounted () {

			this.getCategory(this.$route.params.id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
			'vue-editor': VueEditor,
		},
		methods: {
			async getCategory (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_category_edit, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +id+ '/edit'

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.category = response.data.payload

					if (Object.keys(this.category).length > 0) {

						this.isFound = true
					}

					console.log(this.category)
				})
			},
			getCategoryName (object) {

				return object.en
			},
			async update () {

				this.isUpdating = true

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_category_update, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.$route.params.id+ '/update'

				await axios.put(url, this.category).then(response => {

					this.isUpdating = false
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
				})
				.catch(error => {

					this.isUpdating = false
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