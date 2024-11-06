@extends('home/layout/layout')
@section('content_home')

<div class="relative -mt-24 overflow-hidden">
    <img src="{{ asset('assets/img/hero-about.png') }}" class="image-hero -z-10 top-" alt="">
    <!-- TECHNOTION 2024 -->
    <div class="flex gap-5 mb-60 max-[728px]:flex-wrap w-full max-[728px]:pt-[100px] pt-[180px] px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 items-center">
        <div class="w-[90%] max-[950px]:w-[65%] max-[728px]:w-full text-white">
            <h1 class="font-black font-raleway text-6xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-1 mb-2 hidden-up">TECHNOTION <span class="font-poppins text-[#197EFF]">2024</span></h1>
            <h1 class="font-bold font-raleway text-xl mb-5 mt-8 max-[728px]:mb-3 max-[370px]:text-sm max-[1045px]:text-lg flex w-[85%] hidden-up"><span class="mr-2">━</span>“Technology Innovation of Teenagers”</h1>
            <h1 class="font-light font-raleway text-base text-justify mb-5 mt-8 max-[728px]:mb-3 max-[370px]:text-sm max-[1045px]:text-lg flex w-[85%] hidden-up">Rangkaian kegIatan dalam program kerja utama HMPSTI 2024 yang bertujuan Memperkenalkan lingkup Program Studi, pengembangan skill, dan Mewadahi karya mahasiswa Teknologi Informasi. Dengan adanya Technotion 2024, HMPSTI dan seluruh mahasiswa Teknologi Informasi bisa menjadikan wadah branding untuk bakat dan inovasi agar terciptanya mahasiswa unggul dalam akademik maupun non akademik.</h1>
        </div>
    </div>
    <!-- Description and Logo Section -->
    <div class="vismis mb-16  relative">
        <!-- Description Boxes -->
        <div class="flex mb-36 gap-24 max-[780px]:gap-10  px-0">
            <div class="max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 hidden-up bg-transparent backdrop-blur-xl bg-opacity-10 border-opacity-10 rounded-2xl overflow-hidden border border-solid relative border-white mx-auto px-7 max-[780px]:px-2 max-[780px]:pt-3 pt-9 pb-8 w-[37rem]">
                <h1 class="font-raleway font-normal text-white text-lg max-[900px]:text-sm max-[780px]:text-xs max-[1200px]:text-base leading-7 text-justify">Warna biru sering dikaitkan dengan kepercayaan, stabilitas dan ketenangan. Di dalam konteks logo Technotion, warna biru ini menggambarkan organisasi HMPSTI dapat diandalkan dan memberikan rasa tenang kepada mahasiswa. Warna abu-abu menggambarkan kesan elegan dan modern. Di dalam organisasi HMPSTI ini ingin menunjukkan bahwa organisasi HMPSTI berada di garis terdepan dalam inovasi.</h1>
                <div class="bg-gradient-to-r from-[#F8CF35] to-[#00DED3] w-full h-3 absolute bottom-0 left-0"></div>
            </div>
            <div class="max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 hidden-up bg-transparent backdrop-blur-xl bg-opacity-10 border-opacity-10 rounded-2xl overflow-hidden border border-solid relative border-white mx-auto px-7 max-[780px]:px-2 max-[780px]:pt-3 pt-9 pb-8 w-[30rem]">
                <h1 class="font-raleway font-normal text-white text-lg max-[900px]:text-sm max-[780px]:text-xs max-[1200px]:text-base leading-7 text-justify">Ikon roda gigi yang menggambarkan inovasi, teknologi, dan kerjasama tim. Ikon buku terbuka yang mencerminkan pengetahuan, yang menekankan pada inovasi dan memberdayakan pikiran muda di bidang teknologi.</h1>
                <div class="bg-gradient-to-r from-[#F8CF35] to-[#00DED3] w-full h-3 absolute bottom-0 left-0"></div>
            </div>
            <!-- Background Jaring -->
            <img class="top-0 absolute mix-blend-luminosity w-full bg-cover opacity-25 -z-10" src="{{ asset('assets/img/bgmain.png') }}" alt="">    
        </div>

        <!-- Logo Positioning -->
        <div class="relative flex flex-col justify-center items-center text-center top-0 z-10">
            <div class="flex gap-24 mb-9">
                <img src="{{ asset('assets/img/logo-technotion.png') }}" alt="logo-technotion" class="hidden-up">
                <img src="{{ asset('assets/img/logo-gerigi.png') }}" alt="logo-gerigi" class="hidden-up">
            </div>
            <h1 class="text-[#FFFFFF] font-bold font-raleway text-4xl hidden-up">
                STRUCTURE <br> COMMITE
            </h1>

        </div>
    </div>
    

    <!-- <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span> -->
</div>

@endsection