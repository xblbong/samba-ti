@extends('home/layout/layout')
@section('content_home')

<div class="relative -mt-24 overflow-hidden">
    <img src="{{ asset('assets/img/bg-1.png') }}" class="image-hero -z-10" alt="">
    <img src="{{ asset('assets/img/percik.png') }}" class="image-hero -z-10" alt="">
    <img src="{{ asset('assets/img/planet.png') }}" class="image-hero planet -z-10" alt="">
    <img src="{{ asset('assets/img/bintang.png') }}" class="image-hero -z-10" alt="">
    <div class="h-[100vh] coming-soon z-10 relative tivo">
        <div class="relative flex w-max items-center justify-center translate-y-[-50%] top-[50%] translate-x-[-50%] left-[50%]">
            <div class="rounded-xl bg-[#697070] bg-opacity-60 py-5 px-10 border border-white">
                <h1 class="text-6xl max-[850px]:text-2xl text-white font-bold">COMING SOON</h1>
            </div>
            <img src="{{ asset('assets/img/bawah-kiri.png') }}" class="absolute w-36 -left-16 -bottom-16">
            <img src="{{ asset('assets/img/atas-kanan.png') }}" class="absolute w-36 -top-16 -right-16">
        </div>
    </div>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
    <span class="meteor -z-10"></span>
</div>

@endsection
