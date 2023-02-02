<?php

namespace App\Nova;

use App\Models\OfferTemplate;
use Armincms\Json\Json;
use DigitalCreative\ConditionalContainer\ConditionalContainer;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use OwenMelbz\RadioField\RadioButton;
use Silvanite\NovaFieldCheckboxes\Checkboxes;

class OfferPattern extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Models\OfferPattern';

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
            new Panel('Offer templates panel', function () {
                return [
                    ID::make()->sortable(),

                    Number::make('Usage offer', 'count_install')
                        ->sortable()
                        ->onlyOnIndex(),

                    RadioButton::make('Offer status', 'status')
                        ->options([
                            0 => 'Draft',
                            1 => 'Publish'
                        ])
                        ->default(0)
                        ->help('Publish this offer in the production app?'),
                    Text::make('Offer name', 'offer_name')
                        ->rules(['required'])
                        ->help('The name of the offer in the offer panel.'),
                    Textarea::make('Offer descriptions', 'offer_descriptions')
                        ->rules(['required'])
                        ->help('The descriptions of the offer in the offer panel.'),

                    Image::make('Image')
                        ->help('The svg picture of the offer in the offer panel.'),
                ];
            }),

            new Panel('Offer data', function () {
                $offerTemplates = OfferTemplate::where(['store_id' => 0, 'widget_type' => 1])->select(['id', 'title'])->toBase()->get();
                $widgets = [];
                foreach ($offerTemplates as $offerTemplate) {
                    $widgets[$offerTemplate->id] = $offerTemplate->title;
                }

                $offerTemplatesBundle = OfferTemplate::where(['store_id' => 0, 'widget_type' => 3])->select(['id', 'title'])->toBase()->get();
                $widgetsBundles = [];
                foreach ($offerTemplatesBundle as $offerTemplate) {
                    $widgetsBundles[$offerTemplate->id] = $offerTemplate->title;
                }


                return [
                    Json::make('offer', [
                        Select::make('Offer type', 'main_offer_field->offer_type')
                            ->options([
                                OFFER_TYPE_POST_PURCHASE => 'Post Purchase',
                                OFFER_TYPE_CROSS_SELL => 'Cross Sell',
                                OFFER_TYPE_UPP_SELL => 'Upsell',
                                OFFER_TYPE_BUNDLE => 'Bundle',
                                OFFER_TYPE_DISCOUNT => 'Discount',
                                OFFER_TYPE_FREQUENTLY_BOUGHT_TOGETHER => 'Frequently Bought Together',
                            ]),

                        RadioButton::make('Popup type', 'offer_field->popup_type')
                            ->options([
                                1 => 'Default popup',
                                2 => 'Float popup'
                            ])
                            ->rules(['required'])
                            ->default(1),


                        NovaDependencyContainer::make([
                            RadioButton::make('Type of Float Popup', 'offer->offer_field->float_type')
                                ->options([
                                    1 => 'Button + Icon',
                                    2 => 'Title + Button'
                                ])
                                ->default(1),

                            Text::make('Set text for button', 'offer->offer_field->float_btn_text')
                        ])->dependsOn('offer_field->popup_type', 2),

                        NovaDependencyContainer::make([
                            Select::make('Trigger event', 'offer->main_offer_field->trigger_event')
                                ->options([
                                    OFFER_TRIGGER_EVENT_ADD_TO_CART => 'Add to cart',
                                    OFFER_TRIGGER_EVENT_BEFORE_CHECKOUT => 'Before checkout',
                                    OFFER_TRIGGER_EVENT_AFTER_CHECKOUT => 'After checkout',
                                    OFFER_TRIGGER_EVENT_CERTAIN_BUTTON => 'Certain Button',
                                    OFFER_TRIGGER_EVENT_PRODUCT_PAGE => 'Product page',
                                    OFFER_TRIGGER_EVENT_EXIT_INTENT => 'Exit Intent',
                                    OFFER_TRIGGER_EVENT_HOME_PAGE => 'Home Page',
                                    OFFER_TRIGGER_EVENT_COLLECTIONS_PAGE => 'Collections Page',
                                    OFFER_TRIGGER_EVENT_BLOG_PAGE => 'Blog Page',
                                    OFFER_TRIGGER_EVENT_NEW_BEFORE_CHECKOUT => 'New Before Checkout'

                                ])->rules(['required']),

                            NovaDependencyContainer::make([
                                Textarea::make('Certain Button tags', 'offer->main_offer_field->show_after_add_to_cart_button')->help('Paste here code snippet for the button you want the trigger to be assigned to'),
                            ])
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_CERTAIN_BUTTON),

                            NovaDependencyContainer::make([
                                Select::make('Trigger products', 'offer->main_offer_field->trigger_type')
                                    ->options([
                                        OFFER_TRIGGER_MOST_SOLD_PRODUCTS => 'Most sold products (the same as set manually)',
                                        OFFER_TRIGGER_RECENT_PRODUCTS => 'Most Recent Products (by latest created Date)',
                                        OFFER_TRIGGER_MOST_PROFITABLE_PRODUCTS => 'Most profitable products',
                                        OFFER_TRIGGER_ALL_PRODUCTS => 'Any Products'
                                    ])->rules(['required']),

                                NovaDependencyContainer::make([
                                    Number::make('Count trigger products', 'offer->main_offer_field->count_trigger_products')
                                        ->rules(['required']),
                                ])
                                    ->dependsOn('offer->main_offer_field->trigger_type', OFFER_TRIGGER_RECENT_PRODUCTS)
                                    ->dependsOn('offer->main_offer_field->trigger_type', OFFER_TRIGGER_MOST_PROFITABLE_PRODUCTS)
                                    ->dependsOn('offer->main_offer_field->trigger_type', OFFER_TRIGGER_MOST_SOLD_PRODUCTS),
                            ])
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_ADD_TO_CART)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_AFTER_CHECKOUT)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_PRODUCT_PAGE)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_EXIT_INTENT)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_HOME_PAGE)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_COLLECTIONS_PAGE)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_BLOG_PAGE)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_NEW_BEFORE_CHECKOUT),

                            NovaDependencyContainer::make([
                                Select::make('Trigger products', 'offer->main_offer_field->trigger_type')
                                    ->options([
                                        OFFER_TRIGGER_MOST_SOLD_PRODUCTS => 'Most sold products (the same as set manually)',
                                        OFFER_TRIGGER_MOST_PROFITABLE_PRODUCTS => 'Most profitable products',
                                        OFFER_TRIGGER_ALL_PRODUCTS => 'Any Products',
                                        OFFER_TRIGGER_WITHOUT_PRODUCTS => 'Without products'
                                    ])->rules(['required']),

                                NovaDependencyContainer::make([
                                    Number::make('Count trigger products', 'offer->main_offer_field->count_trigger_products')
                                        ->rules(['required']),
                                ])
                                    ->dependsOn('offer->main_offer_field->trigger_type', OFFER_TRIGGER_RECENT_PRODUCTS)
                                    ->dependsOn('offer->main_offer_field->trigger_type', OFFER_TRIGGER_MOST_PROFITABLE_PRODUCTS)
                                    ->dependsOn('offer->main_offer_field->trigger_type', OFFER_TRIGGER_MOST_SOLD_PRODUCTS),
                            ])
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_BEFORE_CHECKOUT)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_CERTAIN_BUTTON),
                        ])
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_CROSS_SELL)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_UPP_SELL)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_DISCOUNT),

                        NovaDependencyContainer::make([
                            Select::make('Trigger event', 'offer->main_offer_field->trigger_event')
                                ->options([
                                    OFFER_TRIGGER_EVENT_ADD_TO_CART => 'Add to cart',
                                    OFFER_TRIGGER_EVENT_PRODUCT_PAGE => 'Product page',
                                ])->rules(['required']),

                            NovaDependencyContainer::make([
                                Select::make('Trigger products', 'offer->main_offer_field->trigger_type')
                                    ->options([
                                        OFFER_TRIGGER_ALL_PRODUCTS => 'Any Products'
                                    ])->rules(['required']),
                            ])
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_ADD_TO_CART)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_PRODUCT_PAGE),
                        ])
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_BUNDLE)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_FREQUENTLY_BOUGHT_TOGETHER),

                        NovaDependencyContainer::make([
                            Select::make('Trigger event', 'offer->main_offer_field->trigger_event')
                                ->options([
                                    OFFER_TRIGGER_EVENT_AFTER_CHECKOUT => 'After checkout'
                                ])->rules(['required']),

                            NovaDependencyContainer::make([
                                Select::make('Trigger products', 'offer->main_offer_field->trigger_type')
                                    ->options([
                                        OFFER_TRIGGER_ALL_PRODUCTS => 'Any Products'
                                    ])->rules(['required']),
                            ])
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_ADD_TO_CART)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_AFTER_CHECKOUT)
                                ->dependsOn('offer->main_offer_field->trigger_event', OFFER_TRIGGER_EVENT_PRODUCT_PAGE),
                        ])
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_POST_PURCHASE),

                        Text::make('', 'main_offer_field->status')
                            ->withMeta([
                                'value' => 1,
                                'type' => 'hidden'
                            ]),
                        Text::make('Name', 'main_offer_field->name')
                            ->rules(['required'])
                            ->help('Main-offer title.'),

                        Select::make('Cart value', 'main_offer_field->cart_value')
                            ->options([
                                1 => 'Average Order Value min',
                                2 => 'Average Order Value max',
                                3 => 'Set manually',
                            ]),
                        NovaDependencyContainer::make([
                            Number::make('Cart Value min', 'offer->main_offer_field->cart_min'),

                            Number::make('Cart Value max', 'offer->main_offer_field->cart_max'),
                        ])
                            ->rules(['required'])
                            ->dependsOn('main_offer_field->cart_value', 3),

                        Text::make('Title', 'offer_field->title')
                            ->rules(['required'])
                            ->help('Offer title.'),

                        Textarea::make('Descriptions', 'offer_field->description'),

                        NovaDependencyContainer::make([
                            Select::make('Product type', 'offer->offer_field->productsType')
                                ->rules(['required'])
                                ->options([
                                    1 => 'Autopilot',
                                    3 => 'Most sold products',
                                    4 => 'Most profitable products',
                                ]),
                        ])
                            ->rules(['required'])
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_CROSS_SELL)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_UPP_SELL)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_POST_PURCHASE)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_DISCOUNT),

                        NovaDependencyContainer::make([
                            Select::make('Product type', 'offer->offer_field->productsType')
                                ->rules(['required'])
                                ->options([
                                    3 => 'Most sold products',
                                    4 => 'Most profitable products',
                                ]),
                        ])
                            ->rules(['required'])
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_BUNDLE)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_FREQUENTLY_BOUGHT_TOGETHER),

                        Text::make('Qty products', 'offer_field->products->0->productQty')
                            ->help('Qty of products in popup.'),

                        Number::make('Percent discount', 'offer_field->products->0->discount'),

                        Text::make('Limit Number of Products ', 'offer_field->max_products_number')
                            ->help('Choose how many products can be added to cart'),

                        NovaDependencyContainer::make([
                            Select::make('Templates', 'offer->offer_field->template_id')
                                ->options($widgets)
                                ->rules(['required', 'min:1']),
                        ])
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_CROSS_SELL)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_UPP_SELL)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_POST_PURCHASE)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_DISCOUNT),

                        NovaDependencyContainer::make([
                            Select::make('Templates bundles', 'offer_field->template_id')
                                ->options($widgetsBundles)
                                ->rules(['required', 'min:1']),
                        ])
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_BUNDLE)
                            ->dependsOn('main_offer_field->offer_type', OFFER_TYPE_FREQUENTLY_BOUGHT_TOGETHER),

                        RadioButton::make('Timer On / Off', 'offer_field->allow_timer')
                            ->options([
                                0 => 'No',
                                1 => 'Yes'
                            ])
                            ->rules(['required'])
                            ->default(0),

                        NovaDependencyContainer::make([
                            Text::make('Timer text', 'offer->offer_field->timer_text'),
                            Text::make('Timer minutes', 'offer->offer_field->timer_minutes'),
                            Text::make('Timer seconds', 'offer->offer_field->timer_seconds')

                        ])
                            ->dependsOn('offer_field->allow_timer', 1),

                    ])->hideFromIndex(),
                ];
            }),


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
