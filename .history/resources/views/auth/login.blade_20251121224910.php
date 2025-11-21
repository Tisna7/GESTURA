@extends('app')
@section('content')

<div id="root">
    <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none;">
        <ol tabindex="-1"
            class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]">
        </ol>
    </div>
    <section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite" aria-relevant="additions text"
        aria-atomic="false"></section>
    <div class="min-h-screen bg-background flex items-center justify-center p-4">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center"><a class="inline-flex items-center gap-2 mb-6" href="/">
                    <div class="h-12 w-12 rounded-xl bg-primary flex items-center justify-center"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-graduation-cap h-7 w-7 text-primary-foreground">
                            <path
                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                            </path>
                            <path d="M22 10v6"></path>
                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                        </svg></div><span class="text-3xl font-bold text-gradient">Gestura</span>
                </a>
                <h1 class="text-3xl font-bold mt-4">Selamat Datang Kembali</h1>
                <p class="text-muted-foreground mt-2">Masuk untuk melanjutkan pembelajaran</p>
            </div>
            <div class="rounded-lg border text-card-foreground shadow-sm p-8 bg-card border-border/50">
                <form class="space-y-6">
                    <div class="space-y-2"><label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="email">Email</label>
                        <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-mail absolute left-3 top-3 h-5 w-5 text-muted-foreground">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg><input type="email"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                                id="email" placeholder="nama@email.com" required="" value=""></div>
                    </div>
                    <div class="space-y-2"><label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="password">Password</label>
                        <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-lock absolute left-3 top-3 h-5 w-5 text-muted-foreground">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg><input type="password"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                                id="password" placeholder="••••••••" required="" value=""></div>
                    </div>
                    <div class="flex items-center justify-between text-sm"><label
                            class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                class="rounded border-border"><span class="text-muted-foreground">Ingat
                                saya</span></label><a class="text-primary hover:underline" href="/forgot-password">Lupa
                            password?</a></div><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 w-full hover-glow"
                        type="submit">Masuk</button>
                    <div class="text-center text-sm text-muted-foreground">Belum punya akun? <a
                            class="text-primary hover:underline font-medium" href="/register">Daftar sekarang</a></div>
                </form>
            </div>
            <p class="text-center text-sm text-muted-foreground">Dengan masuk, kamu menyetujui <a href="#"
                    class="text-primary hover:underline">Terms of Service</a> dan <a href="#"
                    class="text-primary hover:underline">Privacy Policy</a></p>
        </div>
    </div>
</div>



{{--  --}}
