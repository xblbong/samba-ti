<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

        <title>Laravel</title>
        <!-- Styles -->
        @vite('resources/css/app.css', 'resources/js/app.js')
        <style>
            /* Custom Scrollbar for better aesthetics - using Tailwind equivalents where possible */
            .navigation-ul::-webkit-scrollbar {
                width: 8px;
            }

            .navigation-ul::-webkit-scrollbar-track {
                background: #f3f4f6; /* gray-100 */
                border-radius: 9999px; /* rounded-full */
            }

            .navigation-ul::-webkit-scrollbar-thumb {
                background: #9ca3af; /* gray-400 */
                border-radius: 9999px; /* rounded-full */
            }

            .navigation-ul::-webkit-scrollbar-thumb:hover {
                background: #6b7280; /* gray-500 */
            }

            /* Active Nav Item - Direct Tailwind classes are preferred now */
            /* This is a fallback if `set_active` helper adds the class */
            .nav-item.active {
                background-color: #4f46e5; /* indigo-600 */
                color: white;
            }

            .nav-item.active::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
                width: 5px;
                background-color: #6366f1; /* indigo-500 for a subtle glow effect */
                border-radius: 0.5rem 0 0 0.5rem;
            }

            /* Sub-menu styling - Largely Tailwind now, with minimal custom for toggle */
            .sub-menu-wrap {
                position: absolute;
                top: 100%;
                right: 0;
                width: 250px;
                max-height: 0; /* Use max-height for smooth transition */
                overflow: hidden;
                transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
                opacity: 0;
                pointer-events: none; /* Disable interaction when hidden */
            }

            .sub-menu-wrap.open-menu {
                max-height: 400px; /* Adjust as needed for content */
                opacity: 1;
                pointer-events: all; /* Enable interaction when open */
            }

            /* Sidebar Toggle - Custom classes for transform property */
            .navbars {
                width: 260px;
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                background-color: #ffffff;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                transition: transform 0.3s ease-in-out;
                z-index: 100;
                transform: translateX(0); /* Default: visible */
            }

            .navbars.close {
                transform: translateX(-100%);
            }

            .content.app {
                margin-left: 260px;
                transition: margin-left 0.3s ease-in-out;
            }

            .content.app.full-width {
                margin-left: 0;
            }

            .footer-index {
                margin-left: 260px;
                transition: margin-left 0.3s ease-in-out;
            }

            .footer-index.full-width {
                margin-left: 0;
            }

            /* Responsive adjustments */
            @media (max-width: 1023px) { /* Tailwinds 'lg' breakpoint is 1024px */
                .navbars {
                    transform: translateX(-100%); /* Hidden by default on smaller screens */
                }
                .navbars.open {
                    transform: translateX(0%); /* Open when 'open' class is added */
                }
                .content.app, .footer-index {
                    margin-left: 0; /* Always full width on smaller screens */
                }
            }

            @media (max-width: 767px) { /* Tailwinds 'md' breakpoint is 768px */
                .navbars {
                    width: 240px; /* Slightly smaller sidebar for phones */
                }
                .navbar-header img.h-\[8rem\] {
                    height: 5rem; /* Smaller logo for phones */
                }
                .navbar-header img.h-10 {
                    height: 2.2rem; /* Smaller text logo for phones */
                    margin-top: -0.5rem; /* Adjust margin for smaller logo */
                }
            }
        </style>
    </head>
    <body class="bg-gray-100 antialiased">
    <div class="min-h-screen flex flex-col">
        <nav class="navbars" id="sidebar">
            <div class="navbar-header w-full relative z-10 py-4 mb-4">
                <ul class="m-0 p-0 list-none flex justify-center">
                    <li class="w-full my-3">
                        <a href="#" class="flex flex-col items-center justify-center">
                            <img class="block h-28 transition-all duration-300 ease-in-out" src="{{ asset('assets/img/samba/logo-navitera.svg') }}" alt="logo navitera">
                            <img class="h-9 -mt-4 transition-all duration-300 ease-in-out" src="{{ asset('assets/img/samba/navitera.svg') }}" alt="logo navitera">
                        </a>
                    </li>
                </ul>
            </div>
            @if (Auth::user()->validate === 'approved')
            <div class="navbar-main flex-grow py-4">
                <ul class="p-2 max-h-[calc(100vh-200px)] overflow-y-auto navigation-ul">
                    <li class="relative">
                        <a href="{{ route('classroom') }}" class="nav-item {{ set_active(['classroom']) }} flex items-center px-4 py-3 my-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition-all duration-200 ease-in-out">
                            <i data-feather="home" class="w-5 h-5"></i><span class="ml-4 text-base font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('tugasku') }}" class="nav-item {{ set_active(['tugasku']) }} flex items-center px-4 py-3 my-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition-all duration-200 ease-in-out">
                            <i data-feather="book-open" class="w-5 h-5"></i><span class="ml-4 text-base">Task</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('progressku') }}" class="nav-item  {{ set_active(['progressku']) }} flex items-center px-4 py-3 my-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition-all duration-200 ease-in-out">
                            <i data-feather="clock" class="w-5 h-5"></i><span class="ml-4 text-base">Progress</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('student') }}" class="nav-item  {{ set_active(['student']) }} flex items-center px-4 py-3 my-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition-all duration-200 ease-in-out">
                            <i data-feather="users" class="w-5 h-5"></i><span class="ml-4 text-base">Cluster</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('profile.edit') }}" class="nav-item  {{ set_active(['profile.edit']) }} flex items-center px-4 py-3 my-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition-all duration-200 ease-in-out">
                            <i data-feather="user" class="w-5 h-5"></i><span class="ml-4 text-base">Profile</span>
                        </a>
                    </li>
                    @if (Auth::user()->status === 'admin')
                    <li class="relative">
                        <a href="{{ route('control') }}" class="nav-item  {{ set_active(['control']) }} flex items-center px-4 py-3 my-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition-all duration-200 ease-in-out">
                            <i data-feather="settings" class="w-5 h-5"></i><span class="ml-4 text-base">Control</span>
                        </a>
                    </li>
                    @endif
                </ul>
                <ul class="mt-8 p-2">
                    <form method="POST" action="{{ route('logout') }}" class="relative">
                        @csrf
                        <button type="submit" class="nav-item flex items-center px-4 py-3 my-2 text-red-500 hover:bg-red-50 rounded-lg transition-all duration-200 ease-in-out w-full text-left">
                            <i data-feather="log-out" class="w-5 h-5"></i><span class="ml-4 text-base font-semibold">Logout</span>
                        </button>
                    </form>
                </ul>
            </div>
            @else
            {{-- Sidebar for non-approved users --}}
            <div class="navbar-main flex-grow py-4">
                <ul class="p-2 max-h-[calc(100vh-150px)] overflow-y-auto navigation-ul">
                    <li class="relative">
                        <a href="{{ route('profile.edit') }}" class="nav-item  {{ set_active(['profile.edit']) }} flex items-center px-4 py-3 my-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition-all duration-200 ease-in-out">
                            <i data-feather="user" class="w-5 h-5"></i><span class="ml-4 text-base">Profile</span>
                        </a>
                    </li>
                </ul>
                <ul class="mt-8 p-2">
                    <form method="POST" action="{{ route('logout') }}" class="relative">
                        @csrf
                        <button type="submit" class="nav-item flex items-center px-4 py-3 my-2 text-red-500 hover:bg-red-50 rounded-lg transition-all duration-200 ease-in-out w-full text-left">
                            <i data-feather="log-out" class="w-5 h-5"></i><span class="ml-4 text-base font-semibold">Logout</span>
                        </button>
                    </form>
                </ul>
            </div>
            @endif
        </nav>

        <section class="content app flex-grow">
            <div class="wrapper-dashboard px-4 py-6 max-w-[1400px] mx-auto min-h-[90vh]">
                <div class="content-dashbord bg-white rounded-lg shadow-sm p-6">
                    {{-- top-navbar --}}
                    <div class="mb-6 relative z-30" x-data="{ open: false }">
                        <div class="w-full">
                            <div class="flex items-center justify-between gap-4">
                                <div class="flex-grow flex items-center min-w-0 pr-4">
                                    <p class="text-gray-700 font-semibold text-xl truncate">{{ $top->name }} <span class="font-bold text-gray-600">( {{ $top->nama_kelas }} )</span></p>
                                </div>
                                <div class="flex items-center space-x-4 flex-shrink-0">
                                    {{-- Mobile Hamburger --}}
                                    <button type="button" class="lg:hidden text-gray-500 hover:text-indigo-600 focus:outline-none" id="hamburger-mobile">
                                        <i data-feather="menu" class="w-6 h-6"></i>
                                    </button>
                                    {{-- Desktop Hamburger --}}
                                    <button type="button" class="hidden lg:block text-gray-500 hover:text-indigo-600 focus:outline-none" id="hamburger-desktop">
                                        <i data-feather="menu" class="w-6 h-6"></i>
                                    </button>
                                    <i data-feather="bell" class="w-6 h-6 text-gray-500 cursor-pointer hover:text-indigo-600 transition-colors duration-200"></i>
                                    <div class="relative">
                                        <div class="wrapper-user flex items-center">
                                            <div class="flex flex-col items-end mr-3 max-w-[120px] truncate md:max-w-[150px]">
                                                <span class="user text-gray-800 text-base font-medium">{{ Auth::user()->name }}</span>
                                                <span class="text-gray-500 text-sm">{{ Auth::user()->status }}</span>
                                            </div>
                                            <div class="relative w-11 h-11 flex-shrink-0">
                                                <img class="shadow-md rounded-full aspect-square object-center object-cover cursor-pointer w-full h-full" src="{{ asset('storage/photo-profile/'.$top->foto) }}" onclick="toggleMenu()" alt="Profile Picture">
                                                <div class="sub-menu-wrap z-50" id="subMenu">
                                                    <div class="sub-menu bg-white p-5 m-2 rounded-lg shadow-lg">
                                                        <a href="{{ route('profile.edit') }}" class="user-info flex items-center mb-4 cursor-pointer transition-transform duration-200 hover:translate-x-1">
                                                            <i data-feather="user" class="w-5 h-5 text-indigo-500"></i><span class="ml-3 text-sm font-medium text-gray-700">Profile</span><span class="font-extrabold ml-auto text-gray-400">&gt;</span>
                                                        </a>
                                                        <div class="user-info mt-3">
                                                            <form method="POST" action="{{ route('logout') }}" class="w-full">
                                                                @csrf
                                                                <button type="submit" class="flex items-center w-full text-red-500 hover:text-red-600 transition-colors duration-200 cursor-pointer">
                                                                    <i data-feather="log-out" class="w-5 h-5 text-red-500"></i><span class="ml-3 text-sm font-medium">Logout</span><span class="font-extrabold ml-auto text-gray-400">&gt;</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end top-navbar --}}

                    {{-- main-content --}}
                    @yield('content_course')
                    {{-- end main-content --}}

                </div>
            </div>
        </section>

        <footer class="footer-index py-4 px-6 bg-white shadow-sm mt-8 w-full flex-shrink-0">
            <p class="mb-0 flex items-center w-full h-full justify-end">
                <span class="text-gray-500 text-sm font-normal">2024 © <a href="#" class="text-indigo-600 hover:text-indigo-800 transition-colors duration-200">HMPSTI Vokasi UB</a></span>
            </p>
        </footer>
    </div>


        <script>
            feather.replace();

            // Toggle SubMenu
            function toggleMenu() {
                let subMenu = document.getElementById("subMenu");
                subMenu.classList.toggle("open-menu");
            }

            // Close SubMenu on outside click
            document.addEventListener('click', function(event) {
                const subMenuWrap = document.getElementById('subMenu');
                const profileImg = document.querySelector('.wrapper-user img'); // The image that opens the menu

                if (subMenuWrap && !subMenuWrap.contains(event.target) && !profileImg.contains(event.target) && subMenuWrap.classList.contains('open-menu')) {
                    subMenuWrap.classList.remove('open-menu');
                }
            });


            // Sidebar Toggle
            const sidebar = document.getElementById('sidebar');
            const content = document.querySelector('.content.app');
            const footer = document.querySelector('.footer-index');
            const hamburgerDesktop = document.getElementById('hamburger-desktop');
            const hamburgerMobile = document.getElementById('hamburger-mobile');

            const toggleSidebar = () => {
                const isMobileView = window.innerWidth < 1024; // Tailwind's 'lg' breakpoint

                if (isMobileView) {
                    sidebar.classList.toggle('open'); // Use 'open' for mobile to slide in
                    // Add an overlay when sidebar is open on mobile
                    if (sidebar.classList.contains('open')) {
                        createOverlay();
                    } else {
                        removeOverlay();
                    }
                } else {
                    sidebar.classList.toggle('close'); // Use 'close' for desktop to hide
                    content.classList.toggle('full-width');
                    footer.classList.toggle('full-width');
                }
            };

            if (hamburgerDesktop) {
                hamburgerDesktop.addEventListener('click', toggleSidebar);
            }
            if (hamburgerMobile) {
                hamburgerMobile.addEventListener('click', toggleSidebar);
            }

            // Overlay for mobile sidebar
            function createOverlay() {
                let overlay = document.createElement('div');
                overlay.id = 'sidebar-overlay';
                overlay.className = 'fixed inset-0 bg-black bg-opacity-50 z-90'; /* Tailwind for dark overlay */
                document.body.appendChild(overlay);

                overlay.addEventListener('click', () => {
                    sidebar.classList.remove('open');
                    removeOverlay();
                });
            }

            function removeOverlay() {
                const overlay = document.getElementById('sidebar-overlay');
                if (overlay) {
                    overlay.remove();
                }
            }


            // Handle initial state and resize for sidebar
            const handleResize = () => {
                const isMobileView = window.innerWidth < 1024;

                if (isMobileView) {
                    // On mobile, ensure sidebar is hidden by default and content is full width
                    sidebar.classList.remove('close'); // Remove desktop close class
                    sidebar.classList.remove('open'); // Ensure it's not open by default
                    content.classList.add('full-width');
                    footer.classList.add('full-width');
                    removeOverlay(); // Remove overlay if window resized to mobile while open
                } else {
                    // On desktop, ensure sidebar is visible by default and content has margin
                    sidebar.classList.remove('open'); // Remove mobile open class
                    // sidebar.classList.remove('close'); // Keep 'close' if it was already closed by desktop toggle
                    content.classList.remove('full-width');
                    footer.classList.remove('full-width');
                    removeOverlay(); // Ensure no overlay on desktop
                }
            };

            window.addEventListener('resize', handleResize);
            handleResize(); // Initial call on page load

            // Set active navigation item (adjusted to use Tailwind for active state if possible)
            document.addEventListener('DOMContentLoaded', function() {
                const navItems = document.querySelectorAll('.nav-item');
                navItems.forEach(item => {
                    if (item.classList.contains('active')) {
                        // Tailwind classes applied via JS to ensure they override if needed
                        item.classList.add('bg-indigo-600', 'text-white');
                        // If feather icons need color change within active state
                        const icon = item.querySelector('i');
                        if (icon) {
                            icon.classList.remove('text-gray-700'); // Remove default icon color
                            icon.classList.add('text-white'); // Add white color
                        }
                    }
                });
            });

            // Prevent scroll when mobile sidebar is open (optional, but good for UX)
            sidebar.addEventListener('transitionend', () => {
                if (window.innerWidth < 1024 && sidebar.classList.contains('open')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            });
        </script>
        {{-- If main-js.js contains jQuery or other scripts, keep it --}}
        <script src="{{ asset('assets/js/main-js.js') }}"></script>
    </body>
</html>