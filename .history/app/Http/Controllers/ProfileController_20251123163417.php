<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('user.profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'bio'      => 'nullable|string|max:255',
        ]);

        $user = Auth::user();

        $user->update([
    'name' => $request->name,
    'username' => $request->username,
    'bio' => $request->bio,
    'profile_image' => $request->profile_image, // SIMPAN SEED
]);


    return redirect('/profile')->with('success', 'Profil berhasil diperbarui!');
    }
}
