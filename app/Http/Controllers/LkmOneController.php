<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lkm;
class LkmOneController extends Controller
{
    //
    public function updateLkm(Request $request){
        $lkm = Lkm::find($request->id);

        $update = $lkm->update($request->all());
        if($update){
            $msg = "true";
        } else {
            $msg = "false";
        }
        $result = array(['status' => $msg]);
        return redirect()->back()->with($result);
    }
}
