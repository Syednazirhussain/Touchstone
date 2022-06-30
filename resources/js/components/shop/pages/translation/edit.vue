<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Translation
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Translation</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title" v-if="isFound">{{ translation.grouped_key }}</h3>
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
									    				<label>Key</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="translation.grouped_key" class="form-control">
									    			</div>
									    		</div>
									    		
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Value en</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="translation.value.en" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Value pl</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="translation.value.pl" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Value ja</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="translation.value.ja" class="form-control">
									    			</div>
									    		</div>
									    		
									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Value es</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="translation.value.es" class="form-control">
									    			</div>
									    		</div>

									    		<div class="col-md-12 form-group">
									    			<div class="col-md-4">
									    				<label>Value th</label>
									    			</div>
									    			<div class="col-md-4 pull-left">
									    				<input type="text" v-model="translation.value.th" class="form-control">
									    			</div>
									    		</div>

									    		<button type="submit" class="btn btn-primary" v-if="isUpdating" :disabled="isUpdating">
													<span><i class="fa fa-spinner fa-1x fa-spin"></i>Update</span>
									    		</button>
									    		<button type="submit" class="btn btn-primary" v-else>
													<span>Update</span>
									    		</button>
							        			<router-link class="btn btn-warning" :to="{ name: 'translation_listing' }">
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

	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				isUpdating:false,
				isLoaded: false,

				translation: {},
				isFound: false
			}
		},
		mounted () {

			this.getTranslation(this.$route.params.id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async getTranslation (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_translation_edit, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +id+ '/edit'

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.translation = response.data.payload

					if (Object.keys(this.translation).length > 0) {

						this.isFound = true
					}

					this.translation.value = JSON.parse(this.translation.value)

				})
			},
			async update () {

				this.isUpdating = true

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_translation_update, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +this.$route.params.id+ '/update'

				await axios.put(url, this.translation).then(response => {

					this.isUpdating = false
					if (response.data.error == 0) {

						alert(response.data.message)
					}

					router.push({ name: 'translation_listing' })
				})

			},
		}
	}

</script>