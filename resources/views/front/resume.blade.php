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
                    resume</h3>
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
