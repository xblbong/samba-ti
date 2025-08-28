<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $data = DB::table('kelas')
        ->select('nama_kelas', 'id_kelas')
        ->get();

        return view('auth.register', compact('data'));
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'integer', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email:rfc,dns', 'max:255', 'unique:'.User::class],
            'foto' => ['required', 'mimes:png,jpg,jpeg', 'max:2048'],
            'status' => ['required', 'string', 'max:255'],
            'id_kelas' => ['required', 'integer', 'max:255'],
            'no_hp' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $image = $request->file('foto');
        $filename = date('Y-m-d').$image->getClientOriginalName();
        $path = 'photo-profile/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));
            $data['name'] = $request->name;
            $data['nim'] = $request->nim;
            $data['email'] = $request->email;
            $data['foto'] = $filename;
            $data['status'] = $request->status;
            $data['id_kelas'] = $request->id_kelas;
            $data['no_hp'] = $request->no_hp;
            $data['password'] = Hash::make($request->password);
            $data['validate'] = 'pending';

        $user = User::create($data);
        event(new Registered($user));

        Auth::login($user);

        $userId = $user->id;

        $profile_pelajaran = DB::table('kelas_pelajaran')
        ->select('id_pelajaran')
        ->where('id_kelas', '=', $data['id_kelas'])
        ->get();

        // insert data ke tabel kumpulan untuk membuat pelajaran dari user
        foreach ($profile_pelajaran as $p) {
            $data_kumpulan = [
                'id_pelajaran' => $p->id_pelajaran,
                'id_user' => $userId,
                'nilai' => null,
                'status' => 'open',
                'tugas' => null,
            ];
            // Simpan ke tabel 'kumpulan'
            DB::table('kumpulan')->insert($data_kumpulan);
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
