<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Support\Facades\Storage;
use OwenMelbz\RadioField\RadioButton;
use Silvanite\NovaFieldCheckboxes\Checkboxes;

class Apps extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Apps::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            ID::make(__('ID'), 'id')->sortable(),
            Number::make('Shopify app id', 'shopify_id')->min(1),
            Text::make('App name', 'app_name'),
            Text::make('Description', 'description'),
            Text::make('App store url', 'app_store_url'),
            Image::make('Img', 'img')->hideFromIndex(),
            Text::make('Discount code', 'discount_code'),
            Select::make('Payment', 'payment')
                ->options([
                    '0' => 'Free app',
                    '1' => 'Paid app'
                ])
                ->rules(['integer', 'min:0', 'max:1']),
            Number::make('Clicks on URL', 'clicks')->default(function () {
                return 0;
            })->min(0)
                ->withMeta(['extraAttributes' => [
                    'readonly' => true,
                    'editing' => false
                ]]),
            Number::make('Order', 'order'),
            RadioButton::make('Show only on dashboard', 'show_on_dashboard') ->options([
                0 => 'No',
                1 => 'Show on dashboard'
            ])
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
