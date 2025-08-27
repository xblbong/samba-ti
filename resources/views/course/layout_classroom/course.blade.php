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
    </head>
    <body class="bg-gray-100">
    <div class="w-full mx-auto">
        <nav class="navbars">
            <div class="navbar-header w-full h-[4.6rem] relative cursor-pointer z-10 mb-20">
                <ul class="m-0 p-0 list-style-none h-full flex flex-row">
                    <li class="w-full my-3">
                        <a href="#">
                            <div class="flex-col h-auto w-full flex items-center justify-center">
                                <img class="block h-[8rem]" src="{{ asset('assets/img/samba/logo-navitera.svg') }}" alt="logo navitera">
                                <img class="h-10 -mt-4" src="{{ asset('assets/img/samba/navitera.svg') }}" alt="logo navitera">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            @if (Auth::user()->validate === 'approved')
            <div class="navbar-main py-4">
                <ul class="p-[10px] max-h-[100vh] overflow-auto m-0 navigation-ul">
                    <li class="relative whitespace-nowrap m-0">
                        <a href="{{ route('classroom') }}" class="nav-item {{ set_active(['classroom']) }} flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="home" class="w-[20px]"></i><span class="ml-[15px] text-base font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li class="relative whitespace-nowrap m-0">
                        <a href="{{ route('tugasku') }}" class="nav-item {{ set_active(['tugasku']) }} flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="book-open" class="w-[20px] icon-arrow"></i><span class="ml-[15px] text-base judul">Task</span>
                        </a>
                    </li>
                    <li class="relative whitespace-nowrap m-0">
                        <a href="{{ route('progressku') }}" class="nav-item  {{ set_active(['progressku']) }} flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="clock" class="w-[20px] icon-arrow"></i><span class="ml-[15px] text-base judul">Progress</span>
                        </a>
                    </li>
                    <li class="relative whitespace-nowrap m-0">
                        <a href="{{ route('student') }}" class="nav-item  {{ set_active(['student']) }} flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="users" class="w-[20px] icon-arrow"></i><span class="ml-[15px] text-base judul">Cluster</span>
                        </a>
                    </li>
                    <li class="relative whitespace-nowrap m-0">
                        <a href="{{ route('profile.edit') }}" class="nav-item  {{ set_active(['profile.edit']) }} flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="users" class="w-[20px] icon-arrow"></i><span class="ml-[15px] text-base judul">Profile</span>
                        </a>
                    </li>
                    @if (Auth::user()->status === 'admin')
                    <li class="relative whitespace-nowrap m-0">
                        <a href="{{ route('control') }}" class="nav-item  {{ set_active(['control']) }} flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="users" class="w-[20px] icon-arrow"></i><span class="ml-[15px] text-base judul">Control</span>
                        </a>
                    </li>
                    @endif
                </ul>
                <ul class="mt-16">
                    <form method="POST" action="{{ route('logout') }}" class="relative whitespace-nowrap m-0 mt-auto">
                        @csrf
                        <button type="submit" class="nav-item flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="log-out" class="w-[25px] text-red-400 icon-arrow font-[800]"></i><span class="ml-[15px] text-lg font-bold text-red-400">Logout</span>
                        </button>
                    </form>
                </ul>
            </div>
            @else
            {{-- Sidebar for non-approved users --}}
            <div class="navbar-main py-4">
                <ul class="p-[10px] max-h-[100vh] overflow-auto m-0 navigation-ul">
                    <li class="relative whitespace-nowrap m-0">
                        <a href="{{ route('profile.edit') }}" class="nav-item  {{ set_active(['profile.edit']) }} flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="users" class="w-[20px] icon-arrow"></i><span class="ml-[15px] text-base judul">Profile</span>
                        </a>
                    </li>
                </ul>
                <ul class="mt-16">
                    <form method="POST" action="{{ route('logout') }}" class="relative whitespace-nowrap m-0 mt-auto">
                        @csrf
                        <button type="submit" class="nav-item flex items-center overflow-hidden px-4 py-[9px] my-3 text-ellipsis">
                            <i data-feather="log-out" class="w-[25px] text-red-400 icon-arrow font-[800]"></i><span class="ml-[15px] text-lg font-bold text-red-400">Logout</span>
                        </button>
                    </form>
                </ul>
            </div>
            @endif

        </nav>
        <section class="content app ">
            <div class="wrapper-dashboard px-3 max-w-[1150px] mx-auto min-h-[90vh]">
                <div class="content-dashbord mx-[15px] p7">
{{-- top-navbar --}}
<div class="my-5" x-data="{ open: false }">
    <div class="w-full">
        <div class="">
            <div class="flex items-center max-[500px]:flex-wrap">
                <div class="mr-auto float-left items-center flex w-full">
                    <p class="text-slate-500 font-semibold text-lg">{{ $top->name }} <span class="font-bold text-slate-500">( {{ $top->nama_kelas }} )</span></p>
                </div>
                <div class=" flex w-full">
                    <div class="ml-auto flex justify-center items-center">
                        <i data-feather="menu" class="hamburger mr-4 text-slate-500 cursor-pointer" id="hamburger"></i>
                        <i data-feather="bell" class="text-gray-500 font-bold"></i>
                    </div>
                    <div class="wrapper-user">
                        <div class="flex flex-col items-end mr-[0.8rem]">
                            <span class="user text-white text-base text-right"></span>
                            <span class="text-white text-sm text-right"></span>
                        </div>
                        <li class="relative flex items-center w-[45px] max-[400px]:w-[50px]">
                            <div class="block p-0 transition-all text-sm ease-nav-brand">
                                <span class="flex justify-center items-center">
                                    <img class="shadow rounded-full aspect-square object-center object-cover cursor-pointer" src="{{ asset('storage/photo-profile/'.$top->foto) }}" onclick="toggleMenu()" alt="">
                                </span>
                            </div>
                            <div class="sub-menu-wrap z-50" id="subMenu">
                                <div class="sub-menu rounded shadow xl">
                                    <div class="user-info">
                                        <i data-feather="users" class="w-[20px] icon-arrow"></i><span class="ml-[15px] text-sm judul"><a href="{{ route('profile.edit') }}">Profile</a></span><span class="font-extrabold ml-auto">></span>
                                    </div>
                                    <div class="user-info mt-3">
                                        <i data-feather="log-out" class="w-[20px] icon-arrow"></i><span class="ml-[15px] text-sm judul">
                                            <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit">Logout</button>
                                            </form>
                                        </span><span class="font-extrabold ml-auto">></span>
                                    </div>
                                </div>
                            </div>
                        </li>

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
    </div>


        <footer class="ml-[260px] footer-index py-4 px-[2.2rem] h-[8vh] bg-white shadow bottom-0 relative">
            <p class="clearfix mb-0 flex items-center w-full h-full">
                <span class="text-[#727E8C] text-right ml-auto float-right inline-block text-base font-normal">2024 © <a href="#">HMPSTI Vokasi UB</a></span>
            </p>
        </footer>

        <script>
          feather.replace();
        </script>
            <script src="{{ asset('assets/js/main-js.js') }}"></script>
    </body>
</html>
