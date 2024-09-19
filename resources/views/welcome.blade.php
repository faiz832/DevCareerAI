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

    <style>
        /* Hide scrollbar in Chrome, Safari and Opera */
        ::-webkit-scrollbar {
            display: none;
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

        <!-- Course selection section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8">
            <div class="mb-4 md:mb-7 flex flex-col md:flex-row md:items-end">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-2xl font-bold mb-1">Pilih Akademi Pelatihan</h2>
                    <h5 class="text-sm text-gray-600">Hi Digiers, temukan berbagai pelatihan menarik yang sesuai
                        dengan dirimu</h5>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <a href="/akademi/FGA"
                    class="card bg-white border rounded-lg p-3 md:p-5 text-center hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                    <div class="relative text-light">
                        <img src="https://bucket.sdmdigital.id/dts-pelatihan/akademi/logo/06514e58-fa23-41cd-9b08-1969dcca878a.png"
                            class="h-[152px] mx-auto" alt="Lulusan Baru">
                    </div>
                    <div class="mt-3">
                        <h5 class="text-lg font-semibold truncate">Lulusan Baru</h5>
                        <p class="text-sm text-gray-600 truncate">Fresh Graduate Academy</p>
                    </div>
                </a>
                <a href="/akademi/VSGA"
                    class="card bg-white border rounded-lg p-3 md:p-5 text-center hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                    <div class="relative text-light">
                        <img src="https://bucket.sdmdigital.id/dts-pelatihan/akademi/logo/e34610c2-2b02-4bd9-8df1-74c32201a977.png"
                            class="h-[152px] mx-auto" alt="Lulusan Vokasi">
                    </div>
                    <div class="mt-3">
                        <h5 class="text-lg font-semibold truncate">Lulusan Vokasi</h5>
                        <p class="text-sm text-gray-600 truncate">Vocational School Graduate Academy</p>
                    </div>
                </a>
                <a href="/akademi/TSA"
                    class="card bg-white border rounded-lg p-3 md:p-5 text-center hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                    <div class="relative text-light">
                        <img src="https://bucket.sdmdigital.id/dts-pelatihan/akademi/logo/9598c7de-1507-49b5-a37a-14398a513119.png"
                            class="h-[152px] mx-auto" alt="Mahasiswa">
                    </div>
                    <div class="mt-3">
                        <h5 class="text-lg font-semibold truncate">Mahasiswa</h5>
                        <p class="text-sm text-gray-600 truncate">Talent Scouting Academy</p>
                    </div>
                </a>
                <a href="/akademi/TSA"
                    class="card bg-white border rounded-lg p-3 md:p-5 text-center hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                    <div class="relative text-light">
                        <img src="https://bucket.sdmdigital.id/dts-pelatihan/akademi/logo/9598c7de-1507-49b5-a37a-14398a513119.png"
                            class="h-[152px] mx-auto" alt="Mahasiswa">
                    </div>
                    <div class="mt-3">
                        <h5 class="text-lg font-semibold truncate">Mahasiswa</h5>
                        <p class="text-sm text-gray-600 truncate">Talent Scouting Academy</p>
                    </div>
                </a>
                <!-- Continue adding the remaining cards -->
            </div>
        </section>

        <!-- Courses -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8">
            <div class="bg-blue-100 rounded-lg p-12">
                <h2 class="text-2xl font-semibold mb-12 text-center">Featured Courses</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Courses Card -->
                    <div
                        class="bg-white rounded-lg overflow-hidden group shadow-lg transition duration-300 ease-in-out">
                        <div class="h-44 overflow-hidden">
                            <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepik"
                                class="w-full h-full object-cover object-center transition duration-300 ease-in-out transform group-hover:scale-105"
                                loading="lazy">
                        </div>
                        <div class="flex flex-col p-4 gap-4">
                            <h3 class="font-semibold min-h-12">Front-end Web Developer with JavaScript Framework
                            </h3>
                            <p class="text-sm text-gray-600">By Sandika Galih</p>
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-2 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-xs text-gray-800">
                                    100+ Students
                                </span>
                            </div>
                            <button
                                class="mt-2 bg-white hover:bg-blue-500 w-full text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded transition duration-300 ease-in-out">
                                Start Learning
                            </button>
                        </div>
                    </div>
                    <div
                        class="bg-white rounded-lg overflow-hidden group shadow-lg transition duration-300 ease-in-out">
                        <div class="h-44 overflow-hidden">
                            <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepik"
                                class="w-full h-full object-cover object-center transition duration-300 ease-in-out transform group-hover:scale-105"
                                loading="lazy">
                        </div>
                        <div class="flex flex-col p-4 gap-4">
                            <h3 class="font-semibold min-h-12">Front-end Web Developer with JavaScript Framework
                            </h3>
                            <p class="text-sm text-gray-600">By Sandika Galih</p>
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-2 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-xs text-gray-800">
                                    100+ Students
                                </span>
                            </div>
                            <button
                                class="mt-2 bg-white hover:bg-blue-500 w-full text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded transition duration-300 ease-in-out">
                                Start Learning
                            </button>
                        </div>
                    </div>
                    <div
                        class="bg-white rounded-lg overflow-hidden group shadow-lg transition duration-300 ease-in-out">
                        <div class="h-44 overflow-hidden">
                            <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepik"
                                class="w-full h-full object-cover object-center transition duration-300 ease-in-out transform group-hover:scale-105"
                                loading="lazy">
                        </div>
                        <div class="flex flex-col p-4 gap-4">
                            <h3 class="font-semibold min-h-12">Front-end Web Developer with JavaScript Framework
                            </h3>
                            <p class="text-sm text-gray-600">By Sandika Galih</p>
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-2 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-xs text-gray-800">
                                    100+ Students
                                </span>
                            </div>
                            <button
                                class="mt-2 bg-white hover:bg-blue-500 w-full text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded transition duration-300 ease-in-out">
                                Start Learning
                            </button>
                        </div>
                    </div>
                    <div
                        class="bg-white rounded-lg overflow-hidden group shadow-lg transition duration-300 ease-in-out">
                        <div class="h-44 overflow-hidden">
                            <img src="{{ asset('assets/images/thumbnail.jpg') }}" alt="image by freepik"
                                class="w-full h-full object-cover object-center transition duration-300 ease-in-out transform group-hover:scale-105"
                                loading="lazy">
                        </div>
                        <div class="flex flex-col p-4 gap-4">
                            <h3 class="font-semibold min-h-12">Front-end Web Developer with JavaScript Framework
                            </h3>
                            <p class="text-sm text-gray-600">By Sandika Galih</p>
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-2 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="text-xs text-gray-800">
                                    100+ Students
                                </span>
                            </div>
                            <button
                                class="mt-2 bg-white hover:bg-blue-500 w-full text-blue-500 hover:text-white border border-blue-500 px-4 py-2 rounded transition duration-300 ease-in-out">
                                Start Learning
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features section -->
        <section class="max-w-[1200px] mx-auto p-4 py-6 lg:py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Repeat this feature structure 4 times -->
                <div class="text-center">
                    <div
                        class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <!-- Add icon here -->
                    </div>
                    <h3 class="font-semibold mb-2">Feature Title</h3>
                    <p class="text-sm text-gray-600">Feature description</p>
                </div>
                <div class="text-center">
                    <div
                        class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <!-- Add icon here -->
                    </div>
                    <h3 class="font-semibold mb-2">Feature Title</h3>
                    <p class="text-sm text-gray-600">Feature description</p>
                </div>
                <div class="text-center">
                    <div
                        class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <!-- Add icon here -->
                    </div>
                    <h3 class="font-semibold mb-2">Feature Title</h3>
                    <p class="text-sm text-gray-600">Feature description</p>
                </div>
                <div class="text-center">
                    <div
                        class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <!-- Add icon here -->
                    </div>
                    <h3 class="font-semibold mb-2">Feature Title</h3>
                    <p class="text-sm text-gray-600">Feature description</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        @include('layouts.footer')
    </div>
</body>

</html>
