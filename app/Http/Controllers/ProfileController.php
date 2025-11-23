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
    $user = Auth::user();

    $user->update([
        'name' => $request->name,
        'username' => $request->username,
        'bio' => $request->bio,
        'profile_image' => $request->profile_image, // SEED TERSIMPAN
    ]);

    return redirect('/profile')->with('success', 'Profil berhasil diperbarui!');
}


}
