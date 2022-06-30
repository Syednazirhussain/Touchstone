<template>
	<div class="row">
		<div class="col-md-12">
			<router-link class="btn btn-primary btn-sm" :to="{ name: 'product_bundle_create', params: { product_id: product_id } }">
				<span class="glyphicon glyphicon-plus"></span>
			</router-link>
	    	<ul class="products-list product-list-in-box">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>ID</th>
							<th>Product</th>
							<th>Bundle Product</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(bundle, index) in bundles.data" :key="index">
							<td>{{ (index + 1) }}</td>
							<td>{{ bundle.id }}</td>
							<td>{{ getText(bundle.title) }}</td>
							<td>{{ getText(bundle.bundle_product.title) }}</td>
							<td>
								<router-link class="btn btn-success" :to="{ name: 'product_bundle_show', params: { product_id: product_id, id: bundle.id } }">
									<i class="fa fa-eye"></i>
								</router-link>
								<router-link class="btn btn-primary" :to="{ name: 'product_bundle_edit', params: { product_id: product_id, id: bundle.id } }">
									<i class="fa fa-pencil"></i>
								</router-link>
								<button @click="deleteProductBundle(bundle.id)" type="button" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
	        </ul>
      		<pagination :data="bundles" :limit=3 @align="{center}" @pagination-change-page="getProductBundles">
				<span slot="prev-nav">&lt; Previous</span>
				<span slot="next-nav">Next &gt;</span>
			</pagination>
	    </div>
	</div>
</template>

<script type="text/javascript">

	export default {
		props: {
			product_id: {
				type: Number,
				required: true
			}
		},
		data () {
			return {
				isLoaded: false,
				bundles: {},
			}
		},
		mounted () {

			// console.log("Product ID: "+this.product_id)
			this.getProductBundles(1)
		},
		methods: {
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getProductBundles (page = 1) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_bundle, '/', 3)
				let url = _.join(urlArr, '/')+ '/' + this.product_id + '/bundles?page='+page

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.bundles = response.data.payload
				})
			},
			async deleteProductBundle (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_bundle_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/bundles/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getProductBundles(1)
						}
					})
				}
			}
		}
	}

</script>