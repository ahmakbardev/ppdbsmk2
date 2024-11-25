@extends('layouts.layout')

@section('content')
    <section class="relative py-20">
        <div class="px-5 mx-auto lg:px-20">
            <div class="flex flex-col-reverse md:flex-row items-center">
                <!-- Left Content -->
                <div class="md:w-1/2 lg:w-1/3 text-center lg:text-left space-y-6">
                    <h1 class="text-4xl md:text-5xl font-bold text-[#139a4a] leading-snug">
                        PPDB SMK PGRI 2 Malang
                    </h1>
                    <p class="text-lg text-gray-700">
                        Bergabunglah bersama kami di SMK PGRI 2 Malang untuk mempersiapkan masa depan yang lebih cerah
                        dengan pendidikan berkualitas dan fasilitas lengkap.
                    </p>
                    <div>
                        <a href="https://wa.me/6288230534873?text=Halo%20SMK%20PGRI%202%20Malang%2C%20saya%20ingin%20mendaftar%20sebagai%20siswa.%20Mohon%20informasinya."
                            target="_blank"
                            class="inline-block px-6 py-3 bg-[#139a4a] text-white font-semibold text-lg rounded-lg shadow-lg hover:bg-green-600 transition duration-300">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
                <!-- Right Content -->
                <div class="md:w-1/2 lg:w-2/3">
                    <img src="{{ asset('assets/images/hero/hero_grad.png') }}" alt="PPDB" class="w-full mx-auto">
                </div>
            </div>
        </div>
    </section>
    <section id="alur-pendaftaran" class="py-12 bg-white">
        <div class="container mx-auto px-4 lg:px-20">
            <!-- Title Section -->
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-[#139a4a]">
                    Bagaimana Cara Mendaftar?
                </h2>
                <p class="text-lg text-gray-700 mt-4">
                    Ikuti langkah-langkah berikut untuk menjadi bagian dari keluarga besar SMK PGRI 2 Malang.
                </p>
            </div>

            <!-- Timeline Section -->
            <div
                class="flex flex-col md:flex-row items-center justify-between md:space-x-10 space-y-10 md:space-y-0 relative">
                <!-- Step 1 -->
                <div class="relative z-10 text-center md:flex-1">
                    <div
                        class="bg-[#139a4a] text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-[#139a4a]">Isi Formulir</h3>
                    <p class="text-gray-600 mt-2">
                        Isi formulir pendaftaran secara online melalui website atau langsung ke sekolah.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 text-center md:flex-1">
                    <div
                        class="bg-[#139a4a] text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-[#139a4a]">Lengkapi Dokumen</h3>
                    <p class="text-gray-600 mt-2">
                        Persiapkan dokumen seperti Kartu Keluarga, Akta Kelahiran, dan lainnya.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 text-center md:flex-1">
                    <div
                        class="bg-[#139a4a] text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-[#139a4a]">Ikuti Tes</h3>
                    <p class="text-gray-600 mt-2">
                        Jika ada, ikuti tes seleksi yang diselenggarakan sesuai jadwal.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 text-center md:flex-1">
                    <div
                        class="bg-[#139a4a] text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-2xl font-bold">4</span>
                    </div>
                    <h3 class="text-lg font-semibold text-[#139a4a]">Pengumuman</h3>
                    <p class="text-gray-600 mt-2">
                        Cek hasil seleksi melalui website atau dihubungi langsung oleh pihak sekolah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri-kegiatan" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-20">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#139a4a]">Galeri Kegiatan</h2>
                <p class="text-gray-700 mt-2">Kumpulan momen menarik di SMK PGRI 2 Malang.</p>
            </div>

            <!-- Carousel -->
            <div class="relative overflow-hidden">
                <!-- Carousel Track -->
                <div id="carousel-galeri" class="flex transition-transform duration-700 ease-in-out">
                    <!-- Duplicate Last Item -->
                    <div class="flex-none w-full md:w-1/3 scale-95 px-4">
                        <img src="https://via.placeholder.com/500x300?text=Kegiatan+5" alt="Kegiatan 5"
                            class="w-full h-[300px] object-cover rounded-lg shadow-lg">
                    </div>
                    <!-- Original Items -->
                    <div class="flex-none w-full md:w-1/3 scale-95 px-4">
                        <img src="https://via.placeholder.com/500x300?text=Kegiatan+1" alt="Kegiatan 1"
                            class="w-full h-[300px] object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="flex-none w-full md:w-1/3 scale-95 px-4">
                        <img src="https://via.placeholder.com/500x300?text=Kegiatan+2" alt="Kegiatan 2"
                            class="w-full h-[300px] object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="flex-none w-full md:w-1/3 scale-95 px-4">
                        <img src="https://via.placeholder.com/500x300?text=Kegiatan+3" alt="Kegiatan 3"
                            class="w-full h-[300px] object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="flex-none w-full md:w-1/3 scale-95 px-4">
                        <img src="https://via.placeholder.com/500x300?text=Kegiatan+4" alt="Kegiatan 4"
                            class="w-full h-[300px] object-cover rounded-lg shadow-lg">
                    </div>
                    <!-- Duplicate First Item -->
                    <div class="flex-none w-full md:w-1/3 scale-95 px-4">
                        <img src="https://via.placeholder.com/500x300?text=Kegiatan+1" alt="Kegiatan 1"
                            class="w-full h-[300px] object-cover rounded-lg shadow-lg">
                    </div>
                </div>

                <!-- Controls -->
                <button id="prev-galeri"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-[#139a4a] text-white rounded-full p-3 z-10">
                    &#10094;
                </button>
                <button id="next-galeri"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-[#139a4a] text-white rounded-full p-3 z-10">
                    &#10095;
                </button>
            </div>
        </div>
    </section>

    <style>
        #carousel-galeri>div {
            transition: transform 0.7s ease-in-out;
        }

        #carousel-galeri img {
            transition: transform 0.3s ease;
        }

        #carousel-galeri img:hover {
            transform: scale(1.05);
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const track = document.getElementById("carousel-galeri");
            const slides = Array.from(track.children);
            const prevButton = document.getElementById("prev-galeri");
            const nextButton = document.getElementById("next-galeri");
            const slideWidth = slides[0].getBoundingClientRect().width;
            let currentIndex = 1; // Mulai dari item asli pertama

            // Inisialisasi posisi track
            track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;

            const moveToSlide = (index) => {
                track.style.transition = "transform 0.7s ease-in-out";
                track.style.transform = `translateX(-${slideWidth * index}px)`;
            };

            const handleInfiniteScroll = () => {
                if (currentIndex === 0) {
                    currentIndex = slides.length - 2; // Lompat ke item asli terakhir
                    track.style.transition = "none";
                    track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
                } else if (currentIndex === slides.length - 1) {
                    currentIndex = 1; // Lompat ke item asli pertama
                    track.style.transition = "none";
                    track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
                }
            };

            // Next Button
            nextButton.addEventListener("click", () => {
                currentIndex++;
                moveToSlide(currentIndex);
            });

            // Previous Button
            prevButton.addEventListener("click", () => {
                currentIndex--;
                moveToSlide(currentIndex);
            });

            // Auto-slide
            setInterval(() => {
                currentIndex++;
                moveToSlide(currentIndex);
                setTimeout(handleInfiniteScroll,
                    700); // Tambahkan delay agar transisi selesai sebelum reset
            }, 5000); // Slide every 5 seconds

            // Event Listener untuk menangani infinite scroll
            track.addEventListener("transitionend", handleInfiniteScroll);
        });
    </script>

    <section id="gelombang-pendaftaran" class="py-48">
        <div class="container mx-auto px-4 lg:px-20">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#139a4a]">
                    Informasi Pendaftaran
                </h2>
                <p class="text-gray-700 mt-2">
                    Arahkan kursor pada setiap gelombang untuk melihat detail informasi. Pada perangkat mobile, informasi
                    akan mendorong konten ke bawah.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Card 1 -->
                <div
                    class="relative bg-white rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 group cursor-pointer">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#139a4a]">Gelombang 1</h3>
                        <p class="text-sm mt-2 text-gray-600">2 Januari 2023 - 28 Februari 2023</p>
                    </div>
                    <!-- Expandable Content -->
                    <div
                        class="hidden md:absolute md:top-full md:left-0 w-full bg-gray-100 rounded-lg shadow-lg p-4 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-500 z-10 md:block">
                        <h4 class="text-lg font-bold text-[#139a4a]">Detail Gelombang 1</h4>
                        <p class="text-sm mt-2">Biaya Pendaftaran: <span class="font-bold">Rp 2.250.000,-</span></p>
                        <p class="text-sm mt-2">Cashback: <span class="font-bold">Rp 1.250.000,-</span></p>
                    </div>
                    <!-- Mobile View -->
                    <div class="block md:hidden bg-gray-100 rounded-lg shadow-lg p-4 transition-all duration-500 mt-4">
                        <h4 class="text-lg font-bold text-[#139a4a]">Detail Gelombang 1</h4>
                        <p class="text-sm mt-2">Biaya Pendaftaran: <span class="font-bold">Rp 2.250.000,-</span></p>
                        <p class="text-sm mt-2">Cashback: <span class="font-bold">Rp 1.250.000,-</span></p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="relative bg-white rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 group cursor-pointer">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#139a4a]">Gelombang 2</h3>
                        <p class="text-sm mt-2 text-gray-600">1 Maret 2023 - 30 April 2023</p>
                    </div>
                    <!-- Expandable Content -->
                    <div
                        class="hidden md:absolute md:top-full md:left-0 w-full bg-gray-100 rounded-lg shadow-lg p-4 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-500 z-10 md:block">
                        <h4 class="text-lg font-bold text-[#139a4a]">Detail Gelombang 2</h4>
                        <p class="text-sm mt-2">Biaya Pendaftaran: <span class="font-bold">Rp 2.500.000,-</span></p>
                        <p class="text-sm mt-2">Cashback: <span class="font-bold">Rp 1.000.000,-</span></p>
                    </div>
                    <!-- Mobile View -->
                    <div class="block md:hidden bg-gray-100 rounded-lg shadow-lg p-4 transition-all duration-500 mt-4">
                        <h4 class="text-lg font-bold text-[#139a4a]">Detail Gelombang 2</h4>
                        <p class="text-sm mt-2">Biaya Pendaftaran: <span class="font-bold">Rp 2.500.000,-</span></p>
                        <p class="text-sm mt-2">Cashback: <span class="font-bold">Rp 1.000.000,-</span></p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="relative bg-white rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 group cursor-pointer">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#139a4a]">Gelombang 3</h3>
                        <p class="text-sm mt-2 text-gray-600">1 Mei 2023 - 30 Juni 2023</p>
                    </div>
                    <!-- Expandable Content -->
                    <div
                        class="hidden md:absolute md:top-full md:left-0 w-full bg-gray-100 rounded-lg shadow-lg p-4 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-500 z-10 md:block">
                        <h4 class="text-lg font-bold text-[#139a4a]">Detail Gelombang 3</h4>
                        <p class="text-sm mt-2">Biaya Pendaftaran: <span class="font-bold">Rp 2.750.000,-</span></p>
                        <p class="text-sm mt-2">Cashback: <span class="font-bold">Rp 750.000,-</span></p>
                    </div>
                    <!-- Mobile View -->
                    <div class="block md:hidden bg-gray-100 rounded-lg shadow-lg p-4 transition-all duration-500 mt-4">
                        <h4 class="text-lg font-bold text-[#139a4a]">Detail Gelombang 3</h4>
                        <p class="text-sm mt-2">Biaya Pendaftaran: <span class="font-bold">Rp 2.750.000,-</span></p>
                        <p class="text-sm mt-2">Cashback: <span class="font-bold">Rp 750.000,-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vertical-carousel" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#139a4a]">Video Testimoni</h2>
                <p class="text-gray-700 mt-2">Saksikan pengalaman dan cerita mereka bersama SMK PGRI 2 Malang.</p>
            </div>

            <div class="relative overflow-hidden">
                <!-- Carousel Track -->
                <div id="carousel-track" class="flex transition-transform duration-700 ease-in-out">
                    <!-- Duplicate Last Item -->
                    <div class="flex-none w-full md:w-1/3 px-4">
                        <iframe class="w-full h-[500px] rounded-lg"
                            data-src="https://www.youtube.com/embed/3s1HaK7Ho5Q?enablejsapi=1&rel=0&controls=0&showinfo=0&modestbranding=1&playsinline=1"
                            frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                    <!-- Original Items -->
                    <div class="flex-none w-full md:w-1/3 px-4">
                        <iframe class="w-full h-[500px] rounded-lg"
                            data-src="https://www.youtube.com/embed/SmdQof4MCtI?enablejsapi=1&rel=0&controls=0&showinfo=0&modestbranding=1&playsinline=1"
                            frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="flex-none w-full md:w-1/3 px-4">
                        <iframe class="w-full h-[500px] rounded-lg"
                            data-src="https://www.youtube.com/embed/3s1HaK7Ho5Q?enablejsapi=1&rel=0&controls=0&showinfo=0&modestbranding=1&playsinline=1"
                            frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="flex-none w-full md:w-1/3 px-4">
                        <iframe class="w-full h-[500px] rounded-lg"
                            data-src="https://www.youtube.com/embed/3s1HaK7Ho5Q?enablejsapi=1&rel=0&controls=0&showinfo=0&modestbranding=1&playsinline=1"
                            frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                    <!-- Duplicate First Item -->
                    <div class="flex-none w-full md:w-1/3 px-4">
                        <iframe class="w-full h-[500px] rounded-lg"
                            data-src="https://www.youtube.com/embed/3s1HaK7Ho5Q?enablejsapi=1&rel=0&controls=0&showinfo=0&modestbranding=1&playsinline=1"
                            frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                </div>


                <!-- Controls -->
                <button id="prev-btn"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-[#139a4a] text-white rounded-full p-3 z-10">
                    &#10094;
                </button>
                <button id="next-btn"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-[#139a4a] text-white rounded-full p-3 z-10">
                    &#10095;
                </button>
            </div>
        </div>
    </section>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const track = document.getElementById("carousel-track");
            const slides = Array.from(track.children);
            const prevButton = document.getElementById("prev-btn");
            const nextButton = document.getElementById("next-btn");
            const slideWidth = slides[0].getBoundingClientRect().width;
            let currentIndex = 1; // Mulai dari item asli pertama

            // Inisialisasi posisi track
            track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;

            const lazyLoadIframe = (iframe) => {
                const dataSrc = iframe.getAttribute("data-src");
                if (dataSrc && !iframe.src) {
                    iframe.src = dataSrc;
                }
            };

            const updateInteraction = () => {
                slides.forEach((slide, index) => {
                    const iframe = slide.querySelector("iframe");
                    if (index === currentIndex + 1) { // Slide di kanan dapat berinteraksi
                        slide.style.pointerEvents = "auto";
                        lazyLoadIframe(iframe); // Lazy load video di kanan
                        iframe.src = iframe.src.replace("&autoplay=1", "") + "&autoplay=1";
                    } else {
                        slide.style.pointerEvents = "none"; // Nonaktifkan interaksi untuk slide lainnya
                        if (iframe.src) iframe.src = iframe.src.replace("&autoplay=1", "");
                    }
                });
            };

            const updateScale = () => {
                slides.forEach((slide, index) => {
                    slide.style.transform = "scale(0.9)"; // Default scale
                    slide.style.zIndex = "1"; // Default z-index
                    if (index === currentIndex + 1) { // Hanya item di kanan yang mendapatkan scale 1.0
                        slide.style.transform = "scale(1.0)";
                        slide.style.zIndex = "10"; // Prioritaskan di atas layer lain
                    }
                });
            };

            const moveToSlide = (index) => {
                track.style.transition = "transform 0.7s ease-in-out";
                track.style.transform = `translateX(-${slideWidth * index}px)`;
                updateScale();
                updateInteraction();
            };

            const handleInfinite = () => {
                if (currentIndex === 0) {
                    currentIndex = slides.length - 2; // Lompat ke item asli terakhir
                    track.style.transition = "none";
                    track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
                } else if (currentIndex === slides.length - 1) {
                    currentIndex = 1; // Lompat ke item asli pertama
                    track.style.transition = "none";
                    track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
                }
                updateScale();
                updateInteraction();
            };

            const autoSlideAfterVideoEnds = () => {
                const activeSlide = slides[currentIndex + 1];
                const iframe = activeSlide.querySelector("iframe");
                const player = new YT.Player(iframe, {
                    events: {
                        onStateChange: (event) => {
                            if (event.data === YT.PlayerState.ENDED) {
                                currentIndex++;
                                moveToSlide(currentIndex);
                            }
                        },
                    },
                });
            };

            // Next Button
            nextButton.addEventListener("click", () => {
                currentIndex++;
                moveToSlide(currentIndex);
            });

            // Previous Button
            prevButton.addEventListener("click", () => {
                currentIndex--;
                moveToSlide(currentIndex);
            });

            // Event Listener untuk menangani infinite loop dan skala
            track.addEventListener("transitionend", () => {
                handleInfinite();
                autoSlideAfterVideoEnds();
            });

            // Initialize
            updateScale();
            updateInteraction();
            autoSlideAfterVideoEnds();
        });
    </script>
    <style>
        #carousel-track>div {
            transform: scale(0.9);
            transition: transform 0.7s ease-in-out, z-index 0.7s ease-in-out, pointer-events 0.7s ease-in-out;
        }

        #carousel-track>div:nth-child(n+1) {
            transform: scale(1.0);
            z-index: 10;
        }
    </style>

    <section id="faq" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-20">
            <!-- Title -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-[#139a4a]">Pertanyaan yang Sering Diajukan</h2>
                <p class="text-gray-700 mt-2">Jawaban atas pertanyaan umum tentang PPDB.</p>
            </div>

            <!-- FAQ Accordion -->
            <div class="space-y-4">
                <!-- Question 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <button
                        class="w-full text-left p-4 text-[#139a4a] font-semibold hover:bg-gray-100 flex justify-between items-center focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span>Apa saja syarat pendaftaran?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="p-4 text-gray-600">Syarat pendaftaran meliputi fotokopi Kartu Keluarga, Akta Kelahiran,
                            dan dokumen lainnya sesuai ketentuan.</p>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <button
                        class="w-full text-left p-4 text-[#139a4a] font-semibold hover:bg-gray-100 flex justify-between items-center focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span>Bagaimana alur pendaftaran?</span>
                        <svg class="w-6 h-6 transform transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                        <p class="p-4 text-gray-600">Alur pendaftaran dimulai dari pengisian formulir online, kelengkapan
                            dokumen, tes (jika ada), hingga pengumuman hasil seleksi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleFaq(button) {
            const content = button.nextElementSibling;
            const svg = button.querySelector('svg');
            const maxHeight = content.scrollHeight + 'px';

            if (content.style.maxHeight) {
                // Close the accordion
                content.style.maxHeight = null;
                svg.classList.remove('rotate-180');
            } else {
                // Close all other accordions
                document.querySelectorAll('.faq-content').forEach(el => {
                    el.style.maxHeight = null;
                    el.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
                });

                // Open the clicked accordion
                content.style.maxHeight = maxHeight;
                svg.classList.add('rotate-180');
            }
        }
    </script>


    <section id="kontak-lokasi" class="py-12 bg-white">
        <div class="container mx-auto px-4 lg:px-20">
            <!-- Title -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-[#139a4a]">Hubungi Kami</h2>
                <p class="text-gray-700 mt-2">Kami siap membantu Anda untuk segala informasi tentang SMK PGRI 2 Malang.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-2xl font-semibold text-[#139a4a] mb-4">Informasi Kontak</h3>
                    <ul class="space-y-2">
                        <li>
                            <strong>Alamat:</strong>
                            <p>Jl. Janti Barat Blk. A No.24, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148</p>
                        </li>
                        <li>
                            <strong>Telepon:</strong>
                            <p><a href="tel:+628123456789" class="text-[#139a4a] hover:underline">+62 882-3053-4873</a>
                            </p>
                        </li>
                        <li>
                            <strong>Email:</strong>
                            <p><a href="mailto:info@smkpgri2malang.sch.id"
                                    class="text-[#139a4a] hover:underline">smkpgri2kotamalang@gmail.com</a></p>
                        </li>
                    </ul>
                </div>

                <!-- Google Maps Embed -->
                <div>
                    <h3 class="text-2xl font-semibold text-[#139a4a] mb-4">Lokasi</h3>
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15803.802078814715!2d112.6217937!3d-8.00404!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd627ffc6fd814b%3A0xf0585c9eff811447!2sSMK%20PGRI%202%20Malang!5e0!3m2!1sid!2sid!4v1732500018098!5m2!1sid!2sid"
                            width="100%" height="300" frameborder="0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
