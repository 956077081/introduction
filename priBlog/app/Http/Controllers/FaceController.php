<?php

namespace App\Http\Controllers;

use App\ReceiveMessage;
use Illuminate\Http\Request;

class FaceController extends Controller
{
    public function index(){
        return view('/front/layouts/master');
    }
    public function send(Request $request){
        $article = new ReceiveMessage();
        $article->name  =  $request->get('name');
        $article->phone= $request->get('tel');
        $article->message = $request->get('message');
        $article->email = $request->get('email');
        $bool = $article->save();
        if($bool){
            echo "提交成功!稍后将会对您回复!";
        }else{
            echo "提交失败!可重新提交!";
        }
    }
}
