<style>
    :root {
        --sidebar-width: 16rem;       /* W-64 */
        --sidebar-width-icon: 4rem;   /* W-16 */
    }
</style>

<div class="flex">

    <!-- SIDEBAR -->
    <div class="group peer hidden text-sidebar-foreground md:block"
        style="--sidebar-width: 16rem;"
        data-state="expanded"
        data-collapsible=""
        data-variant="sidebar"
        data-side="left">

        <!-- BACKGROUND WIDTH HANDLER -->
        <div class="relative h-svh w-[--sidebar-width] bg-transparent transition-[width] duration-200 ease-linear
            group-data-[collapsible=offcanvas]:w-0
            group-data-[side=right]:rotate-180
            group-data-[collapsible=icon]:w-[--sidebar-width-icon]">
        </div>

        <!-- SIDEBAR PANEL -->
        <div class="fixed inset-y-0 z-10 hidden h-svh w-[--sidebar-width] left-0 md:flex
            transition-[left,right,width] duration-200 ease-linear
            group-data-[collapsible=offcanvas]:left-[calc(var(--sidebar-width)*-1)]
            group-data-[collapsible=icon]:w-[--sidebar-width-icon]
            group-data-[side=left]:border-r
            group-data-[side=right]:border-l">
            
            <div data-sidebar="sidebar" class="flex h-full w-full flex-col bg-sidebar">
                
                <!-- HEADER -->
                <div data-sidebar="header" class="flex flex-col gap-2 p-2">
                    <a class="flex items-center gap-2 px-2" href="/dashboard">
                        <div class="h-10 w-10 rounded-xl bg-primary flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-graduation-cap h-6 w-6 text-primary-foreground">
                                <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path>
                                <path d="M22 10v6"></path>
                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-gradient">Gestura</span>
                    </a>
                </div>

                <!-- CONTENT / MENU -->
                <div data-sidebar="content" class="flex-1 flex flex-col gap-2 min-h-0 overflow-auto">

                    <div data-sidebar="group" class="relative flex w-full min-w-0 flex-col p-2">

                        <div data-sidebar="group-label"
                            class="flex h-8 shrink-0 items-center rounded-md px-2 text-xs font-medium text-sidebar-foreground/70">
                            Menu Utama
                        </div>

                        <div data-sidebar="group-content" class="w-full text-sm">
                            <ul data-sidebar="menu" class="flex flex-col gap-1">

                                <!-- Menu items original (Dashboard, Materi, Quiz, Gesture lab, dll) -->
                                <!-- Tidak aku ubah, tetap seperti kode asli -->
                                <!-- ... KODE MENU KAMU TETAP UTUH ... -->

                                <li data-sidebar="menu-item">
                                    <a class="flex items-center gap-2 rounded-md p-2 h-8 hover:bg-sidebar-accent bg-sidebar-accent"
                                        href="/dashboard">
                                        <svg class="lucide lucide-layout-dashboard h-4 w-4" ...></svg>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li data-sidebar="menu-item">
                                    <a class="flex items-center gap-2 rounded-md p-2 h-8 hover:bg-sidebar-accent"
                                        href="/materi">
                                        <svg class="lucide lucide-book-open h-4 w-4" ...></svg>
                                        <span>Materi</span>
                                    </a>
                                </li>

                                <li data-sidebar="menu-item">
                                    <a class="flex items-center gap-2 rounded-md p-2 h-8 hover:bg-sidebar-accent"
                                        href="/quiz">
                                        <svg class="lucide lucide-trophy h-4 w-4" ...></svg>
                                        <span>Quiz</span>
                                    </a>
                                </li>

                                <li data-sidebar="menu-item">
                                    <a class="flex items-center gap-2 rounded-md p-2 h-8 hover:bg-sidebar-accent"
                                        href="/gesture-lab">
                                        <svg class="lucide lucide-brain h-4 w-4" ...></svg>
                                        <span>Gesture Lab</span>
                                    </a>
                                </li>

                                <li data-sidebar="menu-item">
                                    <a class="flex items-center gap-2 rounded-md p-2 h-8 hover:bg-sidebar-accent"
                                        href="/challenge">
                                        <svg class="lucide lucide-target h-4 w-4" ...></svg>
                                        <span>Challenge</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FOOTER -->
                <div data-sidebar="footer" class="flex flex-col gap-2 p-2">

                    <ul data-sidebar="menu" class="flex flex-col gap-1">

                        <li data-sidebar="menu-item">
                            <a class="flex items-center gap-2 rounded-md p-2 h-8 hover:bg-sidebar-accent"
                                href="/profile">
                                <svg class="lucide lucide-user h-4 w-4"></svg>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li data-sidebar="menu-item">
                            <a class="flex items-center gap-2 rounded-md p-2 h-8 hover:bg-sidebar-accent"
                                href="/">
                                <svg class="lucide lucide-log-out h-4 w-4"></svg>
                                <span>Keluar</span>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!-- CONTENT AREA -->
    <main class="flex-1 ml-[--sidebar-width] p-6">
        {{-- Tempat konten halaman --}}
        @yield('content')
    </main>

</div>
