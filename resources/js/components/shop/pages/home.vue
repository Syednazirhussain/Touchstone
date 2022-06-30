<template>
	<div class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<admin-header></admin-header>
			<admin-sidebar></admin-sidebar>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Home
						<small>Control panel</small>
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-dashboard"></i>&nbsp;Home</router-link>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-lg-3 col-xs-6">
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3>150</h3>
									<p>New Orders</p>
								</div>
								<div class="icon">
									<i class="ion ion-bag"></i>
								</div>
								<a href="javascript:void(0);" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
	
	import { bus } from '../../../app'
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
		mounted () {

			// this.$session.clear()
		},
		methods: {

		},
	}

</script>