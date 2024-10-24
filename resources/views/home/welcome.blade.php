@extends('home/layout/layout')
@section('content_home')

<div class="relative -mt-24 overflow-hidden max-[1000px]:mt-20 max-[610px]:h-[400px] max-[500px]:h-[350px] max-[400px]:h-[270px]">
    <img src="{{ asset('assets/img/bg-1.png') }}" class="image-hero max-[900px]:bg-cover w-full max-[900px]:bg-center -z-10" alt="">
    <img src="{{ asset('assets/img/percik.png') }}" class="image-hero max-[900px]:bg-cover w-full max-[900px]:bg-center -z-10" alt="">
    <img src="{{ asset('assets/img/planet.png') }}" class="image-hero max-[900px]:bg-cover w-full max-[900px]:bg-center planet z-10" alt="">
    <img src="{{ asset('assets/img/bintang.png') }}" class="image-hero max-[900px]:bg-cover w-full max-[900px]:bg-center" alt="">
    <img src="{{ asset('assets/img/tivo.png') }}" class="w-full -z-10 tivo -mt-10" alt="">
    <span class="meteor"></span>
    <span class="meteor"></span>
    <span class="meteor"></span>
    <span class="meteor"></span>
    <span class="meteor"></span>
    <span class="meteor"></span>
    <span class="meteor"></span>
    <span class="meteor"></span>
    <span class="meteor"></span>
    <span class="meteor"></span>
</div>

<div class="pembungkus -mt-36 max-[1000px]:mt-20">
    <div class="relative">
        <div class="w-full px-36 max-[1300px]:px-20 max-[1100px]:px-10 text-4xl max-[1300px]:text-2xl max-[750px]:text-lg max-[600px]:text-base max-[500px]:text-xs font-light font-tittle absolute bottom-5 hidden-right">
            <h1 class="text-white">Welcome to ,</h1>
            <h1 class="text-white">Information Technology</h1>
        </div>
        <img src="{{ asset('assets/img/gelombang-1.svg') }}" class="w-full -z-10" alt="">
    </div>
    <h1 class="text-white text-end px-36 max-[1300px]:px-20 max-[1100px]:px-10 text-4xl font-tittle mt-5 mb-10 hidden-up max-[1300px]:text-2xl max-[750px]:text-lg max-[600px]:text-base max-[500px]:text-xs">Student Associations</h1>
</div>

<div class="relative">
    <img src="{{ asset('assets/img/planet-2.png') }}" class="absolute w-[80%] right-0 mt-16 z-10" alt="">
</div>

<div class="gallery max-[800px]:w-[50%] max-[550px]:mt-20 mt-44 z-20">
    <div class="gallery-container">
        <img class="gallery-item gallery-item-1 rounded border-2 border-white" src="{{ asset('assets/img/hero1.png') }}" data-index="1">
        <img class="gallery-item gallery-item-2 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="2">
        <img class="gallery-item gallery-item-3 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="3">
        <img class="gallery-item gallery-item-4 rounded border-2 border-white" src="{{ asset('assets/img/hero2.png') }}" data-index="4">
        <img class="gallery-item gallery-item-5 rounded border-2 border-white" src="{{ asset('assets/img/hero3.png') }}" data-index="5">
    </div>
    <div class="gallery-controls mx-auto z-[200]"></div>
</div>

<div class="relative mt-10 mb-40 max-[550px]:-mt-24 max-[550px]:mb-24">
    <img src="{{ asset('assets/img/gelombang-2.svg') }}" class="w-full -z-[500] absolute" alt="">
    <div class="w-full px-36 max-[1300px]:text-4xl max-[700px]:text-xl text-5xl font-bold text-center font-tittle pt-20 max-[1300px]:px-20 max-[1100px]:px-10">
        <h1 class="text-white z-[500] relative hidden-up">Get To Know <br> HMPSTI ?</h1>
    </div>
</div>

<div class="video w-fulll px-36 max-[1300px]:px-20 max-[1100px]:px-10 mb-40">
    <video class="w-full rounded-3xl vidio-compro fade-in" controls muted loop src="{{ asset('assets/img/hmpsti.mp4') }}"></video>
</div>
<div class="relative -top-[20rem] ">
    <img src="{{ asset('assets/img/bg-light.png') }}" class="image-hero -z-10 h-[1200px]" alt="">
</div>

<div class="relative mt-24 max-[550px]:-mt-16 max-[550px]:mb-14 mb-24">
    <img src="{{ asset('assets/img/gelombang-2.svg') }}" class="absolute w-full -z-[500]" alt="">
    <div class="w-full px-36 max-[1300px]:px-20 max-[1100px]:px-10 text-5xl max-[1300px]:text-4xl max-[700px]:text-xl font-bold text-center font-tittle pt-20">
        <h1 class="text-white leading-10 relative hidden-up">Our<br>Departement</h1>
    </div>
</div>

<div class="intro z-[30] relative px-36 max-[1300px]:px-20 max-[1100px]:px-10 pb-24">
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
