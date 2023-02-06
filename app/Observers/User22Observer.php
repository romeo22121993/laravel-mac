<?php

namespace App\Observers;

use App\Models\User;


class User22Observer
{

    public function updating(User $user)
    {
        /*
         * for nova - these fields are not allowed to be updated by the administrator
         */
        if (isset($user->total_orders)) {
            unset($user->created_at);
            unset($user->subscription_name);
            unset($user->billing_on);
            unset($user->ends_at);
            unset($user->status);
            unset($user->price);
            unset($user->views);
            unset($user->total_offers);
            unset($user->total_amount);
            unset($user->activated_on);
            unset($user->usage_charge_price);
            unset($user->discount);
            unset($user->total_orders);
            unset($user->created_at_charge);
            unset($user->billed_date);
            unset($user->payment_status);
            unset($user->total_amount_charge);
            unset($user->store_status);
        }

    }
}
