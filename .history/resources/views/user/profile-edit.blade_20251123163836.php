@extends('app')
@section('title', 'Edit Profil')

@section('content')

<x-sidebar-user></x-sidebar-user>

<div class="fixed inset-0 z-50 flex items-center justify-center bg-black/30">

    <div class="w-full max-w-lg bg-background border p-6 shadow-lg rounded-lg">

        {{-- Header --}}
        <div class="flex flex-col space-y-1.5 text-center sm:text-left">
            <h2 class="text-lg font-semibold">Edit Profil</h2>
            <p class="text-sm text-muted-foreground">Perbarui informasi profil Anda di sini</p>
        </div>

        {{-- FORM --}}
        <form action="{{ route('profile.update') }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')

            {{-- FOTO --}}
            <div class="flex flex-col items-center gap-3 mb-4">

                {{-- PREVIEW FOTO --}}
                <span class="relative flex overflow-hidden rounded-full h-24 w-24 border-4 border-primary/20">
                    <img id="previewImage" class="h-full w-full object-cover"
                        src="{{ $user->profile_image
                            ? 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . $user->profile_image
                            : 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . ($user->username ?? 'user') }}">
                </span>

                {{-- INPUT HIDDEN UNTUK MENYIMPAN SEED --}}
                <input type="hidden" name="profile_image" id="avatarSeed"
                    value="{{ old('profile_image', $user->profile_image ?? $user->username) }}">

                {{-- TOMBOL RANDOM AVATAR --}}
                <button type="button" onclick="generateRandomAvatar()"
                    class="inline-flex items-center gap-2 border rounded-md h-9 px-3 text-sm hover:bg-accent hover:text-accent-foreground">
                    Ubah Foto
                </button>
            </div>

            {{-- INPUT LAIN --}}
            <div class="space-y-4">

                <div>
                    <label class="text-sm font-medium">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                        class="w-full h-10 rounded-md border px-3 py-2">
                </div>

                <div>
                    <label class="text-sm font-medium">Username</label>
                    <input type="text" name="username" value="{{ old('username', $user->username) }}"
                        class="w-full h-10 rounded-md border px-3 py-2">
                </div>

                <div>
                    <label class="text-sm font-medium">Bio</label>
                    <textarea name="bio" rows="3" class="w-full rounded-md border px-3 py-2">{{ old('bio', $user->bio) }}</textarea>
                </div>

            </div>

            {{-- BUTTONS --}}
            <div class="flex justify-end gap-2 pt-4">

                <a href="/profile" class="border rounded-md px-4 py-2 text-sm hover:bg-accent">
                    Batal
                </a>

                <button type="submit" class="bg-primary text-white rounded-md px-4 py-2 hover:bg-primary/90">
                    Simpan Perubahan
                </button>
            </div>

        </form>

    </div>
</div>

@endsection

{{-- SCRIPT RANDOM AVATAR --}}
<script>
function generateRandomAvatar() {
    const seeds = [
    "panda", "kitty", "puppy", "rabbit", "koala",
    "penguin", "hamster", "redpanda", "ninja-kid", "baby-robot",
    "tiny-hero", "junior-wizard", "mini-knight", "super-kid",
    "fairy-kid", "unicorn", "dragon-kid", "mermaid", "elf-kid",
    "cotton-candy", "marshmallow", "cupcake", "sunnyboy", "sunnygirl"
];


    // Ambil random seed
    const randomSeed = seeds[Math.floor(Math.random() * seeds.length)];

    // Update preview
    document.getElementById('previewImage').src =
        "https://api.dicebear.com/7.x/avataaars/svg?seed=" + randomSeed;

    // Simpan ke hidden input
    document.getElementById('avatarSeed').value = randomSeed;
}
</script>
