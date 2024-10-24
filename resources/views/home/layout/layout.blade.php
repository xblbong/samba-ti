<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

        <title>HMPSTI</title>
        <!-- Styles -->
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>
    <body class="bg-[#021526]">
        <nav class="w-full flex fixed top-0 z-[999] transition-all duration-300">

            <div class="flex navbar-fixed scroll py-3 px-36 max-[1300px]:px-20 max-[1100px]:px-10 w-full">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-24">
                <div class="flex text-white font-semibold ml-auto gap-10 items-center">
                    <a href="{{ route('main') }}" class="{{ set_home_active(['main']) }} navbar-item-active max-[1300px]:text-2xl text-3xl">Home</a>
                    <a href="{{ route('about') }}" class="{{ set_home_active(['about']) }} navbar-item-active max-[1300px]:text-2xl text-3xl">About</a>
                    <a href="{{ route('technotion') }}" class="{{ set_home_active(['technotion']) }} navbar-item-active max-[1300px]:text-2xl text-3xl">Technotion</a>
                    <a href="{{ route('department') }}" class="{{ set_home_active(['department']) }} navbar-item-active max-[1300px]:text-2xl text-3xl">Department</a>
                    <a href="{{ route('classroom') }}" class="{{ set_home_active(['clasroom']) }} navbar-item-active max-[1300px]:text-2xl text-3xl">Classroom</a>
                </div>
            </div>

            <div class="min-[900px]:hidden z-[999] flex mt-8 mr-10">
                <button id="hamburger_home" name="hamburger" type="button" class="hamburger block absolute right-3 bg-yellow-500 w-[2.5rem] h-11 items-center justify-center rounded z-[99999]">
                  <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                  <span class="hamburger-line transition duration-300 ease-in-out"></span>
                  <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
              </div>

        </nav>


        <div class="sidebar bg-white z-[500] transition-all duration-500 h-[100vh] w-full fixed top-0">
            <div class="w-full flex items-center justify-center py-5 border-b border-[#021526]">
                <div class="w-full flex justify-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-24">
                </div>
            </div>
            <div class="flex flex-col">
                <a href="{{ route('main') }}" class="font-medium z-10 text-2xl text-[#021526] border-b border-[#021526] border-opacity-40 p-5">Home</a>
                <a href="{{ route('about') }}" class="font-medium z-10 text-2xl text-[#021526] border-b border-[#021526] border-opacity-40 p-5">About</a>
                <a href="{{ route('technotion') }}" class="font-medium z-10 text-2xl text-[#021526] border-b border-[#021526] border-opacity-40 p-5">Technotion</a>
                <a href="{{ route('department') }}" class="flex items-center font-medium z-10 text-2xl text-[#021526] border-b border-[#021526] border-opacity-40 p-5"><span class="">Department</span><i data-feather="chevron-down" class="ml-auto"></i></a>
                <a href="{{ route('classroom') }}" class="font-medium z-10 text-2xl text-[#021526] border-b border-[#021526] border-opacity-40 p-5">Classroom</a>
            </div>
        </div>
        @yield('content_home')


        <footer class="bg-[#111928] px-36 max-[1300px]:px-20 max-[1100px]:px-10 bottom-0 relative pt-14 pb-7">
            <div class="flex w-full mb-10">
                <div class="w-[25%] max-[700px]:w-[40%]">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-28">
                </div>
                <div class="w-[75%] max-[700px]:w-[60%] grid grid-cols-3 max-[700px]:grid-cols-1 max-[800px]:grid-cols-2 max-[800px]:gap-5">
                    <div class="flex flex-col gap-3">
                        <h1 class="font-bold text-white text-lg max-[1055px]:text-base">Features</h1>
                        <a class="text-base max-[1055px]:text-sm font-bold text-white opacity-75" href="#">Home</a>
                        <a class="text-base max-[1055px]:text-sm font-bold text-white opacity-75" href="#">About</a>
                        <a class="text-base max-[1055px]:text-sm font-bold text-white opacity-75" href="#">Technotion</a>
                        <a class="text-base max-[1055px]:text-sm font-bold text-white opacity-75" href="#">Department</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h1 class="font-bold text-white text-lg max-[1055px]:text-base">Contact Us</h1>
                        <div class="flex max-[700px]:flex-wrap max-[400px]:text-sm">
                            <a class="w-full text-base max-[1055px]:text-sm font-bold text-white opacity-75" href="#">Email:</a><span class="text-right w-full text-white font-bold text-base max-[1055px]:text-sm">mail.hmpsti.ub@gmail.com</span>
                        </div>
                        <div class="flex max-[700px]:flex-wrap max-[400px]:text-sm">
                            <a class="w-full text-base max-[1055px]:text-sm font-bold text-white opacity-75" href="#">Whatsapp:</a><span class="text-right w-full text-white font-bold text-base max-[1055px]:text-sm">0823-3743-5710</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="min-[800px]:ml-auto">
                            <h1 class="font-bold text-white text-lg max-[1055px]:text-base">Social</h1>
                            <div class="social-media flex gap-3 ml-auto">
                                <img src="{{ asset('assets/img/tiktok.svg') }}" alt="">
                                <img src="{{ asset('assets/img/instagram.svg') }}" alt="">
                                <img src="{{ asset('assets/img/linkedin.svg') }}" alt="">
                                <img src="{{ asset('assets/img/youtube.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <h1 class="opacity-65 text-white font-medium text-base text-center">© 2024 Departemen Puskominfo HMPSTI | All Rights Reserved</h1>
                <hr class="opacity-20">
            </div>
        </footer>
        <script>
            feather.replace();
        </script>
        <script src="{{ asset('assets/js/home.js') }}"></script>
    </body>
</html>
