<?php

use Illuminate\Support\Facades\Route;
use Themes\myWebsite\src\Controllers\MainController;
use Themes\myWebsite\src\Controllers\PostController;
use Themes\myWebsite\src\Controllers\ProductController;
use Themes\myWebsite\src\Controllers\CartController;
use Themes\myWebsite\src\Controllers\StockNotifyController;
use Themes\myWebsite\src\Controllers\PageController;
use Themes\myWebsite\src\Controllers\OrderController;
use Themes\myWebsite\src\Controllers\UserController;
use Themes\myWebsite\src\Controllers\SitemapController;
use Themes\myWebsite\src\Controllers\ContactController;
use Themes\myWebsite\src\Controllers\FavoriteController;
use Themes\myWebsite\src\Controllers\TicketController;
use Themes\myWebsite\src\Controllers\VerifyController;
use Themes\myWebsite\src\Controllers\DiscountController;
use Themes\myWebsite\src\Controllers\WalletController;
use Themes\myWebsite\src\Controllers\WorkSampleController;
// ------------------ Front Part Routes

Route::group(['as' => 'front.'], function () {
    // ------------------ MainController
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/get-new-captcha', [MainController::class, 'captcha']);

    // ------------------ posts
    Route::get('blogs/search', [PostController::class, 'search'])->name('blogs.search');
    Route::resource('blogs', PostController::class)->only(['index']);
    Route::get('blog/{blog}', [PostController::class,'show'])->name('blog.show');
    Route::get('blogs/category/{category}', [PostController::class, 'category'])->name('blogs.category');
    Route::get('blogs/tag/{tag}', [PostController::class, 'tag'])->name('blogs.tag');
    Route::post('blogs/{blog}/comments', [PostController::class, 'comments'])->name('blog.comments');

    // ------------------ workSample
    Route::get('work-samples/search', [WorkSampleController::class, 'search'])->name('workSample.search');
    Route::resource('work-samples', WorkSampleController::class)->only(['index']);
    Route::get('work-sample/{work_sample}', [WorkSampleController::class,'show'])->name('workSample.show');
    Route::get('work-samples/category/{category}', [WorkSampleController::class, 'category'])->name('workSample.category');
    Route::get('work-samples/tag/{tag}', [WorkSampleController::class, 'tag'])->name('work-samples.tag');
    Route::post('work-samples/{work_sample}/comments', [WorkSampleController::class, 'comments'])->name('workSample.comments');
    // ------------------ products
//    Route::resource('products', ProductController::class)->only(['show', 'index']);
//    Route::get('products/category/{category}', [ProductController::class, 'category'])->name('products.category');
//    Route::get('products/category-products/{category}', [ProductController::class, 'categoryProducts'])->name('products.category-products');
//    Route::get('products/category-specials/{category}', [ProductController::class, 'categorySpecials'])->name('products.category-specials');
//    Route::get('search', [ProductController::class, 'search'])->name('products.search');
//    Route::post('search', [ProductController::class, 'ajax_search'])->name('products.ajax_search');
//    Route::get('product/specials', [ProductController::class, 'specials'])->name('products.specials');
//    Route::get('product/discount', [ProductController::class, 'discount'])->name('products.discount');
//    Route::get('product/{product}/prices', [ProductController::class, 'prices'])->name('products.prices');
//    Route::get('product/compare/{product1}/{product2?}/{product3?}', [ProductController::class, 'compare'])->name('products.compare');
//    Route::post('product/compare', [ProductController::class, 'similarCompare'])->name('products.similar-compare');
//    Route::get('products/{price}/priceChart', [ProductController::class, 'priceChart'])->name('products.priceChart');


    // ------------------ ajax
    Route::post('/front/setCookieTheme', [MainController::class, 'setCookieTheme'])->name('front.setCookieTheme');
    Route::post('/front/setCookieColor', [MainController::class, 'setCookieColor'])->name('front.setCookieColor');


    // ------------------ cart
    Route::get('cart', [CartController::class, 'show'])->name('cart');
    Route::post('cart/{product}', [CartController::class, 'store'])->name('cart.store');
    Route::put('cart', [CartController::class, 'update']);
    Route::delete('cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

    Route::post('stock-notify', [StockNotifyController::class, 'store']);


    // ------------------ pages
    Route::get('pages/{page}', [PageController::class, 'show'])->name('pages.show');

    // ------------------ sitemap
    Route::get('sitemap', [SitemapController::class, 'index']);
    Route::get('sitemap-posts', [SitemapController::class, 'posts']);
    Route::get('sitemap-workSamples', [SitemapController::class, 'workSamples']);
    //Route::get('sitemap-pages', [SitemapController::class, 'pages']);
    //Route::get('sitemap-products', [SitemapController::class, 'products']);

    // ------------------ contacts
    Route::resource('contact', ContactController::class)->only(['index', 'store']);

    // ------------------ orders
    Route::any('orders/payment/callback/{gateway}', [OrderController::class, 'verify'])->name('orders.verify');

    // ------------------ wallet
    Route::any('wallet/payment/callback/{gateway}', [WalletController::class, 'verify'])->name('wallet.verify');

    // ------------------ authentication required
    Route::group(['middleware' => ['auth', 'verified', 'CheckPasswordChange']], function () {

        // ------------------ MainController
        Route::get('checkout', [MainController::class, 'checkout'])->name('checkout');
        Route::get('checkout-prices', [MainController::class, 'getPrices'])->name('checkout.prices');

        // ------------------ discount
        Route::post('discount', [DiscountController::class, 'store'])->name('discount.store');
        Route::delete('discount', [DiscountController::class, 'destroy'])->name('discount.destroy');

        // ------------------ orders
        Route::resource('orders', OrderController::class);
        Route::get('orders/pay/{order}', [OrderController::class, 'pay'])->name('orders.pay');

        // ------------------ wallet
        Route::resource('wallet', WalletController::class)->only(['index', 'show', 'create', 'store']);

        // ------------------ user
        Route::get('user/profile', [UserController::class, 'profile'])->name('user.profile');
        Route::get('user/comments', [UserController::class, 'comments'])->name('user.comments');
        Route::get('user/edit-profile', [UserController::class, 'editProfile'])->name('user.profile.edit');
        Route::put('user/profile', [UserController::class, 'update_profile'])->name('user.profile.update');
        Route::get('user/change-password', [UserController::class, 'changePassword'])->name('user.password');
        Route::put('user/change-password', [UserController::class, 'updatePassword'])->name('user.password.update');

        Route::group(['middleware' => ['EnsureForceChange']], function () {
            Route::get('user/force-change-password', [UserController::class, 'forceChangePassword'])->name('user.force-change-password');
            Route::post('user/force-change-password', [UserController::class, 'forceUpdatePassword'])->name('user.force-update-password');
        });

        // ------------------ products
//        Route::get('products/{price}/download', [ProductController::class, 'download'])->name('products.download');
//        Route::post('products/{product}/comments', [ProductController::class, 'comments'])->name('product.comments');


        // ------------------ favorites
        Route::resource('favorites', FavoriteController::class)->only(['index', 'store', 'destroy']);

        // ------------------ tickets
        Route::resource('tickets', TicketController::class)->except(['destroy']);
    });

    // ------------------ verify user routes
    Route::group(['middleware' => ['auth', 'notVerified', 'CheckPasswordChange']], function () {
        Route::get('verify', [VerifyController::class, 'showVerify'])->name('verify.showVerify');
        Route::post('verify', [VerifyController::class, 'verifyCode'])->name('verify.verifyCode')->middleware('throttle:15,1');
        Route::get('change-username', [VerifyController::class, 'showChangeUsername'])->name('verify.showChangeUsername');
        Route::post('change-username', [VerifyController::class, 'changeUsername'])->name('verify.changeUsername');
    });
});

// get auth user in 404 page
Route::fallback(function(){ return response()->view('errors.404', [], 404); });
