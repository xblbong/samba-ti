<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class SpvController extends Controller
{
    public $status = 'student'; //variabel status dari users
    public function student() {
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $spv = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->select('kelas.nama_kelas', 'users.name', 'users.foto', 'users.no_hp', 'users.nim', 'users.status')
        ->where('kelas.id_kelas', '=', Auth::user()->id_kelas)
        ->where('status', '=', 'spv')
        ->get();

        $data = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->select('kelas.nama_kelas', 'users.name', 'users.foto', 'users.no_hp', 'users.nim', 'users.status', 'users.id', 'users.validate')
        ->where('kelas.id_kelas', '=', Auth::user()->id_kelas)
        ->where('users.status', '=', 'student') //variabel kelas dari users
        ->get();

        $students = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.*')
        ->get();

        return view('course/spv/student', compact('top', 'students', 'data', 'spv'));
    }

    public function student_check(request $request,$id){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $data = User::find($id);

        return view('course/spv/validate', compact('data', 'top'));
    }

    public function student_validate(request $request, $id){
        $request->validate([
            'validate' => ['required'],
        ]);

        User::where("id", $id)->update([
            'validate' => $request->validate,
        ]);
        return Redirect::to('/student');
    }

    public function score($id){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $data = DB::table('kumpulan')
        ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
        ->select('kumpulan.id_kumpulan', 'kumpulan.id_user' ,'kumpulan.status', 'kumpulan.nilai', 'kumpulan.tugas', 'pelajarans.nama_pelajaran', 'pelajarans.deskripsi', 'pelajarans.deadline')
        ->where('kumpulan.id_kumpulan', '=', $id)
        ->first();

        return view('course/spv/score', compact('top', 'data'));
    }

    public function score_store(request $request, $id){
        $request->validate([
            'nilai' => ['required', 'integer'],
            'status' => ['required'],
        ]);

        DB::table('kumpulan')->where("id_kumpulan", $id)->update([
            'nilai' => $request->nilai,
            'status' => $request->status,
        ]);
        return Redirect::to('/progressku');
    }
}
