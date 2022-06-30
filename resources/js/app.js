require('./bootstrap');

import Vue from 'vue';
import axios from 'axios';
import swal from 'sweetalert2'
import VueSession from 'vue-session'
import AWN from "awesome-notifications"

let options = {
	'position': 'top-right',
	'durations': {
		'global': 2000
	}
}

window.Swal = swal
window.notifier = new AWN()

Vue.use(VueSession, { persist: true })
Vue.component('pagination', require('laravel-vue-pagination'))

Vue.mixin({
	methods: {
		getReabableDate: function(date) {
			
			if (_.isEmpty(date) || date == '0000-00-00 00:00:00') {

				return 'No-Activity'
			}

			let ds = new Date()
			var t = date.split(/[- :]/);

			// Apply each element to the Date function
			var d = new Date(t[0], t[1]-1, t[2]);
			return d.toDateString();
	  }
	}
})


export const bus = new Vue()
import routes from './components/shop/routes/shop.js'
import view from './components/shop/views/index.vue'

axios.defaults.baseURL = window.touchStone.baseUrl
axios.defaults.headers.common.Accept = 'application/json'


axios.interceptors.request.use((config) => {

	if (Vue.prototype.$session.has('token')) {

		config.headers.Authorization =  'Bearer ' +Vue.prototype.$session.get('token')
	}

	return config
}, (error) => {
    
    return Promise.reject(error)
})


axios.interceptors.response.use((response) => {

	return response
}, (error) => {
    	
	if (error.response.status == 401) {

		Swal.fire({
            icon: "info",
            timer: 2000,
            title: error.response.data.message,
            text: "Please Login Again",
            showConfirmButton: false,
            allowOutsideClick: false,
            onClose: (result) => {

				Swal.close()
				Vue.prototype.$session.clear()
				routes.push({ name: 'login'})
            }
        })
	}

	return Promise.reject(error)
})

const app = new Vue({
    el: '#app',
	router: routes,
    render: h => h(view),
});

export default app;