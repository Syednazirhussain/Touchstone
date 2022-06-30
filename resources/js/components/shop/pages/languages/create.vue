<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Language
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Language</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">Add Language</h3>
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
									    				<label>Name</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="language.name" class="form-control">
									    			</div>
									    		</div>
									    		
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Short Name</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="language.short_name" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Local</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="language.locale" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Url Segment</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="language.url" class="form-control">
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isStoring" :disabled="isStoring">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Save</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Save</span>
									    		</button>
							        			<router-link class="btn btn-warning" :to="{ name: 'fsbar_listing' }">
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

				language: {
					name: null,
					short_name: null,
					locale: null,
					url: null
				},

				isFound: false,
				isStoring: false,
			}
		},
		mounted () {

		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async store () {

				this.isStoring = true

	    		let url = window.touchStone.routes.shop_admin_language_store
				await axios.post(url, this.language).then(response => {

					this.isStoring = false
					if (response.data.error == 0) {

						alert(response.data.message)
					}
					router.push({ name: 'language_listing' })
				})
				.catch(error => {

					this.isStoring = false

					if (!_.has(error, 'response')) {

						return
					}

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