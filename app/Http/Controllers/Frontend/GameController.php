<?php

namespace App\Http\Controllers\Frontend;

use App\Events\NewChatRoom;
use App\Http\Controllers\Controller;
use App\Models\Blog\BlogPost;
use App\Models\Category;
use App\Models\Product;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat\ChatMessage;
use App\Models\Chat\ChatRoom;
use App\Models\Game;
use App\Models\Turn;
use App\Events\NewChatMessage;
use App\Events\NewGame;
use App\Events\Play;
use App\Events\GameOver;

class GameController extends Controller
{

    /**
     * Main home page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function GamePage( Request $request ) {

        $user  = Auth::user();
        $usersQuery = User::where('id', '!=', $user->id);
        if ( $request->has('search') ){
            $usersQuery->where('name', 'like', "%{$request->get('search')}%");
        }
        $users = $usersQuery->paginate(2);

        return view('frontend.game.game', compact( 'user', 'users' ));
    }

    /**
     * New game function
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function newGame( Request $request ) {
        $user        = $request->user();
        $otherUserId = $request->get('user_id');
        $gameId      = Game::insertGetId([]);

        for($i = 1; $i <= 9; $i++)  {
            Turn::insert( [
                "game_id"   => $gameId,
                "id"        => $i,
                "type"      => $i % 2 ? 'x' : 'o',
                "player_id" => $i % 2 ? $user->id : $otherUserId
            ]);
        }

        event(new NewGame($otherUserId, $gameId, $user->name));
//        broadcast(new NewGame($otherUserId, $gameId, $user->name))->toOthers();

        return redirect("/board/{$gameId}");
    }


    public function board(Request $request, $id)
    {
        $user = $request->user();

        $players = Turn::where('game_id', '=', $id)->select('player_id', 'type')->distinct()->get();
        $playerType = $user->id == $players[0]->player_id ? $players[0]->type : $players[1]->type;
        $otherPlayerId = $user->id == $players[0]->player_id ? $players[1]->player_id : $players[0]->player_id;

        $pastTurns = Turn::where('game_id', '=', $id)->whereNotNull('location')->orderBy('id')->get();
        $nextTurn = Turn::where('game_id', '=', $id)->whereNull('location')->orderBy('id')->first();

        $locations = [
            1 => [
                "class" => "top left",
                "checked" => false,
                "type" => ""
            ],
            2 => [
                "class" => "top middle",
                "checked" => false,
                "type" => ""
            ],
            3 => [
                "class" => "top right",
                "checked" => false,
                "type" => ""
            ],
            4 => [
                "class" => "center left",
                "checked" => false,
                "type" => ""
            ],
            5 => [
                "class" => "center middle",
                "checked" => false,
                "type" => ""
            ],
            6 => [
                "class" => "center right",
                "checked" => false,
                "type" => ""
            ],
            7 => [
                "class" => "bottom left",
                "checked" => false,
                "type" => ""
            ],
            8 => [
                "class" => "bottom middle",
                "checked" => false,
                "type" => ""
            ],
            9 => [
                "class" => "bottom right",
                "checked" => false,
                "type" => ""
            ]
        ];

        foreach($pastTurns as $pastTurn){
            $locations[$pastTurn->location]["checked"] = true;
            $locations[$pastTurn->location]["type"] = $pastTurn->type;
        }

        return view('board', compact('user', 'id', 'nextTurn', 'locations', 'playerType', 'otherPlayerId'));
    }

    public function play(Request $request, $id)
    {
        $user = $request->user();
        $location = $request->get('location');

        $turn = Turn::where('game_id', '=', $id)->whereNull('location')->orderBy('id')->first();
        $turn->location = $location;
        $turn->save();
        event(new Play($id, $turn->type, $location, $user->id));

        return response()->json(["status" => "success", "data" => "Saved"]);
    }

    public function gameOver(Request $request, $id)
    {
        $user = $request->user();
        $location = $request->get('location');

        $turn = Turn::where('game_id', '=', $id)->whereNull('location')->orderBy('id')->first();
        $turn->location = $location;
        $turn->save();

        if($request->get('result') == "win"){
            $user->score++;
            $user->save();
        }
        $game = Game::find($id);
        $game->end_date = date("Y-m-d H:i:s");
        $game->save();

        event(new GameOver($id, $user->id, $request->get('result'), $location, $turn->type));
        return response()->json(["status" => "success", "data" => "Saved"]);
    }

}
