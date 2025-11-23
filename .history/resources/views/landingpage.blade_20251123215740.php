<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/theme.css')

  </head>
  <body>
    <div class="min-h-screen">
    <nav class="border-b border-border/50 backdrop-blur-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="h-10 w-10 rounded-xl bg-primary flex items-center justify-center">
                    <img src="{{ asset('image/logo.png') }}" alt="">
                </div><span class="text-2xl font-bold text-gradient">Gestura</span>
            </div>
            
            <div class="flex gap-3">
                <a href="/auth?show=login"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8">
                        Masuk</button>
                    </a><a
                    href="/auth?show=register"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 hover-glow">Daftar
                        Sekarang</button></a>
                    </div>
        </div>
    </nav>
    <section class="container mx-auto px-4 py-20 text-center">
        <div class="max-w-4xl mx-auto space-y-8">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 animate-fade-in">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-sparkles h-4 w-4 text-primary">
                    <path
                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                    </path>
                    <path d="M20 3v4"></path>
                    <path d="M22 5h-4"></path>
                    <path d="M4 17v2"></path>
                    <path d="M5 18H3"></path>
                </svg><span class="text-sm text-primary font-medium">Platform Pembelajaran Bahasa Isyarat #1 di
                    Indonesia</span></div>
            <h1 class="text-5xl md:text-7xl font-bold leading-tight animate-fade-in" style="animation-delay: 0.1s;">
                Belajar Bahasa Isyarat <br><span class="text-gradient">Secara Interaktif</span></h1>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto animate-fade-in" style="animation-delay: 0.2s;">
                Platform pembelajaran bahasa isyarat dengan teknologi AI, gamifikasi, dan tantangan interaktif yang
                membuatmu cepat mahir.</p>
            <div class="flex gap-4 justify-center animate-fade-in" style="animation-delay: 0.3s;"><a
                    href="/register"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md text-lg px-8 py-6 hover-glow">Mulai
                        Belajar Gratis<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-right ml-2 h-5 w-5">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></button></a><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-11 rounded-md text-lg px-8 py-6">Lihat
                    Demo</button></div>
            <div class="relative mt-16 animate-fade-in" style="animation-delay: 0.4s;">
                <div
                    class="aspect-video rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 border border-primary/20 flex items-center justify-center overflow-hidden shadow-[var(--shadow-card)]">
                    <div class="text-8xl animate-pulse">👋</div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 py-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Fitur Unggulan</h2>
            <p class="text-xl text-muted-foreground">Belajar dengan cara yang menyenangkan dan efektif</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all hover-glow cursor-pointer group">
                <div
                    class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-graduation-cap h-6 w-6 text-primary">
                        <path
                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                        </path>
                        <path d="M22 10v6"></path>
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                    </svg></div>
                <h3 class="text-xl font-bold mb-2">Materi Lengkap</h3>
                <p class="text-muted-foreground">Pelajari abjad, angka, imbuhan, dan kosakata lengkap dengan video
                    tutorial.</p>
            </div>
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all hover-glow cursor-pointer group">
                <div
                    class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-trophy h-6 w-6 text-primary">
                        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                        <path d="M4 22h16"></path>
                        <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                        <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                    </svg></div>
                <h3 class="text-xl font-bold mb-2">Quiz Interaktif</h3>
                <p class="text-muted-foreground">Uji kemampuanmu dengan sistem quiz berlevel dan dapatkan bintang.</p>
            </div>
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all hover-glow cursor-pointer group">
                <div
                    class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-brain h-6 w-6 text-primary">
                        <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z">
                        </path>
                        <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z">
                        </path>
                        <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"></path>
                        <path d="M17.599 6.5a3 3 0 0 0 .399-1.375"></path>
                        <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"></path>
                        <path d="M3.477 10.896a4 4 0 0 1 .585-.396"></path>
                        <path d="M19.938 10.5a4 4 0 0 1 .585.396"></path>
                        <path d="M6 18a4 4 0 0 1-1.967-.516"></path>
                        <path d="M19.967 17.484A4 4 0 0 1 18 18"></path>
                    </svg></div>
                <h3 class="text-xl font-bold mb-2">Gesture Lab</h3>
                <p class="text-muted-foreground">Praktik langsung dengan AI translator untuk menerjemahkan gerakanmu.
                </p>
            </div>
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all hover-glow cursor-pointer group">
                <div
                    class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-sparkles h-6 w-6 text-primary">
                        <path
                            d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                        </path>
                        <path d="M20 3v4"></path>
                        <path d="M22 5h-4"></path>
                        <path d="M4 17v2"></path>
                        <path d="M5 18H3"></path>
                    </svg></div>
                <h3 class="text-xl font-bold mb-2">Challenge Mode</h3>
                <p class="text-muted-foreground">Ikuti tantangan harian dan mingguan untuk bersaing di leaderboard.</p>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="text-4xl font-bold">Kenapa Memilih Gestura?</h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg><span class="text-lg">Pembelajaran interaktif dengan video dan animasi</span></div>
                    <div class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg><span class="text-lg">Sistem gamifikasi yang memotivasi</span></div>
                    <div class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg><span class="text-lg">Progress tracking detail dan badge collection</span></div>
                    <div class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg><span class="text-lg">Challenge mode dengan leaderboard global</span></div>
                    <div class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg><span class="text-lg">Teknologi AI untuk gesture recognition</span></div>
                    <div class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg><span class="text-lg">Gratis dan mudah digunakan</span></div>
                </div><a href="/register"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 mt-4 hover-glow">Daftar
                        Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-right ml-2 h-5 w-5">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></button></a>
            </div>
            <div class="relative">
                <div
                    class="aspect-square rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 border border-primary/20 flex items-center justify-center">
                    <div class="text-9xl">🤟</div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 py-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Kata Mereka</h2>
            <p class="text-xl text-muted-foreground">Ribuan pengguna telah belajar dengan Gestura</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center text-2xl">
                        👨&zwj;🎓</div>
                    <div>
                        <div class="font-bold">Andi Wijaya</div>
                        <div class="text-sm text-muted-foreground">Mahasiswa</div>
                    </div>
                </div>
                <p class="text-muted-foreground italic">"Gestura sangat membantu saya belajar bahasa isyarat dengan
                    cepat. Sistemnya yang gamified bikin belajar jadi fun!"</p>
            </div>
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center text-2xl">
                        👩&zwj;🏫</div>
                    <div>
                        <div class="font-bold">Sarah Putri</div>
                        <div class="text-sm text-muted-foreground">Guru</div>
                    </div>
                </div>
                <p class="text-muted-foreground italic">"Platform yang sempurna untuk mengajar bahasa isyarat. Materi
                    lengkap dan mudah dipahami siswa."</p>
            </div>
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50 hover:border-primary/50 transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center text-2xl">
                        👨&zwj;💼</div>
                    <div>
                        <div class="font-bold">Budi Santoso</div>
                        <div class="text-sm text-muted-foreground">Volunteer</div>
                    </div>
                </div>
                <p class="text-muted-foreground italic">"Challenge mode-nya bikin ketagihan! Sekarang saya bisa
                    berkomunikasi dengan teman tuli saya."</p>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 py-20">
        <div
            class="rounded-lg border bg-card text-card-foreground shadow-sm p-12 text-center bg-gradient-to-br from-primary/10 to-primary/5 border-primary/20">
            <h2 class="text-4xl font-bold mb-4">Siap Mulai Belajar?</h2>
            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto">Bergabung dengan ribuan pengguna lainnya
                dan mulai perjalanan belajar bahasa isyarat mu sekarang!</p><a href="/register"><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md text-lg px-8 py-6 hover-glow">Daftar
                    Gratis Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-right ml-2 h-5 w-5">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg></button></a>
        </div>
    </section>
    <footer class="border-t border-border/50 mt-20">
        <div class="container mx-auto px-4 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="h-10 w-10 rounded-xl bg-primary flex items-center justify-center"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-graduation-cap h-6 w-6 text-primary-foreground">
                                <path
                                    d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                </path>
                                <path d="M22 10v6"></path>
                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                            </svg></div><span class="text-xl font-bold">Gestura</span>
                    </div>
                    <p class="text-sm text-muted-foreground">Platform pembelajaran bahasa isyarat interaktif terbaik di
                        Indonesia.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Tentang</h4>
                    <ul class="space-y-2 text-sm text-muted-foreground">
                        <li><a href="#" class="hover:text-primary transition-colors">Tentang Gestura</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Tim Kami</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Karir</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Dukungan</h4>
                    <ul class="space-y-2 text-sm text-muted-foreground">
                        <li><a href="#" class="hover:text-primary transition-colors">Kontak</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Bantuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm text-muted-foreground">
                        <li><a href="#" class="hover:text-primary transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-border/50 mt-8 pt-8 text-center text-sm text-muted-foreground">
                <p>© 2025 Gestura. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

  </body>
</html>