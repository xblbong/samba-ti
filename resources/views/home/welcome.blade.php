@extends('home/layout/layout')
@section('content_home')

<div class="relative -mt-24 overflow-hidden">
    <img class="top-0 left-0 absolute mix-blend-luminosity w-full bg-cover opacity-25" src="{{ asset('assets/img/bgmain.png') }}" alt="">
    <img class="absolute -z-10 top-0 left-0 w-full bg-cover" src="{{ asset('assets/img/grid.png') }}" alt="">

    <div class="relative max-[728px]:pt-[100px] pt-[200px]">
        <div class="flex max-[728px]:flex-wrap w-full px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 items-center">
            <div class="w-[60%] max-[728px]:w-full text-white">
                <h1 class="font-bold font-raleway text-lg max-[370px]:text-sm">Welcome to,</h1>
                <h1 class="font-black font-raleway max-[438px]:texl-xl max-[370px]:font-[1rem] max-[550px]:leading-7 max-[900px]:text-3xl max-[1174px]:text-5xl text-6xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-1 mb-2">Information Technology Student Association</h1>
                <h1 class="font-bold font-raleway text-lg mb-5 max-[728px]:mb-3 max-[370px]:text-sm">━ Kabinet Gema Nirvana</h1>
                <a href="{{ route('about') }}" class="max-[550px]:px-7 max-[550px]:py-2 px-10 py-3 shadow bg-[#F8CF35] max-[370px]:text-base rounded-full font-raleway font-semibold text-lg">About Us</a>
            </div>
            <div class="ml-auto w-[40%] max-[728px]:w-full relative flex justify-end">
                <img class="w-full" src="{{ asset('assets/img/tivo.png') }}" alt="">
            </div>
        </div>
        <img src="{{ asset('assets/img/kuningkanan.png') }}" alt="" class="absolute right-0 bottom-0 -z-10 w-[20%]">
        <div class="relative w-full">

            <div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 mt-64 z-20 relative">
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

    <div class="mt-20 mb-16 max-[550px]:-mt-24">
        <div class="w-full px-36 max-[1300px]:text-4xl max-[700px]:text-2xl text-5xl font-extrabold text-center font-raleway pt-20 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5">
            <h1 class="text-white z-[500] relative hidden-up">Get To Know HMPSTI ?</h1>
        </div>
    </div>

    <div class="video w-fulll px-36 max-[1300px]:px-20 max-[728px]:px-5 max-[1100px]:px-10">
        <video class="w-full rounded-3xl fade-in" controls muted loop src="{{ asset('assets/img/hmpsti.mp4') }}"></video>
    </div>
</div>


<div class="relative -top-[20rem] ">
    <img src="{{ asset('assets/img/bg-light.png') }}" class="image-hero -z-10 h-[1500px]" alt="">
</div>

<div class="relative mt-24 max-[550px]:-mt-16 max-[550px]:mb-14 mb-16">
    <div class="w-full px-36 max-[1300px]:px-20 max-[1100px]:px-10 text-5xl max-[1300px]:text-4xl max-[700px]:text-2xl font-bold text-center font-raleway pt-20">
        <h1 class="text-white leading-10 relative hidden-up">Our<br>Departement</h1>
    </div>
</div>

<div class="intro z-[30] relative px-36 max-[1300px]:px-20 max-[728px]:px-5 max-[1100px]:px-10 pb-80">
    <div class="grid grid-cols-7 gap-y-20 justify-center">
      <div class=" sm:h-full col-start-1 aspect-[1/1] rounded-xl hidden-up border border-white border-opacity-35 bg-white bg-opacity-10 overflow-hidden group drop-shadow-xl relative hover:scale-95 transition-all duration-500"><div style="background-image: url({{ asset('assets/img/psdm.png') }})" class="w-full h-full bg- bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500"></div></div>
      <div class=" sm:h-full col-start-3 aspect-[1/1] rounded-xl hidden-up border border-white border-opacity-35 bg-white bg-opacity-10 overflow-hidden group drop-shadow-xl relative hover:scale-95 transition-all duration-500"><div style="background-image: url({{ asset('assets/img/dmb.png') }})" class="w-full h-full bg- bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500"></div></div>
      <div class=" sm:h-full col-start-5 aspect-[1/1] rounded-xl hidden-up border border-white border-opacity-35 bg-white bg-opacity-10 overflow-hidden group drop-shadow-xl relative hover:scale-95 transition-all duration-500"><div style="background-image: url({{ asset('assets/img/perhub.png') }})" class="w-full h-full bg- bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500"></div></div>
      <div class=" sm:h-full col-start-7 aspect-[1/1] rounded-xl hidden-up border border-white border-opacity-35 bg-white bg-opacity-10 overflow-hidden group drop-shadow-xl relative hover:scale-95 transition-all duration-500"><div style="background-image: url({{ asset('assets/img/advokesma.png') }})" class="w-full h-full bg- bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500"></div></div>
      <div class=" sm:h-full col-start-2 aspect-[1/1] rounded-xl hidden-up border border-white border-opacity-35 bg-white bg-opacity-10 overflow-hidden group drop-shadow-xl relative hover:scale-95 transition-all duration-500"><div style="background-image: url({{ asset('assets/img/ekraf.png') }})" class="w-full h-full bg- bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500"></div></div>
      <div class=" sm:h-full col-start-4 aspect-[1/1] rounded-xl hidden-up border border-white border-opacity-35 bg-white bg-opacity-10 overflow-hidden group drop-shadow-xl relative hover:scale-95 transition-all duration-500"><div style="background-image: url({{ asset('assets/img/puskominfo.png') }})" class="w-full h-full bg- bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500"></div></div>
      <div class=" sm:h-full col-start-6 aspect-[1/1] rounded-xl hidden-up border border-white border-opacity-35 bg-white bg-opacity-10 overflow-hidden group drop-shadow-xl relative hover:scale-95 transition-all duration-500"><div style="background-image: url({{ asset('assets/img/ristek.png') }})" class="w-full h-full bg- bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500"></div></div>

    </div>
</div>

@endsection
