<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Enums\Category;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductBrandController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\PostController as FrontendPostController;

use App\Http\Controllers\Subscriber\DashboardController;

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


/** All Pages with User dashboards */
Route::group(['prefix'=> 'dashboard', 'middleware' => ['auth', 'isSubscriber']], function(){

    Route::get('/',                [DashboardController::class, 'mainPage'])->name('dashboard.main');
    Route::get('/admin-articles',  [DashboardController::class, 'articlesPage'])->name('dashboard.articles');
    Route::get('/admin-campaigns', [DashboardController::class, 'campaignPage'])->name('dashboard.campaigns');
    Route::get('/admin-resources', [DashboardController::class, 'resourcesPage'])->name('dashboard.resources');
    Route::get('/admin-courses',   [DashboardController::class, 'coursesPage'])->name('dashboard.courses');
    Route::get('/admin-guides',    [DashboardController::class, 'guidesPage'])->name('dashboard.guides');


});

/** All Pages with Admin dashboards */
Route::group(['prefix'=> 'wpadmin', 'middleware' => ['auth', 'isAdmin']], function(){
    Route::get('/', [AdminController::class, 'mainPage'])->name('wpadmin.main');

    Route::get('/change-user-settings',       [ProfileController::class, 'changeSettings'])->name('wpadmin.change.profile');
    Route::post('/change-user-settings/{id}', [ProfileController::class, 'updateSettings'])->name('wpadmin.update.profile');
    Route::get('/change-password',            [ProfileController::class, 'changePassword'])->name('wpadmin.change.password');
    Route::post('/change-password/{id}',      [ProfileController::class, 'updatePassword'])->name('wpadmin.update.password');

    Route::group(['prefix'=> 'users'], function() {
        Route::get('/',             [UserController::class, 'usersPage'])->name('wpadmin.users');
        Route::get('/add',          [UserController::class, 'addUser'])->name('wpadmin.users.add');
        Route::post('/store',       [UserController::class, 'StoreUser'])->name('wpadmin.users.store');
        Route::get('/edit/{id}',    [UserController::class, 'EditUser'])->name('wpadmin.users.edit');
        Route::post('/update/{id}', [UserController::class, 'UpdateUser'])->name('wpadmin.users.update');
        Route::get('/delete/{id}',  [UserController::class, 'DeleteUser'])->name('wpadmin.users.delete');
    });

    Route::group(['prefix'=> 'posts'], function() {
        Route::get('/',              [PostController::class, 'postsPage'])->name('wpadmin.posts');
        Route::get('/add',           [PostController::class, 'addPost'])->name('wpadmin.posts.add');
        Route::post('/store',        [PostController::class, 'StorePost'])->name('wpadmin.posts.store');
        Route::get('/edit/{id}',     [PostController::class, 'EditPost'])->name('wpadmin.posts.edit');
        Route::post('/update/{id}',  [PostController::class, 'UpdatePost'])->name('wpadmin.posts.update');
        Route::get('/delete/{id}',   [PostController::class, 'DeletePost'])->name('wpadmin.posts.delete');
        Route::get('/category/{id}', [PostController::class, 'postsPageByCategory'])->name('wpadmin.posts.by.categories');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [PostCategoryController::class, 'postsCategoryPage'])->name('wpadmin.posts.categories');
            Route::get('/add',          [PostCategoryController::class, 'addPostCategory'])->name('wpadmin.posts.categories.add');
            Route::post('/store',       [PostCategoryController::class, 'StorePostCategory'])->name('wpadmin.posts.categories.store');
            Route::get('/edit/{id}',    [PostCategoryController::class, 'EditPostCategory'])->name('wpadmin.posts.categories.edit');
            Route::post('/update/{id}', [PostCategoryController::class, 'UpdatePostCategory'])->name('wpadmin.posts.categories.update');
            Route::get('/delete/{id}',  [PostCategoryController::class, 'DeletePostCategory'])->name('wpadmin.posts.categories.delete');
        });
    });

    Route::group(['prefix'=> 'pages'], function() {
        Route::get('/',             [PageController::class, 'pagesPage'])->name('wpadmin.pages');
        Route::get('/add',          [PageController::class, 'addPage'])->name('wpadmin.pages.add');
        Route::post('/store',       [PageController::class, 'StorePage'])->name('wpadmin.pages.store');
        Route::get('/edit/{id}',    [PageController::class, 'EditPage'])->name('wpadmin.pages.edit');
        Route::post('/update/{id}', [PageController::class, 'UpdatePage'])->name('wpadmin.pages.update');
        Route::get('/delete/{id}',  [PageController::class, 'DeletePage'])->name('wpadmin.pages.delete');
    });

    Route::group(['prefix'=> 'contacts'], function() {
        Route::get('/',             [ContactController::class, 'indexPage'])->name('wpadmin.contacts');
        Route::get('/show/{id}',    [ContactController::class, 'showContact'])->name('wpadmin.contacts.show');
        Route::get('/delete/{id}',  [ContactController::class, 'DeleteContact'])->name('wpadmin.contacts.delete');
    });

});

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

    Route::get('/post/{slug}', [FrontendPostController::class, 'singlePostPage'])->name('single.post');

    // Ajax requests for frontend page
    Route::group(['prefix'=> 'ajax'], function(){

        Route::post('/contactForm',     [FrontendContactController::class, 'contactFormAjax']);
        Route::post('/loadPostsByAjax', [FrontendPostController::class, 'loadPostsByAjax']);


    });

});


/** !!! Routes from big ecommerce project  !!! */


Route::group(['middleware' => ['web']], function () {

    // My Cart Page All Routes
    Route::get('/mycart',            [CartController::class, 'MyCart'])->name('mycart');

    // Checkout Routes
    Route::get('/checkout',          [CheckoutController::class, 'Checkout'])->name('checkout');
    Route::post('/checkout/store',   [CheckoutController::class, 'CheckoutStore'])->name('checkout.store');

    /*  Ajax requests
    Route::group(['prefix' => 'ajax'], function () {

        // Categories ajax requests
        Route::prefix('category')->group(function () {
            Route::get('/subcategory/{category_id}', [CategoryController::class, 'GetSubCategory']);
            Route::get('/sub-subcategory/{subcategory_id}', [CategoryController::class, 'GetSubSubCategory']);
        });

        // Product View Modal with Ajax
        Route::get('/product/view/modal/{id}', [FrontEndController::class, 'ProductViewAjax']);

        // Add to Cart Store Data
        Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);

        // Get Data from mini cart
        Route::get('/product/mini/cart/', [CartController::class, 'AddMiniCart']);

        // Remove mini cart
        Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);

        // Add to Wishlist - user actions
        Route::post('/add-to-wishlist/{product_id}', [CartController::class, 'AddToWishlist']);

        Route::get('/get-wishlist-product', [WishlistController::class, 'GetWishlistProduct']);

        Route::get('/wishlist-remove/{id}', [WishlistController::class, 'RemoveWishlistProduct']);

        Route::get('/get-cart-product', [CartController::class, 'GetCartProduct']);

        Route::get('/cart-remove/{rowId}', [CartController::class, 'RemoveCartProduct']);

        Route::get('/cart-increment/{rowId}', [CartController::class, 'CartIncrement']);

        Route::get('/cart-decrement/{rowId}', [CartController::class, 'CartDecrement']);

        // Frontend Coupon Option
        Route::post('/coupon-apply', [CartController::class, 'CouponApply']);
        Route::get('/coupon-calculation', [CartController::class, 'CouponCalculation']);
        Route::get('/coupon-remove', [CartController::class, 'CouponRemove']);

        // Checkout Functions
        Route::get('/district-get/{division_id}', [CheckoutController::class, 'DistrictGetAjax']);
        Route::get('/state-get/{district_id}', [CheckoutController::class, 'StateGetAjax']);

        // Advance Search Routes
        Route::post('search-product', [FrontEndController::class, 'SearchProduct']);

    });

    end of Ajax requests */

    /// Product Search Route
    Route::post('/search', [FrontEndController::class, 'ProductSearch'])->name('product.search');

    //** Stripe
    Route::post('/stripe/order', [StripeController::class, 'StripeOrder'])->name('stripe.order');

    Route::post('/cash/order', [CashController::class, 'CashOrder'])->name('cash.order');

    // Frontend Product Details Page url
    Route::get('/product/details/{id}', [FrontEndController::class, 'ProductDetails'])->name('productdetail');

    // Frontend Product Tags Page
    Route::get('/product/tag/{tag}', [FrontEndController::class, 'TagWiseProduct']);

    // Frontend SubCategory wise Data
    Route::get('/category/{subcat_id}/{slug}', [FrontEndController::class, 'SubCatWiseProduct']);

    // Frontend Sub-SubCategory wise Data
    Route::get('/subcategory/{subsubcat_id}/{slug}', [FrontEndController::class, 'SubSubCatWiseProduct']);

    /// Frontend Product Review Routes
    Route::post('/review/store', [ReviewController::class, 'ReviewStore'])->name('review.store');

    // Shop Page Route
    Route::get('/shop', [ShopController::class, 'ShopPage'])->name('shop');
    Route::post('/shop/filter', [ShopController::class, 'ShopFilter'])->name('shop.filter');

});

/* TODO later: chat-game page
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
*/

/**
 * Admin All Routes
 */
Route::group(['prefix' => 'wpadmin',  'middleware' => ['auth', 'isAdmin'] ], function () {

    // Admin Products All Routes
    Route::prefix('products')->group(function () {

        Route::get('/',                     [ProductController::class, 'mainPage'])->name('wpadmin.products.main');
        Route::get('/add',                  [ProductController::class, 'AddProduct'])->name('wpadmin.products.add');
        Route::post('/store',               [ProductController::class, 'StoreProduct'])->name('wpadmin.products.store');
        Route::get('/edit/{id}',            [ProductController::class, 'EditProduct'])->name('wpadmin.products.edit');
        Route::post('/data/update',         [ProductController::class, 'ProductDataUpdate'])->name('wpadmin.products.update');
        Route::post('/image/update',        [ProductController::class, 'MultiImageUpdate'])->name('wpadmin.products.update-image');
        Route::post('/thumbnail/update',    [ProductController::class, 'ThambnailImageUpdate'])->name('wpadmin.products.update.thambnail');
        Route::get('/multiimg/delete/{id}', [ProductController::class, 'MultiImageDelete'])->name('wpadmin.products.multiimg.delete');
        Route::get('/inactive/{id}',        [ProductController::class, 'ProductInactive'])->name('wpadmin.products.inactive');
        Route::get('/active/{id}',          [ProductController::class, 'ProductActive'])->name('wpadmin.products.active');
        Route::get('/delete/{id}',          [ProductController::class, 'ProductDelete'])->name('wpadmin.products.delete');

        // Admin Brand All Routes
        Route::prefix('brands')->group(function () {

            Route::get('/',            [ProductBrandController::class, 'BrandView'])->name('wpadmin.products.brands.all');
            Route::post('/store',      [ProductBrandController::class, 'BrandStore'])->name('wpadmin.products.brands.add');
            Route::get('/edit/{id}',   [ProductBrandController::class, 'BrandEdit'])->name('wpadmin.products.brands.edit');
            Route::post('/update',     [ProductBrandController::class, 'BrandUpdate'])->name('wpadmin.products.brands.update');
            Route::get('/delete/{id}', [ProductBrandController::class, 'BrandDelete'])->name('wpadmin.products.brands.delete');

        });

        // Admin Category all Routes
        Route::prefix('categories')->group(function () {

            Route::get('/',             [ProductCategoryController::class, 'CategoryView'])->name('wpadmin.products.cats.all');
            Route::post('/store',       [ProductCategoryController::class, 'CategoryStore'])->name('wpadmin.products.cats.store');
            Route::get('/edit/{id}',    [ProductCategoryController::class, 'CategoryEdit'])->name('wpadmin.products.cats.edit');
            Route::post('/update/{id}', [ProductCategoryController::class, 'CategoryUpdate'])->name('wpadmin.products.cats.update');
            Route::get('/delete/{id}',  [ProductCategoryController::class, 'CategoryDelete'])->name('wpadmin.products.cats.delete');

            // Admin Sub Category All Routes
            Route::get('/sub/',            [ProductCategoryController::class, 'SubCategoryView'])->name('wpadmin.products.subcats.all');
            Route::post('/sub/store',      [ProductCategoryController::class, 'SubCategoryStore'])->name('wpadmin.products.subcats.store');
            Route::get('/sub/edit/{id}',   [ProductCategoryController::class, 'SubCategoryEdit'])->name('wpadmin.products.subcats.edit');
            Route::post('/update',         [ProductCategoryController::class, 'SubCategoryUpdate'])->name('wpadmin.products.subcats.update');
            Route::get('/sub/delete/{id}', [ProductCategoryController::class, 'SubCategoryDelete'])->name('wpadmin.products.subcats.delete');

        });

    });

    // Admin Slider All Routes
    Route::prefix('slider')->group(function () {

        Route::get('/view', [SliderController::class, 'SliderView'])->name('slider.manage');
        Route::post('/store', [SliderController::class, 'SliderStore'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'SliderEdit'])->name('slider.edit');
        Route::post('/update', [SliderController::class, 'SliderUpdate'])->name('slider.update');
        Route::get('/delete/{id}', [SliderController::class, 'SliderDelete'])->name('slider.delete');
        Route::get('/inactive/{id}', [SliderController::class, 'SliderInactive'])->name('slider.inactive');
        Route::get('/active/{id}', [SliderController::class, 'SliderActive'])->name('slider.active');

    });

    // Admin Coupons All Routes
    Route::prefix('coupons')->group(function () {
        Route::get('/view', [CouponController::class, 'CouponView'])->name('coupon.manage');
        Route::post('/store', [CouponController::class, 'CouponStore'])->name('coupon.store');
        Route::get('/edit/{id}', [CouponController::class, 'CouponEdit'])->name('coupon.edit');
        Route::post('/update/{id}', [CouponController::class, 'CouponUpdate'])->name('coupon.update');
        Route::get('/delete/{id}', [CouponController::class, 'CouponDelete'])->name('coupon.delete');
    });

    // Admin Shipping All Routes
    Route::prefix('shipping')->group(function () {

        // Ship Division
        Route::get('/division/view', [ShippingAreaController::class, 'DivisionView'])->name('division.manage');
        Route::post('/division/store', [ShippingAreaController::class, 'DivisionStore'])->name('division.store');
        Route::get('/division/edit/{id}', [ShippingAreaController::class, 'DivisionEdit'])->name('division.edit');
        Route::post('/division/update/{id}', [ShippingAreaController::class, 'DivisionUpdate'])->name('division.update');
        Route::get('/division/delete/{id}', [ShippingAreaController::class, 'DivisionDelete'])->name('division.delete');

        // Ship District
        Route::get('/district/view', [ShippingAreaController::class, 'DistrictView'])->name('district.manage');
        Route::post('/district/store', [ShippingAreaController::class, 'DistrictStore'])->name('district.store');
        Route::get('/district/edit/{id}', [ShippingAreaController::class, 'DistrictEdit'])->name('district.edit');
        Route::post('/district/update/{id}', [ShippingAreaController::class, 'DistrictUpdate'])->name('district.update');
        Route::get('/district/delete/{id}', [ShippingAreaController::class, 'DistrictDelete'])->name('district.delete');

        // Ship State
        Route::get('/state/view', [ShippingAreaController::class, 'StateView'])->name('state.manage');
        Route::post('/state/store', [ShippingAreaController::class, 'StateStore'])->name('state.store');
        Route::get('/state/edit/{id}', [ShippingAreaController::class, 'StateEdit'])->name('state.edit');
        Route::post('/state/update/{id}', [ShippingAreaController::class, 'StateUpdate'])->name('state.update');
        Route::get('/state/delete/{id}', [ShippingAreaController::class, 'StateDelete'])->name('state.delete');

    });

    // Admin Order All Routes
    Route::prefix('orders')->group(function () {

        Route::get('/pending/', [AdminOrderController::class, 'PendingOrders'])->name('pending-orders');
        Route::get('/order/details/{order_id}', [AdminOrderController::class, 'AdminOrdersDetails'])->name('pending.order.details');
        Route::get('/confirmed', [AdminOrderController::class, 'ConfirmedOrders'])->name('confirmed-orders');
        Route::get('/processing', [AdminOrderController::class, 'ProcessingOrders'])->name('processing-orders');
        Route::get('/picked', [AdminOrderController::class, 'PickedOrders'])->name('picked-orders');
        Route::get('/shipped', [AdminOrderController::class, 'ShippedOrders'])->name('shipped-orders');
        Route::get('/delivered', [AdminOrderController::class, 'DeliveredOrders'])->name('delivered-orders');
        Route::get('/canceled', [AdminOrderController::class, 'CanceledOrders'])->name('canceled-orders');

        // Update Status
        Route::get('/pending/confirm/{order_id}', [AdminOrderController::class, 'PendingToConfirm'])->name('pending-confirm');
        Route::get('/confirmed/processing/{order_id}', [AdminOrderController::class, 'ConfirmToProcessing'])->name('confirm.processing');
        Route::get('/processing/picked/{order_id}', [AdminOrderController::class, 'ProcessingToPicked'])->name('processing.picked');
        Route::get('/picked/shipped/{order_id}', [AdminOrderController::class, 'PickedToShipped'])->name('picked.shipped');
        Route::get('/shipped/delivered/{order_id}', [AdminOrderController::class, 'ShippedToDelivered'])->name('shipped.delivered');
        Route::get('/invoice/download/{order_id}', [AdminOrderController::class, 'AdminInvoiceDownload'])->name('invoice.download');

    });

    // Admin Reports Routes
    Route::prefix('reports')->group(function () {

        Route::get('/view', [ReportController::class, 'ReportView'])->name('all-reports');
        Route::post('/search/by/date', [ReportController::class, 'ReportByDate'])->name('search-by-date');
        Route::post('/search/by/month', [ReportController::class, 'ReportByMonth'])->name('search-by-month');
        Route::post('/search/by/year', [ReportController::class, 'ReportByYear'])->name('search-by-year');

    });

    // Admin Manage Review Routes
    Route::prefix('review')->group(function () {
        Route::get('/pending',      [ReviewController::class, 'PendingReview'])->name('pending.review');
        Route::get('/admin/approve/{id}', [ReviewController::class, 'ReviewApprove'])->name('review.approve');
        Route::get('/publish', [ReviewController::class, 'PublishReview'])->name('publish.review');
        Route::get('/delete/{id}', [ReviewController::class, 'DeleteReview'])->name('delete.review');
    });

    // Admin Manage Stock Routes
    Route::prefix('stock')->group(function () {
        Route::get('/product', [ProductController::class, 'ProductStock'])->name('product.stock');
    });

});

/* TODO later: web frontend page
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user']], function () {

    // Wishlist page
    Route::get('/wishlist',                    [WishlistController::class, 'ViewWishlist'])->name('wishlist');

    /// Order Traking Route
    Route::post('/order/tracking',             [UserOrderController::class, 'OrderTraking'])->name('order.tracking');
    Route::get('/my/orders',                   [UserOrderController::class, 'MyOrders'])->name('my.orders');
    Route::get('/order_details/{order_id}',    [UserOrderController::class, 'OrderDetails']);
    Route::get('/invoice_download/{order_id}', [UserOrderController::class, 'InvoiceDownload']);
    Route::post('/return/order/{order_id}',    [UserOrderController::class, 'ReturnOrder'])->name('return.order');
    Route::get('/return/order/list',           [UserOrderController::class, 'ReturnOrderList'])->name('return.order.list');
    Route::get('/cancel/orders',               [UserOrderController::class, 'CancelOrders'])->name('cancel.orders');

});
*/

/** !!! End of Routes from big ecommerce project  !!! */
