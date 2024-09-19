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

        <!-- Content -->
        <div class="max-w-md mx-auto mt-24 min-h-screen p-4">
            <div class="flex flex-col justify-center items-center gap-6 mx-1 sm:mx-6">
                <h3 class="font-display font-bold text-typo m-0 text-4xl text-center">Upload an image to optimize your
                    resume
                </h3>

                @if (Route::has('login'))
                    @auth
                        <div id="uploadContainer"
                            class="w-full max-w-md px-6 py-12 bg-white border-2 border-dashed border-gray-300 rounded-lg text-center transition-all duration-300 ease-in-out">
                            <input type="file" id="fileInput" class="hidden" accept="image/*">
                            <button onclick="document.getElementById('fileInput').click()"
                                class="mb-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center transition duration-300 ease-in-out">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Choose Photo
                            </button>
                            <p class="text-sm text-gray-600 mb-2">Max file size 5MB. <a href="#"
                                    class="text-blue-500 hover:underline">Sign Up</a> for more</p>
                            <p id="fileName" class="text-sm text-gray-500 mb-4"></p>
                        </div>
                    @else
                        <div x-data="{ open: false }"
                            class="relative w-full max-w-md px-6 py-12 bg-white border-2 border-dashed border-gray-300 rounded-lg text-center transition-all duration-300 ease-in-out">
                            <button @click="open = !open"
                                class="mb-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center transition duration-300 ease-in-out">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Choose Photo
                            </button>
                            <p class="text-sm text-gray-600 mb-2">Max file size 5MB. <a href="#"
                                    class="text-blue-500 hover:underline">Sign Up</a> for more</p>
                            <p id="fileName" class="text-sm text-gray-500 mb-4"></p>

                            <!-- Modal Background -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 -translate-x-full"
                                x-transition:enter-end="transform opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 translate-x-0"
                                x-transition:leave-end="transform opacity-0 -translate-x-full" style="display: none;"
                                class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50 transition-opacity duration-300 ease-in-out">
                                <!-- Modal Content -->
                                <div class="bg-white rounded-lg shadow-lg w-96 p-6" @click.away="open = false">
                                    <h2 class="text-xl font-semibold mb-4">Announcement</h2>
                                    <p class="text-gray-700 mb-6">Please log in to continue.</p>
                                    <a href="/login"
                                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center transition duration-300 ease-in-out">
                                        Login
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endauth
                @endif

                <div class="max-w-md">
                    <p class="text-2xs text-typo-secondary !mt-4 text-center">By uploading an image you agree
                        to our <a target="_blank" class="text-typo-secondary underline" draggable="false"
                            href="{{ url('/terms') }}">Terms of Service</a>.
                        To learn more about how devcareer.ai handles your personal data, check our <a target="_blank"
                            rel="noopener" class="underline" style="color: inherit;"
                            href="{{ url('/privacy') }}}">Privacy
                            Policy
                        </a>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('layouts.footer')
    </div>
</body>

</html>
