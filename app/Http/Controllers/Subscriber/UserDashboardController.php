<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon;

use App\Mail\OrderMail;
use PDF;

class UserDashboardController extends Controller
{

    /**
     * Function changing avatar for user
     *
     * @param Request $request
     * @return string[]
     */
    public function changeAvatar( Request $request )
    {

        $data = $request->all();
        $user = Auth::user();

        $image_src = 'none';
        if ( $request->file('file' ) ) {
            $file = $request->file('file');
            @unlink( public_path( 'uploads/users/'.$user->avatar_img ) );
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move( public_path('uploads/users' ), $filename );
            $image_src = $filename;
        }

        $user->avatar_img = $image_src;
        $user->save();

        $result = [ 'message' => 'done', 'avatar_url' => $image_src ];

        return $result;

    }



    /**
     * Function changing avatar for user
     *
     * @param Request $request
     * @return string[]
     */
    public function changeUserData( Request $request )
    {

        $user = Auth::user();

        // $user->name       = $request->name;
        $user->email      = $request->email;
        $user->firstname  = $request->firstname;
        $user->lastname   = $request->lastname;
        $user->phone      = $request->phone;
        $user->company    = $request->company;
        $user->position   = $request->position;
        if ( !empty( $request->password ) ) {
            $user->password  = Hash::make( $request->password );
        }

        $user->save();

        return [ 'status' => 'done' ];

    }




}
