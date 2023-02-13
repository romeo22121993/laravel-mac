<?php

namespace App\Http\Controllers\Chat;

use App\Events\NewChatRoom;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat\ChatMessage;
use App\Models\Chat\ChatRoom;
use App\Events\NewChatMessage;

class ChatController extends Controller
{

    /**
     * Function of getting rooms
     *
     * @param Request $request
     * @return ChatRoom[]|\Illuminate\Database\Eloquent\Collection
     */
    public function rooms( Request $request) {
        return ChatRoom::all();
    }

    /**
     * Function getting all messages by room id
     *
     * @param Request $request
     * @param $room_id
     * @return mixed
     */
    public function messages( Request $request, $room_id ) {

        return ChatMessage::where('chat_id', $room_id)->with('user')
            ->orderBy('created_at', 'DESC')->get();
    }

    /**
     * Function creating new message
     *
     * @param Request $request
     * @param $roomId
     * @return ChatMessage
     */
    public function newMessage( Request  $request, $roomId) {

        $newMessage = new ChatMessage();
        $newMessage->user_id = Auth::id();
        $newMessage->chat_id = $roomId;
        $newMessage->message = $request->message;
        $newMessage->save();

        broadcast(new NewChatMessage($newMessage))->toOthers();

        return $newMessage;

    }

    /**
     * Function creating new message
     *
     * @param Request $request
     * @return ChatMessage
     */
    public function newRoom( Request  $request) {

        $newRoom = new ChatRoom();
        $newRoom->name = $request->room;
        $newRoom->save();

        broadcast(new NewChatRoom($newRoom))->toOthers();

        return $newRoom;

    }


    /**
     * Main home page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ChatVue() {
        $products       = Product::where('status', 1)->get();
        $subcategory    = ProductCategory::where('cat_id', '>', 0)->orderBy('name', 'ASC')->get();

        $featured      = Product::where('featured', 1)->orderBy('id', 'DESC')->limit(6)->get();
        $hot_deals     = Product::where('hot_deals', 1)->where('discount_price', '!=', NULL)->orderBy('id', 'DESC')->limit(3)->get();
        $special_offer = Product::where('special_offer', 1)->orderBy('id', 'DESC')->limit(6)->get();
        $special_deals = Product::where('special_deals', 1)->orderBy('id', 'DESC')->limit(3)->get();

        $chat = 'chat';

        return view('frontend.chat.chat', compact( 'chat','blogposts', 'subcategory', 'products', 'featured', 'hot_deals', 'special_offer', 'special_deals' ));
    }

    /**
     * Main home page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ChatVue1() {
        $products       = Product::where('status', 1)->get();
        $subcategory    = ProductCategory::where('cat_id', '>', 0)->orderBy('name', 'ASC')->get();


        $chat = 'chat1';

        return view('frontend.chat.chat', compact( 'chat', 'subcategory',  'products' ));
    }


}
