@extends('app')
@section('title', 'Dashboard')

@section('content')
        <x-sidebar-user></x-sidebar-user>

<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
        <div>
            <h1 class="text-4xl font-bold mb-2">Challenge Mode 🎯</h1>
            <p class="text-muted-foreground text-lg">Ikuti tantangan dan bersaing di leaderboard</p>
        </div>
        <div class="space-y-4">
            <h2 class="text-2xl font-bold">Tantangan Aktif</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div
                    class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all hover-glow">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-calendar h-3 w-3 mr-1">
                                <path d="M8 2v4"></path>
                                <path d="M16 2v4"></path>
                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                <path d="M3 10h18"></path>
                            </svg>Harian</div>
                        <div class="text-3xl">⚡</div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Challenge Harian</h3>
                    <p class="text-sm text-muted-foreground mb-4">Selesaikan 5 soal quiz hari ini</p>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center justify-between text-sm"><span
                                class="text-muted-foreground">Progress</span><span class="font-medium">3/5</span></div>
                        <div class="h-2 bg-muted rounded-full overflow-hidden">
                            <div class="h-full bg-primary" style="width: 60%;"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock h-4 w-4">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg><span>6 jam lagi</span></div>
                        <div class="flex items-center gap-1 text-primary font-bold"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap h-4 w-4">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg><span>+50 poin</span></div>
                    </div><a href="/Challenge-isi-1"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full mt-4 hover-glow"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-target h-4 w-4 mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>Mulai Challenge</button></a>
                </div>
                <div
                    class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all hover-glow">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-trophy h-3 w-3 mr-1">
                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                                <path d="M4 22h16"></path>
                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                            </svg>Mingguan</div>
                        <div class="text-3xl">🏆</div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Challenge Mingguan</h3>
                    <p class="text-sm text-muted-foreground mb-4">Raih 100 bintang minggu ini</p>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center justify-between text-sm"><span
                                class="text-muted-foreground">Progress</span><span class="font-medium">67/100</span>
                        </div>
                        <div class="h-2 bg-muted rounded-full overflow-hidden">
                            <div class="h-full bg-primary" style="width: 67%;"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock h-4 w-4">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg><span>3 hari lagi</span></div>
                        <div class="flex items-center gap-1 text-primary font-bold"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap h-4 w-4">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg><span>+300 poin</span></div>
                    </div><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full mt-4 hover-glow"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-target h-4 w-4 mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>Mulai Challenge</button>
                </div>
                <div
                    class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all hover-glow">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star h-3 w-3 mr-1">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg>Spesial</div>
                        <div class="text-3xl">🔤</div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Event Spesial: Master Abjad</h3>
                    <p class="text-sm text-muted-foreground mb-4">Selesaikan semua level abjad dengan 3 bintang</p>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center justify-between text-sm"><span
                                class="text-muted-foreground">Progress</span><span class="font-medium">4/5</span>
                        </div>
                        <div class="h-2 bg-muted rounded-full overflow-hidden">
                            <div class="h-full bg-primary" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock h-4 w-4">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg><span>7 hari lagi</span></div>
                        <div class="flex items-center gap-1 text-primary font-bold"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap h-4 w-4">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg><span>+500 poin</span></div>
                    </div><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full mt-4 hover-glow"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-target h-4 w-4 mr-2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>Mulai Challenge</button>
                </div>
            </div>
        </div>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold">Leaderboard Mingguan</h2>
                <div class="flex gap-2"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Harian</button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3">Mingguan</button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">Global</button>
                </div>
            </div>
            <div class="rounded-lg border text-card-foreground shadow-sm overflow-hidden bg-card border-border/50">
                <div
                    class="grid grid-cols-3 gap-4 p-6 bg-gradient-to-br from-primary/10 to-primary/5 border-b border-border/50">
                    <div class="text-center order-2">
                        <div
                            class="inline-flex items-center justify-center h-20 w-20 mb-2 rounded-full bg-yellow-500/20 border-2 border-yellow-500">
                            <span class="text-4xl">👩</span></div>
                        <div class="text-3xl mb-1">🏆</div>
                        <div class="font-bold mb-1">Sarah Putri</div>
                        <div class="flex items-center justify-center gap-1 text-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap h-4 w-4">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg><span class="font-bold">2450</span></div>
                    </div>
                    <div class="text-center order-1">
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 mb-2 rounded-full bg-gray-400/20 border-2 border-gray-400">
                            <span class="text-3xl">👨</span></div>
                        <div class="text-3xl mb-1">🥈</div>
                        <div class="font-bold mb-1">Andi Wijaya</div>
                        <div class="flex items-center justify-center gap-1 text-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap h-4 w-4">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg><span class="font-bold">1250</span></div>
                    </div>
                    <div class="text-center order-3">
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 mb-2 rounded-full bg-orange-500/20 border-2 border-orange-500">
                            <span class="text-3xl">👨&zwj;💼</span></div>
                        <div class="text-3xl mb-1">🥉</div>
                        <div class="font-bold mb-1">Budi Santoso</div>
                        <div class="flex items-center justify-center gap-1 text-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap h-4 w-4">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg><span class="font-bold">980</span></div>
                    </div>
                </div>
                <div class="divide-y divide-border/50">
                    <div class="flex items-center gap-4 p-4 hover:bg-muted/30 transition-colors">
                        <div class="text-xl font-bold w-12 text-center text-muted-foreground">#4</div>
                        <div class="h-12 w-12 rounded-full bg-muted flex items-center justify-center text-2xl">
                            👩&zwj;💼</div>
                        <div class="flex-1">
                            <div class="font-bold">Dewi Lestari</div>
                            <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-zap h-3 w-3 text-primary">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                    </path>
                                </svg><span>875 poin</span></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 hover:bg-muted/30 transition-colors">
                        <div class="text-xl font-bold w-12 text-center text-muted-foreground">#5</div>
                        <div class="h-12 w-12 rounded-full bg-muted flex items-center justify-center text-2xl">
                            👨&zwj;🎓</div>
                        <div class="flex-1">
                            <div class="font-bold">Rizki Pratama</div>
                            <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-zap h-3 w-3 text-primary">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                    </path>
                                </svg><span>820 poin</span></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 hover:bg-muted/30 transition-colors">
                        <div class="text-xl font-bold w-12 text-center text-muted-foreground">#6</div>
                        <div class="h-12 w-12 rounded-full bg-muted flex items-center justify-center text-2xl">
                            👩&zwj;🎓</div>
                        <div class="flex-1">
                            <div class="font-bold">Siti Nurhaliza</div>
                            <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-zap h-3 w-3 text-primary">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                    </path>
                                </svg><span>750 poin</span></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 hover:bg-muted/30 transition-colors">
                        <div class="text-xl font-bold w-12 text-center text-muted-foreground">#7</div>
                        <div class="h-12 w-12 rounded-full bg-muted flex items-center justify-center text-2xl">👨</div>
                        <div class="flex-1">
                            <div class="font-bold">Ahmad Fauzi</div>
                            <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-zap h-3 w-3 text-primary">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                    </path>
                                </svg><span>680 poin</span></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 hover:bg-muted/30 transition-colors">
                        <div class="text-xl font-bold w-12 text-center text-muted-foreground">#8</div>
                        <div class="h-12 w-12 rounded-full bg-muted flex items-center justify-center text-2xl">👩</div>
                        <div class="flex-1">
                            <div class="font-bold">Lisa Permata</div>
                            <div class="flex items-center gap-1 text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-zap h-3 w-3 text-primary">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                    </path>
                                </svg><span>620 poin</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
                <h3 class="text-lg font-bold mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-trophy h-5 w-5 text-primary">
                        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                        <path d="M4 22h16"></path>
                        <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                        <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                    </svg>Reward Challenge</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 rounded-lg bg-muted/30"><span
                            class="text-sm">Challenge Harian</span>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                            50 poin</div>
                    </div>
                    <div class="flex items-center justify-between p-3 rounded-lg bg-muted/30"><span
                            class="text-sm">Challenge Mingguan</span>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                            300 poin</div>
                    </div>
                    <div class="flex items-center justify-between p-3 rounded-lg bg-muted/30"><span
                            class="text-sm">Event Spesial</span>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                            500+ poin</div>
                    </div>
                </div>
            </div>
            <div
                class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 bg-gradient-to-br from-primary/10 to-primary/5 border-primary/20">
                <h3 class="text-lg font-bold mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-users h-5 w-5 text-primary">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>Info Kompetisi</h3>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li>• Leaderboard di-reset setiap minggu (Senin 00:00)</li>
                    <li>• Top 3 mingguan mendapat badge eksklusif</li>
                    <li>• Poin challenge berbeda dengan poin quiz</li>
                    <li>• Challenge baru dirilis setiap hari</li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection