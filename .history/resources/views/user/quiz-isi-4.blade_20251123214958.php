

@extends('app')
@section('title', 'Dashboard')

@section('content')
    <x-sidebar-user></x-sidebar-user>

    <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
        <div class="p-4 md:p-8">
             <header
        class="sticky top-0 z-50 flex h-14 items-center gap-4 border-b border-border/50 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60 px-4">
        <button
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-7 w-7"
            data-sidebar="trigger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-panel-left">
                <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                <path d="M9 3v18"></path>
            </svg><span class="sr-only">Toggle Sidebar</span></button>
        <div class="flex-1"></div>
    </header>
    <main class="flex-1 p-6">
        <div
            class="rounded-lg border text-card-foreground shadow-sm p-12 bg-card border-border/50 text-center max-w-2xl mx-auto">
            <div class="space-y-6">
                <div class="inline-block p-6 rounded-full bg-primary/10">
                    <div class="text-6xl">🎉</div>
                </div>
                <div>
                    <h2 class="text-4xl font-bold mb-2">Quiz Selesai!</h2>
                    <p class="text-muted-foreground text-lg">Kamu berhasil menyelesaikan quiz</p>
                </div>
                <div class="flex items-center justify-center gap-1">
                    <div class="text-4xl opacity-100">⭐</div>
                    <div class="text-4xl opacity-20">⭐</div>
                    <div class="text-4xl opacity-20">⭐</div>
                </div>
                <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-muted/50 border-border/30">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <div class="text-3xl font-bold text-primary">2/6</div>
                            <div class="text-sm text-muted-foreground">Jawaban Benar</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold">33%</div>
                            <div class="text-sm text-muted-foreground">Akurasi</div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8 flex-1">Ulangi
                        Quiz</button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 flex-1 hover-glow">Kembali
                        ke Quiz</button></div>
            </div>
        </div>
    </main>
</main>
