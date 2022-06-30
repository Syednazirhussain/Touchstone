<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\Shop\AuthController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\BuyNowController;
use App\Http\Controllers\TopBarController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ProductTabController;
use App\Http\Controllers\CheckoutFaqController;
use App\Http\Controllers\TranslationsController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProductBundlesController;
use App\Http\Controllers\SimilarProductsController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\FreeShippingBarController;
use App\Http\Controllers\PaymentInformationController;
use App\Http\Controllers\ProductPackAdvantagesController;

/*
|--------------------------------------------------------------------------
| Shop Routes
|--------------------------------------------------------------------------
|
| Here is where you can register shop routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "shop" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'shop'], function () {
	
	Route::view('/', 'shop.index');
	
	Route::group(['prefix' => 'api'], function () {	

		Route::post('/login', [AuthController::class, 'login'])->name('shop_admin_login');

		Route::group(['middleware' => ['auth:sanctum']], function () {

			Route::post('/logout', [AuthController::class, 'logout'])->name('shop_admin_logout');
			
			// Users
			Route::get('/user/search/{query}', [UsersController::class, 'search'])->name('shop_admin_users_search');
			
			Route::post('/test/api', [ProductController::class, 'testAPI'])->name('shop_admin_test_api');	
			
			Route::get('/products', [ProductController::class, 'index'])->name('shop_admin_products');	
			Route::get('/products/{id}', [ProductController::class, 'show'])->name('shop_admin_products_show');	
			Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('shop_admin_products_edit');	
			Route::put('/products/{id}/update', [ProductController::class, 'update'])->name('shop_admin_products_update');	
			
			Route::get('/product/{product_id}/faq', [FaqController::class, 'index'])->name('shop_admin_product_faq');	
			Route::get('/product/{product_id}/faq/{id}', [FaqController::class, 'show'])->name('shop_admin_product_faq_show');	
			Route::post('/product/{product_id}/faq/create', [FaqController::class, 'store'])->name('shop_admin_product_faq_store');	
			Route::get('/product/{product_id}/faq/{id}/edit', [FaqController::class, 'edit'])->name('shop_admin_product_faq_edit');	
			Route::put('/product/{product_id}/faq/{id}/update', [FaqController::class, 'update'])->name('shop_admin_product_faq_update');	
			Route::delete('/product/{product_id}/faq/{id}/delete', [FaqController::class, 'destroy'])->name('shop_admin_product_faq_destroy');	

			Route::get('/product/{product_id}/tabs', [ProductTabController::class, 'index'])->name('shop_admin_product_tab');	
			Route::get('/product/{product_id}/tabs/{id}', [ProductTabController::class, 'show'])->name('shop_admin_product_tab_show');	
			Route::post('/product/{product_id}/tabs/create', [ProductTabController::class, 'store'])->name('shop_admin_product_tab_store');	
			Route::get('/product/{product_id}/tabs/{id}/edit', [ProductTabController::class, 'edit'])->name('shop_admin_product_tab_edit');	
			Route::put('/product/{product_id}/tabs/{id}/update', [ProductTabController::class, 'update'])->name('shop_admin_product_tab_update');	
			Route::delete('/product/{product_id}/tabs/{id}/delete', [ProductTabController::class, 'destroy'])->name('shop_admin_product_tab_destroy');	
			
			Route::get('/product/{product_id}/files', [FileController::class, 'index'])->name('shop_admin_product_file');	
			Route::post('/product/{product_id}/files/create', [FileController::class, 'store'])->name('shop_admin_product_file_store');	
			Route::get('/product/{product_id}/files/{id}', [FileController::class, 'show'])->name('shop_admin_product_file_show');	
			Route::get('/product/{product_id}/files/{id}/edit', [FileController::class, 'edit'])->name('shop_admin_product_file_edit');	
			Route::post('/product/{product_id}/files/{id}/update', [FileController::class, 'update'])->name('shop_admin_product_file_update');	
			Route::delete('/product/{product_id}/files/{id}', [FileController::class, 'destroy'])->name('shop_admin_product_file_destroy');	
			
			Route::get('/product/{product_id}/similar', [SimilarProductsController::class, 'index'])->name('shop_admin_product_similar');	
			Route::get('/product/{product_id}/similar/{id}', [SimilarProductsController::class, 'show'])->name('shop_admin_product_product_similar_show');	
			Route::get('/product/similar/create', [SimilarProductsController::class, 'create'])->name('shop_admin_product_similar_create');	
			Route::post('/product/{product_id}/similar/store', [SimilarProductsController::class, 'store'])->name('shop_admin_product_product_similar_store');	
			Route::get('/product/{product_id}/similar/{id}/edit', [SimilarProductsController::class, 'edit'])->name('shop_admin_product_product_similar_edit');	
			Route::put('/product/{product_id}/similar/{id}/update', [SimilarProductsController::class, 'update'])->name('shop_admin_product_product_similar_update');	
			Route::delete('/product/{product_id}/similar/{id}', [SimilarProductsController::class, 'destroy'])->name('shop_admin_product_product_similar_destroy');	

			Route::get('/product/{product_id}/icons', [IconsController::class, 'index'])->name('shop_admin_product_icon');	
			Route::get('/product/{product_id}/icons/{id}', [IconsController::class, 'show'])->name('shop_admin_product_icon_show');	
			Route::get('/product/{product_id}/icons/{id}/edit', [IconsController::class, 'edit'])->name('shop_admin_product_icon_edit');	
			Route::put('/product/{product_id}/icons/{id}/update', [IconsController::class, 'update'])->name('shop_admin_product_icon_update');	
			Route::delete('/product/{product_id}/icons/{id}', [IconsController::class, 'destroy'])->name('shop_admin_product_icon_destroy');	

			Route::get('/product/{product_id}/bundles', [ProductBundlesController::class, 'index'])->name('shop_admin_product_bundle');	
			Route::post('/product/{product_id}/bundles/store', [ProductBundlesController::class, 'store'])->name('shop_admin_product_bundle_store');	
			Route::get('/product/{product_id}/bundles/{id}', [ProductBundlesController::class, 'show'])->name('shop_admin_product_bundle_show');	
			Route::get('/product/{product_id}/bundles/{id}/edit', [ProductBundlesController::class, 'edit'])->name('shop_admin_product_bundle_edit');	
			Route::put('/product/{product_id}/bundles/{id}/update', [ProductBundlesController::class, 'update'])->name('shop_admin_product_bundle_update');	
			Route::delete('/product/{product_id}/bundles/{id}', [ProductBundlesController::class, 'destroy'])->name('shop_admin_product_bundle_destroy');	
			
			Route::get('/product/{product_id}/pack', [ProductPackAdvantagesController::class, 'index'])->name('shop_admin_product_pack');	
			Route::post('/product/{product_id}/pack/store', [ProductPackAdvantagesController::class, 'store'])->name('shop_admin_product_pack_store');	
			Route::get('/product/{product_id}/pack/{id}', [ProductPackAdvantagesController::class, 'show'])->name('shop_admin_pack_show');	
			Route::get('/product/{product_id}/pack/{id}/edit', [ProductPackAdvantagesController::class, 'edit'])->name('shop_admin_product_pack_edit');	
			Route::put('/product/{product_id}/pack/{id}/update', [ProductPackAdvantagesController::class, 'update'])->name('shop_admin_product_pack_update');	
			Route::delete('/product/{product_id}/pack/{id}', [ProductPackAdvantagesController::class, 'destroy'])->name('shop_admin_product_pack_destroy');	

			Route::get('/users', [UsersController::class, 'index'])->name('shop_admin_users');
			Route::get('/user/{id}', [UsersController::class, 'show'])->name('shop_admin_user_find');
			Route::get('/user/{id}/edit', [UsersController::class, 'edit'])->name('shop_admin_user_edit');
			Route::put('/user/{id}/update', [UsersController::class, 'update'])->name('shop_admin_user_update');
			Route::delete('/user/{id}', [UsersController::class, 'destroy'])->name('shop_admin_user_destroy');

			// Product Category
			Route::get('/product-categories', [ProductCategoryController::class, 'index'])->name('shop_admin_product_categories');
			Route::post('/product-category', [ProductCategoryController::class, 'store'])->name('shop_admin_product_category_store');
			Route::get('/product-category/{id}', [ProductCategoryController::class, 'show'])->name('shop_admin_product_category_show');
			Route::get('/product-category/{id}/edit', [ProductCategoryController::class, 'edit'])->name('shop_admin_product_category_edit');
			Route::put('/product-category/{id}/update', [ProductCategoryController::class, 'update'])->name('shop_admin_product_category_update');
			Route::delete('/product-category/{id}', [ProductCategoryController::class, 'destroy'])->name('shop_admin_product_category_destroy');
			
			// Countries
			Route::get('/country', [CountriesController::class, 'index'])->name('shop_admin_countries');
			Route::get('/country/{id}', [CountriesController::class, 'show'])->name('shop_admin_country_show');
			Route::post('/country', [CountriesController::class, 'store'])->name('shop_admin_country_store');
			Route::get('/country/{id}/edit', [CountriesController::class, 'edit'])->name('shop_admin_country_edit');
			Route::put('/country/{id}/update', [CountriesController::class, 'update'])->name('shop_admin_country_update');
			Route::delete('/country/{id}', [CountriesController::class, 'destroy'])->name('shop_admin_country_destroy');
		
			Route::get('/addresses', [AddressesController::class, 'index'])->name('shop_admin_addresses');
			Route::get('/address/{id}', [AddressesController::class, 'show'])->name('shop_admin_addresses_show');
		
			Route::get('/banners', [BannersController::class, 'index'])->name('shop_admin_banners');
			Route::post('/banner', [BannersController::class, 'store'])->name('shop_admin_banner_store');
			Route::get('/banner/{id}', [BannersController::class, 'show'])->name('shop_admin_banner_show');
			Route::get('/banner/{id}/edit', [BannersController::class, 'edit'])->name('shop_admin_banner_edit');
			Route::put('/banner/{id}/update', [BannersController::class, 'update'])->name('shop_admin_banner_update');
			Route::delete('/banner/{id}', [BannersController::class, 'destroy'])->name('shop_admin_banner_destroy');
			
			Route::get('/topbar', [TopBarController::class, 'index'])->name('shop_admin_topbar');
			Route::get('/topbar/{id}', [TopBarController::class, 'show'])->name('shop_admin_topbar_show');
			Route::post('/topbar', [TopBarController::class, 'store'])->name('shop_admin_topbar_store');
			Route::get('/topbar/{id}/edit', [TopBarController::class, 'edit'])->name('shop_admin_topbar_edit');
			Route::put('/topbar/{id}/update', [TopBarController::class, 'update'])->name('shop_admin_topbar_update');
			Route::delete('/topbar/{id}', [TopBarController::class, 'destroy'])->name('shop_admin_topbar_destroy');

			Route::get('/buy-now', [BuyNowController::class, 'index'])->name('shop_admin_buynow');
			Route::get('/buy-now/create', [BuyNowController::class, 'create'])->name('shop_admin_buynow_create');
			Route::post('/buy-now', [BuyNowController::class, 'store'])->name('shop_admin_buynow_store');
			Route::get('/buy-now/{id}/edit', [BuyNowController::class, 'edit'])->name('shop_admin_buynow_edit');
			Route::put('/buy-now/{id}/update', [BuyNowController::class, 'update'])->name('shop_admin_buynow_update');
			Route::delete('/buy-now/{id}', [BuyNowController::class, 'destroy'])->name('shop_admin_buynow_destroy');

			Route::get('/payment-information', [PaymentInformationController::class, 'index'])->name('shop_admin_paymentInformation');
			Route::post('/payment-information', [PaymentInformationController::class, 'store'])->name('shop_admin_paymentInformation_store');
			Route::get('/payment-information/{id}/edit', [PaymentInformationController::class, 'edit'])->name('shop_admin_paymentInformation_edit');
			Route::put('/payment-information/{id}/update', [PaymentInformationController::class, 'update'])->name('shop_admin_paymentInformation_update');
			Route::delete('/payment-information/{id}', [PaymentInformationController::class, 'destroy'])->name('shop_admin_paymentInformation_destroy');

			Route::get('/setting/{id}/edit', [SettingsController::class, 'edit'])->name('shop_admin_setting_edit');
			Route::put('/setting/{id}/update', [SettingsController::class, 'update'])->name('shop_admin_setting_update');

			Route::get('/fsbar', [FreeShippingBarController::class, 'index'])->name('shop_admin_fsbar');
			Route::get('/fsbar/create', [FreeShippingBarController::class, 'create'])->name('shop_admin_fsbar_create');
			Route::post('/fsbar', [FreeShippingBarController::class, 'store'])->name('shop_admin_fsbar_store');
			Route::get('/fsbar/{id}', [FreeShippingBarController::class, 'show'])->name('shop_admin_fsbar_show');
			Route::get('/fsbar/{id}/edit', [FreeShippingBarController::class, 'edit'])->name('shop_admin_fsbar_edit');
			Route::put('/fsbar/{id}/update', [FreeShippingBarController::class, 'update'])->name('shop_admin_fsbar_update');
			Route::delete('/fsbar/{id}', [FreeShippingBarController::class, 'destroy'])->name('shop_admin_fsbar_destroy');

			Route::get('/language', [LanguagesController::class, 'index'])->name('shop_admin_language');
			Route::post('/language', [LanguagesController::class, 'store'])->name('shop_admin_language_store');
			Route::get('/language/{id}', [LanguagesController::class, 'show'])->name('shop_admin_language_show');
			Route::get('/language/{id}/edit', [LanguagesController::class, 'edit'])->name('shop_admin_language_edit');
			Route::put('/language/{id}/update', [LanguagesController::class, 'update'])->name('shop_admin_language_update');
			Route::delete('/language/{id}', [LanguagesController::class, 'destroy'])->name('shop_admin_language_delete');

			Route::get('/checkout-faq', [CheckoutFaqController::class, 'index'])->name('shop_admin_checkoutFaq');
			Route::get('/checkout-faq/{id}', [CheckoutFaqController::class, 'show'])->name('shop_admin_checkoutFaq_show');
			Route::get('/checkout-faq/{id}/edit', [CheckoutFaqController::class, 'edit'])->name('shop_admin_checkoutFaq_edit');
			Route::put('/checkout-faq/{id}/update', [CheckoutFaqController::class, 'update'])->name('shop_admin_checkoutFaq_update');
			Route::delete('/checkout-faq/{id}', [CheckoutFaqController::class, 'destroy'])->name('shop_admin_checkoutFaq_destroy');

			Route::get('/translation', [TranslationsController::class, 'index'])->name('shop_admin_translation');
			Route::get('/translation/{id}/edit', [TranslationsController::class, 'edit'])->name('shop_admin_translation_edit');
			Route::put('/translation/{id}/update', [TranslationsController::class, 'update'])->name('shop_admin_translation_update');

			Route::get('/navigation', [NavigationController::class, 'index'])->name('shop_admin_navigation');
			Route::get('/navigation/sorting', [NavigationController::class, 'sorting'])->name('shop_admin_navigation_sorting');
			Route::get('/navigation/create', [NavigationController::class, 'create'])->name('shop_admin_navigation_create');	
			Route::post('/navigation', [NavigationController::class, 'store'])->name('shop_admin_navigation_store');
			Route::get('/navigation/{id}/edit', [NavigationController::class, 'edit'])->name('shop_admin_navigation_edit');
			Route::put('/navigation/{id}/update', [NavigationController::class, 'update'])->name('shop_admin_navigation_update');
			Route::delete('/navigation/{id}', [NavigationController::class, 'destroy'])->name('shop_admin_navigation_destroy');
		



		});	
	});
});

