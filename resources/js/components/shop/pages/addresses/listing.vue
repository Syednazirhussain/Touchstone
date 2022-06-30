<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Addresses
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Addresses</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">

						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    
								    <h3 class="box-title" v-if="isEmpty">( Total Addresses : 0 )</h3>
								    <h3 class="box-title" v-else>( Total Addresses : {{ addresses.total }} )</h3>
								    
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button> 
								    </div>
								</div>
								<div class="box-body" v-if="!isEmpty">
									<router-link class="btn btn-primary btn-sm" :to="{ name: 'country_add' }">
										<span class="glyphicon glyphicon-plus"></span>
									</router-link>
							    	<ul class="products-list product-list-in-box">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>ID</th>
												</tr>
											</thead>
											<tbody>
												<tr v-for="(address, index) in addresses.data" :key="index">
													<td>{{ address.id }}</td>
												</tr>
											</tbody>
										</table>
							        </ul>
						      		<pagination :data="addresses" :limit=3 @align="{center}" @pagination-change-page="getAddresses">
										<span slot="prev-nav">&lt; Previous</span>
										<span slot="next-nav">Next &gt;</span>
									</pagination>
							    </div>
							    <div class="box-body">
							    	<div class="alert alert-info">
							    		<p class="text-center">No Record(s) found.</p>
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
				addresses: null,
				isEmpty: false
			}
		},
		mounted () {

			this.getAddresses()
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {
			async getAddresses (page = 1) {

				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_addresses+'?page='+page
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.addresses = response.data.payload

					if (_.isArray(this.addresses)) {

						this.isEmpty = true
					}

					console.log(this.isEmpty)
					console.log(this.addresses)
				})
			},
			getCountryName (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
		}
	}

</script>