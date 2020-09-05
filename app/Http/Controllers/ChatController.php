<?php
namespace App\Http\Controllers;

use App\Events\Chated;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Chat;

use Illuminate\Database\Eloquent\Model;

class ChatController extends Controller
{
 /**
     * @return View
     */
    public function index()
    {
        $chats = Chat::all();
        return view('channels.index',[
            "chats" => $chats
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        $chat = new Chat($request->all());
        $chat->save();
        event(new Chated($chat));

        return response()->json(['message' => '投稿しました。']);
    }
}