<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subscriber\UserDashboardController;
use App\Http\Controllers\Subscriber\DashboardCoursesController;
use App\Http\Controllers\Subscriber\DashboardArticlesController;
use App\Http\Controllers\Subscriber\DashboardCampaignsController;
use App\Http\Controllers\Subscriber\DashboardCampaignsEmailsController;
use App\Http\Controllers\Subscriber\DashboardGuidesController;
use App\Http\Controllers\Subscriber\DashboardResourcesController;
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


/** All Pages with User dashboards */
Route::group(['middleware' => ['auth', 'isSubscriber']], function(){

    Route::get('/',                [DashboardController::class, 'mainPage'])->name('main');
    Route::get('/admin-articles',  [DashboardArticlesController::class, 'articlesPage'])->name('articles');
    Route::get('/admin-campaigns', [DashboardCampaignsController::class, 'campaignsPage'])->name('campaigns');
    Route::get('/admin-campaigns/cloned', [DashboardCampaignsController::class, 'clonedCampaignsPage'])->name('campaigns.cloned');
    Route::get('/admin-resources', [DashboardResourcesController::class, 'resourcesPage'])->name('resources');
    Route::get('/admin-courses',   [DashboardCoursesController::class, 'coursesPage'])->name('courses');
    Route::get('/admin-guides',    [DashboardGuidesController::class, 'guidesPage'])->name('guides');

    Route::get('/courses/{slug}',  [DashboardCoursesController::class, 'singleCoursePage'])->name('single.course');
    Route::get('/article/{slug}',  [DashboardArticlesController::class, 'singleArticlePage'])->name('single.article');
    Route::get('/campaign/{slug}', [DashboardCampaignsController::class, 'singleCampaignPage'])->name('single.campaign');
    Route::get('/campaign/{slug}/report', [DashboardCampaignsController::class, 'singleCampaignReportPage'])->name('single.campaign.report');

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

        Route::post('/filtering-articles', [DashboardArticlesController::class, 'LoadMoreArticles']);
        Route::post('/filtering-campaigns', [DashboardCampaignsController::class, 'LoadMoreCampaigns']);

        Route::post('/download-article/',    [DashboardArticlesController::class, 'downloadArticle']);
        Route::post('/clone-article/',       [DashboardArticlesController::class, 'cloneArticle']);
        Route::post('/clone-campaign/',      [DashboardCampaignsController::class, 'cloneCampaign']);
        Route::post('/delete-cloned-campaign/', [DashboardCampaignsController::class, 'deleteClonedCampaign']);
        Route::post('/edit-cloned-article/', [DashboardArticlesController::class, 'editClonedArticle']);
        Route::post('/reset-clone-article/', [DashboardArticlesController::class, 'resetClonedArticle']);


        Route::post('/campaign-actions/',    [DashboardCampaignsEmailsController::class, 'campaignsActions']);

    });


});

