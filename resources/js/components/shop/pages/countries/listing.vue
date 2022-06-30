<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Countries
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Countries</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">( Total Countries : {{ countries.total }} )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="countries.total > 0">

									<router-link class="btn btn-primary btn-sm" :to="{ name: 'country_add' }">
										<span class="glyphicon glyphicon-plus"></span>
									</router-link>

							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>ISO3</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(country, index) in countries.data" :key="index">
													<td>{{ country.id }}</td>
													<td>{{ getCountryName(country.name) }}</td>
													<td>{{ country.iso3 }}</td>
													<td>
														<router-link class="btn btn-success" :to="{ name: 'country_show', params: { id: country.id } }">
															<i class="fa fa-eye"></i>
														</router-link>
														<router-link class="btn btn-primary" :to="{ name: 'country_edit', params: { id: country.id } }">
															<i class="fa fa-pencil"></i>
														</router-link>
														<button @click="deleteCountry(country.id)" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
													</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="countries" :limit=3 @align="{center}" @pagination-change-page="getCountry">
										<span slot="prev-nav">&lt; Previous</span>
										<span slot="next-nav">Next &gt;</span>
									</pagination>
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
				countries: [],
			}
		},
		mounted () {
			this.getCountry()
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async getCountry (page = 1) {

				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_countries+'?page='+page
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.countries = response.data.payload

					// console.log(this.countries)
				})
			},
			getCountryName (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async deleteCountry (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_country_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getCountry(1)
						}
					})
				}

			}
		}
	}

</script>