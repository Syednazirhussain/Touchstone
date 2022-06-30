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
								    <h3 class="box-title">( Total Translation : {{ translations.total }} )</h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="translations.total > 0">

							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
													<th>Key</th>
													<th>Value</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(translation, index) in translations.data" :key="index">
													<td>{{ translation.id }}</td>
													<td>{{ translation.grouped_key }}</td>
													<td>{{ getText(translation.value) }}</td>
													<td>
														<router-link class="btn btn-primary" :to="{ name: 'translation_edit', params: { id: translation.id } }">
															<i class="fa fa-pencil"></i>
														</router-link>
													</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="translations" :limit=3 @align="{center}" @pagination-change-page="getTranslation">
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
				translations: {},
			}
		},
		mounted () {

			this.getTranslation()
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
			async getTranslation (page = 1) {

				this.page = page
				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_translation+'?page='+this.page
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.translations = response.data.payload

					// console.log(this.countries)
				})
			},
		}
	}

</script>