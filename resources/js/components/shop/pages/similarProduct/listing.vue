<template>
	<div class="row">
		<div class="col-md-12">
			<router-link class="btn btn-primary btn-sm" :to="{ name: 'product_similar_product_create', params: { product_id: product_id } }">
				<span class="glyphicon glyphicon-plus"></span>
			</router-link>
	    	<ul class="products-list product-list-in-box">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>ID</th>
							<th>Product</th>
							<th>Similar Product</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(product, index) in products.data" :key="index">
							<td>{{ (index + 1) }}</td>
							<td>{{ product.id }}</td>
							<td>{{ getText(product.product.title) }}</td>
							<td>{{ getText(product.similar_product.title) }}</td>
							<td>
								<router-link class="btn btn-success" :to="{ name: 'product_similar_product_show', params: { product_id: product_id, id: product.id } }">
									<i class="fa fa-eye"></i>
								</router-link>
								<router-link class="btn btn-primary" :to="{ name: 'product_similar_product_edit', params: { product_id: product_id, id: product.id } }">
									<i class="fa fa-pencil"></i>
								</router-link>
								<button @click="deleteSimilarProduct(product.id)" type="button" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
	        </ul>
      		<pagination :data="products" :limit=3 @align="{center}" @pagination-change-page="getSimilarProduct">
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
				products: {},
			}
		},
		mounted () {

			// console.log("Product ID: "+this.product_id)
			this.getSimilarProduct(1)
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
			async getSimilarProduct (page = 1) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_similar, '/', 3)
				let url = _.join(urlArr, '/')+ '/' + this.product_id + '/similar?page='+page

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.products = response.data.payload
				})
			},
			async deleteSimilarProduct (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_product_similar_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/similar/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getSimilarProduct(1)
						}
					})
				}
			}
		}
	}

</script>