@extends('app')
@section('title', 'Dashboard')

@section('content')
        <x-sidebar-user></x-sidebar-user>
<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
        <div class="flex items-center gap-4"><button
                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-10 w-10"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left h-5 w-5">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg></button>
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-2">
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                        Abjad</div>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-video h-3 w-3">
                            <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path>
                            <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                        </svg>2 menit</div>
                </div>
                <h1 class="text-4xl font-bold mb-2">Huruf A</h1>
                <p class="text-muted-foreground text-lg">Pelajari cara membuat gerakan huruf A dalam bahasa isyarat
                    Indonesia</p>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <div class="space-y-4">
                <h2 class="text-2xl font-bold flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-play h-6 w-6 text-primary">
                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                    </svg>Video Tutorial</h2>
                <div
                    class="bg-muted/50 rounded-xl aspect-video flex items-center justify-center relative overflow-hidden">
                    <div class="text-center space-y-4">
                        <div class="text-8xl"></div><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 hover-glow"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-play h-5 w-5 mr-2">
                                <polygon points="6 3 20 12 6 21 6 3"></polygon>
                            </svg>Putar Video</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <h2 class="text-2xl font-bold mb-6 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-book-open h-6 w-6 text-primary">
                    <path d="M12 7v14"></path>
                    <path
                        d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                    </path>
                </svg>Langkah-langkah</h2>
            <div class="space-y-6">
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center"><span
                                class="text-2xl font-bold text-primary">1</span></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold mb-2">Posisi Tangan</h3>
                        <p class="text-muted-foreground mb-4">Kepalkan tangan Anda dengan kuat, pastikan semua jari
                            tertutup rapat</p>
                        <div class="bg-muted/50 rounded-xl p-8 flex items-center justify-center">
                            {{-- <div class="text-6xl">👊</div> --}}
                        </div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center"><span
                                class="text-2xl font-bold text-primary">2</span></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold mb-2">Posisi Ibu Jari</h3>
                        <p class="text-muted-foreground mb-4">Letakkan ibu jari di samping kepalan tangan, menghadap ke
                            atas</p>
                        <div class="bg-muted/50 rounded-xl p-8 flex items-center justify-center">
                            {{-- <div class="text-6xl">👍</div> --}}
                        </div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center"><span
                                class="text-2xl font-bold text-primary">3</span></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold mb-2">Gerakan Final</h3>
                        <p class="text-muted-foreground mb-4">Tahan posisi ini dengan stabil. Ini adalah gerakan huruf A
                        </p>
                        <div class="bg-muted/50 rounded-xl p-8 flex items-center justify-center">
                            <div class="text-6xl">✊</div>/
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <h2 class="text-2xl font-bold mb-4">💡 Tips &amp; Tricks</h2>
            <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <div class="mt-1 h-2 w-2 rounded-full bg-primary flex-shrink-0"></div><span
                        class="text-muted-foreground">Pastikan kepalan tangan kuat dan rapat</span>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-1 h-2 w-2 rounded-full bg-primary flex-shrink-0"></div><span
                        class="text-muted-foreground">Ibu jari harus terlihat jelas di samping</span>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-1 h-2 w-2 rounded-full bg-primary flex-shrink-0"></div><span
                        class="text-muted-foreground">Jaga posisi tangan setinggi dada</span>
                </li>
            </ul>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <div class="flex flex-col md:flex-row gap-4"><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 flex-1 hover-glow"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 mr-2">
                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>Tandai Selesai</button><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8 flex-1">Kembali
                    ke Materi</button></div>
        </div>
    </div>
</main>
@endsection
