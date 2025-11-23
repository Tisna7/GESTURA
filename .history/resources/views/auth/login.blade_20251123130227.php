@extends('app')
@section('content')

<div id="loginPage" class="{{ $show === 'login' ? '' : 'hidden' }}">
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
                    <form method="POST" action="{{ route('login.process') }}">
    @csrf
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
                                password?</a></div>
                                
                                <button
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

          <div class="flex items-center justify-between text-sm"><label
              class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                class="rounded border-border"><span class="text-muted-foreground">Ingat
                saya</span></label><a class="text-primary hover:underline" href="/forgot-password">Lupa
              password?</a></div><button
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 w-full hover-glow"
            type="submit">Masuk</button>

            <div class="space-y-3 mt-4">
  <!-- Login with Google -->
  <button type="button"
    class="flex items-center justify-center gap-3 w-full h-11 rounded-md border border-border bg-background hover:bg-muted transition">
    <img src="{{ asset('image/7611770.png') }}" class="w-7 h-7" alt="Google">
    <span class="text-sm font-medium">Masuk dengan Google</span>
  </button>

  <!-- Login as Guest -->
  <button type="button"
    class="flex items-center justify-center gap-2 w-full h-11 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="none"
      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
      class="lucide lucide-user-circle">
      <circle cx="12" cy="12" r="10"></circle>
      <circle cx="12" cy="10" r="3"></circle>
      <path d="M7 20a5 5 0 0 1 10 0"></path>
    </svg>
    <span class="text-sm font-medium">Masuk sebagai Tamu</span>
  </button>
</div>

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



{{-- sign up --}}
<div id="registerPage" class="{{ $show === 'register' ? '' : 'hidden' }}">
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
                    <h1 class="text-3xl font-bold mt-4">Buat Akun Baru</h1>
                    <p class="text-muted-foreground mt-2">Mulai perjalanan belajar bahasa isyarat</p>
                </div>
                <div class="rounded-lg border text-card-foreground shadow-sm p-8 bg-card border-border/50">
<form class="space-y-5" method="POST" action="{{ route('register') }}">
    @csrf
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="fullName">Nama Lengkap</label>
                            <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-user absolute left-3 top-3 h-5 w-5 text-muted-foreground">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg><input type="text"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                                    id="fullName" name="fullName" placeholder="John Doe" required=""
                                    value=""></div>
                        </div>
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="username">Username</label>
                            <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-at-sign absolute left-3 top-3 h-5 w-5 text-muted-foreground">
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"></path>
                                </svg><input type="text"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                                    id="username" name="username" placeholder="johndoe" required="" value="">
                            </div>
                        </div>
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
                                    id="email" name="email" placeholder="nama@email.com" required=""
                                    value=""></div>
                        </div>
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="password">Password</label>
                            <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-lock absolute left-3 top-3 h-5 w-5 text-muted-foreground">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2">
                                    </rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg><input type="password"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                                    id="registerPassword" name="password" placeholder="••••••••" required=""
                                    value=""></div>
                                     <p id="ruleLength" class="text-red-500">✖ Minimal 6 karakter</p>
    <p id="ruleNumber" class="text-red-500">✖ Harus mengandung angka</p>

                        </div>
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="confirmPassword">Konfirmasi Password</label>
                            <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-lock absolute left-3 top-3 h-5 w-5 text-muted-foreground">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2">
                                    </rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg><input type="password"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                                    id="confirmPassword" name="confirmPassword" placeholder="••••••••" required=""
                                    value=""></div>
                        </div><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 w-full hover-glow"
                            type="submit">Daftar</button>
                        <div class="text-center text-sm text-muted-foreground">Sudah punya akun? <a
                                class="text-primary hover:underline font-medium" href="/login">Masuk di sini</a></div>
                    </form>
                </div>
                <p class="text-center text-sm text-muted-foreground">Dengan mendaftar, kamu menyetujui <a href="#"
                        class="text-primary hover:underline">Terms of Service</a> dan <a href="#"
                        class="text-primary hover:underline">Privacy Policy</a></p>
            </div>
          </div>
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
                id="email" name="email" placeholder="nama@email.com" required=""
                value=""></div>
          </div>
          <div class="space-y-2"><label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="password">Password</label>
            <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-lock absolute left-3 top-3 h-5 w-5 text-muted-foreground">
                <rect width="18" height="11" x="3" y="11" rx="2" ry="2">
                </rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
              </svg><input type="password"
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                id="passwordRegister" name="password" placeholder="••••••••" required=""
                value="">
              
                <!-- toggle show/hide -->
                <button type="button"
                  class="absolute right-4 top-2 text-muted-foreground hover:text-foreground"
                  onclick="togglePassword('passwordRegister', this)">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>
                </button>
              </div>
          </div>
          <div class="space-y-2">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="confirmPassword">Konfirmasi Password</label>
            <div class="relative">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-lock absolute left-3 top-3 h-5 w-5 text-muted-foreground">
                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
              </svg>
              <input type="password"
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                id="confirmPassword" name="confirmPassword" placeholder="••••••••" required=""
                value="">
                
                <!-- toggle show/hide -->
                <button type="button"
                  class="absolute right-4 top-2 text-muted-foreground hover:text-foreground"
                  onclick="togglePassword('confirmPassword', this)">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>
                </button>
              </div>
          </div>
          <button
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 w-full hover-glow"
            type="submit">Daftar
          </button>
          <div class="space-y-3 mt-4">
            <button type="button"
              class="flex items-center justify-center gap-3 w-full h-11 rounded-md border border-border bg-background hover:bg-muted transition">
              <img src="{{ asset('image/7611770.png') }}" class="w-7 h-7" alt="Google">
              <span class="text-sm font-medium">Daftar dengan Google</span>
            </button>
          </div>
          <div class="text-center text-sm text-muted-foreground">Sudah punya akun? <a
              class="text-primary hover:underline font-medium" href="/login">Masuk di sini</a></div>
        </form>
      </div>
      <p class="text-center text-sm text-muted-foreground">Dengan mendaftar, kamu menyetujui <a href="#"
          class="text-primary hover:underline">Terms of Service</a> dan <a href="#"
          class="text-primary hover:underline">Privacy Policy</a></p>
    </div>
    <script>
document.getElementById("registerPassword").addEventListener("input", function () {
    let pwd = this.value;

    // DOM elemen
    let ruleLength = document.getElementById("ruleLength");
    let ruleNumber = document.getElementById("ruleNumber");

    // Cek minimal 6 karakter
    if (pwd.length >= 6) {
        ruleLength.textContent = "✔ Minimal 6 karakter";
        ruleLength.classList.remove("text-red-500");
        ruleLength.classList.add("text-green-500");
    } else {
        ruleLength.textContent = "✖ Minimal 6 karakter";
        ruleLength.classList.add("text-red-500");
        ruleLength.classList.remove("text-green-500");
    }

    // Cek angka
    if (/[0-9]/.test(pwd)) {
        ruleNumber.textContent = "✔ Harus mengandung angka";
        ruleNumber.classList.remove("text-red-500");
        ruleNumber.classList.add("text-green-500");
    } else {
        ruleNumber.textContent = "✖ Harus mengandung angka";
        ruleNumber.classList.add("text-red-500");
        ruleNumber.classList.remove("text-green-500");
    }
});
</script>



    

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const loginPage = document.getElementById("loginPage");
    const registerPage = document.getElementById("registerPage");

    // login → register
    document.querySelectorAll('[href="/register"]').forEach(btn => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        loginPage.classList.add("hidden");
        registerPage.classList.remove("hidden");
      });
    });

    // register → login
    document.querySelectorAll('[href="/login"]').forEach(btn => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        registerPage.classList.add("hidden");
        loginPage.classList.remove("hidden");
      });
    });
  });

  function togglePassword(id, btn) {
  const input = document.getElementById(id);
  const isHidden = input.type === "password";
  input.type = isHidden ? "text" : "password";

  btn.innerHTML = isHidden
    ? `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-7" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a19.93 19.93 0 0 1 5.06-5.94M9.88 9.88A3 3 0 0 1 12 9c1.66 0 3 1.34 3 3"></path>
         <line x1="1" y1="1" x2="23" y2="23"></line>
       </svg>`
    : `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-7" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"></path>
         <circle cx="12" cy="12" r="3"></circle>
       </svg>`;
}
</script>
@endsection