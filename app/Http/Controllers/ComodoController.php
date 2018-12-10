<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comodo;

class ComodoController extends Controller
{
    //
    public function getcomodos(Request $request){
        $comodos = Comodo::select('id','nome')->get();
        return Response()->json($comodos);
    }
}
