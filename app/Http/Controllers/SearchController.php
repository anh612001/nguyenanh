<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\User;
class SearchController extends Controller
{ 
    function index(){
        return view('Search');
    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = User::where('name','LIKE',"%{$query}%")->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
               <li><a href=' .route("detail",["ID"=>$row->id]).' >'.$row->name.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
       }
       
    }
}
