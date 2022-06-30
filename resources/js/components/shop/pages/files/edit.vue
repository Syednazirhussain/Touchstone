<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						File
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">File</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title" v-if="isFound">{{ file.title }}</h3>
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
									    	<form @submit.prevent="update" enctype="multipart/form-data">

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Title</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="file.title" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Is Video</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="checkbox" v-model="file.is_video">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
														<label> File
															<input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>
														</label>
													</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Alt en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="file.alt.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Alt pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="file.alt.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Alt ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="file.alt.ja" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Alt es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="file.alt.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Alt th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="file.alt.th" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Order</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="number" v-model="file.order" class="form-control">
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isUpdating" :disabled="isUpdating">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Update</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Update</span>
									    		</button>

							        			<router-link class="btn btn-warning" :to="{ name: 'product_listing' }">
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
				file: {},
				photo: null,
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

			this.id = this.$route.params.id
			this.product_id = this.$route.params.subject_id

			this.getFile(this.$route.params.id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
			'vue-editor': VueEditor,
		},
		methods: {
			handleFileUpload() {

				this.photo = this.$refs.file.files[0];
			},
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getFile (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_file_edit, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/files/' +id+ '/edit'

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.file = response.data.payload

					if (Object.keys(this.file).length > 0) {

						this.isFound = true
					}

					this.file.alt 	= JSON.parse(this.file.alt)

					console.log(this.file)
				})
			},
			async update () {

				this.isUpdating = true

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_file_update, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/files/' +this.id+ '/update'

				let is_video = (this.file.is_video)? 1: 0

				let formData = new FormData();
				formData.append('file', this.photo)
				formData.append('title', this.file.title)
				formData.append('is_video', is_video)
				formData.append('alt.en', this.file.alt.en)
				formData.append('alt.pl', this.file.alt.pl)
				formData.append('alt.ja', this.file.alt.ja)
				formData.append('alt.es', this.file.alt.es)
				formData.append('alt.th', this.file.alt.th)
				formData.append('order', this.file.order)

				await axios.post(url,
						formData,
						{
							headers: {
								'Content-Type': 'multipart/form-data'
							}
						}
					).then(response => {

					this.isUpdating = false
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