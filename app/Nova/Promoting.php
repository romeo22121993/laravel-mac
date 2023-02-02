<?php

namespace App\Nova;

use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use OwenMelbz\RadioField\RadioButton;
use Timothyasp\Color\Color;
use Laravel\Nova\Http\Requests\NovaRequest;

class Promoting extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\Promoting';

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
        'id'
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
            RadioButton::make('Status', 'status')
                ->options([
                    0 => 'Draft',
                    1 => 'Publish'
                ])
                ->default(0),
            Text::make('Title'),
            Textarea::make('Description')->rules(['required']),
            Text::make('Link')->rules(['nullable']),
            Text::make('Button text')->rules(['required_with:link']),
            Color::make('Color')->rules(['required']),
            Select::make('Trigger')->rules(['required'])
            ->options([
                PROMOTION_ALL_USERS => 'All Users',
                PROMOTION_USERS_WITH_NO_ORDERS => 'Users with no Orders',
                PROMOTION_SUBSCRIBED_USERS => 'Subscribed Users',
                PROMOTION_FREE_SUBSCRIPTION_USERS => 'Free Subscribed Users',
                PROMOTION_USERS_MADE_MONEY => 'Users Made Money'
            ]),
            Date::make('Stores installed to date', 'date_install'),
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
