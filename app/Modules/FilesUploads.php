<?php

namespace App\Modules;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\ContactMail;
use Mail;

class FilesUploads
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * Function for uploading file by parameters
     *
     * @param $file
     * @param $path
     * @return string
     */
    public function fileUploadProcess($file, $path)
    {

        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path($path), $filename);
        $image_src = "$path/$filename";

        return $image_src;
    }

}
