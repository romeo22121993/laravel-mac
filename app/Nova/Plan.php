<?php

namespace App\Nova;

use App\Models\SubscriptionPrice;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use OwenMelbz\RadioField\RadioButton;
use Silvanite\NovaFieldCheckboxes\Checkboxes;

class Plan extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\\Models\\SubscriptionPrice';

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
        'id', 'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        $subscription = SubscriptionPrice::where('parent_id', '0')->select(['id', 'title'])->get();
        $select = [0 => 'Main'];

        $select = array_merge($select, array_combine(array_column($subscription->toArray(), 'id'), array_column($subscription->toArray(), 'title')));

        return [
            ID::make()->sortable(),

            Text::make('title')
                ->sortable()
                ->rules(['required', 'string', 'max:255']),

            Textarea::make('description')
                ->sortable()
                ->rules('required')
                ->hideFromIndex(),

            Markdown::make('html')
                ->sortable()
                ->rules('required')
                ->hideFromIndex(),

            Currency::make('price')
                ->sortable()
                ->rules('required'),


            Number::make('total_orders')
                ->sortable()
                ->rules('required'),


            Select::make('Recurring Application Charge', 'parent_id')
                ->options($select)
                ->default(0)
                ->onlyOnForms(),

            RadioButton::make('Free for old stores', 'free_for_old')
                ->options([
                    1 => 'On',
                    0 => 'Off'
                ])
                ->default(2),
            NovaDependencyContainer::make([
                Date::make('Free before', 'free_before')
            ])->dependsOn('free_for_old', 1),

            Select::make('Sale', 'sale')
                ->options([0 => 'No', 1 => 'Yes'])
                ->default(0)
                ->onlyOnForms(),
        ];
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
}
