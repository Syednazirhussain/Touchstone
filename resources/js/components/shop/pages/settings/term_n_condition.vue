<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Terms & Conditions
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Terms & Conditions</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
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
									    				<label>Terms n Condition en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<vue-editor v-model="settings.terms.en" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Terms n Condition pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<vue-editor v-model="settings.terms.pl" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Terms n Condition ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<vue-editor v-model="settings.terms.ja" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Terms n Condition es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<vue-editor v-model="settings.terms.es" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Terms n Condition th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<vue-editor v-model="settings.terms.th" :editor-toolbar="customToolbar" />
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isUpdating" :disabled="isUpdating">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Update</span>
									    		</button>

									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Update</span>
									    		</button>

							        			<router-link class="btn btn-warning" :to="{ name: 'home' }">
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


				id: 0,
				type: 'terms',
				isFound: false,
				settings: {},
				
			    customToolbar: [
			      ["bold", "italic", "underline"],
			      [{ list: "ordered" }, { list: "bullet" }],
			      ["code-block"]
			    ],


			}
		},
		mounted () {

			this.id = this.$route.params.id
			this.getSettings(this.$route.params.id)
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
			async getSettings (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_setting_edit, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +id+ '/edit?type='+this.type

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.settings = response.data.payload

					if (Object.keys(this.settings).length > 0) {

						this.isFound = true
					}

					this.settings.terms = JSON.parse(this.settings.terms)
					console.log(this.settings)

				})
			},
			async update () {

				this.isUpdating = true

				this.settings['type'] = this.type

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_setting_update, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.id+ '/update'

				await axios.put(url, this.settings).then(response => {

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

					router.push({ name: 'home' })
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