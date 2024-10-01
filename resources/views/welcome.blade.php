<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <style>
        /* Hide scrollbar in Chrome, Safari and Opera */
        ::-webkit-scrollbar {
            display: none;
        }

        #icon-container {
            perspective: 1000px;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="bg-white">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Hero Section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8">
            <div class="relative rounded-lg h-[400px] overflow-hidden">
                <!-- Background Image -->
                <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepick"
                    class="absolute inset-0 w-full h-full object-cover object-center" loading="lazy">

                <!-- Blur Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>

                <!-- Content -->
                <div class="relative flex items-center h-full">
                    <div class="p-12">
                        <h1 class="text-4xl font-semibold mb-4 text-white">Career Program</h1>
                        <p class="text-white">Build Your Career as a Professional Developer.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <a href="{{ url('/course') }}" class="text-center">
                    <div class="relative w-20 h-20 mx-auto mb-4 icon-container">
                        <img src="{{ asset('assets/icons/web.png') }}"
                            class="transition-transform duration-200 ease-out -mt-2 icon" alt="Icon">
                    </div>
                    <h3 class="mb-2">Web Developer</h3>
                </a>
                <a href="{{ url('/course') }}" class="text-center">
                    <div class="relative w-20 h-20 mx-auto mb-4 icon-container">
                        <img src="{{ asset('assets/icons/android.png') }}"
                            class="transition-transform duration-200 ease-out -mt-2 icon" alt="Icon">
                    </div>
                    <h3 class="mb-2">Android Developer</h3>
                </a>
                <a href="{{ url('/course') }}" class="text-center">
                    <div class="relative w-20 h-20 mx-auto mb-4 icon-container">
                        <img src="{{ asset('assets/icons/ml.png') }}"
                            class="transition-transform duration-200 ease-out -mt-2 icon" alt="Icon">
                    </div>
                    <h3 class="mb-2">Machine Learning</h3>
                </a>
                <a href="{{ url('/course') }}" class="text-center">
                    <div class="relative w-20 h-20 mx-auto mb-4 icon-container">
                        <img src="{{ asset('assets/icons/chart.png') }}"
                            class="transition-transform duration-200 ease-out -mt-2 icon" alt="Icon">
                    </div>
                    <h3 class="mb-2">Data Scientist</h3>
                </a>
            </div>

        </section>

        <!-- Advantages section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8 mt-12 mb-12 lg:mb-24">
            <h1 class="text-3xl font-bold text-center mb-4">The Advantages of Our Program</h1>
            <div class="flex justify-center">
                <p class="text-sm text-center text-gray-500 mb-4 w-3/4 lg:w-2/4">Unlock personalized learning paths and
                    AI-driven
                    insights
                    to enhance your skills and align your resume with industry standards, preparing you for the
                    competitive
                    job market.</p>
            </div>
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <div x-data="{
                        activeAccordion: null,
                        setActiveAccordion(id) {
                            this.activeAccordion = this.activeAccordion === id ? null : id
                        }
                    }">
                        <!-- Accordion Item 1 -->
                        <div
                            class="bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                            <button @click="setActiveAccordion(1)" class="w-full p-6 text-left">
                                <h3 class="text-lg font-semibold flex items-center justify-between">
                                    <span>CV Optimization with AI</span>
                                    <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300"
                                        :class="{ 'rotate-180': activeAccordion === 1 }" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h3>
                            </button>
                            <div x-ref="container1"
                                x-bind:style="activeAccordion === 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' :
                                    'max-height: 0px'"
                                class="overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-6 pb-6">
                                    Our AI-powered CV optimization tool analyzes and enhances your resume to match
                                    industry standards and job requirements.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div
                            class="bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                            <button @click="setActiveAccordion(2)" class="w-full p-6 text-left">
                                <h3 class="text-lg font-semibold flex items-center justify-between">
                                    <span>Career Directed Training</span>
                                    <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300"
                                        :class="{ 'rotate-180': activeAccordion === 2 }" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h3>
                            </button>
                            <div x-ref="container2"
                                x-bind:style="activeAccordion === 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' :
                                    'max-height: 0px'"
                                class="overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-6 pb-6">
                                    Tailored learning paths based on your career goals and current job market
                                    trends.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div
                            class="bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                            <button @click="setActiveAccordion(3)" class="w-full p-6 text-left">
                                <h3 class="text-lg font-semibold flex items-center justify-between">
                                    <span>Flexible Learning</span>
                                    <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300"
                                        :class="{ 'rotate-180': activeAccordion === 3 }" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h3>
                            </button>
                            <div x-ref="container3"
                                x-bind:style="activeAccordion === 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' :
                                    'max-height: 0px'"
                                class="overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-6 pb-6">
                                    Learn at your own pace with our on-demand courses and adaptive learning
                                    platform.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 4 -->
                        <div
                            class="bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                            <button @click="setActiveAccordion(4)" class="w-full p-6 text-left">
                                <h3 class="text-lg font-semibold flex items-center justify-between">
                                    <span>Direct Support</span>
                                    <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300"
                                        :class="{ 'rotate-180': activeAccordion === 4 }" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h3>
                            </button>
                            <div x-ref="container3"
                                x-bind:style="activeAccordion === 4 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' :
                                    'max-height: 0px'"
                                class="overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-6 pb-6">
                                    Get personalized guidance from experienced teachers,
                                    ensuring you stay on track with your learning goals.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block w-full lg:w-7/12 relative">
                    <div class="relative">
                        <!-- Background gradient -->
                        <div
                            class="absolute bottom-0 left-12 right-12 h-3/4 bg-gradient-to-tr from-blue-300 via-blue-200 to-blue-100 rounded-3xl">
                        </div>

                        <!-- Image container -->
                        <div class="relative z-10 overflow-hidden">
                            <img src="{{ asset('assets/images/keunggulan.png') }}" alt="Freepik"
                                class="w-full h-auto" loading="lazy">

                            <!-- Overlay to create crop effect -->
                            <div
                                class="absolute bottom-0 left-12 right-12 h-1/4 bg-gradient-to-t from-blue-300 via-blue-200 to-transparent rounded-b-3xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Courses section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8">
            <div class="flex justify-between mb-8">
                <div class="">
                    <h1 class="text-2xl font-semibold">Featured Courses</h1>
                    <p class="text-sm text-gray-600">Find the right course for you</p>
                </div>
                <a href="{{ url('/course') }}" class="flex items-center w-max">
                    <span class="text-xl text-blue-500">More</span>
                    <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        transform="rotate(90)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M6 15L12 9L18 15" stroke="#3b82f6" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <div
                    class="bg-white border rounded-lg p-3 hover:cursor-pointer hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2 flex flex-col justify-between">
                    <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepik"
                        class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                    <div class="flex flex-col flex-grow">
                        <h3 class="font-semibold text-xl mb-2">HTML & CSS</h3>
                        <div class="flex flex-col justify-between h-full">
                            <p class="text-md text-gray-600 min-h-16">Learn the basics of web development.</p>
                            <p class="text-sm text-gray-600 mb-2">By Sandika Galih</p>
                        </div>
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-2 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-xs text-gray-800">100+ Students</span>
                            </div>
                            <button
                                class="bg-white text-sm hover:bg-blue-500 text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded-lg transition duration-300 ease-in-out w-1/2">
                                Start Learning
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white border rounded-lg p-3 hover:cursor-pointer hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2 flex flex-col justify-between">
                    <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepik"
                        class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                    <div class="flex flex-col flex-grow">
                        <h3 class="font-semibold text-xl mb-2">Javascript</h3>
                        <div class="flex flex-col justify-between h-full">
                            <p class="text-md text-gray-600 min-h-16">Master dynamic web content with JavaScript.
                            </p>
                            <p class="text-sm text-gray-600 mb-2">By Sandika Galih</p>
                        </div>
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-2 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-xs text-gray-800">100+ Students</span>
                            </div>
                            <button
                                class="bg-white text-sm hover:bg-blue-500 text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded-lg transition duration-300 ease-in-out w-1/2">
                                Start Learning
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white border rounded-lg p-3 hover:cursor-pointer hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2 flex flex-col justify-between">
                    <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepik"
                        class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                    <div class="flex flex-col flex-grow">
                        <h3 class="font-semibold text-xl mb-2">PHP</h3>
                        <div class="flex flex-col justify-between h-full">
                            <p class="text-md text-gray-600 min-h-16">Master dynamic web content with JavaScript.
                            </p>
                            <p class="text-sm text-gray-600 mb-2">By Sandika Galih</p>
                        </div>
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-2 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-xs text-gray-800">100+ Students</span>
                            </div>
                            <button
                                class="bg-white text-sm hover:bg-blue-500 text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded-lg transition duration-300 ease-in-out w-1/2">
                                Start Learning
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white border rounded-lg p-3 hover:cursor-pointer hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2 flex flex-col justify-between">
                    <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepik"
                        class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                    <div class="flex flex-col flex-grow">
                        <h3 class="font-semibold text-xl mb-2">Laravel 11</h3>
                        <div class="flex flex-col justify-between h-full">
                            <p class="text-md text-gray-600 min-h-16">Master dynamic web content with JavaScript.
                            </p>
                            <p class="text-sm text-gray-600 mb-2">By Sandika Galih</p>
                        </div>
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-2 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-xs text-gray-800">100+ Students</span>
                            </div>
                            <button
                                class="bg-white text-sm hover:bg-blue-500 text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded-lg transition duration-300 ease-in-out w-1/2">
                                Start Learning
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8 my-28">
            <h2 class="text-3xl font-bold text-center mb-8">Optimize your CV with AI</h2>
            <p class="text-center max-w-xl mx-auto text-gray-600 mb-20">
                Upload your CV and let our AI analyze and provide recommendations that can increase your chances of
                getting your dream job.
            </p>
            <div class="text-center mb-12">
                <a href="{{ url('/resume') }}"
                    class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Optimize
                    Now</a>
            </div>
        </section>

        <!-- Testimonial section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8">
            <h2 class="text-3xl font-bold text-center mb-8">Apa Kata Pengguna Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-gray-50 rounded-lg shadow">
                    <p class="text-gray-600 mb-4">"DevCareer AI membantu saya mendapatkan pekerjaan pertama saya
                        sebagai web developer dengan tips optimisasi CV yang sangat tepat."</p>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/50" alt="User 1" class="rounded-full mx-auto mb-2">
                        <h3 class="font-semibold text-lg">Sandi</h3>
                        <p class="text-gray-500">Web Developer</p>
                    </div>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow">
                    <p class="text-gray-600 mb-4">"Dengan kursus dari DevCareer AI, saya dapat meningkatkan
                        keterampilan machine learning saya dan berhasil mendapatkan proyek freelance."</p>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/50" alt="User 2" class="rounded-full mx-auto mb-2">
                        <h3 class="font-semibold text-lg">Galih</h3>
                        <p class="text-gray-500">Freelancer</p>
                    </div>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow">
                    <p class="text-gray-600 mb-4">"Saran optimisasi CV yang diberikan AI sangat membantu saya menonjol
                        di mata perekrut!"</p>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/50" alt="User 3" class="rounded-full mx-auto mb-2">
                        <h3 class="font-semibold text-lg">Rizki</h3>
                        <p class="text-gray-500">Data Scientist</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        @include('layouts.footer')
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const containers = document.querySelectorAll(
                '.icon-container'); // Ambil semua container dengan class .icon-container

            containers.forEach(container => {
                const icon = container.querySelector(
                    '.icon'); // Cari elemen img dengan class .icon di dalam container

                container.addEventListener('mousemove', (e) => {
                    const rect = container.getBoundingClientRect();
                    const x = e.clientX - rect.left; // Mouse X relative to container
                    const y = e.clientY - rect.top; // Mouse Y relative to container

                    // Hitung posisi pusat elemen
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    // Hitung rotasi dengan gerakan lebih besar menuju tepi (berlawanan arah kursor)
                    const rotateY = ((centerX - x) / centerX) * -20;
                    const rotateX = ((y - centerY) / centerY) * -20;

                    // Terapkan transformasi
                    icon.style.transform =
                        `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.1)`;
                });

                container.addEventListener('mouseleave', () => {
                    // Reset rotasi dengan smooth
                    icon.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
                });
            });
        });
    </script>
</body>

</html>
