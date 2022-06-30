<template>
	<aside class="main-sidebar">
		<section class="sidebar">
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MAIN NAVIGATION</li>
				<li>
					<router-link :to="{ name: 'home' }">
						<i class="fa fa-home"></i> <span>Dashboard</span>
					</router-link>
				</li>

				<li>
					<router-link :to="{ name: 'product_listing' }">
						<i class="fa fa-fw fa-shopping-cart "></i> <span>Products</span>
					</router-link>
				</li>

				<!--
		        <li class="treeview">
		          <a href="javascript:void(0);">
		            <i class="fa fa-amazon"></i> <span>Products</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li>
		              <router-link :to="{ name: 'product_listing' }">
		                <i class="fa fa-circle-o"></i> <span>List</span>
		              </router-link>
		            </li>
		          </ul>
		        </li>
		    	-->
				<li>
					<router-link :to="{ name: 'user_listing' }">
						<i class="fa fa-users"></i> <span>Users</span>
					</router-link>
				</li>
				<li>
					<router-link :to="{ name: 'product_category_listing' }">
						<i class="fa fa-fw fa-database"></i> <span>Categories</span>
					</router-link>
				</li>
				<li>
					<router-link :to="{ name: 'country_listing' }">
						<i class="fa fa-fw fa-globe"></i> <span>Countries</span>
					</router-link>
				</li>
				<li>
					<router-link :to="{ name: 'address_listing' }">
						<i class="fa fa-home"></i> <span>Addresses</span>
					</router-link>
				</li>
				<li>
					<router-link :to="{ name: 'banner_listing' }">
						<i class="fa fa-home"></i> <span>Banners</span>
					</router-link>
				</li>
				<li>
					<router-link :to="{ name: 'topbar_listing' }">
						<i class="fa fa-home"></i> <span>Top Bar</span>
					</router-link>
				</li>
				<li>
					<router-link :to="{ name: 'buyNow_listing' }">
						<i class="fa fa-home"></i> <span>Buy Now</span>
					</router-link>
				</li>

		        <li class="treeview">
		          <a href="javascript:void(0);">
		            <i class="fa fa-gear"></i> <span>Settings</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li>
		            	<router-link :to="{ name: 'payment_information_listing' }">
		                	<i class="fa fa-circle-o"></i> <span>Payment Information</span>
		              	</router-link>
		            </li>
		            <li>
		            	<router-link :to="{ name: 'setting_term_condition_edit', params: { id: 1 } }">
		                	<i class="fa fa-circle-o"></i> <span>Term &amp; Condition</span>
		              	</router-link>
		            </li>
		            <li>
		            	<router-link :to="{ name: 'setting_contact_edit', params: { id: 1 } }">
		                	<i class="fa fa-circle-o"></i> <span>Contact Information</span>
		              	</router-link>
		            </li>
		            <li>
		            	<router-link :to="{ name: 'setting_hours_edit', params: { id: 1 } }">
		                	<i class="fa fa-circle-o"></i> <span>Support Hours</span>
		              	</router-link>
		            </li>
		            <li>
		            	<router-link :to="{ name: 'fsbar_listing' }">
		                	<i class="fa fa-circle-o"></i> <span>Free Shipping</span>
		              	</router-link>
		            </li>
		            <li>
		            	<router-link :to="{ name: 'language_listing' }">
		                	<i class="fa fa-circle-o"></i> <span>Languages</span>
		              	</router-link>
		            </li>
		            <li>
		            	<router-link :to="{ name: 'checkoutFaq_listing' }">
		                	<i class="fa fa-circle-o"></i> <span>Checkout Faq</span>
		              	</router-link>
		            </li>
		            <li>
		            	<router-link :to="{ name: 'translation_listing' }">
		                	<i class="fa fa-circle-o"></i> <span>Translation</span>
		              	</router-link>
		            </li>
		            <li>
		            	<router-link :to="{ name: 'checkout_html_text_edit', params: { id: 1 } }">
		                	<i class="fa fa-circle-o"></i> <span>Checkout Html Text</span>
		              	</router-link>
		            </li>
		            <li>
		            	<a href="javascript:void(0);">Option</a>
		            </li>
		            <li>
		            	<a href="javascript:void(0);">Clear Cache</a>
		            </li>
		          </ul>
		        </li>

				<li>
					<router-link :to="{ name: 'navigation_listing' }">
						<i class="fa fa-home"></i> <span>Navigation</span>
					</router-link>
				</li>

				<li>
					<router-link :to="{ name: 'navigation_sorting' }">
						<i class="fa fa-home"></i> <span>Navigation Sorting</span>
					</router-link>
				</li>


			</ul>
		</section>
	</aside>
</template>

<script type="text/javascript">
	
	export default {


	}
	
</script>