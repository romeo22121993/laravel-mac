<?php

namespace App\Nova;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class SubscriptionDiscount extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\SubscriptionDiscount';

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
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Discount code', 'discount_code')
                ->help('Only letters and numbers')
                ->rules(['required', 'regex:/(^[A-Za-z0-9 ]+$)+/', 'max:15']),
            Date::make('Valid date', 'valid_date', function ($item) {
                return $item;
            })
                ->rules(['required']),
            Number::make('Valid Months', 'valid_months')
                ->rules(['required', 'min:1', 'max:12']),
            Number::make('Percentage', 'percentage')
                ->rules(['required']),
            Number::make('Max usage', 'max_usage')
                ->rules(['required']),
            Number::make('Usage', 'usage', function ($item) {
                return $item > 0 ? $item : 1;
            })
                ->rules(['required'])
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]]),

            Select::make('For sale subscriptions', 'sale')
                ->options([0 => 'No', 1 => 'Yes'])
                ->default(0)
                ->onlyOnForms(),

            Text::make('URL', 'url')->withMeta(['extraAttributes' => [
                'readonly' => true
            ]])
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
