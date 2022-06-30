<template>
	<div class="row">
		<div class="col-md-12">
			<router-link class="btn btn-primary btn-sm" :to="{ name: 'product_tab_create', params: { product_id: product_id } }">
				<span class="glyphicon glyphicon-plus"></span>
			</router-link>
	    	<ul class="products-list product-list-in-box">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Product</th>
							<th>Title</th>
							<th>Body</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(tab, index) in tabs.data" :key="index">
							<td>{{ tab.id }}</td>
							<td>{{ getText(tab.product.title) }}</td>
							<td>{{ getText(tab.title) }}</td>
							<td v-html="getText(tab.body)"></td>
							<td>
								<router-link class="btn btn-success" :to="{ name: 'product_tab_show', params: { product_id: product_id, id: tab.id } }">
									<i class="fa fa-eye"></i>
								</router-link>
								<router-link class="btn btn-primary" :to="{ name: 'product_tab_edit', params: { product_id: product_id, id: tab.id } }">
									<i class="fa fa-pencil"></i>
								</router-link>
								<button @click="deleteTab(tab.id)" type="button" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
	        </ul>
      		<pagination :data="tabs" :limit=3 @align="{center}" @pagination-change-page="getTabs">
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
				tabs: {},
			}
		},
		mounted () {

			// console.log("Product ID: "+this.product_id)
			this.getTabs(1)
		},
		methods: {
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getTabs (page = 1) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_tab, '/', 3)
				let url = _.join(urlArr, '/')+ '/' + this.product_id + '/tabs?page='+page

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.tabs = response.data.payload

					// console.log(this.tabs)
				})
			},
			async deleteTab (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_tab_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/tabs/' +id+ '/delete'

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getTabs(1)
						}
					})
				}
			}
		}
	}

</script>