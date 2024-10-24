<?php

namespace App\Http\Controllers;

use App\Models\kumpulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ClassroomController extends Controller
{
    public function notapproved(){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $spv = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'kelas.nama_kelas', 'users.no_hp', 'users.foto')
        ->where('users.id_kelas', '=', Auth::user()->id_kelas)
        ->where('status', '=', 'spv')
        ->first();

        return view('course/notapproved', compact('top', 'spv'));
    }

    public function index(){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $spv = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'kelas.nama_kelas', 'users.no_hp', 'users.foto')
        ->where('users.id_kelas', '=', Auth::user()->id_kelas)
        ->where('status', '=', 'spv')
        ->get();

        $data = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->join('kelas_pelajaran', 'kelas.id_kelas', '=', 'kelas_pelajaran.id_kelas')
        ->join('pelajarans', 'kelas_pelajaran.id_pelajaran', '=', 'pelajarans.id_pelajaran')
        ->select('kelas.*', 'pelajarans.*', 'users.name')
        ->where('kelas.id_kelas', '=', Auth::user()->id_kelas) //variabel kelas dari users
        ->where('users.id', '=', Auth::user()->id) //variabel nim dari users
        ->where('users.status', '=', Auth::user()->status) //variabel status dari users
        ->limit(6)
        ->get();


        return view('course/course',compact('data', 'spv', 'top'));
    }

    public function tugasku() {
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $data = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->join('kelas_pelajaran', 'kelas.id_kelas', '=', 'kelas_pelajaran.id_kelas')
        ->join('pelajarans', 'kelas_pelajaran.id_pelajaran', '=', 'pelajarans.id_pelajaran')
        ->select('kelas.*', 'pelajarans.*', 'users.name',)
        ->where('kelas.id_kelas', '=', Auth::user()->id_kelas) //variabel kelas dari users
        ->where('users.id', '=', Auth::user()->id) //variabel nim dari users
        ->where('users.status', '=', Auth::user()->status) //variabel status dari users
        ->get();

        return view('course/tugasku', compact('top', 'data'));
    }

    public function detail_task($id){
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $data = DB::table('kumpulan')
        ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
        ->select('kumpulan.id_kumpulan', 'kumpulan.id_user' ,'kumpulan.status', 'kumpulan.nilai', 'kumpulan.tugas', 'pelajarans.nama_pelajaran', 'pelajarans.deskripsi', 'pelajarans.deadline')
        ->where('kumpulan.id_user', '=', Auth::user()->id)
        ->where('kumpulan.id_pelajaran', '=', $id)
        ->first();

        return view('course/detail-task', compact('data', 'top'));
    }

    public function detail_task_update(request $request, $id){
        $request->validate([
            'tugas' => ['required', 'url'],
            'status' => ['required'],
        ]);
        DB::table('kumpulan')
        ->where('id_kumpulan', $id)
        ->update([
            'tugas' => $request->tugas,
            'status' => $request->status,
        ]);

        return redirect('/tugasku');
    }

    public function detail_task_unsubmit(request $request, $id){
        $request->validate([
            'status' => ['required'],
        ]);
        DB::table('kumpulan')
        ->where('id_kumpulan', $id)
        ->update([
            'tugas' => null,
            'status' => $request->status,
        ]);

        return redirect('/tugasku');
    }
    public function get_open(Request $request){
        $open = DB::table('users')
            ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
            ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
            ->select('users.name', 'users.id', DB::raw('count(pelajarans.nama_pelajaran) as total_pelajaran'))
            ->where('users.id_kelas', '=', Auth::user()->id_kelas)
            ->where('users.status', '=', 'student')
            ->where('kumpulan.status', '<>', 'Assigned')
            ->where('kumpulan.status', '<>', 'closed')
            ->groupBy('users.id')
            ->get();
            if ($request->ajax()) {
                $data_open = $open;

                return Datatables::of($data_open)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                                      <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                        return $actionBtn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
    }
    public function get_assigned(Request $request){
        $assigned = DB::table('users')
        ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
        ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
        ->select('users.name', 'users.id', DB::raw('count(pelajarans.nama_pelajaran) as total_pelajaran'))
        ->where('users.id_kelas', '=', Auth::user()->id_kelas)
        ->where('users.status', '=', 'student')
        ->where('kumpulan.status', '=', 'Assigned')
        ->groupBy('users.id')
        ->get();
        if ($request->ajax()) {
            $data_assigned = $assigned;

            return Datatables::of($data_assigned)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                                  <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function get_closed(Request $request){
        $closed = DB::table('users')
        ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
        ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
        ->select('users.name', 'users.id', DB::raw('count(pelajarans.nama_pelajaran) as total_pelajaran'))
        ->where('users.id_kelas', '=', Auth::user()->id_kelas)
        ->where('users.status', '=', 'student')
        ->where('kumpulan.status', '=', 'closed')
        ->groupBy('users.id')
        ->get();
        if ($request->ajax()) {
            $data_assigned = $closed;

            return Datatables::of($data_assigned)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                                  <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function get_student(Request $request){
        $student = DB::table('users')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->select('kelas.nama_kelas', 'users.name', 'users.foto', 'users.no_hp', 'users.nim', 'users.status', 'users.id', 'users.validate')
        ->where('kelas.id_kelas', '=', Auth::user()->id_kelas)
        ->where('users.status', '=', 'student') //variabel kelas dari users
        ->get();

        if ($request->ajax()) {
            $data_assigned = $student;
            return Datatables::of($data_assigned)
                ->addIndexColumn()
                ->addColumn('name_and_photo', function ($row) {
                    $imageUrl = asset('assets/images/' . $row->foto); // Assuming the image is stored in public/assets/images
                    $nameAndPhoto = '<div class="d-flex align-items-center">
                                        <img src="'.$imageUrl.'" alt="Student Image" class="w-[45px] shadow rounded-full aspect-square object-center object-cover mr-3">
                                        <span>'.$row->name.'</span>
                                     </div>';
                    return $nameAndPhoto;
                })
                ->addColumn('foto', function ($row) {
                    $imageUrl = asset('storage/photo-profile/' . $row->foto); // Assuming the image is stored in public/assets/images
                    return '<img src="'.$imageUrl.'" alt="Student Image" width="50" height="50">';
                })
                ->addColumn('wa_link', function ($row) {
                    // Mengganti awalan 0 dengan 62
                    $waLink = 'https://wa.me/' . preg_replace('/^0/', '62', $row->no_hp);
                    return '<a href="'.$waLink.'" target="_blank">Chat via WhatsApp</a>';
                })
                ->rawColumns(['foto', 'wa_link', 'name_and_photo'])
                ->make(true);
        }
    }



    public $chart;
    public function progressku(Request $request) {
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas', 'users.foto')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $spv = DB::table('users')
        ->select('name', 'users.foto')
        ->where('id_kelas', '=', Auth::user()->id_kelas)
        ->where('status', '=', 'spv')
        ->first();

        $student = DB::table('users')
        ->select('name', 'users.foto')
        ->where('id_kelas', '=', Auth::user()->id_kelas)
        ->where('status', '=', 'student')
        ->limit(3)
        ->get();

            $open = DB::table('users')
            ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
            ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
            ->select('pelajarans.nama_pelajaran', 'users.*', 'pelajarans.deadline', 'kumpulan.id_pelajaran')
            ->where('kumpulan.id_user', '=', Auth::user()->id)
            ->where('kumpulan.status', '<>', 'Assigned')
            ->where('kumpulan.status', '<>', 'closed')
            ->get();

            $assigned = DB::table('users')
            ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
            ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
            ->select('pelajarans.nama_pelajaran', 'users.*', 'pelajarans.deadline', 'kumpulan.id_pelajaran')
            ->where('kumpulan.id_user', '=', Auth::user()->id)
            ->where('kumpulan.status', '=', 'Assigned')
            ->get();

            $closed = DB::table('users')
            ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
            ->join('pelajarans', 'kumpulan.id_pelajaran', '=', 'pelajarans.id_pelajaran')
            ->select('pelajarans.*', 'users.*', 'kumpulan.*', 'pelajarans.deadline', 'kumpulan.id_pelajaran')
            ->where('kumpulan.id_user', '=', Auth::user()->id)
            ->where('kumpulan.status', '=', 'closed')
            ->get();

        $leaderboard = DB::table('users')
        ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
        ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto', 'kelas.nama_kelas', DB::raw('sum(kumpulan.nilai) as total_nilai'))
        ->groupBy('users.name', 'users.foto', 'kelas.nama_kelas', 'users.id')->orderBy('total_nilai', 'desc')
        ->where('users.status', '=', 'student')
        ->limit(5)
        ->get();

        if(Auth::User()->status === 'student'){
            $get_chart = DB::table('users')
            ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
            ->select('kumpulan.id_user','kumpulan.status', DB::raw('count(kumpulan.status) as total'))
            ->where('kumpulan.id_user', '=', Auth::user()->id)
            ->groupBy('kumpulan.status', 'kumpulan.id_user')->orderBy('kumpulan.status', 'desc')
            ->get();


            foreach($get_chart as $item){
                $chart['data'][] = $item->total;
                $chart['label'][] = $item->status;
            }
        }
        $cek = DB::table('users')
        ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
        ->select('kumpulan.status', DB::raw('count(users.id) as total'))
        ->where('users.status', '=', 'student')
        ->where('users.id_kelas', '=', Auth::user()->id_kelas)
        ->groupBy('kumpulan.status')->orderBy('kumpulan.status', 'desc')
        ->first();
        if($cek != null){
            if(Auth::User()->status === 'spv' or Auth::User()->status === 'admin'){
                $get_chart = DB::table('users')
                ->join('kumpulan', 'users.id', '=', 'kumpulan.id_user')
                ->select('kumpulan.status', DB::raw('count(users.id) as total'))
                ->where('users.status', '=', 'student')
                ->where('users.id_kelas', '=', Auth::user()->id_kelas)
                ->groupBy('kumpulan.status')->orderBy('kumpulan.status', 'desc')
                ->get();

                foreach($get_chart as $item){
                    $chart['data'][] = $item->total;
                    $chart['label'][] = $item->status;
                }
                $this->chart = json_encode($chart);
            }

        }

        $variables = [];

        if (isset($chart)) $variables['chart'] = $chart;
        if (isset($assigned)) $variables['assigned'] = $assigned;
        if (isset($closed)) $variables['closed'] = $closed;
        if (isset($spv)) $variables['spv'] = $spv;
        if (isset($open)) $variables['open'] = $open;
        if (isset($student)) $variables['student'] = $student;
        if (isset($leaderboard)) $variables['leaderboard'] = $leaderboard;
        if (isset($top)) $variables['top'] = $top;

        return view('course/progressku', $variables);
    }
}
