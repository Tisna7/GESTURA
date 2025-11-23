@extends('app')
@section('title', 'Dashboard')

@section('content')
        <x-sidebar-user></x-sidebar-user>

<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
        <div>
            <h1 class="text-4xl font-bold mb-2">Profil Pengguna</h1>
            <p class="text-muted-foreground text-lg">Kelola informasi dan lihat pencapaian Anda</p>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-8 bg-card border-border/50">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="flex flex-col items-center gap-4"><span
                        class="relative flex shrink-0 overflow-hidden rounded-full h-32 w-32 border-4 border-primary/20"><img
                            class="aspect-square h-full w-full" alt="Ahmad Fauzi"
                            src="https://api.dicebear.com/7.x/avataaars/svg?seed=Ahmad"></span><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-square-pen h-4 w-4 mr-2">
                            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path
                                d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z">
                            </path>
                        </svg>Ubah Foto</button></div>
                <div class="flex-1 space-y-4">
                    <div>
                        <h2 class="text-3xl font-bold mb-1">Ahmad Fauzi</h2>
                        <p class="text-muted-foreground">{{ Auth::user()->username }}</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-mail h-4 w-4 text-muted-foreground">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg><span>{{ Auth::user()->email }}</span></div>
                        <div class="flex items-center gap-3 text-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-shield h-4 w-4 text-muted-foreground">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                </path>
                            </svg><span>User</span>
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                User</div>
                        </div>
                        <div class="flex items-center gap-3 text-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-activity h-4 w-4 text-muted-foreground">
                                <path
                                    d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                </path>
                            </svg><span>Status Akun:</span>
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-primary-foreground hover:bg-primary/80 bg-green-500">
                                Aktif</div>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-border/50">
                        <div class="flex items-start gap-3 text-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-file-text h-4 w-4 text-muted-foreground mt-0.5">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg>
                            <p class="text-muted-foreground">    {{ $user->username ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="pt-4"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 hover-glow"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-square-pen h-4 w-4 mr-2">
                                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path
                                    d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z">
                                </path>
                            </svg>Edit Profil</button></div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-primary/10 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-award h-6 w-6 text-primary">
                            <path
                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                            </path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg></div>
                    <div>
                        <div class="text-3xl font-bold text-primary">1250</div>
                        <div class="text-sm text-muted-foreground">Total Poin</div>
                    </div>
                </div>
            </div>
            <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-primary/10 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-clock h-6 w-6 text-primary">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg></div>
                    <div>
                        <div class="text-lg font-bold">22 November 2025, 14:30</div>
                        <div class="text-sm text-muted-foreground">Terakhir Login</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <div class="flex items-center gap-3 mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award h-6 w-6 text-primary">
                    <path
                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                    </path>
                    <circle cx="12" cy="8" r="6"></circle>
                </svg>
                <h3 class="text-2xl font-bold">Koleksi Badge</h3>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <div
                    class="flex flex-col items-center gap-2 p-4 rounded-lg border transition-all bg-card border-primary/30 hover:border-primary/50 cursor-pointer hover-glow">
                    <div class="text-4xl false">🎖️</div>
                    <p class="text-xs text-center font-medium">Pemula</p>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 text-xs">
                        Terbuka</div>
                </div>
                <div
                    class="flex flex-col items-center gap-2 p-4 rounded-lg border transition-all bg-card border-primary/30 hover:border-primary/50 cursor-pointer hover-glow">
                    <div class="text-4xl false">⭐</div>
                    <p class="text-xs text-center font-medium">Rajin Belajar</p>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 text-xs">
                        Terbuka</div>
                </div>
                <div
                    class="flex flex-col items-center gap-2 p-4 rounded-lg border transition-all bg-card border-primary/30 hover:border-primary/50 cursor-pointer hover-glow">
                    <div class="text-4xl false">🔤</div>
                    <p class="text-xs text-center font-medium">Master Alfabet</p>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 text-xs">
                        Terbuka</div>
                </div>
                <div
                    class="flex flex-col items-center gap-2 p-4 rounded-lg border transition-all bg-muted/20 border-border/30 opacity-50">
                    <div class="text-4xl grayscale blur-sm">🔢</div>
                    <p class="text-xs text-center font-medium">Jagoan Angka</p>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                        Terkunci</div>
                </div>
                <div
                    class="flex flex-col items-center gap-2 p-4 rounded-lg border transition-all bg-muted/20 border-border/30 opacity-50">
                    <div class="text-4xl grayscale blur-sm">🏆</div>
                    <p class="text-xs text-center font-medium">Tantangan Mingguan</p>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                        Terkunci</div>
                </div>
                <div
                    class="flex flex-col items-center gap-2 p-4 rounded-lg border transition-all bg-card border-primary/30 hover:border-primary/50 cursor-pointer hover-glow">
                    <div class="text-4xl false">🔥</div>
                    <p class="text-xs text-center font-medium">Konsisten 7 Hari</p>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 text-xs">
                        Terbuka</div>
                </div>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <h3 class="text-xl font-bold mb-4">Informasi Tambahan</h3>
            <div class="space-y-2 text-sm text-muted-foreground">
                <p>• Bergabung sejak: 15 Oktober 2025</p>
                <p>• Total materi diselesaikan: 12 materi</p>
                <p>• Level quiz tertinggi: Level 8</p>
                <p>• Streak harian: 5 hari berturut-turut</p>
            </div>
        </div>
    </div>
</main>

@endsection
