<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
use App\Models\Friend;
use App\Models\User;
use DB;
class ChatController extends Controller
{
    //
    function index(){
        $friend=DB::table('users')
                    ->join('friends','users.id','=','friends.friend_id')
                    ->select('users.*')
                    ->where('friends.user_id',4)
                    ->get();
        return view('chat',['listfriend'=>$friend]);
    }
    function getmessage(Request $request){
    
        if($request->get('id'))
            return $request->get('id');

    }
}
// $mes=message::factory()->count(10)->create();
// $mes->save();
