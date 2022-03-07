<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DetailController extends Controller
{
    //
    function show($id){
        $detail = User::where('id', '=', $id)->select('*')->first();   
        return view('detail', ['detail'=>$detail]);
    }
}
