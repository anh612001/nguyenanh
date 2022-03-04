<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    //
    function index(){
         $key= isset($_GET['search']) ? $_GET['search'] : '';
         if(!empty($key)){
            $user=DB::select("SELECT * FROM users where name like '%".$key."%' ");
         }
        else $user=DB::select("SELECT * FROM users");
        
        return view('Search',['user'=>$user]);
    }
    // function getSearchAjax(Request $request)
    // {
    //     if($request->get('query'))
    //     {
    //         $query = $request->get('query');
    //         $data = DB::table('users')
    //         ->where('name', 'LIKE', "%{$query}%")
    //         ->get();
    //         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
    //         foreach($data as $row)
    //         {
    //            $output .= '
    //            <li><a href="data/'. $row->id .'">'.$row->name.'</a></li>
    //            ';
    //        }
    //        $output .= '</ul>';
    //        echo $output;
    //    }
    //    return view('Search');
    // }
  
}
