<template>
	<div class="login-box">
	  <div class="login-logo">
	    <a href="javascript:void(0);"><b>Touch</b>Stone</a>
	  </div>
	  <div class="login-box-body">
		
		<div class="alert alert-danger alert-dismissible" v-if="errors.length && displayErrors">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> Error(s):</h4>
			<ul>
				<li v-for="(error, index) in errors" v-bind:key="index">{{ error }}</li>
			</ul>
		</div>
	    <p class="login-box-msg">Admin Login</p>
	    <form v-on:submit.prevent="loginAttempt">
	      <div class="form-group has-feedback">
	        <input type="text" v-model="login.username" class="form-control" placeholder="Email">
	        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	        <input type="password" v-model="login.password" class="form-control" placeholder="Password">
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>
	      <div class="row">
	        <div class="col-xs-8">
	          <div class="checkbox icheck">
	            <label>
	              <input type="checkbox" v-model="login.rememberMe"> Remember Me
	            </label>
	          </div>
	        </div>
	        <div class="col-xs-4">
	          <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="isRequesting" v-if="isRequesting">
				<span>
					<i class="fa fa-spinner fa-1x fa-spin"></i>
				</span>
	          	Sign In
	          </button>
	          <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="isRequesting" v-else>
				Sign In
	          </button>
	        </div>
	      </div>
	    </form>
	  </div>
	</div>
</template>

<script type="text/javascript">

	import router from '../routes/shop.js';

	export default {
		data() {
			return {
				isRequesting: false,
				login: {
					username: '',
					password: '',
					rememberMe: false
				},
				errors: [],
				isLoggedIn: false,
				displayErrors: false
			}
		},
		methods: {
			async loginAttempt () {

				this.isRequesting = true
				let url = window.touchStone.routes.shop_admin_login
				await axios.post(url, this.login).then(response => {

					this.isRequesting = false
					if (response.data.error == 0) {
						
						this.$session.start()
		              	this.$session.set('token', response.data.token)
						this.$session.set('username', response.data.username)

						router.push({ name: 'home'})
					} else {

						let message = response.data.message

						if (_.isObject(message)) {

		    				_.forEach(message, (value, key) => {
		    					if (_.isArray(value)) {
		    						_.forEach(value, (item, index) => {
		    							this.errors.push(item)
		    						})
		    					}
		    				})
						} else {

							this.errors.push(message)
						}


		    			this.displayErrors = true
						let _this = this
						setTimeout(() => {
							
							_this.errors = []
							_this.displayErrors = false

						}, 2000)
					}
				})
			}
		},
	}

</script>