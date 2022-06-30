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

						<div class="col-md-12" v-if="isLoaded">

							<div class="box box-primary">
								<div class="box-body">
									<form @submit.prevent="getNavigation(1)" class="form-inline" action="javascript:void(0);">
										
										<div class="form-group">
											<label>Search</label>
											<input type="text" v-model="search_field" class="form-control">
										</div>

										<button type="submit" class="btn btn-primary">Search</button>
										<button @click="reset" type="button" class="btn btn-danger">Reset</button>
									</form>
								</div>
							</div>

						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">( Total Navigation : {{ navigations.total }} )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="navigations.total > 0">

									<router-link class="btn btn-primary btn-sm" :to="{ name: 'navigation_create' }">
										<span class="glyphicon glyphicon-plus"></span>
									</router-link>

							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Main Page</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(navigation, index) in navigations.data" :key="index">
													<td>{{ navigation.id }}</td>
													<td>{{ navigation.name }}</td>
													<td v-if="navigation.is_parent">Yes</td>
													<td v-else>No</td>
													<td>
														<router-link class="btn btn-primary" :to="{ name: 'navigation_edit', params: { id: navigation.id } }">
															<i class="fa fa-pencil"></i>
														</router-link>
														<button @click="deleteNavigation(navigation.id)" type="button" class="btn btn-danger">
															<i class="fa fa-trash"></i>
														</button>
													</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="navigations" :limit=3 @align="{center}" @pagination-change-page="getNavigation">
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
				navigations: {},
				search_field: null
			}
		},
		mounted () {
			this.getNavigation()
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			reset () {

				this.search_field = null
				this.getNavigation(1)
			},
			async getNavigation (page = 1) {

				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_navigation+'?page='+page

				if (!_.isNull(this.search_field) && !_.isEmpty(this.search_field)) {

					url += '&search='+this.search_field
				}

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.navigations = response.data.payload

					console.log(this.navigations)
				})
			},
			async deleteNavigation (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_navigation_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getNavigation(1)
						}
					})
				}
			}
		}
	}

</script>