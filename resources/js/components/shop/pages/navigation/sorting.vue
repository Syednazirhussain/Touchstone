<style scoped>

	/* Shoaib Styles */

	.list-items-style{
		border: none;
		padding:0;
	}
	

	.list-items-style p {
	    margin-bottom: 5px;
	    border: 1px solid #ccc;
	    background: #fff;
	    height: 33px;
	    line-height: 29px;
	    padding-left: 10px;
	}

	.list-items-style p:hover {
		background: #95d3f7;
	}

	.list-inner-items-style {
	    font-size: 12px;
	    color: #4c4743;
	    padding: 0 10px;
	    height: 33px;
	    line-height: 33px;
	    margin-bottom: 5px;
	    margin-left: 35px;
	    border: 1px solid #ccc;
	    background: #fff;
	    border-radius: 0 !important;
	}

	.list-inner-items-style:hover {
	    background: #95d3f7;
	}

	.list-items-style p a {
	    position: relative;
	    right: 5px;
	    float: right;
	    padding: 0;
	    height: 24px;
	    width: 25px;
	    top: 3px;
	    font-size: 11px;
	    line-height: 22px;
	}

	.list-inner-items-style a {
	    position: relative;
	    right: -6px;
	    float: right;
	    padding: 0;
	    height: 24px;
	    width: 25px;
	    top: 3px;
	    font-size: 11px;
	    line-height: 22px;
	}

	.list-items-style p:before {
	    content: "\e235 \e235";
	    font-family: 'Glyphicons Halflings';
	    min-width: 22px;
	    display: inline-block;
	    letter-spacing: -9px;
	    margin-left: -5px;
	    opacity: .4;
	}

	.list-inner-items-style:before {
	    content: "\e235 \e235";
	    font-family: 'Glyphicons Halflings';
	    min-width: 22px;
	    display: inline-block;
	    letter-spacing: -9px;
	    margin-left: -5px;
	    opacity: .4;
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
						Navigation Sorting
					</h1>
					<ol class="breadcrumb">
						<li>
							<router-link :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
						</li>
						<li>
							<a href="javascript:void(0);">Navigation Sorting</a>
						</li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12" v-if="isLoaded">
						    <div class="box box-primary">
						    	<div class="panel">
						    		<div class="panel-heading">
						    			Navigation Sorting						    			
						    		</div>
						    		<div class="panel-body">
										<draggable class="list-group" tag="ul" v-model="navigations" v-bind="dragOptions" @start="drag = true" @end="drag = false" @update="onUpdate">
											<transition-group type="transition" :name="!drag ? 'flip-list' : null">
												<li class="list-group-item list-items-style" v-for="navigation in navigations" :key="navigation.id">
													<p> {{ navigation.name }} 
														<a @click="navigationEdit(navigation.id)" href="javascript:void(0);" class="btn btn-primary">
															<i class="fa fa-pencil"></i>
														</a>
													</p>
													<transition-group type="transition">
														<li class="list-group-item list-inner-items-style" v-for="item in navigation.children" :key="item.id">
															{{ item.name }} <a @click="navigationEdit(item.id)" href="javascript:void(0);" class="btn btn-primary">
																<i class="fa fa-pencil"></i>
															</a>
														</i>
														</li>
													</transition-group>
												</li>
											</transition-group>
										</draggable>						    			
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
	
	import router from '../../routes/shop.js'
	// https://www.npmjs.com/package/vuedraggable
	import draggable from 'vuedraggable'
	
	import adminHeader from '../../layouts/header.vue'
	import adminSidebar from '../../layouts/sidebar.vue'
	import adminFooter from '../../layouts/footer.vue'

	export default {
		data () {
			return {
				isLoaded: false,
				navigations: [],
				drag: false
			}
		},
		mounted () {

			this.getNavigationSorting()
		},
		computed: {
			dragOptions() {
				return {
					animation: 200,
					group: "description",
					disabled: false,
					ghostClass: "ghost"
				}
			}
		},
		components: { 
			'admin-header': adminHeader,
			'admin-sidebar': adminSidebar,
			'admin-footer': adminFooter,
			'draggable': draggable
		},
		methods: {
			onUpdate (e) {

				console.log(e)
			},
			navigationEdit (id) {

				router.push({ name: 'navigation_edit', params: { id: id }})
			},
			async getNavigationSorting () {

				this.isLoaded = false

				let url = window.touchStone.routes.shop_admin_navigation_sorting
				await axios.get(url).then(response => {

					this.isLoaded = true
					this.navigations = response.data.payload

					console.log(this.navigations)
				})
			},
		}
	}

</script>