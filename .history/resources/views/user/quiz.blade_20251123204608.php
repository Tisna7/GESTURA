@extends('app')
@section('title', 'Dashboard')

@section('content')
        <x-sidebar-user></x-sidebar-user>

<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
                <div>
                    <h1 class="text-4xl font-bold mb-2">Quiz &amp; Level</h1>
                    <p class="text-muted-foreground text-lg">Uji kemampuanmu dan kumpulkan bintang</p>
                </div>
                <div class="rounded-lg border text-card-foreground shadow-sm p-8 bg-card border-border/50">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div>
                            <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-trophy h-5 w-5 text-yellow-500">
                                    <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                    <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                    <path d="M4 22h16"></path>
                                    <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                    <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                    <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                </svg><span class="text-sm text-muted-foreground">Level Selesai</span></div>
                            <div class="text-3xl font-bold">12/24</div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-star h-5 w-5 text-primary">
                                    <path
                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                    </path>
                                </svg><span class="text-sm text-muted-foreground">Total Bintang</span></div>
                            <div class="text-3xl font-bold text-primary">45</div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-trending-up h-5 w-5 text-green-500">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg><span class="text-sm text-muted-foreground">Akurasi Rata-rata</span></div>
                            <div class="text-3xl font-bold text-green-500">87%</div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-trophy h-5 w-5 text-orange-500">
                                    <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                    <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                    <path d="M4 22h16"></path>
                                    <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                    <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                    <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                                </svg><span class="text-sm text-muted-foreground">Progress</span></div>
                            <div class="text-3xl font-bold text-orange-500">50%</div>
                        </div>
                    </div>
                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="indeterminate"
                        data-max="100" class="relative w-full overflow-hidden rounded-full bg-secondary h-3 mt-6">
                        <div data-state="indeterminate" data-max="100"
                            class="h-full w-full flex-1 bg-primary transition-all"
                            style="transform: translateX(-50%);"></div>
                    </div>
                </div>
                <div class="space-y-8">
                    <h2 class="text-2xl font-bold">Pilih Level</h2>
                    <div class="space-y-4">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 false">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="text-5xl">🔤</div>
                                    <div>
                                        <h3 class="text-2xl font-bold mb-1">Level Abjad</h3>
                                        <p class="text-sm text-muted-foreground">Abjad A-Z</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-green-500/10 text-green-500 border-green-500/20">
                                        Selesai</div>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-5 w-5 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="font-bold text-lg">15/15</span></div>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-4"><span
                                    class="text-sm text-muted-foreground">Akurasi: 92%</span>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-2 flex-1">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 pl-4">
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            1</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Abjad A-E</h4>
                                <p class="text-xs text-muted-foreground mb-3">5 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><a href="/latihan-isi"><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button></a>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            2</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Abjad F-J</h4>
                                <p class="text-xs text-muted-foreground mb-3">5 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            3</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Abjad K-O</h4>
                                <p class="text-xs text-muted-foreground mb-3">5 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            4</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Abjad P-T</h4>
                                <p class="text-xs text-muted-foreground mb-3">5 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            5</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Abjad U-Z</h4>
                                <p class="text-xs text-muted-foreground mb-3">5 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 false">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="text-5xl">🔢</div>
                                    <div>
                                        <h3 class="text-2xl font-bold mb-1">Level Angka</h3>
                                        <p class="text-sm text-muted-foreground">Angka 1-100</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-green-500/10 text-green-500 border-green-500/20">
                                        Selesai</div>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-5 w-5 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="font-bold text-lg">12/12</span></div>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-4"><span
                                    class="text-sm text-muted-foreground">Akurasi: 88%</span>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-2 flex-1">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 pl-4">
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            1</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Angka 1-10</h4>
                                <p class="text-xs text-muted-foreground mb-3">10 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            2</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Angka 11-50</h4>
                                <p class="text-xs text-muted-foreground mb-3">10 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            3</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Angka 51-100</h4>
                                <p class="text-xs text-muted-foreground mb-3">10 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            4</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Campuran Angka</h4>
                                <p class="text-xs text-muted-foreground mb-3">10 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 false">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="text-5xl">📝</div>
                                    <div>
                                        <h3 class="text-2xl font-bold mb-1">Level Imbuhan</h3>
                                        <p class="text-sm text-muted-foreground">me-, di-, ke-, pe-</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                        Progress</div>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-5 w-5 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="font-bold text-lg">6/9</span></div>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-4"><span
                                    class="text-sm text-muted-foreground">Akurasi: 75%</span>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-2 flex-1">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(-33.3333%);"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 pl-4">
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            1</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Imbuhan me- &amp; di-</h4>
                                <p class="text-xs text-muted-foreground mb-3">8 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            2</div>
                                        <div
                                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-green-500/10 text-green-500 border-green-500/20 text-xs">
                                            ✓</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">3/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Imbuhan ke- &amp; pe-</h4>
                                <p class="text-xs text-muted-foreground mb-3">8 Pertanyaan</p>
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    data-state="indeterminate" data-max="100"
                                    class="relative w-full overflow-hidden rounded-full bg-secondary h-1.5 mb-3">
                                    <div data-state="indeterminate" data-max="100"
                                        class="h-full w-full flex-1 bg-primary transition-all"
                                        style="transform: translateX(0%);"></div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Ulangi</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            3</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Campuran Imbuhan</h4>
                                <p class="text-xs text-muted-foreground mb-3">10 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Mulai</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 false">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="text-5xl">😊</div>
                                    <div>
                                        <h3 class="text-2xl font-bold mb-1">Level Emosi</h3>
                                        <p class="text-sm text-muted-foreground">Perasaan &amp; Emosi</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                        Progress</div>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-5 w-5 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="font-bold text-lg">0/12</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 pl-4">
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all hover:border-primary/50 hover-glow cursor-pointer false">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            1</div>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Emosi Dasar</h4>
                                <p class="text-xs text-muted-foreground mb-3">6 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full hover-glow"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-play h-3 w-3 mr-1">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>Mulai</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            2</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Perasaan Senang</h4>
                                <p class="text-xs text-muted-foreground mb-3">6 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            3</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Perasaan Sedih</h4>
                                <p class="text-xs text-muted-foreground mb-3">6 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            4</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Campuran Emosi</h4>
                                <p class="text-xs text-muted-foreground mb-3">8 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 opacity-60 blur-[1px]">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="text-5xl">🏠</div>
                                    <div>
                                        <h3 class="text-2xl font-bold mb-1">Level Benda</h3>
                                        <p class="text-sm text-muted-foreground">Benda Sehari-hari</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-lock h-5 w-5 text-muted-foreground">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-5 w-5 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="font-bold text-lg">0/15</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 pl-4">
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            1</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Benda Rumah</h4>
                                <p class="text-xs text-muted-foreground mb-3">8 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            2</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Benda Sekolah</h4>
                                <p class="text-xs text-muted-foreground mb-3">8 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            3</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Benda Dapur</h4>
                                <p class="text-xs text-muted-foreground mb-3">8 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            4</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Benda Kamar</h4>
                                <p class="text-xs text-muted-foreground mb-3">8 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            5</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Campuran Benda</h4>
                                <p class="text-xs text-muted-foreground mb-3">10 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 opacity-60 blur-[1px]">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="text-5xl">🏃</div>
                                    <div>
                                        <h3 class="text-2xl font-bold mb-1">Level Aktivitas</h3>
                                        <p class="text-sm text-muted-foreground">Kegiatan Harian</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-lock h-5 w-5 text-muted-foreground">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-5 w-5 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="font-bold text-lg">0/12</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 pl-4">
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            1</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Aktivitas Pagi</h4>
                                <p class="text-xs text-muted-foreground mb-3">7 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            2</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Aktivitas Siang</h4>
                                <p class="text-xs text-muted-foreground mb-3">7 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            3</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Aktivitas Malam</h4>
                                <p class="text-xs text-muted-foreground mb-3">7 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                            <div
                                class="rounded-lg border text-card-foreground shadow-sm p-5 bg-card/50 border-border/30 transition-all opacity-50 blur-[0.5px]">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="h-8 w-8 rounded-lg bg-primary/10 flex items-center justify-center text-sm font-bold text-primary">
                                            4</div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-lock h-4 w-4 text-muted-foreground">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-star h-4 w-4 fill-primary text-primary">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg><span class="text-sm font-bold">0/3</span></div>
                                </div>
                                <h4 class="font-bold mb-2 text-sm">Campuran Aktivitas</h4>
                                <p class="text-xs text-muted-foreground mb-3">9 Pertanyaan</p><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full false"
                                    disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock h-3 w-3 mr-1">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>Locked</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 bg-gradient-to-br from-primary/10 to-primary/5 border-primary/20">
                    <div class="flex items-start gap-4">
                        <div
                            class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
                            <h3 class="text-xl font-bold mb-2">Tips Quiz</h3>
                            <ul class="space-y-2 text-muted-foreground">
                                <li>• Kumpulkan minimal 2 bintang per sub-level untuk unlock level berikutnya</li>
                                <li>• Akurasi 80%+ akan memberikan bonus bintang</li>
                                <li>• Ulangi level untuk meningkatkan skor dan bintang</li>
                                <li>• Selesaikan quiz harian untuk mendapat poin extra</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection