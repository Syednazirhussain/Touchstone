<template>
	<header class="main-header">
		<a href="javascript:void(0);" class="logo">
			<span class="logo-mini"><b>T</b>Stone</span>
			<span class="logo-lg"><b>Touch</b>STONE</span>
		</a>
		<nav class="navbar navbar-static-top">
			<a href="javascript:void(0);" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
				  <li class="dropdown user user-menu">
				    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
				      <span class="hidden-xs">{{ currentUserName }}</span>
				    </a>
				    <ul class="dropdown-menu">
				      <li class="user-header">
				        <p>
				          {{ currentUserName }}
				        </p>
				      </li>
				      <li class="user-footer">
				        <div class="pull-left">
				          <a href="javascript:void(0);" @click="testAPI('GetProducts')" class="btn btn-default btn-flat">Profile</a>
				        </div>
				        <div class="pull-right">
				          <a @click="logout" href="javascript:void(0);" class="btn btn-default btn-flat">Sign out</a>
				        </div>
				      </li>
				    </ul>
				  </li>
				</ul>
			</div>
		</nav>
	</header>
</template>

<script type="text/javascript">
	
	import router from '../routes/shop.js';
	export default {
		data () {
			return {
				currentUserName: null
			}
		},
		mounted () {

			this.currentUserName = this.$session.get('username')
		},
		methods: {
			async logout () {

				// let url = window.touchStone.routes.shop_admin_logout
				// notifier.asyncBlock(
				// 	axios.post(url),
				// 	resp => notifier.success(resp.data.message),
				// 	err => notifier.alert(err.message),
				// 	'Logging Out'
				// )

				Swal.fire({
					title: 'Logging Out',
					html: '<i class="fa fa-spinner fa-3x fa-spin"></i>',
					allowEnterKey: false,
					allowEscapeKey: false,
					showConfirmButton: false,
					allowOutsideClick: false,
				})

				let url = window.touchStone.routes.shop_admin_logout
				await axios.post(url).then(response => {

					if (response.data.error == 0) {
						
						Swal.close()
						this.$session.clear()
						router.push({ name: 'login'})
					} else {

						alert(response.data.message)
					}
				})
			},
			async testAPI (endPoint = 'GetProducts') {


				let jsObj = {
					endPoint: endPoint
				}

				let url = window.touchStone.routes.shop_admin_test_api
				await axios.post(url, jsObj).then(response => {

					console.log(response)
				})
			},
		}
	}
	
</script>