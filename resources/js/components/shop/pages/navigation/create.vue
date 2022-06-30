<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Navigation
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Navigation</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">Add Navigation</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse">
								        	<i class="fa fa-minus"></i> 
								        </button> 
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
									    				<label>Title</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="navigation.name" class="form-control">
									    			</div>
									    		</div>
									    		
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Link</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="navigation.link" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Parent Menu</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<select v-model="navigation.parent_id" class="form-control">
									    					<option v-for="(parent, index) in parents" :key="index" :value="parent.id">
									    						{{ parent.name }}
									    					</option>
									    				</select>
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Save</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Save</span>
									    		</button>
							        			<router-link class="btn btn-warning" :to="{ name: 'navigation_listing' }">
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
	
	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {

				errors: {},
				errorMsg: null,
				displayErrors: false,

				parents: [],
				navigation: {
					name: null,
					link: null,
					parent_id: null,
				},

				isFound: false,
				isStoring: false,
			}
		},
		mounted () {

			this.getParents()
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
			async getParents (page = 1) {

				this.isLoaded = false				
				let url = window.touchStone.routes.shop_admin_navigation_create

				await axios.get(url).then(response => {

					this.isLoaded 	= true
					this.parents 	= response.data.payload
				})
			},
			async store () {

				this.isStoring = true

	    		let url = window.touchStone.routes.shop_admin_navigation_store
				await axios.post(url, this.navigation).then(response => {

					this.isStoring = false
					if (response.data.error == 0) {

						alert(response.data.message)
						router.push({ name: 'navigation_listing' })
					}
				})
				.catch(error => {

					this.isStoring = false

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