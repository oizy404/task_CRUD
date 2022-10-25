<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function show(Request $request){
        $fullname = $request->full_name;
        $age = $request->age;

        $valid;

        if($age>=18){
            $valid=true;
        }
        else if($age<18 && $age>0){
            $valid=false;
        }
        else{
            $valid=null;
        }
    
        return view('pages.output', [
            "fullname"=>$fullname,
            "valid"=>$valid
        ]);
    }
}
