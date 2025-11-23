@extends('app')
@section('title', 'Gesture Lab Practice')

@section('content')
        <x-sidebar-user></x-sidebar-user>

<main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
    <div class="p-4 md:p-8">
            <div>
                <h1 class="text-4xl font-bold mb-2">Gesture Lab 🧪</h1>
                <p class="text-muted-foreground text-lg">Praktik dan coba gesture dengan teknologi AI</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div
                    class="rounded-lg border text-card-foreground shadow-sm p-6 cursor-pointer transition-all bg-primary/10 border-primary hover-glow">
                    <div class="text-4xl mb-3">✨</div>
                    <h3 class="text-xl font-bold mb-2">Free Practice</h3>
                    <p class="text-sm text-muted-foreground">Latihan bebas</p>
                </div><a href="/gesture-lab-translate">
                <div
                    class="rounded-lg border text-card-foreground shadow-sm p-6 cursor-pointer transition-all bg-card border-border/50 hover:border-primary/50">
                    <div class="text-4xl mb-3">🤖</div>
                    <h3 class="text-xl font-bold mb-2">Gesture to Text</h3>
                    <p class="text-sm text-muted-foreground">Translator AI real-time</p>
                </div></a>
                
            </div>
            <div class="grid lg:grid-cols-3 gap-6">
                <div class="rounded-lg border text-card-foreground shadow-sm lg:col-span-2 p-6 bg-card border-border/50">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-xl font-bold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-camera h-5 w-5">
                <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path>
                <circle cx="12" cy="13" r="3"></circle>
            </svg>
            Camera View
        </h3>
        <div
            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-secondary text-secondary-foreground">
            Ready
        </div>
    </div>

    <!-- Wrapper -->
    <div id="videoWrapper"
        class="aspect-video rounded-xl bg-gradient-to-br from-muted/30 to-muted/10 border border-border/50 flex items-center justify-center mb-6 relative">

        <!-- Placeholder sebelum kamera aktif -->
        <div id="placeholder" class="text-center">
            <div class="text-6xl mb-4">📹</div>
            <p class="text-muted-foreground">Camera feed akan tampil di sini</p>
        </div>

        <!-- Video: hidden dulu -->
        <video id="videoFeed" autoplay playsinline class="absolute inset-0 w-full h-full object-cover rounded-xl hidden"></video>
    </div>

    <div class="flex items-center justify-center gap-4">
        <button id="startCam"
            class="inline-flex items-center justify-center gap-2 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 hover-glow">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-play h-5 w-5">
                <polygon points="6 3 20 12 6 21 6 3"></polygon>
            </svg>
            Mulai
        </button>
    </div>
</div>


                <script>
                  document.addEventListener("DOMContentLoaded", () => {

                      const startBtn = document.getElementById("startCam");
                      const videoWrapper = document.getElementById("videoWrapper");
                      const placeholder = document.getElementById("placeholder");
                      const video = document.getElementById("videoFeed");

                      let stream = null;

                      startBtn.addEventListener("click", async () => {
                          try {
                              stream = await navigator.mediaDevices.getUserMedia({ video: true });

                              video.srcObject = stream;
                              video.play();

                              // Tampilkan video, sembunyikan placeholder
                              placeholder.classList.add("hidden");
                              video.classList.remove("hidden");

                          } catch (error) {
                              console.error("Gagal membuka kamera:", error);
                              alert("Tidak bisa mengakses kamera. Pastikan izin kamera diaktifkan.");
                          }
                      });

                  });
                </script>




                <div class="rounded-lg border text-card-foreground shadow-sm p-6 bg-card border-border/50">
                    <h3 class="text-xl font-bold mb-6">Hasil AI</h3>
                    <div class="space-y-4">
                        <div class="p-4 rounded-lg bg-gradient-to-br from-primary/10 to-primary/5 border border-primary/20">
                            <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-sparkles h-5 w-5 text-primary">
                                    <path
                                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                    </path>
                                    <path d="M20 3v4"></path>
                                    <path d="M22 5h-4"></path>
                                    <path d="M4 17v2"></path>
                                    <path d="M5 18H3"></path>
                                </svg><span class="font-bold">AI Feedback</span></div>
                            <p class="text-sm text-muted-foreground">Gerakan kamu akan dianalisis oleh AI dan feedback akan
                                ditampilkan di sini.</p>
                        </div>
                        <div class="space-y-2">
                            <div class="text-sm text-muted-foreground">Statistik Sesi</div>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between"><span class="text-sm">Gesture
                                        terdeteksi</span>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">
                                        0</div>
                                </div>
                                <div class="flex items-center justify-between"><span class="text-sm">Akurasi
                                        rata-rata</span>
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                        -</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
const resultText = document.getElementById('result');

let model;

// Load model TensorFlow.js kamu
async function loadModel() {
    model = await tf.loadLayersModel('/model/model.json');
    console.log("Model loaded!");
}
loadModel();

// Jalankan kamera
navigator.mediaDevices.getUserMedia({ video: true }).then(stream => {
    video.srcObject = stream;
});

// Initialize MediaPipe Hands
const hands = new Hands({
    locateFile: file => `https://cdn.jsdelivr.net/npm/@mediapipe/hands/${file}`
});

hands.setOptions({
    maxNumHands: 1,
    modelComplexity: 1,
    minDetectionConfidence: 0.6,
    minTrackingConfidence: 0.6
});

// Jika ada hasil deteksi
hands.onResults(onResults);

// Kamera util
const camera = new Camera(video, {
    onFrame: async () => {
        await hands.send({ image: video });
    },
    width: 500,
    height: 400
});
camera.start();

// Proses hasil deteksi
function onResults(results) {
    ctx.save();
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Gambar hasil kamera
    ctx.drawImage(results.image, 0, 0, canvas.width, canvas.height);

    if (results.multiHandLandmarks && results.multiHandLandmarks.length > 0) {
        const landmarks = results.multiHandLandmarks[0];

        // Gambar landmark
        drawConnectors(ctx, landmarks, HAND_CONNECTIONS, {color: "#00FF00", lineWidth: 2});
        drawLandmarks(ctx, landmarks, {color: "#FF0000", lineWidth: 1});

        // ----- PROCESS DATA FOR ML MODEL ------
        const input = landmarks.flatMap(p => [p.x, p.y, p.z]); // 21 * 3 = 63 values
        const tensor = tf.tensor([input]);

        if (model) {
            const prediction = model.predict(tensor);
            const index = prediction.argMax(1).dataSync()[0];

            resultText.innerText = labelMap[index] || "Unknown";
        }
    }

    ctx.restore();
}

// Mapping index → label
const labelMap = {
    0: "A",
    1: "B",
    2: "C",
    // tambah sesuai dataset kamu
};
</script>
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
@endsection