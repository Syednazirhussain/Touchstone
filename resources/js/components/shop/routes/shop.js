import Vue from 'vue'
import Router from 'vue-router'

import Home from '../pages/home.vue'
import Login from '../pages/login.vue'
import PageNotFound from '../pages/404.vue'

import UserList from '../pages/users/listing.vue'
import UserEdit from '../pages/users/edit.vue'
import UserShow from '../pages/users/show.vue'

import CountryList from '../pages/countries/listing.vue'
import CountryShow from '../pages/countries/show.vue'
import CountryEdit from '../pages/countries/edit.vue'
import CountryCreate from '../pages/countries/create.vue'

import AddressesList from '../pages/addresses/listing.vue'

import ProductCategoryList from '../pages/productCategory/listing.vue'
import ProductCategoryShow from '../pages/productCategory/show.vue'
import ProductCategoryEdit from '../pages/productCategory/edit.vue'
import ProductCategoryCreate from '../pages/productCategory/create.vue'

import BannerList from '../pages/banners/listing.vue'
import BannerEdit from '../pages/banners/edit.vue'
import BannerShow from '../pages/banners/show.vue'
import BannerCreate from '../pages/banners/create.vue'

import TopBarList from '../pages/topBar/listing.vue'
import TopBarEdit from '../pages/topBar/edit.vue'
import TopBarShow from '../pages/topBar/show.vue'

import BuyNowList from '../pages/buyNow/listing.vue'
import BuyNowEdit from '../pages/buyNow/edit.vue'
import BuyNowCreate from '../pages/buyNow/create.vue'

import ProductList from '../pages/products/listing.vue'
import ProductShow from '../pages/products/show.vue'
import ProductEdit from '../pages/products/edit.vue'

import FaqShow from '../pages/faq/show.vue'
import FaqEdit from '../pages/faq/edit.vue'
import FaqCreate from '../pages/faq/create.vue'

import ProductTabShow from '../pages/tab/show.vue'
import ProductTabEdit from '../pages/tab/edit.vue'
import ProductTabCreate from '../pages/tab/create.vue'

import FileShow from '../pages/files/show.vue'
import FileEdit from '../pages/files/edit.vue'
import FileCreate from '../pages/files/create.vue'

import SimilarProductShow from '../pages/similarProduct/show.vue'
import SimilarProductEdit from '../pages/similarProduct/edit.vue'
import SimilarProductCreate from '../pages/similarProduct/create.vue'

import ProductIconShow from '../pages/icons/show.vue'
import ProductIconEdit from '../pages/icons/edit.vue'

import ProductBundleShow from '../pages/bundles/show.vue'
import ProductBundleEdit from '../pages/bundles/edit.vue'
import ProductBundleCreate from '../pages/bundles/create.vue'

import PackageAdvantageShow from '../pages/packageAdvantage/show.vue'
import PackageAdvantageEdit from '../pages/packageAdvantage/edit.vue'
import PackageAdvantageCreate from '../pages/packageAdvantage/create.vue'

import PaymentInformationList from '../pages/paymentInformation/listing.vue'
import PaymentInformationEdit from '../pages/paymentInformation/edit.vue'
import PaymentInformationCreate from '../pages/paymentInformation/create.vue'

import SettingTermConditionEdit from '../pages/settings/term_n_condition.vue'
import CheckoutHtmlTextEdit from '../pages/settings/checkout_html_text.vue'
import SettingContactEdit from '../pages/settings/contact.vue'
import SettingHoursEdit from '../pages/settings/support_hours.vue'

import FreeShippingList from '../pages/freeShipping/listing.vue'
import FreeShippingShow from '../pages/freeShipping/show.vue'
import FreeShippingEdit from '../pages/freeShipping/edit.vue'
import FreeShippingCreate from '../pages/freeShipping/create.vue'

import LanguageList from '../pages/languages/listing.vue'
import LanguageShow from '../pages/languages/show.vue'
import LanguageEdit from '../pages/languages/edit.vue'
import LanguageCreate from '../pages/languages/create.vue'

import CheckoutFaqList from '../pages/checkoutFaq/listing.vue'
import CheckoutFaqShow from '../pages/checkoutFaq/show.vue'
import CheckoutFaqEdit from '../pages/checkoutFaq/edit.vue'

import TranslationList from '../pages/translation/listing.vue'
import TranslationEdit from '../pages/translation/edit.vue'

import NavigationList from '../pages/navigation/listing.vue'
import NavigationEdit from '../pages/navigation/edit.vue'
import NavigationCreate from '../pages/navigation/create.vue'
import NavigationSorting from '../pages/navigation/sorting.vue'

Vue.use(Router);
const router = new Router({
	base: /^\/shop\/?/i.test(location.pathname) ? '/shop/' : '/',
    routes: [    
        { path: '/login', name: 'login', component: Login },
        { path: '*', component: PageNotFound, meta: { requiresAuth: true } },

        { path: '/home', name: 'home', component: Home, meta: { requiresAuth: true } },

        { path: '/products', name: 'product_listing', component: ProductList, meta: { requiresAuth: true } },
        { path: '/products/:id', name: 'product_show', component: ProductShow, meta: { requiresAuth: true } },
        { path: '/products/:id/edit', name: 'product_edit', component: ProductEdit, meta: { requiresAuth: true } },
        
        { path: '/product/:product_id/faq/:id', name: 'product_faq_show', component: FaqShow, meta: { requiresAuth: true } },
        { path: '/product/:product_id/faq/:id/edit', name: 'product_faq_edit', component: FaqEdit, meta: { requiresAuth: true } },
        { path: '/product/:product_id/faq/create', name: 'product_faq_create', component: FaqCreate, meta: { requiresAuth: true } },

        { path: '/product/:product_id/tab/:id', name: 'product_tab_show', component: ProductTabShow, meta: { requiresAuth: true } },
        { path: '/product/:product_id/tab/:id/edit', name: 'product_tab_edit', component: ProductTabEdit, meta: { requiresAuth: true } },
        { path: '/product/:product_id/tab/create', name: 'product_tab_create', component: ProductTabCreate, meta: { requiresAuth: true } },

        { path: '/product/:subject_id/files/:id', name: 'product_file_show', component: FileShow, meta: { requiresAuth: true } },
        { path: '/product/:subject_id/files/:id/edit', name: 'product_file_edit', component: FileEdit, meta: { requiresAuth: true } },
        { path: '/product/:subject_id/files/:id/create', name: 'product_file_create', component: FileCreate, meta: { requiresAuth: true } },

        { path: '/product/:product_id/similar/:id', name: 'product_similar_product_show', component: SimilarProductShow, meta: { requiresAuth: true } },
        { path: '/product/:subject_id/similar/:id/edit', name: 'product_similar_product_edit', component: SimilarProductEdit, meta: { requiresAuth: true } },
        { path: '/product/:product_id/similar/create', name: 'product_similar_product_create', component: SimilarProductCreate, meta: { requiresAuth: true } },
        
        { path: '/product/:product_id/icon/:id', name: 'product_icon_show', component: ProductIconShow, meta: { requiresAuth: true } },
        { path: '/product/:product_id/icon/:id/edit', name: 'product_icon_edit', component: ProductIconEdit, meta: { requiresAuth: true } },
        
        { path: '/product/:product_id/bundles/:id', name: 'product_bundle_show', component: ProductBundleShow, meta: { requiresAuth: true } },
        { path: '/product/:product_id/bundles/:id/edit', name: 'product_bundle_edit', component: ProductBundleEdit, meta: { requiresAuth: true } },
        { path: '/product/:product_id/bundles/create', name: 'product_bundle_create', component: ProductBundleCreate, meta: { requiresAuth: true } },
        
        { path: '/product/:product_id/pack/:id', name: 'product_pack_show', component: PackageAdvantageShow, meta: { requiresAuth: true } },
        { path: '/product/:product_id/pack/:id/edit', name: 'product_pack_edit', component: PackageAdvantageEdit, meta: { requiresAuth: true } },
        { path: '/product/:product_id/pack/create', name: 'product_pack_create', component: PackageAdvantageCreate, meta: { requiresAuth: true } },
        
        { path: '/users', name: 'user_listing', component: UserList, meta: { requiresAuth: true } },
        { path: '/user/:id/edit', name: 'user_edit', component: UserEdit, meta: { requiresAuth: true } },
        { path: '/user/:id', name: 'user_show', component: UserShow, meta: { requiresAuth: true } },
        
        { path: '/navigation', name: 'navigation_listing', component: NavigationList, meta: { requiresAuth: true } },
        { path: '/navigation/:id/edit', name: 'navigation_edit', component: NavigationEdit, meta: { requiresAuth: true } },
        { path: '/navigation/create', name: 'navigation_create', component: NavigationCreate, meta: { requiresAuth: true } },
        { path: '/navigation/sorting', name: 'navigation_sorting', component: NavigationSorting, meta: { requiresAuth: true } },

        { path: '/countries', name: 'country_listing', component: CountryList, meta: { requiresAuth: true } },
        { path: '/countries/:id', name: 'country_show', component: CountryShow, meta: { requiresAuth: true } },
        { path: '/countries/:id/edit', name: 'country_edit', component: CountryEdit, meta: { requiresAuth: true } },
        { path: '/country/add', name: 'country_add', component: CountryCreate, meta: { requiresAuth: true } },
        
        { path: '/addresses', name: 'address_listing', component: AddressesList, meta: { requiresAuth: true } },
        
        { path: '/product-categories', name: 'product_category_listing', component: ProductCategoryList, meta: { requiresAuth: true } },
        { path: '/product-categories/:id', name: 'product_category_show', component: ProductCategoryShow, meta: { requiresAuth: true } },
        { path: '/product-categories/:id/edit', name: 'product_category_edit', component: ProductCategoryEdit, meta: { requiresAuth: true } },
        { path: '/product-categories/create', name: 'product_category_create', component: ProductCategoryCreate, meta: { requiresAuth: true } },

        { path: '/banners', name: 'banner_listing', component: BannerList, meta: { requiresAuth: true } },
        { path: '/banners/:id/edit', name: 'banner_edit', component: BannerEdit, meta: { requiresAuth: true } },
        { path: '/banners/:id', name: 'banner_show', component: BannerShow, meta: { requiresAuth: true } },
        { path: '/banners/create', name: 'banner_create', component: BannerCreate, meta: { requiresAuth: true } },
        
        { path: '/topbar', name: 'topbar_listing', component: TopBarList, meta: { requiresAuth: true } },
        { path: '/topbar/:id/edit', name: 'topbar_edit', component: TopBarEdit, meta: { requiresAuth: true } },
        { path: '/topbar/:id', name: 'topbar_show', component: TopBarShow, meta: { requiresAuth: true } },

        { path: '/buy-now', name: 'buyNow_listing', component: BuyNowList, meta: { requiresAuth: true } },
        { path: '/buy-now/:id/edit', name: 'buyNow_edit', component: BuyNowEdit, meta: { requiresAuth: true } },
        { path: '/buy-now/create', name: 'buyNow_create', component: BuyNowCreate, meta: { requiresAuth: true } },

        { path: '/payment-information', name: 'payment_information_listing', component: PaymentInformationList, meta: { requiresAuth: true } },
        { path: '/payment-information/:id/edit', name: 'payment_information_edit', component: PaymentInformationEdit, meta: { requiresAuth: true } },
        { path: '/payment-information/create', name: 'payment_information_create', component: PaymentInformationCreate, meta: { requiresAuth: true } },

        { path: '/settings/:id/edit/terms', name: 'setting_term_condition_edit', component: SettingTermConditionEdit, meta: { requiresAuth: true } },
        { path: '/settings/:id/edit/checkout_html_text', name: 'checkout_html_text_edit', component: CheckoutHtmlTextEdit, meta: { requiresAuth: true } },
        { path: '/settings/:id/edit/contact', name: 'setting_contact_edit', component: SettingContactEdit, meta: { requiresAuth: true } },
        { path: '/settings/:id/edit/hours', name: 'setting_hours_edit', component: SettingHoursEdit, meta: { requiresAuth: true } },
        
        { path: '/fsbar', name: 'fsbar_listing', component: FreeShippingList, meta: { requiresAuth: true } },
        { path: '/fsbar/:id', name: 'fsbar_show', component: FreeShippingShow, meta: { requiresAuth: true } },
        { path: '/fsbar/:id/edit', name: 'fsbar_edit', component: FreeShippingEdit, meta: { requiresAuth: true } },
        { path: '/fsbar/create', name: 'fsbar_create', component: FreeShippingCreate, meta: { requiresAuth: true } },

        { path: '/language', name: 'language_listing', component: LanguageList, meta: { requiresAuth: true } },
        { path: '/language/:id', name: 'language_show', component: LanguageShow, meta: { requiresAuth: true } },
        { path: '/language/:id/edit', name: 'language_edit', component: LanguageEdit, meta: { requiresAuth: true } },
        { path: '/language/create', name: 'language_create', component: LanguageCreate, meta: { requiresAuth: true } },

        { path: '/checkout_faq', name: 'checkoutFaq_listing', component: CheckoutFaqList, meta: { requiresAuth: true } },
        { path: '/checkout_faq/:id', name: 'checkoutFaq_show', component: CheckoutFaqShow, meta: { requiresAuth: true } },
        { path: '/checkout_faq/:id/edit', name: 'checkoutFaq_edit', component: CheckoutFaqEdit, meta: { requiresAuth: true } },
    
        { path: '/translations', name: 'translation_listing', component: TranslationList, meta: { requiresAuth: true } },
        { path: '/translations/:id/edit', name: 'translation_edit', component: TranslationEdit, meta: { requiresAuth: true } },


    ],
    // 'mode': 'history'
});


router.beforeEach((to, from, next) => {

    if (to.name != 'login') {

        if (to.meta.requiresAuth) {

			if (!Vue.prototype.$session.has('token')) {

            	next({name: 'login'})
			}
        }
    } else if (to.name == 'login') {

		if (Vue.prototype.$session.has('token')) {

        	next({name: 'home'})
		}
    }
    
    next()
})


export default router;
