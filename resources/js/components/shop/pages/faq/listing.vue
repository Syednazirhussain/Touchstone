<template>
	<div class="row">
		<div class="col-md-12">
			<router-link class="btn btn-primary btn-sm" :to="{ name: 'product_faq_create', params: { product_id: product_id } }">
				<span class="glyphicon glyphicon-plus"></span>
			</router-link>
	    	<ul class="products-list product-list-in-box">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Product</th>
							<th>Question</th>
							<th>Answer</th>
							<th>Order</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(faq, index) in faqs.data" :key="index">
							<td>{{ faq.id }}</td>
							<td>{{ getText(faq.product.title) }}</td>
							<td v-html="getText(faq.question)"></td>
							<td v-html="getText(faq.answer)"></td>
							<td>{{ faq.order }}</td>
							<td>
								<router-link class="btn btn-success" :to="{ name: 'product_faq_show', params: { product_id: product_id, id: faq.id } }">
									<i class="fa fa-eye"></i>
								</router-link>
								<router-link class="btn btn-primary" :to="{ name: 'product_faq_edit', params: { product_id: product_id, id: faq.id } }">
									<i class="fa fa-pencil"></i>
								</router-link>
								<button @click="deleteFaq(faq.id)" type="button" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
	        </ul>
      		<pagination :data="faqs" :limit=3 @align="{center}" @pagination-change-page="getFaqs">
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
				faqs: {},
			}
		},
		mounted () {

			// console.log("Product ID: "+this.product_id)
			this.getFaqs(1)
		},
		methods: {
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getFaqs (page = 1) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_faq, '/', 3)
				let url = _.join(urlArr, '/')+ '/' + this.product_id + '/faq?page='+page

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.faqs = response.data.payload

					// console.log(this.faqs)
				})
			},
			async deleteFaq (id) {

				if (confirm('Are you sure..?')) {

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_product_faq_destroy, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/faq/' +id+ '/delete'

					await axios.delete(url).then(response => {

						if (response.data.error == 0) {

							alert(response.data.message)
							this.getFaqs(1)
						}
					})
				}
			}
		}
	}

</script>