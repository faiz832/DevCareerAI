<!-- Sidebar -->
<div class="bg-slate-100 w-1/6 hidden lg:block rounded-lg">
    <div class="px-6 py-4">
        <h2 class="text-xl font-bold text-slate-900 mb-4">MENU</h2>
        <ul class="space-y-4">
            <li>
                <a href="#" class="flex items-center text-slate-900 ">
                    <svg class="h-5 w-5 mr-3 text-slate-900 " xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-slate-900 ">
                    <svg class="h-5 w-5 mr-3 text-slate-900 " xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h10M7 16h10M4 6h16v12H4z" />
                    </svg>
                    <span>Transaction</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-slate-900 ">
                    <svg class="h-5 w-5 mr-3 text-slate-900 " xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h10M7 16h10M4 6h16v12H4z" />
                    </svg>
                    <span>Teacher</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-slate-900 ">
                    <svg class="h-5 w-5 mr-3 text-slate-900 " xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h10M7 16h10M4 6h16v12H4z" />
                    </svg>
                    <span>Course</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-slate-900">
                    <svg class="h-5 w-5 mr-3 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c1.6569 0 3-1.3431 3-3S13.6569 5 12 5 9 6.3431 9 8s1.3431 3 3 3zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-slate-900">
                    <svg class="h-5 w-5 mr-3 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 14h10m-5-5l5 5-5 5M5 5v14" />
                    </svg>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-slate-900">
                    <svg class="h-5 w-5 mr-3 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="absolute left-0 top-12" x-data="{ open: false }" @click.away="open = false">
    <!-- Menu Button (visible on lg and smaller screens) -->
    <button @click="open = !open" class="lg:hidden">
        <div class="bg-white p-4 cursor-pointer rounded-r shadow-lg">
            <svg class="h-5 w-5 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </button>
    <!-- Sidebar -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 -translate-x-full"
        x-transition:enter-end="transform opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 translate-x-0"
        x-transition:leave-end="transform opacity-0 -translate-x-full" style="display: none;"
        class="fixed top-16 left-0 h-full w-2/4 bg-white shadow-lg z-40 lg:hidden" @click.stop>
        <div class="py-6 px-4">
            <h2 class="text-xl font-bold text-slate-900 mb-4">MENU</h2>
            <ul class="space-y-4">
                <li>
                    <a href="#" class="flex items-center text-slate-900 ">
                        <svg class="h-5 w-5 mr-3 text-slate-900 " xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h18v18H3z" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-slate-900 ">
                        <svg class="h-5 w-5 mr-3 text-slate-900 " xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h10M7 16h10M4 6h16v12H4z" />
                        </svg>
                        <span>Transaction</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-slate-900 ">
                        <svg class="h-5 w-5 mr-3 text-slate-900 " xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h10M7 16h10M4 6h16v12H4z" />
                        </svg>
                        <span>Teacher</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-slate-900 ">
                        <svg class="h-5 w-5 mr-3 text-slate-900 " xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h10M7 16h10M4 6h16v12H4z" />
                        </svg>
                        <span>Course</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-slate-900">
                        <svg class="h-5 w-5 mr-3 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 11c1.6569 0 3-1.3431 3-3S13.6569 5 12 5 9 6.3431 9 8s1.3431 3 3 3zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-slate-900">
                        <svg class="h-5 w-5 mr-3 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 14h10m-5-5l5 5-5 5M5 5v14" />
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-slate-900">
                        <svg class="h-5 w-5 mr-3 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

{{-- <div class="relative" x-data="{ open: false }" @click.away="open = false">
    <!-- Menu Button (visible on all screens) -->
    <button @click="open = !open" class="fixed top-4 left-4 z-50 bg-white p-4 cursor-pointer rounded shadow-lg">
        <svg class="h-5 w-5 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Sidebar -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 -translate-x-full"
        x-transition:enter-end="transform opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 translate-x-0"
        x-transition:leave-end="transform opacity-0 -translate-x-full"
        class="fixed top-0 left-0 h-full w-full sm:w-3/4 md:w-1/2 lg:w-1/4 bg-white shadow-lg z-40" @click.stop>
        <div class="py-6 px-4">
            <input class="DocSearch-Input search-wrap border rounded w-full px-4 py-2 focus:ring-0 text-sm"
                type="search" placeholder="Pencarian pelatihan kursus...">
            <div class="border-t border-slate-300 my-4"></div>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900"
                role="menuitem">Course</a>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900"
                role="menuitem">Resume</a>
        </div>
    </div>
</div> --}}
