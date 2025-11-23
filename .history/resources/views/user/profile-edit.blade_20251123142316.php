@extends('app')
@section('title', 'Edit Profil')

@section('content')
    <x-sidebar-user></x-sidebar-user>

    {{-- Kontainer utama halaman --}}
    <div class="ml-[16rem] p-6"> 
        {{-- atau konten lain kalau perlu --}}
    </div>

    {{-- MODAL — letakkan DI LUAR konten sidebar supaya benar-benar ditengah --}}
    <div role="dialog" aria-modal="true"
        class="fixed inset-0 z-50 flex items-center justify-center">
        
        <div
            class="w-full max-w-lg bg-background border p-6 shadow-lg rounded-lg animate-in fade-in zoom-in">
            
            <div class="flex flex-col space-y-1.5 text-center sm:text-left">
                <h2 class="text-lg font-semibold">Edit Profil</h2>
                <p class="text-sm text-muted-foreground">Perbarui informasi profil Anda di sini</p>
            </div>


            <form class="space-y-6 mt-4">
                {{-- Foto --}}
                <div class="flex flex-col items-center gap-3">
                    <span class="relative flex overflow-hidden rounded-full h-24 w-24 border-4 border-primary/20">
                        <img class="h-full w-full object-cover"
                            src="https://api.dicebear.com/7.x/avataaars/svg?seed=Ahmad">
                    </span>

                    <button type="button"
                        class="inline-flex items-center justify-center gap-2 border rounded-md h-9 px-3 text-sm hover:bg-accent hover:text-accent-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path>
                            <circle cx="12" cy="13" r="3"></circle>
                        </svg>
                        Ubah Foto
                    </button>
                </div>

                {{-- Input --}}
                <div class="space-y-4">
                    <div>
                        <label class="text-sm font-medium" for="name">Nama Lengkap</label>
                        <input id="name" value="Ahmad Fauzi"
                            class="w-full mt-1 h-10 rounded-md border px-3 py-2">
                    </div>

                    <div>
                        <label class="text-sm font-medium" for="username">Username</label>
                        <input id="username" value="ahmadfauzi"
                            class="w-full mt-1 h-10 rounded-md border px-3 py-2">
                    </div>

                    <div>
                        <label class="text-sm font-medium" for="email">Email</label>
                        <input id="email" type="email" value="ahmad.fauzi@example.com"
                            class="w-full mt-1 h-10 rounded-md border px-3 py-2">
                    </div>

                    <div>
                        <label class="text-sm font-medium" for="bio">Bio</label>
                        <textarea id="bio" rows="3"
                            class="w-full mt-1 rounded-md border px-3 py-2">Saya sedang belajar bahasa isyarat...</textarea>
                    </div>
                </div>

                {{-- Buttons --}}
                <div class="flex justify-end gap-2 pt-2">
                    <button type="button" class="border rounded-md px-4 py-2 text-sm hover:bg-accent">
                        Batal
                    </button>
                    <button type="submit" class="bg-primary text-white rounded-md px-4 py-2 hover:bg-primary/90">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection
