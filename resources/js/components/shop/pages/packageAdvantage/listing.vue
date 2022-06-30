<template>
	<div class="row">
		<div class="col-md-12">
			<router-link class="btn btn-primary btn-sm" :to="{ name: 'product_pack_create', params: { product_id: product_id } }">
				<span class="glyphicon glyphicon-plus"></span>
			</router-link>
	    	<ul class="products-list product-list-in-box">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>ID</th>
							<th>Product</th>
							<th>Text</th>
							<th>Order</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(packageAdvantage, index) in packageAdvantages.data" :key="index">
							<td>{{ (index + 1) }}</td>
							<td>{{ packageAdvantage.id }}</td>
							<td>{{ getText(packageAdvantage.product.title) }}</td>
							<td>{{ getText(packageAdvantage.text) }}</td>
							<td>{{ packageAdvantage.order }}</td>
							<td>
								<router-link class="btn btn-success" :to="{ name: 'product_pack_show', params: { product_id: product_id, id: packageAdvantage.id } }">
									<i class="fa fa-eye"></i>
								</router-link>
								<router-link class="btn btn-primary" :to="{ name: 'product_pack_edit', params: { product_id: product_id, id: packageAdvantage.id } }">
									<i class="fa fa-pencil"></i>
								</router-link>
								<button @click="deletePackage(packageAdvantage.id)" type="button" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
	        </ul>
      		<pagination :data="packageAdvantages" :limit=3 @align="{center}" @pagination-change-page="getPackageAdvantages">
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
				packageAdvantages: {},
			}
		},
		mounted () {

			// console.log("Product ID: "+this.product_id)
			this.getPackageAdvantages(1)
		},
		methods: {
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getPackageAdvantages (page = 1) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_pack, '/', 3)
				let url = _.join(urlArr, '/')+ '/' + this.product_id + '/pack?page='+page

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.packageAdvantages = response.data.payload
				})
			},
			async deletePackage (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_pack_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/pack/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getPackageAdvantages(1)
						}
					})
				}
			}
		}
	}

</script>