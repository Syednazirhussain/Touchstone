<template>
	<div class="row">
		<div class="col-md-12">
			<router-link class="btn btn-primary btn-sm" :to="{ name: 'product_file_create', params: { product_id: product_id } }">
				<span class="glyphicon glyphicon-plus"></span>
			</router-link>
	    	<ul class="products-list product-list-in-box">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Alt</th>
							<th>Product</th>
							<th>Preview</th>
							<th>Order</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(file, index) in files.data" :key="index">
							<td>{{ file.id }}</td>
							<td>{{ file.title }}</td>
							<td>{{ getText(file.alt) }}</td>
							<td>{{ getText(file.product.title) }}</td>
							<td>
								<img :src="getImageUrl(file.link_name)" style="height: 120px;">
							</td>
							<td>{{ file.order }}</td>
							<td>
								<router-link class="btn btn-success" :to="{ name: 'product_file_show', params: { subject_id: product_id, id: file.id } }">
									<i class="fa fa-eye"></i>
								</router-link>
								<router-link class="btn btn-primary" :to="{ name: 'product_file_edit', params: { subject_id: product_id, id: file.id } }">
									<i class="fa fa-pencil"></i>
								</router-link>
								<button @click="deleteFile(file.id)" type="button" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
	        </ul>
      		<pagination :data="files" :limit=3 @align="{center}" @pagination-change-page="getFiles">
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
				files: {},
			}
		},
		mounted () {

			// console.log("Product ID: "+this.product_id)
			this.getFiles(1)
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
			async getFiles (page = 1) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_file, '/', 3)
				let url = _.join(urlArr, '/')+ '/' + this.product_id + '/files?page='+page

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.files = response.data.payload
				})
			},
			async deleteFile (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_file_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/files/' +id

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getFiles(1)
						}
					})
				}
			}
		}
	}

</script>