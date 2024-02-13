<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;


class IndexController extends Controller
{
    public function ip1(){
        return view('ipsum1');
    }

    public function ip2(Request $request){
        $request->validate([
            'username' => ['required', 'alpha_num'],
            'email'=> ['required', 'email:rfc'],
            'age'=>['required', 'integer'],
            'phone'=>['required', 'integer']
        ]);

        $username= $request->input('username');
        $phone= $request->input('phone');

        $id     = env('TWILIO_APP_ID');
        $token  = env('TWILIO_APP_TOKEN');
        $from   = env('TWILIO_FROM_NUMBER');

        $client = new Client($id, $token);
        $client->messages->create( $phone, ['from' => $from, 'body' => "Thanks {$username}"]);

        return view('ipsum2', ['username'=> $username]);

        
    }


}
