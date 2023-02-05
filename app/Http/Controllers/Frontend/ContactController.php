<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{

    public $adminEmail = 'romeo22121993@gmail.com';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Contact form logic via Ajax
     *
     * @param Request $request
     * @return bool
     */
    public function contactFormAjax( Request $request ) {

        $data = $request->all();

        Contact::create( $data );

        Mail::to( $this->adminEmail )->send( new ContactMail( $data ) );

        return redirect()->back()
            ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    }


}
