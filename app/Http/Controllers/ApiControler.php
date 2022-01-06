<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class ApiControler extends Controller
{
    public function listApi(){
        return response()->json(Concert::all());
    }

    public function createApi(Request $request){
        $item = Concert::create($request->all());
        return response()->json($item);
    }

    public function deleteApi($id){
        $concert = Concert::find($id);
        if($concert){
            $concert->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}
