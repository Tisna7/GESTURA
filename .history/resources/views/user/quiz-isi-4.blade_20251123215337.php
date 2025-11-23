@extends('app')
@section('title', 'Dashboard')

@section('content')
    <x-sidebar-user></x-sidebar-user>

    <main class="lg:ml-64 min-h-screen pt-10 lg:pt-0 flex items-center justify-center">
        <div
            class="rounded-lg border text-card-foreground shadow-sm p-12 bg-card border-border/50 text-center max-w-2xl w-full mx-auto">
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
                            <div class="text-3xl font-bold text-primary">1/3</div>
                            <div class="text-sm text-muted-foreground">Jawaban Benar</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold">33%</div>
                            <div class="text-sm text-muted-foreground">Akurasi</div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4">
                    <a href=""><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 rounded-md px-8 flex-1">
                        Ulangi Quiz
                    </button></a>

                    <a href="/latihan"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 flex-1 hover-glow">
                        Kembali ke Quiz
                    </button></a>
                </div>
            </div>
        </div>
    </main>
@endsection
