<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Introduction;

use App\Models\User;
use App\Models\Manufacture;
use App\Models\Product;


use Illuminate\Database\Eloquent\Model;

class IntroductionController extends Controller
{

    public function index()
    {
        //
    }


    public function create(Request $request)
    {
        //
    }

    public function store(Request $request)
    {

      // Eloquentモデル
      $introduction = new Introduction;
      $introduction->introduction = $request->introduction;
      $introduction->user_id = $request->user_id;
      $introduction->manufacture_id = $request->manufacture_id;
      $introduction->product_id = $request->product_id;
      $introduction->application_time = $request->application_time;
      $introduction->judgement = $request->judgement;
      $introduction->save();
      // ルーティング「chat.index」にリクエスト送信（一覧ページに移動）
      return redirect()->route('chat.index');
    }

}