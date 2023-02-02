<?php


namespace App\Nova\Filters;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Filters\Filter;

class UserSubscription extends Filter
{

    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        if ($value == 1) {
            $intersect = array_column(DB::table('store_charges')->get(['user_id'])->toBase()->toArray(), 'user_id');
            return $query->whereIn('users.id', $intersect);
        } elseif($value == 2) {
            $excert = array_column(DB::table('store_charges')->get(['user_id'])->toBase()->toArray(), 'user_id');
            return $query->whereNotIn('users.id', $excert);
        } else {
            return $query;
        }
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return [
            'All stores' => 0,
            'Store with subscription' => 1,
            'Store without subscription' => 2,
        ];
    }
}