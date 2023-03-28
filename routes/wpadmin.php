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
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\CampaignCategoryController;
use App\Http\Controllers\Admin\CampaignTopicController;

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


/** All Pages with Admin dashboards */
Route::group(['middleware' => ['auth', 'isAdmin']], function(){
    Route::get('/', [AdminController::class, 'mainPage'])->name('main');

    Route::get('/change-user-settings',       [ProfileController::class, 'changeSettings'])->name('change.profile');
    Route::post('/change-user-settings/{id}', [ProfileController::class, 'updateSettings'])->name('update.profile');
    Route::get('/change-password',            [ProfileController::class, 'changePassword'])->name('change.password');
    Route::post('/change-password/{id}',      [ProfileController::class, 'updatePassword'])->name('update.password');

    Route::group(['prefix'=> 'users'], function() {
        Route::get('/',             [UserController::class, 'usersPage'])->name('users');
        Route::get('/add',          [UserController::class, 'addUser'])->name('users.add');
        Route::post('/store',       [UserController::class, 'StoreUser'])->name('users.store');
        Route::get('/edit/{id}',    [UserController::class, 'EditUser'])->name('users.edit');
        Route::post('/update/{id}', [UserController::class, 'UpdateUser'])->name('users.update');
        Route::get('/delete/{id}',  [UserController::class, 'DeleteUser'])->name('users.delete');
    });

    Route::group(['prefix'=> 'posts'], function() {
        Route::get('/',              [PostController::class, 'postsPage'])->name('posts');
        Route::get('/add',           [PostController::class, 'addPost'])->name('posts.add');
        Route::post('/store',        [PostController::class, 'StorePost'])->name('posts.store');
        Route::get('/edit/{id}',     [PostController::class, 'EditPost'])->name('posts.edit');
        Route::post('/update/{id}',  [PostController::class, 'UpdatePost'])->name('posts.update');
        Route::get('/delete/{id}',   [PostController::class, 'DeletePost'])->name('posts.delete');
        Route::get('/category/{id}', [PostController::class, 'postsPageByCategory'])->name('posts.by.categories');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [PostCategoryController::class, 'postsCategoryPage'])->name('posts.categories');
            Route::get('/add',          [PostCategoryController::class, 'addPostCategory'])->name('posts.categories.add');
            Route::post('/store',       [PostCategoryController::class, 'StorePostCategory'])->name('posts.categories.store');
            Route::get('/edit/{id}',    [PostCategoryController::class, 'EditPostCategory'])->name('posts.categories.edit');
            Route::post('/update/{id}', [PostCategoryController::class, 'UpdatePostCategory'])->name('posts.categories.update');
            Route::get('/delete/{id}',  [PostCategoryController::class, 'DeletePostCategory'])->name('posts.categories.delete');
        });
    });


    Route::group(['prefix'=> 'guides'], function() {
        Route::get('/',              [GuideController::class, 'guidesPage'])->name('guides');
        Route::get('/add',           [GuideController::class, 'addGuide'])->name('guides.add');
        Route::post('/store',        [GuideController::class, 'StoreGuide'])->name('guides.store');
        Route::get('/edit/{id}',     [GuideController::class, 'EditGuide'])->name('guides.edit');
        Route::post('/update/{id}',  [GuideController::class, 'UpdateGuide'])->name('guides.update');
        Route::get('/delete/{id}',   [GuideController::class, 'DeleteGuide'])->name('guides.delete');
        Route::get('/category/{id}', [GuideController::class, 'guidesPageByCategory'])->name('guides.by.categories');

        Route::get('/image/delete/{id}', [GuideController::class, 'DeleteGuideImage'])->name('guides.delete.image');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [GuideCategoryController::class, 'guidesCategoryPage'])->name('guides.categories');
            Route::get('/add',          [GuideCategoryController::class, 'addGuideCategory'])->name('guides.categories.add');
            Route::post('/store',       [GuideCategoryController::class, 'StoreGuideCategory'])->name('guides.categories.store');
            Route::get('/edit/{id}',    [GuideCategoryController::class, 'EditGuideCategory'])->name('guides.categories.edit');
            Route::post('/update/{id}', [GuideCategoryController::class, 'UpdateGuideCategory'])->name('guides.categories.update');
            Route::get('/delete/{id}',  [GuideCategoryController::class, 'DeleteGuideCategory'])->name('guides.categories.delete');
        });
    });

    Route::group(['prefix'=> 'articles'], function() {
        Route::get('/',              [ArticleController::class, 'articlesPage'])->name('articles');
        Route::get('/original',      [ArticleController::class, 'originalArticles'])->name('articles.original');
        Route::get('/cloned',        [ArticleController::class, 'clonedArticles'])->name('articles.cloned');
        Route::get('/add',           [ArticleController::class, 'addArticle'])->name('articles.add');
        Route::post('/store',        [ArticleController::class, 'StoreArticle'])->name('articles.store');
        Route::get('/edit/{id}',     [ArticleController::class, 'EditArticle'])->name('articles.edit');
        Route::post('/update/{id}',  [ArticleController::class, 'UpdateArticle'])->name('articles.update');
        Route::get('/delete/{id}',   [ArticleController::class, 'DeleteArticle'])->name('articles.delete');
        Route::get('/category/{id}', [ArticleController::class, 'articlesPageByCategory'])->name('articles.by.categories');

        Route::get('/image/delete/{id}', [ArticleController::class, 'DeleteArticleImage'])->name('articles.delete.image');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [ArticleCategoryController::class, 'articlesCategoryPage'])->name('articles.categories');
            Route::get('/add',          [ArticleCategoryController::class, 'addArticleCategory'])->name('articles.categories.add');
            Route::post('/store',       [ArticleCategoryController::class, 'StoreArticleCategory'])->name('articles.categories.store');
            Route::get('/edit/{id}',    [ArticleCategoryController::class, 'EditArticleCategory'])->name('articles.categories.edit');
            Route::post('/update/{id}', [ArticleCategoryController::class, 'UpdateArticleCategory'])->name('articles.categories.update');
            Route::get('/delete/{id}',  [ArticleCategoryController::class, 'DeleteArticleCategory'])->name('articles.categories.delete');
        });
    });

    Route::group(['prefix'=> 'campaigns'], function() {
        Route::get('/',              [CampaignController::class, 'campaignsPage'])->name('campaigns');
        Route::get('/original',      [CampaignController::class, 'originalCampaigns'])->name('campaigns.original');
        Route::get('/cloned',        [CampaignController::class, 'clonedCampaigns'])->name('campaigns.cloned');
        Route::get('/add',           [CampaignController::class, 'addCampaign'])->name('campaigns.add');
        Route::post('/store',        [CampaignController::class, 'StoreCampaign'])->name('campaigns.store');
        Route::get('/edit/{id}',     [CampaignController::class, 'EditCampaign'])->name('campaigns.edit');
        Route::post('/update/{id}',  [CampaignController::class, 'UpdateCampaign'])->name('campaigns.update');
        Route::get('/delete/{id}',   [CampaignController::class, 'DeleteCampaign'])->name('campaigns.delete');

        Route::get('/category/{id}', [CampaignController::class, 'campaignsPageByCategory'])->name('campaigns.by.categories');
        Route::get('/topic/{id}',    [CampaignController::class, 'campaignsPageByTopic'])->name('campaigns.by.topics');

        Route::get('/image/delete/{id}', [CampaignController::class, 'DeleteCampaignImage'])->name('campaigns.delete.image');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [CampaignCategoryController::class, 'campaignsCategoryPage'])->name('campaigns.categories');
            Route::get('/add',          [CampaignCategoryController::class, 'addCampaignCategory'])->name('campaigns.categories.add');
            Route::post('/store',       [CampaignCategoryController::class, 'storeCampaignCategory'])->name('campaigns.categories.store');
            Route::get('/edit/{id}',    [CampaignCategoryController::class, 'editCampaignCategory'])->name('campaigns.categories.edit');
            Route::post('/update/{id}', [CampaignCategoryController::class, 'updateCampaignCategory'])->name('campaigns.categories.update');
            Route::get('/delete/{id}',  [CampaignCategoryController::class, 'deleteCampaignCategory'])->name('campaigns.categories.delete');
        });

        Route::group(['prefix'=> 'topics'], function() {
            Route::get('/',             [CampaignTopicController::class, 'campaignsTopicPage'])->name('campaigns.topics');
            Route::get('/add',          [CampaignTopicController::class, 'addCampaignTopic'])->name('campaigns.topics.add');
            Route::post('/store',       [CampaignTopicController::class, 'storeCampaignTopic'])->name('campaigns.topics.store');
            Route::get('/edit/{id}',    [CampaignTopicController::class, 'editCampaignTopic'])->name('campaigns.topics.edit');
            Route::post('/update/{id}', [CampaignTopicController::class, 'updateCampaignTopic'])->name('campaigns.topics.update');
            Route::get('/delete/{id}',  [CampaignTopicController::class, 'deleteCampaignTopic'])->name('campaigns.topics.delete');
        });

    });


    Route::group(['prefix'=> 'resources'], function() {
        Route::get('/',              [ResourceController::class, 'resourcesPage'])->name('resources');
        Route::get('/add',           [ResourceController::class, 'addResource'])->name('resources.add');
        Route::post('/store',        [ResourceController::class, 'StoreResource'])->name('resources.store');
        Route::get('/edit/{id}',     [ResourceController::class, 'EditResource'])->name('resources.edit');
        Route::post('/update/{id}',  [ResourceController::class, 'UpdateResource'])->name('resources.update');
        Route::get('/delete/{id}',   [ResourceController::class, 'DeleteResource'])->name('resources.delete');
        Route::get('/category/{id}', [ResourceController::class, 'resourcesPageByCategory'])->name('resources.by.categories');
        Route::get('/image/delete/{id}', [ResourceController::class, 'DeleteResourceImage'])->name('resources.delete.image');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [ResourceCategoryController::class, 'resourcesCategoryPage'])->name('resources.categories');
            Route::get('/add',          [ResourceCategoryController::class, 'addResourceCategory'])->name('resources.categories.add');
            Route::post('/store',       [ResourceCategoryController::class, 'StoreResourceCategory'])->name('resources.categories.store');
            Route::get('/edit/{id}',    [ResourceCategoryController::class, 'EditResourceCategory'])->name('resources.categories.edit');
            Route::post('/update/{id}', [ResourceCategoryController::class, 'UpdateResourceCategory'])->name('resources.categories.update');
            Route::get('/delete/{id}',  [ResourceCategoryController::class, 'DeleteResourceCategory'])->name('resources.categories.delete');
        });
    });


    Route::group(['prefix'=> 'courses'], function() {
        Route::get('/',              [CoursesController::class, 'coursesPage'])->name('courses');
        Route::get('/add',           [CoursesController::class, 'addCourse'])->name('courses.add');
        Route::post('/store',        [CoursesController::class, 'StoreCourse'])->name('courses.store');
        Route::get('/edit/{id}',     [CoursesController::class, 'EditCourse'])->name('courses.edit');
        Route::post('/update/{id}',  [CoursesController::class, 'UpdateCourse'])->name('courses.update');
        Route::get('/delete/{id}',   [CoursesController::class, 'DeleteCourse'])->name('courses.delete');
        Route::get('/category/{id}', [CoursesController::class, 'coursesPageByCategory'])->name('courses.by.categories');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [CourseCategoryController::class, 'coursesCategoryPage'])->name('courses.categories');
            Route::get('/add',          [CourseCategoryController::class, 'addCourseCategory'])->name('courses.categories.add');
            Route::post('/store',       [CourseCategoryController::class, 'StoreCourseCategory'])->name('courses.categories.store');
            Route::get('/edit/{id}',    [CourseCategoryController::class, 'EditCourseCategory'])->name('courses.categories.edit');
            Route::post('/update/{id}', [CourseCategoryController::class, 'UpdateCourseCategory'])->name('courses.categories.update');
            Route::get('/delete/{id}',  [CourseCategoryController::class, 'DeleteCourseCategory'])->name('courses.categories.delete');
        });
    });


    Route::group(['prefix'=> 'pages'], function() {
        Route::get('/',             [PageController::class, 'pagesPage'])->name('pages');
        Route::get('/add',          [PageController::class, 'addPage'])->name('pages.add');
        Route::post('/store',       [PageController::class, 'StorePage'])->name('pages.store');
        Route::get('/edit/{id}',    [PageController::class, 'EditPage'])->name('pages.edit');
        Route::post('/update/{id}', [PageController::class, 'UpdatePage'])->name('pages.update');
        Route::get('/delete/{id}',  [PageController::class, 'DeletePage'])->name('pages.delete');
    });

    Route::group(['prefix'=> 'contacts'], function() {
        Route::get('/',             [ContactController::class, 'indexPage'])->name('contacts');
        Route::get('/show/{id}',    [ContactController::class, 'showContact'])->name('contacts.show');
        Route::get('/delete/{id}',  [ContactController::class, 'DeleteContact'])->name('contacts.delete');
    });


    // Admin Products All Routes
    Route::prefix('products')->group(function () {

        Route::get('/',                     [ProductController::class, 'mainPage'])->name('products.main');
        Route::get('/add',                  [ProductController::class, 'AddProduct'])->name('products.add');
        Route::post('/store',               [ProductController::class, 'StoreProduct'])->name('products.store');
        Route::get('/edit/{id}',            [ProductController::class, 'EditProduct'])->name('products.edit');
        Route::post('/update',              [ProductController::class, 'ProductDataUpdate'])->name('products.update');
        Route::get('/inactive/{id}',        [ProductController::class, 'ProductInactive'])->name('products.inactive');
        Route::get('/active/{id}',          [ProductController::class, 'ProductActive'])->name('products.active');
        Route::get('/delete/{id}',          [ProductController::class, 'ProductDelete'])->name('products.delete');
        Route::post('/multiimg/update',     [ProductController::class, 'MultiImageUpdate'])->name('product.update-multi-images');
        Route::get('/categories/{id}',      [ProductController::class, 'CategoriesProduct'])->name('products.categories.list');


        // Admin Brand All Routes
        Route::prefix('brands')->group(function () {

            Route::get('/',            [ProductBrandController::class, 'BrandView'])->name('products.brands.all');
            Route::post('/store',      [ProductBrandController::class, 'BrandStore'])->name('products.brands.add');
            Route::get('/edit/{id}',   [ProductBrandController::class, 'BrandEdit'])->name('products.brands.edit');
            Route::post('/update',     [ProductBrandController::class, 'BrandUpdate'])->name('products.brands.update');
            Route::get('/delete/{id}', [ProductBrandController::class, 'BrandDelete'])->name('products.brands.delete');

        });

        // Admin Categories all Routes
        Route::prefix('categories')->group(function () {

            Route::get('/',             [ProductCategoryController::class, 'CategoryView'])->name('products.cats.all');
            Route::post('/store',       [ProductCategoryController::class, 'CategoryStore'])->name('products.cats.store');
            Route::get('/edit/{id}',    [ProductCategoryController::class, 'CategoryEdit'])->name('products.cats.edit');
            Route::post('/update/{id}', [ProductCategoryController::class, 'CategoryUpdate'])->name('products.cats.update');
            Route::get('/delete/{id}',  [ProductCategoryController::class, 'CategoryDelete'])->name('products.cats.delete');

        });

        // Admin SubCategories all Routes
        Route::prefix('subcategories')->group(function () {
            Route::get('/',             [ProductCategoryController::class, 'SubCategoryView'])->name('products.subcats.all');
            Route::post('/store',       [ProductCategoryController::class, 'SubCategoryStore'])->name('products.subcats.store');
            Route::get('/edit/{id}',    [ProductCategoryController::class, 'SubCategoryEdit'])->name('products.subcats.edit');
            Route::post('/update',      [ProductCategoryController::class, 'SubCategoryUpdate'])->name('products.subcats.update');
            Route::get('/delete/{id}',  [ProductCategoryController::class, 'SubCategoryDelete'])->name('products.subcats.delete');

        });

    });


    /* Ecomerce site part */
    // Admin Coupons All Routes
    Route::prefix('coupons')->group(function () {
        Route::get('/',             [CouponController::class, 'CouponView'])->name('coupons.all');
        Route::post('/store',       [CouponController::class, 'CouponStore'])->name('coupons.store');
        Route::get('/edit/{id}',    [CouponController::class, 'CouponEdit'])->name('coupons.edit');
        Route::post('/update/{id}', [CouponController::class, 'CouponUpdate'])->name('coupons.update');
        Route::get('/delete/{id}',  [CouponController::class, 'CouponDelete'])->name('coupons.delete');
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

        Route::get('/pending/',                 [AdminOrderController::class, 'PendingOrders'])->name('orders.pending');
        Route::get('/details/{order_id}',       [AdminOrderController::class, 'AdminOrdersDetails'])->name('orders.details');
        Route::get('/confirmed',                [AdminOrderController::class, 'ConfirmedOrders'])->name('orders.confirmed');
        Route::get('/processing',               [AdminOrderController::class, 'ProcessingOrders'])->name('orders.processing');
        Route::get('/picked',                   [AdminOrderController::class, 'PickedOrders'])->name('orders.picked');
        Route::get('/shipped',                  [AdminOrderController::class, 'ShippedOrders'])->name('orders.shipped');
        Route::get('/delivered',                [AdminOrderController::class, 'DeliveredOrders'])->name('orders.delivered');
        Route::get('/canceled',                 [AdminOrderController::class, 'CanceledOrders'])->name('orders.canceled');

        // Update Status
        Route::get('/pending/confirm/{order_id}',       [AdminOrderController::class, 'PendingToConfirm'])->name('orders.pending-confirm');
        Route::get('/confirmed/processing/{order_id}',  [AdminOrderController::class, 'ConfirmToProcessing'])->name('orders.confirm.processing');
        Route::get('/processing/picked/{order_id}',     [AdminOrderController::class, 'ProcessingToPicked'])->name('orders.processing.picked');
        Route::get('/picked/shipped/{order_id}',        [AdminOrderController::class, 'PickedToShipped'])->name('orders.picked.shipped');
        Route::get('/shipped/delivered/{order_id}',     [AdminOrderController::class, 'ShippedToDelivered'])->name('orders.shipped.delivered');
        Route::get('/invoice/download/{order_id}',      [AdminOrderController::class, 'AdminInvoiceDownload'])->name('orders.invoice.download');

    });

    // Admin Reports Routes
    Route::prefix('reports')->group(function () {

        Route::get('/',            [ReportController::class, 'ReportView'])->name('reports.all');

        Route::prefix('search/by/')->group(function () {
            Route::post('/date',   [ReportController::class, 'ReportByDate'])->name('reports.search-by-date');
            Route::post('/month',  [ReportController::class, 'ReportByMonth'])->name('reports.search-by-month');
            Route::post('/year',   [ReportController::class, 'ReportByYear'])->name('reports.search-by-year');
        });


    });

    // Admin Manage Stock Routes
    Route::prefix('stock')->group(function () {
        Route::get('/', [ProductController::class, 'ProductStock'])->name('product.stock');
    });

});
