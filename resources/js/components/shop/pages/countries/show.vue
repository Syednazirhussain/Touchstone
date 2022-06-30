<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Country
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Country</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title" v-if="isFound">( Country : {{ getCountryName(country.name) }} )</h3>
								    <h3 class="box-title" v-else>( Country :  )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body">
									<div class="panel panel-default">
									    <div class="panel-body" v-if="isFound">
									        <div class="table-responsive">
									            <table class="table table-borderless">
									                <tbody>
									                    <tr>
									                    	<th>ID</th>
									                    	<td>{{ country.id }}</td>
									                    </tr>
									                    <tr>
									                    	<th>Name</th>
									                    	<td>{{ getCountryName(country.name) }}</td>
									                    </tr>
									                </tbody>
									            </table>
									        </div>
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
	
	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				isLoaded: false,
				country: {},
				isFound: false
			}
		},
		mounted () {

			this.getCountry(this.$route.params.id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async getCountry (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_country_show, '/', 3)
				let url = _.join(urlArr, '/')+'/'+id

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.country = response.data.payload

					if (Object.keys(this.country).length > 0) {

						this.isFound = true
					}

					console.log(this.country)
				})
			},
			getCountryName (object) {

				return object.en
			},
		}
	}

</script>