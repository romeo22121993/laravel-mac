<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Enums\Category;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductBrandController;
use App\Http\Controllers\Admin\ShippingAreaController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\GuideCategoryController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\ResourceCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\StripeController;
use App\Http\Controllers\Frontend\CashController;
use App\Http\Controllers\Frontend\UserOrderController;
use App\Http\Controllers\Frontend\GameController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\PostController as FrontendPostController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Subscriber\DashboardCoursesController;
use App\Http\Controllers\Subscriber\DashboardGuidesController;
use App\Http\Controllers\Subscriber\DashboardResourcesController;
use App\Modules\VideosAPI;

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
    Route::get('/admin-resources', [DashboardResourcesController::class, 'resourcesPage'])->name('dashboard.resources');
    Route::get('/admin-courses',   [DashboardCoursesController::class, 'coursesPage'])->name('dashboard.courses');
    Route::get('/admin-guides',    [DashboardGuidesController::class, 'guidesPage'])->name('dashboard.guides');

    Route::get('/courses/{slug}',  [DashboardCoursesController::class, 'singleCoursePage'])->name('single.course');


    // Ajax requests for dashboard pages
    Route::group(['prefix'=> 'ajax'], function(){
        Route::post('/change-avatar',    [UserDashboardController::class, 'changeAvatar']);
        Route::post('/change-userdata',  [UserDashboardController::class, 'changeUserData']);

        Route::post('/progress-lesson',  [DashboardCoursesController::class, 'progressLesson']);
        Route::post('/progress-course',  [DashboardCoursesController::class, 'progressCourse']);
        Route::post('/complete-course',  [DashboardCoursesController::class, 'completeCourse']);
        Route::post('/read-course',      [DashboardCoursesController::class, 'readCourse']);

        Route::post('/lastiteraction',   [DashboardCoursesController::class, 'lastIteractionFunction']);


        Route::post('/loadMoreCourses',   [DashboardCoursesController::class,   'LoadMoreCourses']);
        Route::post('/loadMoreGuides',    [DashboardGuidesController::class,    'LoadMoreGuides']);
        Route::post('/loadMoreResources', [DashboardResourcesController::class, 'LoadMoreResources']);

    });


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


    Route::group(['prefix'=> 'guides'], function() {
        Route::get('/',              [GuideController::class, 'guidesPage'])->name('wpadmin.guides');
        Route::get('/add',           [GuideController::class, 'addGuide'])->name('wpadmin.guides.add');
        Route::post('/store',        [GuideController::class, 'StoreGuide'])->name('wpadmin.guides.store');
        Route::get('/edit/{id}',     [GuideController::class, 'EditGuide'])->name('wpadmin.guides.edit');
        Route::post('/update/{id}',  [GuideController::class, 'UpdateGuide'])->name('wpadmin.guides.update');
        Route::get('/delete/{id}',   [GuideController::class, 'DeleteGuide'])->name('wpadmin.guides.delete');
        Route::get('/category/{id}', [GuideController::class, 'guidesPageByCategory'])->name('wpadmin.guides.by.categories');

        Route::get('/image/delete/{id}', [GuideController::class, 'DeleteGuideImage'])->name('wpadmin.guides.delete.image');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [GuideCategoryController::class, 'guidesCategoryPage'])->name('wpadmin.guides.categories');
            Route::get('/add',          [GuideCategoryController::class, 'addGuideCategory'])->name('wpadmin.guides.categories.add');
            Route::post('/store',       [GuideCategoryController::class, 'StoreGuideCategory'])->name('wpadmin.guides.categories.store');
            Route::get('/edit/{id}',    [GuideCategoryController::class, 'EditGuideCategory'])->name('wpadmin.guides.categories.edit');
            Route::post('/update/{id}', [GuideCategoryController::class, 'UpdateGuideCategory'])->name('wpadmin.guides.categories.update');
            Route::get('/delete/{id}',  [GuideCategoryController::class, 'DeleteGuideCategory'])->name('wpadmin.guides.categories.delete');
        });
    });

    Route::group(['prefix'=> 'articles'], function() {
        Route::get('/',              [ArticleController::class, 'articlesPage'])->name('wpadmin.articles');
        Route::get('/add',           [ArticleController::class, 'addArticle'])->name('wpadmin.articles.add');
        Route::post('/store',        [ArticleController::class, 'StoreArticle'])->name('wpadmin.articles.store');
        Route::get('/edit/{id}',     [ArticleController::class, 'EditArticle'])->name('wpadmin.articles.edit');
        Route::post('/update/{id}',  [ArticleController::class, 'UpdateArticle'])->name('wpadmin.articles.update');
        Route::get('/delete/{id}',   [ArticleController::class, 'DeleteArticle'])->name('wpadmin.articles.delete');
        Route::get('/category/{id}', [ArticleController::class, 'articlesPageByCategory'])->name('wpadmin.articles.by.categories');

        Route::get('/image/delete/{id}', [ArticleController::class, 'DeleteArticleImage'])->name('wpadmin.articles.delete.image');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [ArticleCategoryController::class, 'articlesCategoryPage'])->name('wpadmin.articles.categories');
            Route::get('/add',          [ArticleCategoryController::class, 'addArticleCategory'])->name('wpadmin.articles.categories.add');
            Route::post('/store',       [ArticleCategoryController::class, 'StoreArticleCategory'])->name('wpadmin.articles.categories.store');
            Route::get('/edit/{id}',    [ArticleCategoryController::class, 'EditArticleCategory'])->name('wpadmin.articles.categories.edit');
            Route::post('/update/{id}', [ArticleCategoryController::class, 'UpdateArticleCategory'])->name('wpadmin.articles.categories.update');
            Route::get('/delete/{id}',  [ArticleCategoryController::class, 'DeleteArticleCategory'])->name('wpadmin.articles.categories.delete');
        });
    });


    Route::group(['prefix'=> 'resources'], function() {
        Route::get('/',              [ResourceController::class, 'resourcesPage'])->name('wpadmin.resources');
        Route::get('/add',           [ResourceController::class, 'addResource'])->name('wpadmin.resources.add');
        Route::post('/store',        [ResourceController::class, 'StoreResource'])->name('wpadmin.resources.store');
        Route::get('/edit/{id}',     [ResourceController::class, 'EditResource'])->name('wpadmin.resources.edit');
        Route::post('/update/{id}',  [ResourceController::class, 'UpdateResource'])->name('wpadmin.resources.update');
        Route::get('/delete/{id}',   [ResourceController::class, 'DeleteResource'])->name('wpadmin.resources.delete');
        Route::get('/category/{id}', [ResourceController::class, 'resourcesPageByCategory'])->name('wpadmin.resources.by.categories');
        Route::get('/image/delete/{id}', [ResourceController::class, 'DeleteResourceImage'])->name('wpadmin.resources.delete.image');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [ResourceCategoryController::class, 'resourcesCategoryPage'])->name('wpadmin.resources.categories');
            Route::get('/add',          [ResourceCategoryController::class, 'addResourceCategory'])->name('wpadmin.resources.categories.add');
            Route::post('/store',       [ResourceCategoryController::class, 'StoreResourceCategory'])->name('wpadmin.resources.categories.store');
            Route::get('/edit/{id}',    [ResourceCategoryController::class, 'EditResourceCategory'])->name('wpadmin.resources.categories.edit');
            Route::post('/update/{id}', [ResourceCategoryController::class, 'UpdateResourceCategory'])->name('wpadmin.resources.categories.update');
            Route::get('/delete/{id}',  [ResourceCategoryController::class, 'DeleteResourceCategory'])->name('wpadmin.resources.categories.delete');
        });
    });


    Route::group(['prefix'=> 'courses'], function() {
        Route::get('/',              [CoursesController::class, 'coursesPage'])->name('wpadmin.courses');
        Route::get('/add',           [CoursesController::class, 'addCourse'])->name('wpadmin.courses.add');
        Route::post('/store',        [CoursesController::class, 'StoreCourse'])->name('wpadmin.courses.store');
        Route::get('/edit/{id}',     [CoursesController::class, 'EditCourse'])->name('wpadmin.courses.edit');
        Route::post('/update/{id}',  [CoursesController::class, 'UpdateCourse'])->name('wpadmin.courses.update');
        Route::get('/delete/{id}',   [CoursesController::class, 'DeleteCourse'])->name('wpadmin.courses.delete');
        Route::get('/category/{id}', [CoursesController::class, 'coursesPageByCategory'])->name('wpadmin.courses.by.categories');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [CourseCategoryController::class, 'coursesCategoryPage'])->name('wpadmin.courses.categories');
            Route::get('/add',          [CourseCategoryController::class, 'addCourseCategory'])->name('wpadmin.courses.categories.add');
            Route::post('/store',       [CourseCategoryController::class, 'StoreCourseCategory'])->name('wpadmin.courses.categories.store');
            Route::get('/edit/{id}',    [CourseCategoryController::class, 'EditCourseCategory'])->name('wpadmin.courses.categories.edit');
            Route::post('/update/{id}', [CourseCategoryController::class, 'UpdateCourseCategory'])->name('wpadmin.courses.categories.update');
            Route::get('/delete/{id}',  [CourseCategoryController::class, 'DeleteCourseCategory'])->name('wpadmin.courses.categories.delete');
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


    // Admin Products All Routes
    Route::prefix('products')->group(function () {

        Route::get('/',                     [ProductController::class, 'mainPage'])->name('wpadmin.products.main');
        Route::get('/add',                  [ProductController::class, 'AddProduct'])->name('wpadmin.products.add');
        Route::post('/store',               [ProductController::class, 'StoreProduct'])->name('wpadmin.products.store');
        Route::get('/edit/{id}',            [ProductController::class, 'EditProduct'])->name('wpadmin.products.edit');
        Route::post('/update',              [ProductController::class, 'ProductDataUpdate'])->name('wpadmin.products.update');
        Route::get('/inactive/{id}',        [ProductController::class, 'ProductInactive'])->name('wpadmin.products.inactive');
        Route::get('/active/{id}',          [ProductController::class, 'ProductActive'])->name('wpadmin.products.active');
        Route::get('/delete/{id}',          [ProductController::class, 'ProductDelete'])->name('wpadmin.products.delete');
        Route::post('/multiimg/update',     [ProductController::class, 'MultiImageUpdate'])->name('product.update-multi-images');
        Route::get('/categories/{id}',      [ProductController::class, 'CategoriesProduct'])->name('wpadmin.products.categories.list');


        // Admin Brand All Routes
        Route::prefix('brands')->group(function () {

            Route::get('/',            [ProductBrandController::class, 'BrandView'])->name('wpadmin.products.brands.all');
            Route::post('/store',      [ProductBrandController::class, 'BrandStore'])->name('wpadmin.products.brands.add');
            Route::get('/edit/{id}',   [ProductBrandController::class, 'BrandEdit'])->name('wpadmin.products.brands.edit');
            Route::post('/update',     [ProductBrandController::class, 'BrandUpdate'])->name('wpadmin.products.brands.update');
            Route::get('/delete/{id}', [ProductBrandController::class, 'BrandDelete'])->name('wpadmin.products.brands.delete');

        });

        // Admin Categories all Routes
        Route::prefix('categories')->group(function () {

            Route::get('/',             [ProductCategoryController::class, 'CategoryView'])->name('wpadmin.products.cats.all');
            Route::post('/store',       [ProductCategoryController::class, 'CategoryStore'])->name('wpadmin.products.cats.store');
            Route::get('/edit/{id}',    [ProductCategoryController::class, 'CategoryEdit'])->name('wpadmin.products.cats.edit');
            Route::post('/update/{id}', [ProductCategoryController::class, 'CategoryUpdate'])->name('wpadmin.products.cats.update');
            Route::get('/delete/{id}',  [ProductCategoryController::class, 'CategoryDelete'])->name('wpadmin.products.cats.delete');

        });

        // Admin SubCategories all Routes
        Route::prefix('subcategories')->group(function () {
            Route::get('/',             [ProductCategoryController::class, 'SubCategoryView'])->name('wpadmin.products.subcats.all');
            Route::post('/store',       [ProductCategoryController::class, 'SubCategoryStore'])->name('wpadmin.products.subcats.store');
            Route::get('/edit/{id}',    [ProductCategoryController::class, 'SubCategoryEdit'])->name('wpadmin.products.subcats.edit');
            Route::post('/update',      [ProductCategoryController::class, 'SubCategoryUpdate'])->name('wpadmin.products.subcats.update');
            Route::get('/delete/{id}',  [ProductCategoryController::class, 'SubCategoryDelete'])->name('wpadmin.products.subcats.delete');

        });

    });


    /* Ecomerce site part */
    // Admin Coupons All Routes
    Route::prefix('coupons')->group(function () {
        Route::get('/',             [CouponController::class, 'CouponView'])->name('wpadmin.coupons.all');
        Route::post('/store',       [CouponController::class, 'CouponStore'])->name('wpadmin.coupons.store');
        Route::get('/edit/{id}',    [CouponController::class, 'CouponEdit'])->name('wpadmin.coupons.edit');
        Route::post('/update/{id}', [CouponController::class, 'CouponUpdate'])->name('wpadmin.coupons.update');
        Route::get('/delete/{id}',  [CouponController::class, 'CouponDelete'])->name('wpadmin.coupons.delete');
    });

    // Admin Shipping All Routes
    Route::prefix('shipping')->group(function () {

        // Ship Division
        Route::prefix('divisions')->group(function () {
            Route::get('/all',          [ShippingAreaController::class, 'DivisionView'])->name('shipping.division.all');
            Route::post('/store',       [ShippingAreaController::class, 'DivisionStore'])->name('shipping.division.store');
            Route::get('/edit/{id}',    [ShippingAreaController::class, 'DivisionEdit'])->name('shipping.division.edit');
            Route::post('/update/{id}', [ShippingAreaController::class, 'DivisionUpdate'])->name('shipping.division.update');
            Route::get('/delete/{id}',  [ShippingAreaController::class, 'DivisionDelete'])->name('shipping.division.delete');
        });

        // Ship District
        Route::prefix('districts')->group(function () {
            Route::get('/all',          [ShippingAreaController::class, 'DistrictView'])->name('shipping.district.all');
            Route::post('/store',       [ShippingAreaController::class, 'DistrictStore'])->name('shipping.district.store');
            Route::get('/edit/{id}',    [ShippingAreaController::class, 'DistrictEdit'])->name('shipping.district.edit');
            Route::post('/update/{id}', [ShippingAreaController::class, 'DistrictUpdate'])->name('shipping.district.update');
            Route::get('/delete/{id}',  [ShippingAreaController::class, 'DistrictDelete'])->name('shipping.district.delete');
        });

        // Ship State
        Route::prefix('states')->group(function () {
            Route::get('/all',          [ShippingAreaController::class, 'StateView'])->name('shipping.state.all');
            Route::post('/store',       [ShippingAreaController::class, 'StateStore'])->name('shipping.state.store');
            Route::get('/edit/{id}',    [ShippingAreaController::class, 'StateEdit'])->name('shipping.state.edit');
            Route::post('/update/{id}', [ShippingAreaController::class, 'StateUpdate'])->name('shipping.state.update');
            Route::get('/delete/{id}',  [ShippingAreaController::class, 'StateDelete'])->name('shipping.state.delete');
        });
    });


    // Admin Order All Routes
    Route::prefix('orders')->group(function () {

        Route::get('/pending/',                 [AdminOrderController::class, 'PendingOrders'])->name('wpadmin.orders.pending');
        Route::get('/details/{order_id}',       [AdminOrderController::class, 'AdminOrdersDetails'])->name('wpadmin.orders.details');
        Route::get('/confirmed',                [AdminOrderController::class, 'ConfirmedOrders'])->name('wpadmin.orders.confirmed');
        Route::get('/processing',               [AdminOrderController::class, 'ProcessingOrders'])->name('wpadmin.orders.processing');
        Route::get('/picked',                   [AdminOrderController::class, 'PickedOrders'])->name('wpadmin.orders.picked');
        Route::get('/shipped',                  [AdminOrderController::class, 'ShippedOrders'])->name('wpadmin.orders.shipped');
        Route::get('/delivered',                [AdminOrderController::class, 'DeliveredOrders'])->name('wpadmin.orders.delivered');
        Route::get('/canceled',                 [AdminOrderController::class, 'CanceledOrders'])->name('wpadmin.orders.canceled');

        // Update Status
        Route::get('/pending/confirm/{order_id}',       [AdminOrderController::class, 'PendingToConfirm'])->name('wpadmin.orders.pending-confirm');
        Route::get('/confirmed/processing/{order_id}',  [AdminOrderController::class, 'ConfirmToProcessing'])->name('wpadmin.orders.confirm.processing');
        Route::get('/processing/picked/{order_id}',     [AdminOrderController::class, 'ProcessingToPicked'])->name('wpadmin.orders.processing.picked');
        Route::get('/picked/shipped/{order_id}',        [AdminOrderController::class, 'PickedToShipped'])->name('wpadmin.orders.picked.shipped');
        Route::get('/shipped/delivered/{order_id}',     [AdminOrderController::class, 'ShippedToDelivered'])->name('wpadmin.orders.shipped.delivered');
        Route::get('/invoice/download/{order_id}',      [AdminOrderController::class, 'AdminInvoiceDownload'])->name('wpadmin.orders.invoice.download');

    });

    // Admin Reports Routes
    Route::prefix('reports')->group(function () {

        Route::get('/',            [ReportController::class, 'ReportView'])->name('wpadmin.reports.all');

        Route::prefix('search/by/')->group(function () {
            Route::post('/date',   [ReportController::class, 'ReportByDate'])->name('wpadmin.reports.search-by-date');
            Route::post('/month',  [ReportController::class, 'ReportByMonth'])->name('wpadmin.reports.search-by-month');
            Route::post('/year',   [ReportController::class, 'ReportByYear'])->name('wpadmin.reports.search-by-year');
        });


    });

    // Admin Manage Stock Routes
    Route::prefix('stock')->group(function () {
        Route::get('/', [ProductController::class, 'ProductStock'])->name('wpadmin.product.stock');
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

    Route::get('/post/{slug}',    [FrontendPostController::class, 'singlePostPage'])->name('single.post');
    Route::get('/article/{slug}', [FrontendPostController::class, 'singlePostPage'])->name('single.article');

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
