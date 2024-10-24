<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $spv = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->select('kelas.nama_kelas', 'users.name', 'users.foto', 'users.no_hp', 'users.nim', 'users.status', 'users.id', 'users.validate')
        ->where('status', '=', 'spv')
        ->get();

        $data = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->select('kelas.nama_kelas', 'users.name', 'users.foto', 'users.no_hp', 'users.nim', 'users.status', 'users.id', 'users.validate')
        ->where('users.status', '=', 'student') //variabel kelas dari users
        ->get();

        $admin = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->select('kelas.nama_kelas', 'users.name', 'users.foto', 'users.no_hp', 'users.nim', 'users.status', 'users.id', 'users.validate')
        ->where('users.status', '=', 'admin') //variabel kelas dari users
        ->get();

        return view('course.control', compact('top', 'spv', 'data', 'admin'));
    }

    public function role_check(request $request,$id){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $data = User::find($id);

        return view('course/role', compact('data', 'top'));
    }
    public function role_validate(request $request,$id){
        $request->validate([
            'status' => ['required'],
        ]);

        User::where("id", $id)->update([
            'status' => $request->status,
        ]);
        return Redirect::to('/control');
    }
}
