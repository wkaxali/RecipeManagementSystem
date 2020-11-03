<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testForJson extends Controller
{
    public function store(Request $request,$data){
       // $_GET['a']
    //    parse_str($data,$myArray);
    //    var_dump(json_decode($data));


       $obj = json_decode($data);
    return $obj->{'make'};
      
    }
      
}
