<?php

namespace App\Nova;

use App\Models\Offer;
use Armincms\Json\Json;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use OwenMelbz\RadioField\RadioButton;
use Timothyasp\Color\Color;

class Template extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\\Models\\OfferTemplate';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'sort_position'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
    	$fields[] = ID::make()->sortable();
	    $fields[] = Text::make('Title', 'title')
	                   ->sortable()
	                   ->rules(['required', 'string', 'max:255']);
	    $fields[] = Image::make('Widget preview image', 'widget_active_img');
	    $fields[] = Select::make('Popup type', 'popup_type')
	                      ->options([
								0 => 'All',
								1 => 'Announcement',
								2 => 'Cookies',
								3 => 'Sales',
								4 => 'Grow My List'
	                      ]);

	    if($this->model()->store_id > 0) {
		    $fields[] = RadioButton::make('Default/User template', 'store_id')
		                           ->options([
			                           0 => 'Default',
			                           $this->model()->store_id => "User's",
		                           ])
		                           ->default($this->model()->store_id);
	    } else {
	    	$fields[] = Number::make('Default/User template', 'store_id')
                  ->withMeta(['extraAttributes' => [
				    'readonly' => true,
				    'editing' => false
		    ]]);
	    }

	    $fields[] = Number::make('Sorting priority', 'sort_position')
	                      ->help('If the priority is higher, the popup will be shown first');

	    return $fields;
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        /*
         * custom sorting
         */
//        $query->leftJoin('offers', 'offers.template_id', '=', 'offer_templates.id')
//            ->addSelect(\DB::raw("COUNT(offers.id) AS usage_in_offers"))
//            ->addSelect('offer_templates.id')
//            ->addSelect('offer_templates.title')
//            ->addSelect('offer_templates.sort_position')
//            ->groupBy('offer_templates.id');
//        $query->where('store_id', 0);

        return $query;
    }
}
