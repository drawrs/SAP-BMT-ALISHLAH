<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoTabController extends Controller
{
    //
    public function updateAplikasi(Request $request){
        $result = json_encode($request->isi);
        return $result;
    }
}
