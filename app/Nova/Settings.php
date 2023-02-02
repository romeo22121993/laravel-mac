<?php

namespace App\Nova;

use Armincms\Json\Json;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Settings extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\\Models\\NovaSetting';

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
        'id',
        'lang',
        'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make("Title", "title")
                ->rules(['string', 'max:30', 'required']),
            Json::make('settings', [
                Select::make('Language', 'language')
                ->options([
                    'en' => 'English',
                    'de' => 'German',
                    'es' => 'Spain',
                    'fr' => 'France',
                    'it' => 'Italy',
                    'ja' => 'Japan',
                    'pt' => 'Portugal'
                ])->rules(['string', 'max:2', 'required']),
                Text::make("Add to cart button", "add_to_cart_btn")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Added to  cart text", "add_to_cart_btn_added")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Facebook", "facebook")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Pinterest", "pinterest")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Snapchat", "snapchat")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Google", "google")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Title", "title")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Description", "description")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Add to cart button (upsell)", "add_to_cart_btn_upsell")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Replaced notice", "add_to_cart_btn_added_upsell")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Reject button", "reject_btn")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Checkout button", "checkout_btn")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Discount tag text", "save_text")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Cart", "minicart_text")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Total", "total_btn")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Product added to the cart notice", "alert_before_text")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Replaced product notice", "alert_before_text_upsell")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Timer message", "timer_msg")
                    ->rules(['string', 'max:255', 'nullable']),
                Text::make("Remove button", "remove_button")
                    ->rules(['string', 'max:55', 'nullable']),
                Select::make('Show popups app period', 'show_popup_all_period')
                    ->options([
                        '0' => 'Show everytime',
                        '1' => 'Show 1 popup',
                        '2' => 'Show 2 popups',
                        '3' => 'Show 3 popups',
                        '4' => 'Show 4 popups',
                        '5' => 'Show 5 popups',
                        '10' => 'Show 10 popups',
                        '20' => 'Show 20 popups',
                        '50' => 'Show 50 popups',
                    ])
                    ->rules(['integer', 'min:0', 'max:50']),
                Select::make('Show per day', 'show_popup_per_day')
                    ->options([
                        '0' => 'Show everytime',
                        '1' => 'Show 1 popup',
                        '2' => 'Show 2 popups',
                        '3' => 'Show 3 popups',
                        '4' => 'Show 4 popups',
                        '5' => 'Show 5 popups',
                        '10' => 'Show 10 popups',
                    ])
                    ->rules(['integer', 'min:0', 'max:10']),
                Select::make('When Popup to be displayed', 'when_popup_displayed')
                    ->options([
                        '0' => 'Immediately',
                        '1' => 'Exit Intent',
                        '2' => '5 Sec - Delay',
                        '3' => '10 Sec - Delay',
                        '4' => '30 Sec - Delay',
                        '5' => '60 Sec - Delay',
                        '6' => 'When User Scroll the page',
                    ])
                    ->rules(['integer', 'min:0', 'max:10'])
            ])->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
