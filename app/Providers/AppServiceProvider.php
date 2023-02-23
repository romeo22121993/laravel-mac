<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use Illuminate\Support\ServiceProvider;
use http\Env\Request;
use Illuminate\Support\Facades\View;
use DB;
use App\Http\Controllers\Frontend\ProductController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('*', function ($view) {
            $user      = auth()->user();
            $avatarImg = ( !empty( $user->avatar_img ) ) ? url( 'uploads/users/'.$user->avatar_img ) : asset('img/face.jpeg');

            $productController = new ProductController();
            /* Products Part */
            $productTags   = Product::groupBy('tags')->select('tags')->get();
            $productTags   = $productController->getDistinctTags( $productTags, 'tags' );

            $productColors = Product::groupBy('color')->select('color')->get();
            $productColors = $productController->getDistinctTags( $productColors, 'color' );

            $productSizes  = Product::groupBy('size')->select('size')->get();
            $productSizes  = $productController->getDistinctTags( $productSizes, 'size' );

            $productCategories = ProductCategory::where('cat_id', 0)->orderBy('name', 'ASC')->get();
            $productBrands     = ProductBrand::all();

            /* end Products Part */

            $courseProgress = !empty($user) ? $user->progress: "";
            $courses        = Course::all()->pluck('id')->toArray();
            $currentMonth   = date('Y-m');
            $postClonedArticles = !empty($user) ? DB::table('usermeta')->where('user_id', $user->id)->first() : [];
            $getDownloads   = empty($postClonedArticles->articles_downloads) ? array() : json_decode($postClonedArticles->articles_downloads, true);
            $monthDownloads = empty( $getDownloads[$currentMonth] ) ? array() : $getDownloads[$currentMonth];

            $view->with([
                'instructionPopup' => $a ?? 0,
                'currentUser'      => $user ?? [],
                'currentUserId'    => $user ? $user->id : '',
                'avatarImg'        => $avatarImg ?? '',
                'productColors'    => $productColors,
                'productSizes'     => $productSizes,
                'productTags'      => $productTags,
                'productCategories' => $productCategories,
                'productBrands'     => $productBrands,
                'courseProgress'    => json_decode($courseProgress),
                'courses'           => $courses,
                'monthDownloads'    => $monthDownloads,
            ]);

        });

    }
}
