@extends('home/layout/layout')
@section('content_home')

{{-- Header About --}}
<div class="flex max-[728px]:flex-wrap w-full max-[728px]:pt-[100px] pt-[180px] px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 items-center">
    <div class="w-[60%] max-[728px]:w-full text-white">
        <h1 class="font-black font-raleway max-[438px]:texl-xl max-[370px]:font-[1rem] max-[550px]:leading-7 max-[900px]:text-3xl max-[1174px]:text-5xl text-6xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-1 mb-2">Kabinet Gema Nirvana</h1>
        <h1 class="font-bold font-raleway text-xl mb-5 mt-8 max-[728px]:mb-3 max-[370px]:text-sm flex"><span class="mr-2">━</span> Himpunan Mahasiswa Program Studi Teknologi Informasi <br> Fakultas Vokasi Universitas Brawijaya</h1>
        <div class="flex mt-10">
            <div class="flex items-center gap-3 border-r border-white pr-8">
                <img src="{{ asset('assets/img/proker.png') }}" alt="">
                <h1 class="h-max"><span class="font-raleway font-extrabold text-lg">Program Kerja</span> <br> <span class="font-raleway font-black text-4xl">15+</span></h1>
            </div>
            <div class="flex items-center gap-3 border-x border-white px-8">
                <img src="{{ asset('assets/img/department.png') }}" alt="">
                <h1 class="h-max"><span class="font-raleway font-extrabold text-lg">Department</span> <br> <span class="font-raleway font-black text-4xl">7+</span></h1>
            </div>
            <div class="flex items-center gap-3 border-l border-white pl-8">
                <img src="{{ asset('assets/img/sdm.png') }}" alt="">
                <h1 class="h-max"><span class="font-raleway font-extrabold text-lg">SDM</span> <br> <span class="font-raleway font-black text-4xl">60+</span></h1>
            </div>
        </div>
    </div>
    <div class="ml-auto w-[40%] max-[728px]:w-full relative flex justify-end">
        <img class="w-max-full" src="{{ asset('assets/img/technotion.png') }}" alt="">
    </div>
</div>

{{-- HMPSTI --}}
<img src="{{ asset('assets/img/garis1.png') }}" alt="" class="w-full mt-52">
<div class="flex items-center px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5">
    <div class="flex items-center w-full">
        <img src="{{ asset('assets/img/hmpsti.png') }}" alt="">
    </div>
    <div class="">
        <h1 class="text-white font-raleway font-extrabold text-4xl">HMPSTI (Himpunan Mahasiswa Program <br> Studi Teknologi Informasi)</h1>
        <p class="text-white font-raleway font-normal text-lg mt-6">adalah organisasi mahasiswa yang berada di bawah Program Studi Teknologi Informasi, Fakultas Vokasi, Universitas Brawijaya. HMPSTI berperan sebagai wadah bagi mahasiswa untuk mengembangkan keterampilan, pengetahuan, dan pengalaman dalam bidang teknologi informasi melalui berbagai kegiatan seperti seminar, workshop, dan kompetisi. Selain itu, organisasi ini juga berfungsi untuk mempererat hubungan antara mahasiswa, dan dosen.</p>
    </div>
</div>
<img src="{{ asset('assets/img/garis2.png') }}" alt="" class="w-full">

{{-- Visi Misi --}}
<h1 class="text-white font-raleway text-center font-extrabold text-5xl px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 mt-52 mb-28">VISI</h1>
<div class="vismis px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5">
    <div class="rounded-2xl overflow-hidden border border-solid relative border-white mx-auto px-7 pt-9 pb-11 w-max">
        <h1 class="font-raleway font-normal text-white text-lg leading-5">Terwujudnya HMPSTI Sebagai wadah mahasiswa Prodi Teknologi
            <br>Informasi yang Dinamis, Kolaboratif dan Inovatif dalam
            <br>mewujudkan kontribusi secara Internal maupun Eksternal</h1>
        <div class="bg-gradient-to-r from-[#F8CF35] to-[#02D1CB] w-full h-3 absolute bottom-0 left-0"></div>
    </div>
</div>

{{-- Filosofi Logo --}}
<h1 class="text-white font-raleway font-extrabold text-5xl px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 mt-52 mb-28">Filosofi Logo</h1>
<div class="flex items-center gap-40 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 mx-auto px-36">
    <div class="flex items-center">
        <img src="{{ asset('assets/img/logo-techno.png') }}" alt="">
    </div>
    <div class="float-right">
        <div class="flex items-center gap-10">
            <img src="{{ asset('assets/img/paus.png') }}" alt="">
            <dic class="h-max text-white">
                <h1 class=" font-raleway font-extrabold text-3xl leading-3">PAUS ORCA</h1>
                <br>
                <h1 class="font-raleway font-medium text-xl">Melambangkan sifat cerdas dan bangga <br> menjadi bagian HMPSTI</h1>
            </dic>
        </div>
        <div class="flex items-center gap-10 mt-5">
            <img src="{{ asset('assets/img/gerigi.png') }}" alt="">
            <dic class="h-max text-white">
                <h1 class=" font-raleway font-extrabold text-3xl leading-3">GERIGI DAN</h1>
                <br>
                <h1 class="font-raleway font-medium text-xl">HMPSTI yang bisa berkembang pesat dalam
                    <br>lingkup organisasi dan kemajuan era digital <br>pada masa sekarang.</h1>
            </dic>
        </div>
    </div>
</div>

{{-- Struktur Organisasi --}}
<h1 class="text-white font-raleway font-extrabold text-5xl text-center mb-52 mt-36 flex justify-center"><span class="text-[#F8CF35]">━</span><span>STRUCTURE <br> ORGANIZATION</span><span class="text-[#F8CF35]">━</span></h1>
<div class="w-full mx-auto mt-10 px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5">
    <div class="grid grid-cols-3 mt-10 hidden-up max-[720px]:mt-24">
        <img src="{{ asset('assets/img/wakahim1.png') }}" alt="" class="justify-self-start">
        <img src="{{ asset('assets/img/kahim.png') }}" alt="" class="justify-self-center -mt-44">
        <img src="{{ asset('assets/img/wakahim2.png') }}" alt="" class="justify-self-end">
    </div>
</div>
<div class="relative">
    <img src="{{ asset('assets/img/kuningkanan.png') }}" alt="" class="absolute top-0 right-0 -z-10 w-[20%]">
    <img src="{{ asset('assets/img/saturnkiri.png') }}" alt="" class="absolute top-40 left-20 -z-10 max-[1000px]:hidden">
    <div class="grid grid-cols-4 w-[70%] max-[1000px]:w-[90%] mx-auto hidden-up">
        <img src="{{ asset('assets/img/sekretaris1.png') }}" alt="" class="justify-self-start">
        <img src="{{ asset('assets/img/sekretaris2.png') }}" alt="" class="justify-self-start">
        <img src="{{ asset('assets/img/bendahara1.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/bendahara2.png') }}" alt="" class="justify-self-end">
    </div>
</div>

<div class="grid grid-cols-1"><img src="{{ asset('assets/img/formatur.png') }}" alt="" class="mx-auto hidden-up max-[900px]:w-[30%]"></div>


<div class="-mt-10">
    <div class="grid grid-cols-4 w-[70%] max-[1000px]:w-[90%] mx-auto hidden-up">
        <img src="{{ asset('assets/img/jminternal1.png') }}" alt="" class="justify-self-start">
        <img src="{{ asset('assets/img/jminternal2.png') }}" alt="" class="justify-self-start self-end">
        <img src="{{ asset('assets/img/jmeksternal1.png') }}" alt="" class="justify-self-end self-end">
        <img src="{{ asset('assets/img/jmeksternal2.png') }}" alt="" class="justify-self-end self-end">
    </div>
</div>

<div class="relative mx-auto">
    <img src="{{ asset('assets/img/birukiri.png') }}" alt="" class="absolute top-52 left-0 -z-10 w-[20%]">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto hidden-up">
        <img src="{{ asset('assets/img/kadivpsdm.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/psdmkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivpsdm.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="mx-auto hidden-up">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto">
        <img src="{{ asset('assets/img/kadivadvokesma.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/advokata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivadvokesma.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="mx-auto hidden-up">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto">
        <img src="{{ asset('assets/img/kadivperhub.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/perhubkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivperhub.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="relative mx-auto">
    <img src="{{ asset('assets/img/birukanan.png') }}" alt="" class="absolute top-40 right-0 -z-10 w-[20%]">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto hidden-up">
        <img src="{{ asset('assets/img/kadivpuskom.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/puskomkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivpuskom.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="mx-auto hidden-up">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto">
        <img src="{{ asset('assets/img/kadivekraf.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/ekrafkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivekraf.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class=" mx-auto">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto hidden-up">
        <img src="{{ asset('assets/img/kadivdmb.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/dmbkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivdmb.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="mx-auto relative ">
    <img src="{{ asset('assets/img/kuningkiri.png') }}" alt="" class="absolute top-0 left-0 -z-10 w-[20%]">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto mb-44 hidden-up">
        <img src="{{ asset('assets/img/kadivristek.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/ristekkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivristek.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>
@endsection
