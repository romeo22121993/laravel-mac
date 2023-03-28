<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\StripeController;
use App\Http\Controllers\Frontend\CashController;
use App\Http\Controllers\Frontend\UserOrderController;
use App\Http\Controllers\Frontend\GameController;
use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\PostController as FrontendPostController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


/** All Pages without needed to log in */
Route::group(['middleware' => ['web']], function () {

    /* Routes with passwords */
    Route::get('/logout',                 [UserAuthController::class, 'logout'])->middleware('auth');
    Route::get('/forgot-password',        [UserAuthController::class, 'forgotPassword' ])->middleware('guest')->name('password.forgot1');
    Route::post('/forgot-password',       [UserAuthController::class, 'requestPassword'])->middleware('guest')->name('password.email1');
    Route::get('/reset-password/{token}', [UserAuthController::class, 'resetPasswordPage'])->middleware('guest')->name('password.reset1');
    Route::post('/reset-password',        [UserAuthController::class, 'changePassword'])->middleware('guest')->name('password.update1');
    /* */

    Route::get('/',         [FrontendController::class, 'mainPage'])->name('home');
    Route::get('/platform', [FrontendController::class, 'platformPage'])->name('platform');
    Route::get('/sign-up',  [FrontendController::class, 'signUpPage'])->name('signup');
    Route::get('/podcast',  [FrontendController::class, 'podcastPage'])->name('podcast');
    Route::get('/blog',     [FrontendController::class, 'blogPage'])->name('blog');
    Route::get('/contact',  [FrontendController::class, 'contactPage'])->name('contact');
    Route::get('/about',    [FrontendController::class, 'aboutPage'])->name('about');

    Route::get('/post/{slug}',    [FrontendPostController::class, 'singlePostPage'])->name('single.post');

    // Ajax requests for frontend page
    Route::group(['prefix'=> 'ajax'], function(){

        Route::post('/contactForm',     [FrontendContactController::class, 'contactFormAjax']);
        Route::post('/loadPostsByAjax', [FrontendPostController::class, 'loadPostsByAjax']);

    });

    /* Ecomerce site part */
    Route::prefix('products')->group(function () {
        Route::get('/{slug}',           [FrontendProductController::class, 'ProductDetails'])->name('product.details');
        Route::get('/category/{slug}',  [FrontendProductController::class, 'CategoriesProducts'])->name('products.categories.list');
        Route::get('/tags/{tag}',       [FrontendProductController::class, 'TagWiseProduct'])->name('products.tags.list');
        Route::get('/colors/{color}',   [FrontendProductController::class, 'ColorWiseProduct'])->name('products.colors.list');
        Route::get('/sizes/{size}',     [FrontendProductController::class, 'SizeWiseProduct'])->name('products.sizes.list');
    });

    // Shop Page Route
    Route::get('/shop',                 [ShopController::class, 'ShopPage'])->name('shop');
    Route::post('/shop/filter',         [ShopController::class, 'ShopFilter'])->name('shop.filter');

    /// Product Search Route
    Route::get('/search',               [FrontendProductController::class, 'ProductSearch'])->name('product.search');
    Route::post('/ajax/search-product', [FrontendProductController::class, 'SearchProduct']);

    // Wishlist page
    Route::get('/wishlist',             [WishlistController::class, 'ViewWishlist'])->name('wishlist');

    // My Cart Page All Routes
    Route::get('/mycart',               [CartController::class, 'MyCart'])->name('mycart');

    // Checkout Routes
    Route::get('/checkout',          [CheckoutController::class, 'Checkout'])->name('checkout');
    Route::post('/checkout/store',   [CheckoutController::class, 'CheckoutStore'])->name('checkout.store');

    Route::post('/cash/order',       [CashController::class, 'CashOrder'])->name('cash.order');
    Route::post('/stripe/order',     [StripeController::class, 'StripeOrder'])->name('stripe.order');

    /*  Ajax requests */
    Route::group(['prefix' => 'ajax'], function () {

        // Categories ajax requests
        Route::prefix('category')->group(function () {
            Route::get('/subcategory/{category_id}',    [ProductCategoryController::class, 'GetSubCategory']);
        });

        Route::post('/add-to-wishlist/{product_id}', [WishlistController::class, 'AddToWishlist']);
        Route::get('/wishlist-remove/{id}',          [WishlistController::class, 'RemoveWishlistProduct']);
        Route::get('/get-wishlist-product',          [WishlistController::class, 'GetWishlistProduct']);

        // Product View Modal with Ajax
        Route::get('/product/view/modal/{id}',       [FrontendProductController::class, 'ProductViewAjax']);

        // Add to Cart Store Data
        Route::post('/cart/add/{id}',                [CartController::class, 'AddToCart']);

        // Get Data from mini cart
        Route::get('/product/miniCart',              [CartController::class, 'AddMiniCart']);

        Route::get('/cart-increment/{rowId}',        [CartController::class, 'CartIncrement']);
        Route::get('/cart-decrement/{rowId}',        [CartController::class, 'CartDecrement']);

        Route::get('/cart-remove/{rowId}',           [CartController::class, 'RemoveCartProduct']);

        Route::get('/get-cart-product',              [CartController::class, 'GetCartProduct']);

        // Remove mini cart
        Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);

        Route::post('/coupon-apply',      [CouponController::class, 'CouponApply']);
        Route::get('/coupon-calculation', [CouponController::class, 'CouponCalculation']);
        Route::get('/coupon-remove',      [CouponController::class, 'CouponRemove']);

        // Checkout Functions
        Route::get('/district-get/{division_id}', [CheckoutController::class, 'DistrictGetAjax']);
        Route::get('/state-get/{district_id}',    [CheckoutController::class, 'StateGetAjax']);

    });

    Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {

        /// Order Traking Route
        Route::post('/order/tracking',             [UserOrderController::class, 'OrderTraking'])->name('order.tracking');
        Route::get('/my/orders',                   [UserOrderController::class, 'MyOrders'])->name('my.orders');
        Route::get('/order_details/{order_id}',    [UserOrderController::class, 'OrderDetails']);
        Route::get('/invoice_download/{order_id}', [UserOrderController::class, 'InvoiceDownload']);
        Route::post('/return/order/{order_id}',    [UserOrderController::class, 'ReturnOrder'])->name('return.order');
        Route::get('/return/order/list',           [UserOrderController::class, 'ReturnOrderList'])->name('return.order.list');
        Route::get('/cancel/orders',               [UserOrderController::class, 'CancelOrders'])->name('cancel.orders');

    });


});


/* TODO later: chat-game page */
Route::group(['middleware' => ['auth:sanctum', 'web']], function () {
    Route::get('/chat',            [ChatController::class, 'ChatVue'])->name('chat');
    Route::get('/chat-vue',        [ChatController::class, 'ChatVue1'])->name('chat1');
    Route::get('/tic-toc-game',    [GameController::class, 'GamePage'])->name('game-tik-tok');
    Route::post('/new-game',       [GameController::class, 'newGame']);
    Route::get('/board/{id}',      [GameController::class, 'board']);
    Route::post('/play/{id}',      [GameController::class, 'play']);
    Route::post('/game-over/{id}', [GameController::class, 'gameOver']);


    Route::middleware('auth:sanctum')->get('/chat/rooms',                     [ChatController::class, 'rooms']);
    Route::middleware('auth:sanctum')->get('/chat/rooms/{roomId}/messages',   [ChatController::class, 'messages']);
    Route::middleware('auth:sanctum')->post('/chat/rooms/{roomId}/messages',  [ChatController::class, 'newMessage']);
    Route::middleware('auth:sanctum')->post('/chat/rooms/create',             [ChatController::class, 'newRoom']);

});
