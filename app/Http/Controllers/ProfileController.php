<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $top = DB::table('users')
        ->join('kelas','users.id_kelas', '=', 'kelas.id_kelas')
        ->select('users.name', 'users.foto','kelas.nama_kelas')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $data = DB::table('kelas')
        ->select('nama_kelas', 'id_kelas')
        ->get();

        return view('profile.edit', compact('top', 'data'), [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();

            if ($user->foto) {
                Storage::disk('public')->delete('photo-profile/' . $user->foto);
            }
            // Handle file upload
            $file->storeAs('public/photo-profile', $filename);
            $data['foto'] = $filename;
        }

        $user->fill($data);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        DB::table('kumpulan')
        ->where('id_user', '=', $user->id)
        ->delete();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function delete_student(Request $request, $id) {
        DB::table('kumpulan')
        ->where('id_user', '=', $id)
        ->delete();

        DB::table('users')
        ->where('id', '=', $id)
        ->delete();

        return Redirect::to('/student');
    }
}
