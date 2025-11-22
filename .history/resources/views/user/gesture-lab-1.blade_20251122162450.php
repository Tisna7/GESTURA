@section()

<main class="container mx-auto px-4 py-8">
    <div class="space-y-8">
        <div>
            <h1 class="text-4xl font-bold mb-2">Gesture Lab 🧪</h1>
            <p class="text-muted-foreground text-lg">Praktik dan coba gesture dengan teknologi AI</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 cursor-pointer transition-all bg-primary/10 border-primary hover-glow">
                <div class="text-4xl mb-3">👋</div>
                <h3 class="text-xl font-bold mb-2">Coba Gerakan</h3>
                <p class="text-sm text-muted-foreground">Pilih gerakan dan coba tiru</p>
            </div>
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 cursor-pointer transition-all bg-card border-border/50 hover:border-primary/50">
                <div class="text-4xl mb-3">🤖</div>
                <h3 class="text-xl font-bold mb-2">Gesture to Text</h3>
                <p class="text-sm text-muted-foreground">Translator AI real-time</p>
            </div>
            <div
                class="rounded-lg border text-card-foreground shadow-sm p-6 cursor-pointer transition-all bg-card border-border/50 hover:border-primary/50">
                <div class="text-4xl mb-3">✨</div>
                <h3 class="text-xl font-bold mb-2">Free Practice</h3>
                <p class="text-sm text-muted-foreground">Latihan bebas</p>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="rounded-lg border text-card-foreground shadow-sm lg:col-span-2 p-6 bg-card border-border/50">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-camera h-5 w-5">
                            <path
                                d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z">
                            </path>
                            <circle cx="12" cy="13" r="3"></circle>
                        </svg>Camera View</h3>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                        Ready</div>
                </div>
                <div
                    class="aspect-video rounded-xl bg-gradient-to-br from-muted/30 to-muted/10 border border-border/50 flex items-center justify-center mb-6">
                    <div class="text-center">
                        <div class="text-6xl mb-4">📹</div>
                        <p class="text-muted-foreground">Camera feed akan tampil di sini</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 hover-glow"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-play h-5 w-5 mr-2">
                            <polygon points="6 3 20 12 6 21 6 3"></polygon>
                        </svg>Mulai</button></div>
            </div>
            <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
                <h3 class="text-xl font-bold mb-6">Pilih Gerakan</h3>
                <div class="space-y-3"><button
                        class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-between"><span
                            class="flex items-center gap-3"><span class="text-2xl">✊</span><span class="font-bold">Huruf
                                A</span></span></button><button
                        class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-between"><span
                            class="flex items-center gap-3"><span class="text-2xl">🖐️</span><span
                                class="font-bold">Huruf B</span></span></button><button
                        class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-between"><span
                            class="flex items-center gap-3"><span class="text-2xl">🤏</span><span
                                class="font-bold">Huruf C</span></span></button><button
                        class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-between"><span
                            class="flex items-center gap-3"><span class="text-2xl">👆</span><span
                                class="font-bold">Huruf D</span></span></button><button
                        class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-between"><span
                            class="flex items-center gap-3"><span class="text-2xl">✋</span><span class="font-bold">Huruf
                                E</span></span></button><button
                        class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-between"><span
                            class="flex items-center gap-3"><span class="text-2xl">👌</span><span
                                class="font-bold">Huruf F</span></span></button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 px-4 py-2 w-full mt-4"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-sparkles h-4 w-4 mr-2">
                            <path
                                d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                            </path>
                            <path d="M20 3v4"></path>
                            <path d="M22 5h-4"></path>
                            <path d="M4 17v2"></path>
                            <path d="M5 18H3"></path>
                        </svg>Lihat Semua Huruf</button></div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
                <h3 class="text-lg font-bold mb-4">💡 Tips Menggunakan Gesture Lab</h3>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li>• Pastikan pencahayaan ruangan cukup terang</li>
                    <li>• Posisikan tangan di tengah frame kamera</li>
                    <li>• Lakukan gerakan dengan jelas dan tidak terlalu cepat</li>
                    <li>• Gunakan background yang tidak terlalu ramai</li>
                </ul>
            </div>
            <div
                class="rounded-lg border bg-card text-card-foreground shadow-sm p-6 bg-gradient-to-br from-primary/10 to-primary/5 border-primary/20">
                <h3 class="text-lg font-bold mb-4">🚀 Fitur AI Coming Soon</h3>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li>• Real-time gesture recognition dengan deep learning</li>
                    <li>• Feedback akurasi dan saran perbaikan</li>
                    <li>• Deteksi multi-gesture (kata dan kalimat)</li>
                    <li>• Progress tracking per gerakan</li>
                </ul>
            </div>
        </div>
    </div>
</main>
