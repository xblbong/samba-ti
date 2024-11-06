@extends('home/layout/layout')
@section('content_home')

<div class="relative -mt-24 overflow-hidden">
    <img src="{{ asset('assets/img/hero-about.png') }}" class="image-hero -z-10 top-" alt="">
    <!-- TECHNOTION 2024 -->
    <div class="flex gap-5 mb-20 max-[728px]:flex-wrap w-full max-[728px]:pt-[100px] pt-[180px] px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 items-center">
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

    <!-- STRUCTURE COMMITE -->
    <div class="px-20 items-center mb-28">
        <div class="flex flex-wrap items-center justify-center">
            <img src="{{ asset('assets/svg/Kahimm.svg') }}" alt="kahimm" class="hidden-up">
        </div>
        <div class="flex flex-wrap items-center justify-between -mt-52 px-5">
            <img src="{{ asset('assets/svg/wakahim1.svg') }}" alt="kahimm" class="hidden-up">
            <img src="{{ asset('assets/svg/wakahim2.svg') }}" alt="kahimm" class="hidden-up">
        </div>
        <div class="flex flex-wrap justify-center text-center gap-10 items-center">
            <img src="{{ asset('assets/svg/Sekretaris2.svg') }}" alt="kahimm" class="hidden-up">
            <img src="{{ asset('assets/svg/bendahara2.svg') }}" alt="kahimm" class="hidden-up">
            <img src="{{ asset('assets/svg/Sekretaris3.svg') }}" alt="kahimm" class="hidden-up">
            <img src="{{ asset('assets/svg/bendahara3.svg') }}" alt="kahimm" class="hidden-up">
            <img src="{{ asset('assets/svg/Sekretaris4.svg') }}" alt="kahimm" class="hidden-up">
            <img src="{{ asset('assets/svg/Sekretaris5.svg') }}" alt="kahimm" class="hidden-up">
        </div>
    </div>

    <!-- PROJECT TIMELINE -->
    <div class="px-20">
        <h1 class="text-[#fff] text-left font-bold font-raleway text-6xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-1 mb-10 hidden-up">
            PROJECT TIMELINE
        </h1>
        <div class="relative flex flex-col justify-center items-center">
            <img src="{{ asset('assets/svg/project-timeline.svg') }}" alt="project-timeline" class="hidden-up">
            <h1 class="absolute top-[92%] text-center text-[#FFFFFF] font-bold font-raleway text-4xl transform -translate-y-1/2">
                7 PROJECT <br> TECHNOTION
            </h1>
        </div>

        <!-- TECHNO COMPETITION -->
        <div class="flex flex-col items-center">
            <div class="flex mb-16">
                <img src="{{ asset('assets/svg/rizky-dmb.svg') }}" alt="" class="hidden-up">
                <div class="items-center flex flex-col justify-center">
                    <h1 class="text-[#fff] text-center font-bold font-raleway text-3xl max-[728px]:-mt-1 max-[728px]:mb-0 hidden-up">
                        TECHNO COMPETITION
                    </h1>
                    <h1 class="text-[#fff] w-[80%] text-left font-normal font-raleway text-2xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-7 hidden-up">
                        Perlombaan antar Mahasiswa dan SMA / SMK seputar Teknologi Informasi Tingkat Regional
                    </h1>
                </div>
            </div>
            <div class="relative w-full">
                <div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 z-20 relative">
                    <div class="gallery-container">
                        <img class="gallery-item gallery-item-1 rounded border-2 border-white" src="{{ asset('assets/img/hero1.png') }}" data-index="1">
                        <img class="gallery-item gallery-item-2 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="2">
                        <img class="gallery-item gallery-item-3 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="3">
                        <img class="gallery-item gallery-item-4 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="4">
                        <img class="gallery-item gallery-item-5 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="5">
                    </div>
                    <div class="gallery-controls mx-auto z-[200]"></div>
                </div>
            </div>
        </div>
        <!-- TECHFAIR -->
        <div class="flex flex-col items-center">
            <div class="flex mb-16 flex-row-reverse">
                <img src="{{ asset('assets/svg/bintang-ristek.svg') }}" alt="" class="hidden-up">
                <div class="items-center flex flex-col justify-center">
                    <h1 class="text-[#fff] text-center font-bold font-raleway text-3xl max-[728px]:-mt-1 max-[728px]:mb-0 hidden-up">
                        TECHFAIR
                    </h1>
                    <h1 class="text-[#fff] w-[80%] text-left font-normal font-raleway text-2xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-7 hidden-up">
                        Pameran Karya Teknologi Informasi yang diwadahi HMPSTI
                    </h1>
                </div>
            </div>

            <div class="relative w-full">
                <div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 z-20 relative">
                    <div class="gallery-container">
                        <img class="gallery-item gallery-item-1 rounded border-2 border-white" src="{{ asset('assets/img/hero1.png') }}" data-index="1">
                        <img class="gallery-item gallery-item-2 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="2">
                        <img class="gallery-item gallery-item-3 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="3">
                        <img class="gallery-item gallery-item-4 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="4">
                        <img class="gallery-item gallery-item-5 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="5">
                    </div>
                    <div class="gallery-controls mx-auto z-[200]"></div>
                </div>
            </div>
        </div>
        <!-- TECH PLANNER -->
        <div class="flex flex-col items-center">
            <div class="flex mb-16">
                <img src="{{ asset('assets/svg/hukama-psdm.svg') }}" alt="" class="hidden-up">
                <div class="items-center flex flex-col justify-center">
                    <h1 class="text-[#fff] text-center font-bold font-raleway text-3xl max-[728px]:-mt-1 max-[728px]:mb-0 hidden-up">
                    TECH PLANNER
                    </h1>
                    <h1 class="text-[#fff] w-[85%] text-left font-normal font-raleway text-2xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-7 hidden-up">
                        Seminar dan Bootcamp melalui kerjasama instansi/akademi bootcamp
                    </h1>
                </div>
            </div>

            <div class="relative w-full">
                <div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 z-20 relative">
                    <div class="gallery-container">
                        <img class="gallery-item gallery-item-1 rounded border-2 border-white" src="{{ asset('assets/img/hero1.png') }}" data-index="1">
                        <img class="gallery-item gallery-item-2 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="2">
                        <img class="gallery-item gallery-item-3 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="3">
                        <img class="gallery-item gallery-item-4 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="4">
                        <img class="gallery-item gallery-item-5 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="5">
                    </div>
                    <div class="gallery-controls mx-auto z-[200]"></div>
                </div>
            </div>
        </div>
        <!-- IT VENTURE -->
        <div class="flex flex-col items-center">
            <div class="flex mb-16 flex-row-reverse">
                <img src="{{ asset('assets/svg/nasywa-psdm.svg') }}" alt="" class="hidden-up">
                <div class="items-center flex flex-col justify-center">
                    <h1 class="text-[#fff] text-center font-bold font-raleway text-3xl max-[728px]:-mt-1 max-[728px]:mb-0 hidden-up">
                        IT VENTURE
                    </h1>
                    <h1 class="text-[#fff] w-[80%] text-left font-normal font-raleway text-2xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-7 hidden-up">
                        Sambut Mahasiswa Baru dan Pengenalan tentang Prodi TI
                    </h1>
                </div>
            </div>

            <div class="relative w-full">
                <div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 z-20 relative">
                    <div class="gallery-container">
                        <img class="gallery-item gallery-item-1 rounded border-2 border-white" src="{{ asset('assets/img/hero1.png') }}" data-index="1">
                        <img class="gallery-item gallery-item-2 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="2">
                        <img class="gallery-item gallery-item-3 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="3">
                        <img class="gallery-item gallery-item-4 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="4">
                        <img class="gallery-item gallery-item-5 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="5">
                    </div>
                    <div class="gallery-controls mx-auto z-[200]"></div>
                </div>
            </div>
        </div>
        <!-- TECHNO CAREER -->
        <div class="flex flex-col items-center">
            <div class="flex mb-16">
                <img src="{{ asset('assets/svg/manda-ekraf.svg') }}" alt="" class="hidden-up">
                <div class="items-center flex flex-col justify-center">
                    <h1 class="text-[#fff] text-center font-bold font-raleway text-3xl max-[728px]:-mt-1 max-[728px]:mb-0 hidden-up">
                    TECHNO CAREER
                    </h1>
                    <h1 class="text-[#fff] w-[85%] text-left font-normal font-raleway text-2xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-7 hidden-up">
                    Seminar Tingkat Regional tentang Inovasi Kreatif dan Digital
                    </h1>
                </div>
            </div>

            <div class="relative w-full">
                <div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 z-20 relative">
                    <div class="gallery-container">
                        <img class="gallery-item gallery-item-1 rounded border-2 border-white" src="{{ asset('assets/img/hero1.png') }}" data-index="1">
                        <img class="gallery-item gallery-item-2 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="2">
                        <img class="gallery-item gallery-item-3 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="3">
                        <img class="gallery-item gallery-item-4 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="4">
                        <img class="gallery-item gallery-item-5 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="5">
                    </div>
                    <div class="gallery-controls mx-auto z-[200]"></div>
                </div>
            </div>
        </div>
        <!-- IT CHARITY -->
        <div class="flex flex-col items-center">
            <div class="flex mb-16 flex-row-reverse">
                <img src="{{ asset('assets/svg/daus-advo.svg') }}" alt="" class="hidden-up">
                <div class="items-center flex flex-col justify-center">
                    <h1 class="text-[#fff] text-center font-bold font-raleway text-3xl max-[728px]:-mt-1 max-[728px]:mb-0 hidden-up">
                    IT CHARITY
                    </h1>
                    <h1 class="text-[#fff] w-[80%] text-left font-normal font-raleway text-2xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-7 hidden-up">
                    Mengajar dan Memberikan Edukasi ke suatu instansi (sekolah) tentang digitalisasi
                    </h1>
                </div>
            </div>

            <div class="relative w-full">
                <div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 z-20 relative">
                    <div class="gallery-container">
                        <img class="gallery-item gallery-item-1 rounded border-2 border-white" src="{{ asset('assets/img/hero1.png') }}" data-index="1">
                        <img class="gallery-item gallery-item-2 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="2">
                        <img class="gallery-item gallery-item-3 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="3">
                        <img class="gallery-item gallery-item-4 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="4">
                        <img class="gallery-item gallery-item-5 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="5">
                    </div>
                    <div class="gallery-controls mx-auto z-[200]"></div>
                </div>
            </div>
        </div>
        <!-- VISIT TECHNOLOGY -->
        <div class="flex flex-col items-center">
            <div class="flex mb-16">
                <img src="{{ asset('assets/svg/bry-perhub.svg') }}" alt="" class="hidden-up">
                <div class="items-center flex flex-col justify-center">
                    <h1 class="text-[#fff] text-center font-bold font-raleway text-3xl max-[728px]:-mt-1 max-[728px]:mb-0 hidden-up">
                    VISIT TECHNOLOGY
                    </h1>
                    <h1 class="text-[#fff] w-[85%] text-left font-normal font-raleway text-2xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-7 hidden-up">
                    Kunjungan oleh HMPSTI ke suatu perusahaan bidang teknologi atau lainnya
                    </h1>
                </div>
            </div>

            <div class="relative w-full">
                <div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 z-20 relative">
                    <div class="gallery-container">
                        <img class="gallery-item gallery-item-1 rounded border-2 border-white" src="{{ asset('assets/img/hero1.png') }}" data-index="1">
                        <img class="gallery-item gallery-item-2 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="2">
                        <img class="gallery-item gallery-item-3 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="3">
                        <img class="gallery-item gallery-item-4 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="4">
                        <img class="gallery-item gallery-item-5 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="5">
                    </div>
                    <div class="gallery-controls mx-auto z-[200]"></div>
                </div>
            </div>
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