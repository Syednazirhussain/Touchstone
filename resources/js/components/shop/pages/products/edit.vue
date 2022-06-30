<style scoped>
	.min-input {
	        max-width: 94px;
	}
</style>

<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Product
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Product</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
								<div class="box-header with-border">
								    <h3 class="box-title"></h3>
								    <div class="box-tools">
								        <button type="button" class="btn btn-box-tool" data-widget="collapse">
								        	<i class="fa fa-minus"></i> 
								        </button> 
								    </div>
								</div>
								<div class="box-body">
									<div class="panel panel-default" v-if="isFound">
										<div class="panel-heading">
											{{ product.title.en }}
										</div>
										<div class="panel-body">											
											<div class="row">
												<div class="col-md-12">
													<div class="nav-tabs-custom">
														<ul class="nav nav-tabs">
															<li @click="changeTab('MainInfo')" :class="{ 'active': (currentTab == 'MainInfo') }">
																<a href="#tab_1" data-toggle="tab">Main Information</a>
															</li>
															<li @click="changeTab('Faq')" :class="{ 'active': (currentTab == 'Faq') }">
																<a href="#tab_2" data-toggle="tab">FAQ</a>
															</li>
															<li @click="changeTab('Tabs')" :class="{ 'active': (currentTab == 'Tabs') }">
																<a href="#tab_3" data-toggle="tab">Tabs</a>
															</li>
															<li @click="changeTab('Files')" :class="{ 'active': (currentTab == 'Files') }">
																<a href="#tab_4" data-toggle="tab">Files</a>
															</li>
															<li @click="changeTab('SimilarProduct')" :class="{ 'active': (currentTab == 'SimilarProduct') }">
																<a href="#tab_5" data-toggle="tab">Similar Products</a>
															</li>
															<li @click="changeTab('Icons')" :class="{ 'active': (currentTab == 'Icons') }">
																<a href="#tab_6" data-toggle="tab">Icons</a>
															</li>
															<li @click="changeTab('Bundles')" :class="{ 'active': (currentTab == 'Bundles') }">
																<a href="#tab_7" data-toggle="tab">Bundles</a>
															</li>
															<li @click="changeTab('PackAdvantages')" :class="{ 'active': (currentTab == 'PackAdvantages') }">
																<a href="#tab_8" data-toggle="tab">Pack Advantages</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane" :class="{ 'active': (currentTab == 'MainInfo') }" id="tab_1">
																<!--
																<div class="alert alert-danger alert-dismissible" v-if="displayErrors">
														            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														            <h4><i class="icon fa fa-ban"></i> {{ errorMsg }}</h4>
																    <ol>
																      <li v-for="(error, index) in errors" v-bind:key="index">
																      	{{ index }}
																      	<ul v-for="(item, i) in error" v-bind:key="i">
																      		<li>{{ item }}</li>
																      	</ul>
																      </li>
																    </ol>
														        </div>
														    	-->

																<div class="alert alert-danger alert-dismissible" v-if="displayErrors">
														            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														            <h4><i class="icon fa fa-ban"></i> {{ errorMsg }}</h4>
																    <ol>
																      <li v-for="(error, index) in errors" v-bind:key="index">
																      	{{ error }}
																      </li>
																    </ol>
														        </div>

														    	<form @submit.prevent="update" action="javascript:void(0);">

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>SKU</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.sku" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Title From API</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.title.en" class="form-control" :disabled="true">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Title en</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.title.en" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Title en</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.title.en" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Title pl</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.title.pl" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Title ja</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.title.ja" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Title es</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.title.es" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Title th</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.title.th" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Url</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.url" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Order</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.order" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Supply en</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.supply.en" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Supply pl</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.supply.pl" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Supply ja</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.supply.ja" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Supply es</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.supply.es" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Supply th</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.supply.th" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Price Retail</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.price_retail" :disabled="true" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Price Wholesale</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.price_wholesale" :disabled="true" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Price Discounted</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.price_discounted" :disabled="true" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Price Retail GBP</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.price_retail_gbp" :disabled="true" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Price Wholesale GPB</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.price_wholesale_gbp" :disabled="true" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Price Discounted GBP</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.price_discounted_gbp" :disabled="true" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Category</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
																			<select class="form-control select2" v-model="selectedProduct" multiple="multiple" data-placeholder="Select Categories" style="width: 100%;">
																				<fragment v-for="(catgory, index) in productCategories" :key="index">
																					<option :value="catgory.id">{{ getText(catgory.name) }}</option>
																				</fragment>
																			</select>
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Body en</label>
														    			</div>
														    			<div class="col-md-8 pull-left">
									    									<vue-editor v-model="product.body.en" :editor-toolbar="customToolbar" />
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Body pl</label>
														    			</div>
														    			<div class="col-md-8 pull-left">
									    									<vue-editor v-model="product.body.pl" :editor-toolbar="customToolbar" />
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Body ja</label>
														    			</div>
														    			<div class="col-md-8 pull-left">
									    									<vue-editor v-model="product.body.ja" :editor-toolbar="customToolbar" />
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Body es</label>
														    			</div>
														    			<div class="col-md-8 pull-left">
									    									<vue-editor v-model="product.body.es" :editor-toolbar="customToolbar" />
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Body th</label>
														    			</div>
														    			<div class="col-md-8 pull-left">
									    									<vue-editor v-model="product.body.th" :editor-toolbar="customToolbar" />
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Product Main File</label>
														    			</div>
														    			<div class="col-md-8 pull-left">
																			<select class="form-control" v-model="product.main_file_id">
																				<option v-for="(file, index) in files" :key="index" :value="file.id" :selected="product.main_file_id == file.id">
																					{{ file.title }}
																				</option>
																			</select>
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Title en</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_title.en" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Title pl</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_title.pl" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Title ja</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_title.ja" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Title es</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_title.es" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Title th</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_title.th" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Description en</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_description.en" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Description pl</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_description.pl" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Description ja</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_description.ja" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Description es</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_description.es" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Meta Description th</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="text" v-model="product.meta_description.th" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Show everywhere in catalog (including VBO)</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="checkbox" v-model="product.is_moderate">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Show Autoship</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="checkbox" v-model="product.is_show_autoship">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Show only in VBO (When show in catalog disabled)</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="checkbox" v-model="product.is_show_in_vbo_catalog">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Bundles Savings USD</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="number" v-model="product.bundles_savings" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Bundles Savings GBP</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="number" v-model="product.bundles_savings_gbp" class="form-control">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Is Popular</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="checkbox" v-model="product.is_popular">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Charge in USD</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="checkbox" v-model="product.is_contains_hemp">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Only Available to VBOs</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="checkbox" v-model="product.only_available_vbo">
														    			</div>
														    		</div>

														    		<div class="col-md-12 form-group">
														    			<div class="col-md-4">
														    				<label>Bottle Count</label>
														    			</div>
														    			<div class="col-md-4 pull-left">
														    				<input type="number" v-model="product.bottle_count" class="form-control">
														    			</div>
														    		</div>

														    		<button type="submit" class="btn btn-primary" v-if="isUpdating" :disabled="isUpdating">
																		<span><i class="fa fa-spinner fa-1x fa-spin"></i>Update</span>
														    		</button>
														    		<button type="submit" class="btn btn-primary" v-else>
																		<span>Update</span>
														    		</button>

												        			<router-link class="btn btn-warning" :to="{ name: 'product_listing' }">
																		Back
																	</router-link>
														    	</form>
															</div>
															<div class="tab-pane" :class="{ 'active': (currentTab == 'Faq') }" id="tab_2">
																<faq-listing :product_id="product_id"></faq-listing>
															</div>
															<div class="tab-pane" :class="{ 'active': (currentTab == 'Tabs') }" id="tab_3">
																<tab-listing :product_id="product_id"></tab-listing>
															</div>
															<div class="tab-pane" :class="{ 'active': (currentTab == 'Files') }" id="tab_4">
																<file-listing :product_id="product_id"></file-listing>
															</div>
															<div class="tab-pane" :class="{ 'active': (currentTab == 'SimilarProduct') }" id="tab_5">
																<similar-product-listing :product_id="product_id"></similar-product-listing>
															</div>
															<div class="tab-pane" :class="{ 'active': (currentTab == 'Icons') }" id="tab_6">
																<icon-listing :product_id="product_id"></icon-listing>
															</div>
															<div class="tab-pane" :class="{ 'active': (currentTab == 'Bundles') }" id="tab_7">
																<bundle-listing :product_id="product_id"></bundle-listing>
															</div>
															<div class="tab-pane" :class="{ 'active': (currentTab == 'PackAdvantages') }" id="tab_8">
																<package-advantage-listing :product_id="product_id"></package-advantage-listing>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-default" v-else>
										<div class="well text-center text-info">
								    		Not Found
								    	</div>
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

    import { Fragment } from 'vue-fragment'

    import FaqListing from '../faq/listing.vue'
    import TabListing from '../tab/listing.vue'
    import FileListing from '../files/listing.vue'
    import SimilarProductListing from '../similarProduct/listing.vue'
    import ProductIconListing from '../icons/listing.vue'
    import ProductBundleListing from '../bundles/listing.vue'
    import PackageListing from '../packageAdvantage/listing.vue'

	// Advanced Use - Hook into Quill's API for Custom Functionality
	import { VueEditor, Quill } from "vue2-editor"

	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {

				errors: [],
				errorMsg: null,
				displayErrors: false,

				isUpdating:false,
				isLoaded: false,
				product: {},
				isFound: false,

				product_id: 0,

				files: [],
				selectedProduct: [],
				productCategories: [],

				currentTab: 'MainInfo',

			    customToolbar: [
					["bold", "italic", "underline"],
					[{ list: "ordered" }, { list: "bullet" }],
					["code-block"]
			    ],
			}
		},
		mounted () {
			
			jQuery(document).ready(function () {

				jQuery('.select2').select2()
			})

			this.product_id = this.$route.params.id
			
			this.getProduct(this.$route.params.id)
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
           	'fragment': Fragment,
			'vue-editor': VueEditor,
			'faq-listing': FaqListing,
			'file-listing': FileListing,
			'bundle-listing': ProductBundleListing,
			'icon-listing': ProductIconListing,
			'package-advantage-listing': PackageListing,
			'similar-product-listing': SimilarProductListing,
			'tab-listing': TabListing
		},
		methods: {
			changeTab (tab_name) {

				this.currentTab = tab_name
			},
			getText (object) {

				let jsObj = JSON.parse(object)
				return jsObj.en
			},
			async getProduct (id) {

				this.isLoaded = false

	    		let urlArr = _.split(window.touchStone.routes.shop_admin_products_edit, '/', 3)
				let url = _.join(urlArr, '/')+ '/' +id+ '/edit'

				await axios.get(url).then(response => {

					this.isLoaded = true
					this.files = response.data.payload.files
					this.product = response.data.payload.product
					this.productCategories = response.data.payload.productCategories

					if (Object.keys(this.product).length > 0) {

						this.isFound = true
					}

					this.product.body = JSON.parse(this.product.body)
					this.product.title = JSON.parse(this.product.title)
					this.product.supply = JSON.parse(this.product.supply)
					this.product.meta_title = JSON.parse(this.product.meta_title)
					this.product.meta_description = JSON.parse(this.product.meta_description)

					if (!_.isEmpty(this.product.categories)) {

						_.forEach(this.product.categories, (item, index) => {

							this.selectedProduct.push(item.id)
						})
					}
				})
			},
			async update () {

				if (this.validate()) {

					this.isUpdating = true

					this.product['selectedProduct'] = this.selectedProduct

		    		let urlArr = _.split(window.touchStone.routes.shop_admin_products_update, '/', 3)
					let url = _.join(urlArr, '/')+ '/' +this.product_id+ '/update'

					await axios.put(url, this.product).then(response => {

						this.isUpdating = false
						if (response.data.error == 0) {

							alert(response.data.message)
							// router.push({ name: 'product_listing' })

						} else {
							
							this.errorMsg = response.data.message

							this.displayErrors = true
							$(window).scrollTop(100)
							/*
							setTimeout(() => {

								this.displayErrors = false
							}, 5000)
							*/
							return false
						}
					}).catch(error => {

						this.isUpdating = false

						if (_.has(error.response.data, 'errors')) {

							this.errors = error.response.data.errors
						}

						this.errorMsg 	= error.response.data.message

						this.displayErrors = true
						$(window).scrollTop(100)
						/*
						setTimeout(() => {

							this.displayErrors = false
						}, 5000)
						*/
						return false
					})

				}
			},
			validate () {

				this.errors = []

				if (_.isEmpty(this.product.sku)) {

					this.errors.push("Please enter SKU")
				}

				if (_.isEmpty(this.product.title.en) ||
					_.isEmpty(this.product.title.pl) ||
					_.isEmpty(this.product.title.es) ||
					_.isEmpty(this.product.title.ja) ||
					_.isEmpty(this.product.title.th)
					) {

					this.errors.push("Please enter product title")
				}

				if (_.isEmpty(this.product.url)) {

					this.errors.push("Please enter url")
				}

				if (_.isEmpty(this.product.order)) {

					this.errors.push("Please enter order")
				}

				if (_.isEmpty(this.product.supply.en) ||
					_.isEmpty(this.product.supply.pl) ||
					_.isEmpty(this.product.supply.es) ||
					_.isEmpty(this.product.supply.ja) ||
					_.isEmpty(this.product.supply.th)
					) {

					this.errors.push("Please enter product supply")
				}

				if (_.isEmpty(this.product.price_retail)) {

					this.errors.push("Please enter price retail")
				}

				if (_.isEmpty(this.product.price_wholesale)) {

					this.errors.push("Please enter price wholesale")
				}

				if (_.isEmpty(this.product.price_discounted)) {

					this.errors.push("Please enter price discounted")
				}

				if (_.isEmpty(this.product.price_retail_gbp)) {

					this.errors.push("Please enter price retail gbp")
				}

				if (_.isEmpty(this.product.price_retail_gbp)) {

					this.errors.push("Please enter price retail gbp")
				}

				if (_.isEmpty(this.product.price_wholesale_gbp)) {

					this.errors.push("Please enter price wholesale gbp")
				}

				if (_.isEmpty(this.product.price_discounted_gbp)) {

					this.errors.push("Please enter price discounted gbp")
				}

				if (_.isEmpty(this.product.price_discounted_gbp)) {

					this.errors.push("Please enter price discounted gbp")
				}

				if (this.selectedProduct.length == 0) {

					this.errors.push("Please select atleast single category")
				}

				if (_.isEmpty(this.product.body.en) ||
					_.isEmpty(this.product.body.pl) ||
					_.isEmpty(this.product.body.es) ||
					_.isEmpty(this.product.body.ja) ||
					_.isEmpty(this.product.body.th)
					) {

					this.errors.push("Please enter product body")
				}

				if (this.product.main_file_id == null ||
					this.product.main_file_id == "undefined" || 
					this.product.main_file_id == "") {

					this.errors.push("Please enter main file id")
				}

				if (_.isEmpty(this.product.meta_title.en) ||
					_.isEmpty(this.product.meta_title.pl) ||
					_.isEmpty(this.product.meta_title.es) ||
					_.isEmpty(this.product.meta_title.ja) ||
					_.isEmpty(this.product.meta_title.th)
					) {

					this.errors.push("Please enter product meta title")
				}

				if (_.isEmpty(this.product.meta_description.en) ||
					_.isEmpty(this.product.meta_description.pl) ||
					_.isEmpty(this.product.meta_description.es) ||
					_.isEmpty(this.product.meta_description.ja) ||
					_.isEmpty(this.product.meta_description.th)
					) {

					this.errors.push("Please enter product meta description")
				}

				if (_.isEmpty(this.product.bundles_savings)) {

					this.errors.push("Please enter bundles savings")
				}

				if (_.isEmpty(this.product.bundles_savings_gbp)) {

					this.errors.push("Please enter bundles savings gbp")
				}

				if (this.product.bottle_count == null ||
					this.product.bottle_count == "undefined" || 
					this.product.bottle_count == "") {


					this.errors.push("Please enter bottle count")
				}

				if (this.errors.length > 0) {

					this.errorMsg = "Please fix the following errors:"
					this.displayErrors = true

					$(window).scrollTop(100)
					/*
					setTimeout(() => {

						this.displayErrors = false
					}, 5000)
					*/
					return false
				}

				return true
			}
		}
	}

</script>
