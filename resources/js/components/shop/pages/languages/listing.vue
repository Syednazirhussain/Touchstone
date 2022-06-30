<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Languages
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Languages</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title">( Total Languages : {{ languages.total }} )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="languages.total > 0">

									<router-link class="btn btn-primary btn-sm" :to="{ name: 'language_create' }">
										<span class="glyphicon glyphicon-plus"></span>
									</router-link>

							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Short Name</th>
													<th>Local</th>
													<th>Url Segment</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(language, index) in languages.data" :key="index">
													<td>{{ language.id }}</td>
													<td>{{ language.name }}</td>
													<td>{{ language.short_name }}</td>
													<td>{{ language.locale }}</td>
													<td>{{ language.url }}</td>
													<td>
														<router-link class="btn btn-success" :to="{ name: 'language_show', params: { id: language.id } }">
															<i class="fa fa-eye"></i>
														</router-link>
														<router-link class="btn btn-primary" :to="{ name: 'language_edit', params: { id: language.id } }">
															<i class="fa fa-pencil"></i>
														</router-link>
														<button @click="deleteLanguage(language.id)" type="button" class="btn btn-danger">
															<i class="fa fa-trash"></i>
														</button>
													</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="languages" :limit=3 @align="{center}" @pagination-change-page="getLanguages">
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

	import router from '../../routes/shop.js'

	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				page: 1,
				isLoaded: false,
				languages: {},
			}
		},
		mounted () {

			this.getLanguages()
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
			async getLanguages (page = 1) {

				this.page = page
				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_language+'?page='+this.page
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.languages = response.data.payload

					// console.log(this.countries)
				})
			},
			async deleteLanguage (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_language_delete, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getLanguages(this.page)
						}
					})
				}

			}
		}
	}

</script>