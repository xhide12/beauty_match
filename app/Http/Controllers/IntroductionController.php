<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Introduction;
use Auth;

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
      $introduction = new Introduction();
      $datetime = date_create()->format('Y-m-d H:i:s');

      $introduction->user_id = Auth::guard('user')->user()->id;

      $introduction->manufacture_id = Product::find($request->product_id)->manufacture->id;
      $introduction->product_id = $request->product_id;
      $introduction->application_time = $datetime;
      $introduction->judgement = 3;
      $introduction->save();
      // ルーティング「chat.index」にリクエスト送信（一覧ページに移動）
      return redirect()->route('user.introduction');
    }

}