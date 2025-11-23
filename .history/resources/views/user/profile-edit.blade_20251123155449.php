@extends('app')
@section('title', 'Edit Profil')

@section('content')

{{-- Sidebar --}}
<x-sidebar-user></x-sidebar-user>

{{-- Konten Halaman --}}
<div class="ml-[16rem] p-6">
    {{-- (optional) Isi konten lain di sini --}}
</div>

{{-- ======================== MODAL ======================== --}}
<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/30">

    <div class="w-full max-w-lg bg-background border p-6 shadow-lg rounded-lg animate-in fade-in zoom-in">

        {{-- Header --}}
        <div class="flex flex-col space-y-1.5 text-center sm:text-left">
            <h2 class="text-lg font-semibold">Edit Profil</h2>
            <p class="text-sm text-muted-foreground">Perbarui informasi profil Anda di sini</p>
        </div>

        {{-- Form --}}
        <form action="{{ route('profile.update') }}" method="POST" class="mt-4">
            @csrf

            {{-- FOTO --}}

            {{-- INPUT --}}
            <div class="space-y-4">

                <div>
                    <label class="text-sm font-medium">Nama Lengkap</label>
                    <input type="text" name="name"
                        value="{{ old('name', $user->name) }}"
                        class="w-full h-10 rounded-md border px-3 py-2">
                </div>

                <div>
                    <label class="text-sm font-medium">Username</label>
                    <input type="text" name="username"
                        value="{{ old('username', $user->username) }}"
                        class="w-full h-10 rounded-md border px-3 py-2">
                </div>

                <div>
                    <label class="text-sm font-medium">Email</label>
                    <input type="email" name="email"
                        value="{{ old('email', $user->email) }}"
                        class="w-full h-10 rounded-md border px-3 py-2">
                </div>

                <div>
                    <label class="text-sm font-medium">Bio</label>
                    <textarea name="bio" rows="3"
                        class="w-full rounded-md border px-3 py-2">{{ old('bio', $user->bio) }}</textarea>
                </div>

            </div>

            {{-- BUTTONS --}}
            <div class="flex justify-end gap-2 pt-4">
                <a href="/profile"
                    class="border rounded-md px-4 py-2 text-sm hover:bg-accent">
                    Batal
                </a>
<a href="/profile">
                <button type="submit"
                    class="bg-primary text-white rounded-md px-4 py-2 hover:bg-primary/90">
                    Simpan Perubahan
                </button>
            </div>
</a>
        </form>

    </div>
</div>

@endsection
