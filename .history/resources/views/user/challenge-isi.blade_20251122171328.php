@extends('app')
@section('content')

<main class="container mx-auto px-4 py-8">
    <div class="space-y-6">
        <div class="flex items-center gap-4"><button
                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-10 w-10"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left h-5 w-5">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg></button>
            <div class="flex-1">
                <h1 class="text-3xl font-bold mb-2">Master Abjad A-Z</h1>
                <p class="text-muted-foreground">Selesaikan semua gerakan abjad dari A sampai Z dengan benar</p>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex items-center gap-3">
                    <div class="p-3 rounded-xl bg-primary/10"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-trophy h-6 w-6 text-primary">
                            <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                            <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                            <path d="M4 22h16"></path>
                            <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                            <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                            <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                        </svg></div>
                    <div>
                        <div class="text-2xl font-bold text-primary">500 Poin</div>
                        <div class="text-sm text-muted-foreground">Reward</div>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="p-3 rounded-xl bg-primary/10"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-clock h-6 w-6 text-primary">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg></div>
                    <div>
                        <div class="text-2xl font-bold">23 jam 45 menit</div>
                        <div class="text-sm text-muted-foreground">Waktu Tersisa</div>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="p-3 rounded-xl bg-primary/10"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-target h-6 w-6 text-primary">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg></div>
                    <div>
                        <div class="text-2xl font-bold">5 Task</div>
                        <div class="text-sm text-muted-foreground">Total Target</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold">Progress Challenge</h3>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                        0/5 Selesai</div>
                </div>
                <div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="indeterminate" data-max="100"
                    class="relative w-full overflow-hidden rounded-full bg-secondary h-3">
                    <div data-state="indeterminate" data-max="100"
                        class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-100%);">
                    </div>
                </div>
                <p class="text-sm text-muted-foreground">0% Complete</p>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-8 bg-card border-border/50">
            <div class="text-center space-y-6">
                <div class="inline-block p-4 rounded-2xl bg-primary/10">
                    <div class="text-6xl">🤚</div>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-2">Gerakan huruf A</h2>
                    <p class="text-muted-foreground">Lakukan gerakan ini dengan benar untuk melanjutkan</p>
                </div>
                <div class="bg-muted/50 rounded-xl p-8 aspect-video flex items-center justify-center">
                    <p class="text-muted-foreground">Video panduan gerakan</p>
                </div><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 hover-glow">Selesai
                    &amp; Lanjut</button>
            </div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
            <h3 class="text-xl font-semibold mb-4">Daftar Task</h3>
            <div class="space-y-2">
                <div
                    class="flex items-center gap-3 p-4 rounded-xl transition-colors bg-primary/10 border border-primary/20">
                    <div class="h-5 w-5 rounded-full border-2 border-border"></div><span class="font-semibold">Gerakan
                        huruf A</span>
                </div>
                <div class="flex items-center gap-3 p-4 rounded-xl transition-colors bg-muted/30">
                    <div class="h-5 w-5 rounded-full border-2 border-border"></div><span
                        class="text-muted-foreground">Gerakan huruf B</span>
                </div>
                <div class="flex items-center gap-3 p-4 rounded-xl transition-colors bg-muted/30">
                    <div class="h-5 w-5 rounded-full border-2 border-border"></div><span
                        class="text-muted-foreground">Gerakan huruf C</span>
                </div>
                <div class="flex items-center gap-3 p-4 rounded-xl transition-colors bg-muted/30">
                    <div class="h-5 w-5 rounded-full border-2 border-border"></div><span
                        class="text-muted-foreground">Gerakan huruf D</span>
                </div>
                <div class="flex items-center gap-3 p-4 rounded-xl transition-colors bg-muted/30">
                    <div class="h-5 w-5 rounded-full border-2 border-border"></div><span
                        class="text-muted-foreground">Gerakan huruf E</span>
                </div>
            </div>
        </div>
    </div>
</main>
