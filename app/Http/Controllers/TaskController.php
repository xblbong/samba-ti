<?php

namespace App\Http\Controllers;

use App\Models\pelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function create(){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        return view ('course.spv.create-task', compact('top'));
    }

    public function store(request $request){

        $request->validate([
            'nama_pelajaran' => ['required'],
            'deskripsi' => ['required'],
            'deadline' => ['required'],
            'background' => ['required'],
        ]);
        $data['nama_pelajaran'] = $request->nama_pelajaran;
        $data['deskripsi'] = $request->deskripsi;
        $data['deadline'] = $request->deadline;
        $data['background'] = $request->background;

        $pelajaran = pelajaran::create($data);

        $pelajaranId = $pelajaran->id_pelajaran;
        // insert data ke tabel kelas_pelajaran
        $data_kumpulan = [
            'id_pelajaran' => $pelajaranId,
            'id_kelas' => Auth::user()->id_kelas,
        ];
        // Simpan ke tabel 'kumpulan'
        DB::table('kelas_pelajaran')->insert($data_kumpulan);

        $profile_pelajaran = DB::table('users')
        ->select('id')
        ->where('id_kelas', '=', Auth::user()->id_kelas)
        ->get();


        // insert data ke tabel kumpulan untuk membuat pelajaran dari user
        foreach ($profile_pelajaran as $p) {
            $data_kumpulan = [
                'id_user' => $p->id,
                'id_pelajaran' => $pelajaranId,
                'nilai' => null,
                'status' => 'open',
                'tugas' => null,
            ];
            // Simpan ke tabel 'kumpulan'
            DB::table('kumpulan')->insert($data_kumpulan);
        }
        return redirect('tugasku');
    }

    public function edit(request $request,$id_pelajaran){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $data = pelajaran::find($id_pelajaran);

        return view('course.spv.update-task',compact('data', 'top'));
    }

    public function update(request $request,$id) {
        $request->validate([
            'nama_pelajaran' => ['required'],
            'deskripsi' => ['required'],
            'deadline' => ['required'],
            'background' => ['required'],
        ]);
        $data['nama_pelajaran'] = $request->nama_pelajaran;
        $data['deskripsi'] = $request->deskripsi;
        $data['deadline'] = $request->deadline;
        $data['background'] = $request->background;

        pelajaran::where('id_pelajaran', '=', $id)->update($data);

        return redirect('tugasku');
    }

    public function detail_open($id){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $initial = 'open';

        $data = DB::table('users')
                ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
                ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
                ->select('pelajarans.nama_pelajaran', 'users.*', 'pelajarans.deadline', 'kumpulan.tugas')
                ->where('kumpulan.id_user', '=', $id)
                ->where('kumpulan.status', '<>', 'Assigned')
                ->where('kumpulan.status', '<>', 'closed')
                ->get();
        return view('course/spv/detail', compact('data', 'top', 'initial'));
    }

    public function detail_assigned($id){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $initial = 'assigned';

        $data = DB::table('users')
        ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
        ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
        ->select('pelajarans.nama_pelajaran', 'users.*', 'pelajarans.deadline', 'kumpulan.id_kumpulan', 'kumpulan.tugas')
        ->where('kumpulan.id_user', '=', $id)
        ->where('kumpulan.status', '=', 'Assigned')
        ->get();
        return view('course/spv/detail', compact('data', 'top', 'initial'));
    }

    public function detail_closed($id){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $initial = 'closed';

        $data = DB::table('users')
        ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
        ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
        ->select('pelajarans.*', 'users.*', 'kumpulan.*', 'pelajarans.deadline')
        ->where('kumpulan.id_user', '=', $id)
        ->where('kumpulan.status', '=', 'closed')
        ->get();
        return view('course/spv/detail', compact('data', 'top', 'initial'));
    }

    public function delete($id){
        DB::table('kelas_pelajaran')
        ->where('id_pelajaran', '=', $id)
        ->delete();

        DB::table('kumpulan')
        ->where('id_pelajaran', '=', $id)
        ->delete();

        pelajaran::find($id)->delete();

        return redirect('/tugasku');
    }
}
