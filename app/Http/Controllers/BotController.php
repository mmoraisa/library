<?php

namespace App\Http\Controllers;

use App\Http\Services\BotService;
use App\Http\VO\BotResponseVO;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BotController extends Controller
{
    private $botService;

    /**
     * BotController constructor.
     */
    public function __construct(BotService $botService)
    {
        $this->botService = $botService;
    }

    /**
     * @return array
     */
    public function defaultWebHook(){
        $request_body = Input::all();
        $action = $request_body['result']['action'];
        $speech = '';

        switch ($action){
            case 'knowBooks':
                $speech = $this->botService->knowBooks();
                break;
        }

        return array('speech' => $speech);
    }
}
