<template>
	<div class="row">
		<div class="col-md-12">
	    	<ul class="products-list product-list-in-box">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Product</th>
							<th>Text</th>
							<th>Order</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(icon, index) in icons.data" :key="index">
							<td>{{ icon.id }}</td>
							<td>{{ getText(icon.product.title) }}</td>
							<td>{{ getText(icon.text) }}</td>
							<td>{{ icon.order }}</td>
							<td>
								<router-link class="btn btn-success" :to="{ name: 'product_icon_show', params: { product_id: product_id, id: icon.id } }">
									<i class="fa fa-eye"></i>
								</router-link>
								<router-link class="btn btn-primary" :to="{ name: 'product_icon_edit', params: { product_id: product_id, id: icon.id } }">
									<i class="fa fa-pencil"></i>
								</router-link>
								<button @click="deleteProductIcon(icon.id)" type="button" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
	        </ul>
      		<pagination :data="icons" :limit=3 @align="{center}" @pagination-change-page="getProductIcons">
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
				icons: {},
			}
		},
		mounted () {

			// console.log("Product ID: "+this.product_id)
			this.getProductIcons(1)
		},
		methods: {
			getImageUrl (image) {

				// return "https://assets.thegoodinside.com/shop/uploads/"+image
				return window.location.origin+"/storage/shop/uploads/"+image
			},
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getProductIcons (page = 1) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_icon, '/', 3)
				let url = _.join(urlArr, '/')+ '/' + this.product_id + '/icons?page='+page

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.icons = response.data.payload
				})
			},
			async deleteProductIcon (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_icon_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/icons/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getProductIcons(1)
						}
					})
				}
			}
		}
	}

</script>