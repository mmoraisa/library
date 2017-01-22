<?php

namespace App\Http\Controllers;

use App\Http\VO\BotResponseVO;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BotController extends Controller
{
    public function defaultWebHook(){
        $request_body = Input::all();

        $data = array('attrteste' => '1');
        $response = new BotResponseVO("teste speech","test display text",$data,[],"text source");

        return array('speech' => $request_body['result']['action']);
    }
}
