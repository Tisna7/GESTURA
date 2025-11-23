@extends('app')
@section('title', 'Dashboard')

@section('content')
        <x-sidebar-user></x-sidebar-user>

<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4"><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-10 w-10"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-left h-5 w-5">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg></button>
                <div>
                    <h1 class="text-2xl font-bold">Level Abjad A-E</h1>
                    <p class="text-sm text-muted-foreground">Pertanyaan 1 dari 6</p>
                </div>
            </div>
            <div
                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-clock h-4 w-4">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>30s</div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-4 bg-card border-border/50">
            <div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="indeterminate" data-max="100"
                class="relative w-full overflow-hidden rounded-full bg-secondary h-2">
                <div data-state="indeterminate" data-max="100" class="h-full w-full flex-1 bg-primary transition-all"
                    style="transform: translateX(-83.3333%);"></div>
            </div>
        </div>
        <div class="flex justify-center">
            <div
                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-image h-4 w-4">
                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                    <circle cx="9" cy="9" r="2"></circle>
                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                </svg>Soal Gambar</div>
        </div>
        <div class="rounded-lg border text-card-foreground shadow-sm p-8 bg-card border-border/50">
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-center">Gerakan tangan berikut menunjukkan huruf apa?</h2>
                <div class="bg-muted/50 rounded-xl p-12 flex items-center justify-center">
                    <div class="text-9xl"><img src="{{ asset('image/A.png') }}" alt=""></div>
                </div>
                <div class="grid grid-cols-2 gap-4"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground rounded-md px-8 h-20 text-xl">A</button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground rounded-md px-8 h-20 text-xl">B</button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground rounded-md px-8 h-20 text-xl">C</button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground rounded-md px-8 h-20 text-xl">D</button>
                </div>
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 w-full hover-glow">Lanjut</button>
            </div>
        </div>
    </div>
</main>
@endsection
