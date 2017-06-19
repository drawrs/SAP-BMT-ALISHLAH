<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetail;
class AkunController extends Controller
{
    //
    public function index(Request $reqest){
        $users = User::orderBy('name', 'asc')->paginate(20);
        //return $users;
        return view('akun.semua', compact('users'));
    }
    public function getAkun(Request $request){
        $user = User::find($request->id);
        $result = array('name' => $user->name, 'email' => $user->email, 'level' => $user->detail->level, 'jabatan' => $user->detail->jabatan);
        return response()->json($result);
    }
    public function postUbahAkun(Request $request){
        $user = User::find($request->id);

        if (is_null($user)) {
            return redirect()->back()->with(['msg' => "Akun tidak ditemukan!", 'type' => "danger"]);
        }
        $msg = "Gagal diupdate!";
        $type = "danger";

        $update_user = $user->update(['name' => $request->name]);
        if ($update_user) {
            $update_detail = UserDetail::where('user_id', $user->id)
                                        ->update(['jabatan' => $request->jabatan, 'level' => $request->level]);
            if ($update_detail) {
                $msg = "Berhasil diupdate!";
                $type = "success";
            }
        }
        $session = array('msg' => $msg, 'type' => $type);
        return redirect()->back()->with($session);
    }
    public function postUbahSandi(Request $request){
        $user = User::find($request->id);
        $msg = "Gagal diupdate!";
        $type = "danger";
        $update_user = $user->update(['password' => bcrypt($request->password)]);
        if ($update_user) {
                $msg = "Berhasil diupdate!";
                $type = "success";
            }
        $session = array('msg' => $msg, 'type' => $type);
        return redirect()->back()->with($session);
    }
}
