<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Flexible;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\\Models\\Post';

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
        'id', 'title', 'description'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title', 'title')
                ->sortable()
                ->rules(['required', 'string', 'max:255']),

            Text::make('Sub Title', 'sub_title')
                ->sortable()
                ->rules('nullable'),

            Markdown::make('content')
                ->sortable()
                ->rules('required')
                ->hideFromIndex(),
            Select::make('Language', 'lang')
                ->options([
                    'en' => 'English',
                    'de' => 'German',
                    'es' => 'Spain',
                    'fr' => 'France',
                    'it' => 'Italy',
                    'ja' => 'Japan',
                    'pt' => 'Portugal'
                ])->rules(['string', 'max:2', 'required']),
            Text::make('Slug', 'slug')
                ->withMeta(['extraAttributes' => [
                    'readonly' => true,
                    'editing' => false
                ]])
                ->hideFromIndex(),
            Text::make('Url', 'url', function () {
                return config('app.url') . 'info/' . $this->model()->slug;
            })
                ->withMeta(['extraAttributes' => [
                    'readonly' => true,
                    'editing' => false,
                ]])
                ->hideFromIndex()
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
