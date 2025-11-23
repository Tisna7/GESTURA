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
            {{-- FOTO --}}
<div class="flex flex-col items-center gap-3 mb-4">

    {{-- FOTO YANG DITAMPILKAN --}}
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">

    <span class="relative flex overflow-hidden rounded-full h-24 w-24 border-4 border-primary/20">
        <img id="previewImage" class="h-full w-full object-cover"
            src="{{ $user->profile_image
                ? asset('storage/' . $user->profile_image)
                : 'https://api.dicebear.com/7.x/avataaars/svg?seed=' . ($user->username ?? 'user') }}">
    </span>

    {{-- TOMBOL UNTUK MEMBUKA FILE UPLOAD --}}
    <button type="button"
        onclick="document.getElementById('profileImageInput').click()"
        class="inline-flex items-center gap-2 border rounded-md h-9 px-3 text-sm hover:bg-accent hover:text-accent-foreground">
        Ubah Foto
    </button>

    {{-- INPUT FILE (DISHINGGA DIKLIK MELALUI BUTTON) --}}
    <input type="file" name="profile_image" id="profileImageInput" accept="image/*" class="hidden">
</div>


                {{-- INPUT --}}
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
                <form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')


    {{-- Tombol --}}
    <div class="flex justify-end gap-2 pt-4">
        <a href="/profile" class="border rounded-md px-4 py-2 text-sm hover:bg-accent">
            Batal
        </a>

        <button type="submit" class="bg-primary text-white rounded-md px-4 py-2 hover:bg-primary/90">
            Simpan Perubahan
        </button>
    </div>

</form>



            </form>

        </div>
    </div>

@endsection
<script>
document.getElementById('profileImageInput').addEventListener('change', function(event) {
    const [file] = event.target.files;
    if (file) {
        document.getElementById('previewImage').src = URL.createObjectURL(file);
    }
});
</script>
