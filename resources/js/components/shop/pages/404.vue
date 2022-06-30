<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
				  <h1>
				    404 Error Page
				  </h1>
				  <ol class="breadcrumb">
					<li>
						<router-link :to="{ name: 'home' }">
							<i class="fa fa-dashboard"></i>&nbsp;Home
						</router-link>
					</li>
				    <li class="active">404 error</li>
				  </ol>
				</section>
				<section class="content">
				  <div class="error-page">
				    <h2 class="headline text-yellow"> 404</h2>
				    <div class="error-content">
				      <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
				      <p>
				        We could not find the page you were looking for.
				        Meanwhile, you may 
						<router-link :to="{ name: 'home' }">
							return to dashboard
						</router-link>
				      </p>
				    </div>
				  </div>
				</section>
			</div>
			<admin-footer></admin-footer>
		</div>
	</div>
</template>

<script type="text/javascript">
	
	import adminHeader from '../layouts/header.vue'
	import adminSidebar from '../layouts/sidebar.vue'
	import adminFooter from '../layouts/footer.vue'

	export default {
		data () {
			return {

			}
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
		},
		methods: {

		},
	}

</script>