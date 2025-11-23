@php
    use Illuminate\Support\Facades\Auth;
@endphp



<aside
    class="fixed top-0 left-0 h-full bg-sidebar border-r border-sidebar-border shadow-medium z-40 transition-transform duration-300 -translate-x-full lg:translate-x-0 w-64">
    <div class="flex flex-col h-full">

        {{-- LOGO --}}
        <div class="hidden lg:flex items-center gap-2 p-6 border-b border-sidebar-border">
            <div class="w-10 h-10 rounded-full bg-gradient-hero flex items-center justify-center shadow-soft">
                <img src="{{ asset('image/logo.png') }}" alt="MindCare Logo" class="w-8 h-8">
            </div>
            <div>
                <span class="text-xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent block">
                    GESTUR
                </span>
            </div>
        </div>

        {{-- MENU --}}
        <nav class="flex-1 p-4 space-y-2 overflow-y-auto mt-16 lg:mt-0">

            {{-- Latihan --}}
            <a class="{{ request()->is('latihan') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft'
                : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }}
                flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
                href="/latihan">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-layout-dashboard w-4 h-4">
                    <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                    <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                    <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                    <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                </svg>

                <span>Latihan</span>
            </a>

            {{-- Materi --}}
            <a class="{{ request()->is('materi') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft'
                : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }}
                flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
                href="/materi">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-book-open w-4 h-4">
                    <path d="M12 7v14"></path>
                    <path
                        d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                    </path>
                </svg>

                <span>Materi</span>
            </a>

            {{-- Challenge --}}
            <a class="{{ request()->is('Challenge') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft'
                : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }}
                flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
                href="/Challenge">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-target w-4 h-4">
                    <circle cx="12" cy="12" r="10"></circle>
                    <circle cx="12" cy="12" r="6"></circle>
                    <circle cx="12" cy="12" r="2"></circle>
                </svg>

                <span>Challenge</span>
            </a>

            {{-- Gesture Lab --}}
            <a class="{{ request()->is('gesturelab') ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium shadow-soft'
                : 'text-sidebar-foreground hover:bg-sidebar-accent/50' }}
                flex items-center gap-3 px-4 py-3 rounded-xl transition-smooth"
                href="/gesturelab">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-brain w-4 h-4">

                    <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"></path>
                    <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"></path>
                    <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"></path>

                </svg>

                <span>Gesture Lab</span>
            </a>
        </nav>

        {{-- BOTTOM SECTION --}}
        <div class="p-4 border-t border-sidebar-border space-y-3">

            {{-- User Button --}}
            <button
                class="w-full flex items-center gap-3 px-3 py-2 rounded-xl hover:bg-sidebar-accent transition-smooth"
                type="button">
                <span class="relative flex items-center justify-center shrink-0 overflow-hidden rounded-full w-10 h-10 bg-primary"><img class="h-full w-full object-cover"
        src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ Auth::user()->profile_image }}"></span>
                <div class="flex-1 text-left">
                    <p class="text-sm font-medium text-sidebar-foreground">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-muted-foreground">{{ Auth::user()->email }}</p>
                </div>
            </button>

            {{-- Mode Gelap --}}
            <button
                class="inline-flex items-center whitespace-nowrap rounded-md text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start gap-3 hover:bg-accent transition-smooth">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-moon w-4 h-4">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                </svg>
                <span>Mode Gelap</span>
            </button>

            {{-- Logout --}}
            <form action="" method="POST">
                @csrf
                <button type="submit"
                    class="inline-flex items-center whitespace-nowrap rounded-md text-sm font-medium border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start gap-3">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-log-out w-4 h-4">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" x2="9" y1="12" y2="12"></line>
                    </svg>

                    <span>Logout</span>
                </button>
            </form>

        </div>
    </div>
</aside>




<script>
    const html = document.documentElement;
    const toggleDark = document.querySelector('.hover\\:bg-accent'); // tombol "Mode Gelap"
    const icon = toggleDark.querySelector('svg');
    const label = toggleDark.querySelector('span');

    // Cek tema yang tersimpan
    const storedTheme = localStorage.getItem("theme");
    const systemPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

    // Fungsi ubah tema
    function setTheme(dark) {
        if (dark) {
            html.classList.add("dark");
            localStorage.setItem("theme", "dark");
            label.textContent = "Mode Terang";
            icon.outerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-sun w-5 h-5">
          <circle cx="12" cy="12" r="4"></circle>
          <path d="M12 2v2"></path>
          <path d="M12 20v2"></path>
          <path d="m4.93 4.93 1.41 1.41"></path>
          <path d="m17.66 17.66 1.41 1.41"></path>
          <path d="M2 12h2"></path>
          <path d="M20 12h2"></path>
          <path d="m6.34 17.66-1.41 1.41"></path>
          <path d="m19.07 4.93-1.41 1.41"></path>
        </svg>`;
        } else {
            html.classList.remove("dark");
            localStorage.setItem("theme", "light");
            label.textContent = "Mode Gelap";
            icon.outerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-moon w-5 h-5">
          <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
        </svg>`;
        }
    }

    // Terapkan tema saat load pertama
    setTheme(storedTheme === "dark" || (!storedTheme && systemPrefersDark));

    // Tambahkan event listener untuk toggle
    toggleDark.addEventListener("click", () => {
        setTheme(!html.classList.contains("dark"));
    });
</script>
