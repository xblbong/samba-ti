@extends('home/layout/layout')
@section('content_home')

{{-- Header About --}}
<div class="relative w-full">
    <div class="absolute w-full -top-60 -z-20">
        <img src="{{ asset('assets/img/hero-about.png') }}" alt="" class=" w-full ">
    </div>
</div>
<div class="flex gap-5 max-[728px]:flex-wrap w-full max-[728px]:pt-[100px] pt-[180px] px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 items-center">
    <div class="w-[60%] max-[950px]:w-[65%] max-[728px]:w-full text-white">
        <h1 class="font-black font-raleway text-6xl max-[728px]:-mt-1 max-[728px]:mb-0 mt-1 mb-2 hidden-up">Kabinet Gema Nirvana</h1>
        <h1 class="font-bold font-raleway text-xl mb-5 mt-8 max-[728px]:mb-3 max-[370px]:text-sm max-[1045px]:text-lg flex w-[85%] hidden-up"><span class="mr-2">━</span> Himpunan Mahasiswa Program Studi Teknologi Informasi Fakultas Vokasi Universitas Brawijaya</h1>
        <div class="flex mt-10 hidden-up">
            <div class="flex items-center max-[950px]:pr-5 gap-3 border-r border-white pr-8">
                <img src="{{ asset('assets/img/proker.png') }}" alt="" class="w-[50%] max-[1050px]:w-[40%]">
                <h1 class="h-max"><span class="font-raleway font-extrabold text-lg max-[438px]:texl-xs max-[370px]:font-[1rem] max-[550px]:leading-7 max-[900px]:text-sm max-[1174px]:text-base">Program Kerja</span> <br> <span class="font-raleway font-black text-4xl max-[438px]:texl-xl max-[370px]:font-[1rem] max-[550px]:leading-7 max-[900px]:text-2xl max-[1174px]:text-3xl">15+</span></h1>
            </div>
            <div class="flex items-center max-[950px]:px-5 gap-3 border-x border-white px-8">
                <img src="{{ asset('assets/img/department.png') }}" alt="" class="w-[50%] max-[1050px]:w-[40%]">
                <h1 class="h-max"><span class="font-raleway font-extrabold text-lg max-[438px]:texl-xs max-[370px]:font-[1rem] max-[550px]:leading-7 max-[900px]:text-sm max-[1174px]:text-base">Department</span> <br> <span class="font-raleway font-black text-4xl max-[438px]:texl-xl max-[370px]:font-[1rem] max-[550px]:leading-7 max-[900px]:text-2xl max-[1174px]:text-3xl">7+</span></h1>
            </div>
            <div class="flex items-center max-[950px]:pl-5 gap-3 border-l border-white pl-8">
                <img src="{{ asset('assets/img/sdm.png') }}" alt="" class="w-[50%] max-[1050px]:w-[40%]">
                <h1 class="h-max"><span class="font-raleway font-extrabold text-lg max-[438px]:texl-xs max-[370px]:font-[1rem] max-[550px]:leading-7 max-[900px]:text-sm max-[1174px]:text-base">SDM</span> <br> <span class="font-raleway font-black text-4xl max-[438px]:texl-xl max-[370px]:font-[1rem] max-[550px]:leading-7 max-[900px]:text-2xl max-[1174px]:text-3xl">60+</span></h1>
            </div>
        </div>
    </div>
    <div class="ml-auto w-[40%] max-[950px]:w-[35%] max-[728px]:w-full relative flex justify-end">
        <img class="w-max-full max-[728px]:mx-auto tivo" src="{{ asset('assets/img/technotion.png') }}" alt="">
    </div>
</div>
<div class="relative w-full">
    <div class="absolute w-full -z-20">
        <img src="{{ asset('assets/img/bg-misi.png') }}" alt="" class=" w-full top-0">
    </div>
</div>
{{-- HMPSTI --}}
<img src="{{ asset('assets/img/garis1.png') }}" alt="" class="w-full mt-52">
<div class="flex max-[680px]:flex-wrap items-center px-36 gap-20 max-[680px]:gap-10 max-[900px]:gap-10 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5">
    <div class="flex items-center w-[30%] max-[680px]:w-full">
        <img src="{{ asset('assets/img/hmpsti.png') }}" alt="" class="w-full max-[680px]:w-[70%] max-[680px]:mt-8 max-[680px]:mx-auto fade-in">
    </div>
    <div class="py-20 w-[70%] max-[680px]:w-full">
        <h1 class="text-white max-[1200px]:text-2xl max-[1300px]:text-3xl  font-raleway font-extrabold text-4xl">HMPSTI (Himpunan Mahasiswa Program <br> Studi Teknologi Informasi)</h1>
        <p class="text-white font-raleway font-normal max-[900px]:text-sm max-[1200px]:text-base text-lg max-[1200px]:mt-3 mt-6">adalah organisasi mahasiswa yang berada di bawah Program Studi Teknologi Informasi, Fakultas Vokasi, Universitas Brawijaya. HMPSTI berperan sebagai wadah bagi mahasiswa untuk mengembangkan keterampilan, pengetahuan, dan pengalaman dalam bidang teknologi informasi melalui berbagai kegiatan seperti seminar, workshop, dan kompetisi. Selain itu, organisasi ini juga berfungsi untuk mempererat hubungan antara mahasiswa, dan dosen.</p>
    </div>
</div>

<img src="{{ asset('assets/img/garis2.png') }}" alt="" class="w-full">

{{-- Visi Misi --}}

<h1 class="text-white font-raleway text-center font-extrabold text-5xl px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 mt-52 mb-28 hidden-up">VISI</h1>
<div class="vismis px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5">
    <div class="rounded-2xl overflow-hidden border border-solid relative border-white mx-auto px-7 pt-9 pb-11 w-max max-[550px]:w-[80%] hidden-up">
        <h1 class="font-raleway font-normal text-white text-lg max-[550px]:text-xs max-[900px]:text-sm max-[1200px]:text-base leading-5">Terwujudnya HMPSTI Sebagai wadah mahasiswa Prodi Teknologi
            <br>Informasi yang Dinamis, Kolaboratif dan Inovatif dalam
            <br>mewujudkan kontribusi secara Internal maupun Eksternal</h1>
        <div class="bg-gradient-to-r from-[#F8CF35] to-[#02D1CB] w-full h-3 absolute bottom-0 left-0"></div>
    </div>

    <div class="flex mt-32 max-[780px]:gap-5 gap-10">
        <div class="kirimisi flex flex-wrap gap-24 max-[780px]:gap-10 w-[30%] hidden-up">
            <div class="bg-[#D4D4D4] backdrop-blur-xl bg-opacity-10 border-opacity-10 rounded-2xl overflow-hidden border border-solid relative border-white mx-auto px-7 max-[780px]:px-2 max-[780px]:pt-3 pt-9 pb-8 w-max">
                <h1 class="font-raleway font-normal text-white text-lg max-[900px]:text-sm max-[780px]:text-xs max-[1200px]:text-base leading-5 text-center">Menyatukan suara dan mempererat kekeluargaan mahasiswa Program Studi Teknologi Informasi dalam Gerakan atau Kegiatan yang positif.</h1>
                <div class="bg-gradient-to-r from-[#5C2374] to-[#00DED3] w-full h-3 absolute bottom-0 left-0"></div>
            </div>
            <div class="bg-[#D4D4D4] backdrop-blur-xl bg-opacity-10 border-opacity-10 rounded-2xl overflow-hidden border border-solid relative border-white mx-auto px-7 max-[780px]:px-2 max-[780px]:pt-3 pt-9 pb-8 w-max">
                <h1 class="font-raleway font-normal text-white text-lg max-[900px]:text-sm max-[780px]:text-xs max-[1200px]:text-base leading-5 text-center">Optimalisasi HMPSTI untuk lebih berperan dalam kesejahteraan mahasiswa agar lebih bermutu dan berakhlak baik.</h1>
                <div class="bg-gradient-to-r from-[#5C2374] to-[#F8CF35] w-full h-3 absolute bottom-0 left-0"></div>
            </div>
        </div>

        <div class="tengahmisi flex items-center w-[40%]">
            <img src="{{ asset('assets/img/misi.png') }}" alt="" class="w-full z-10">
        </div>

        <div class="kananmisi flex flex-wrap gap-24 max-[780px]:gap-10 w-[30%] hidden-up">
            <div class="bg-[#D4D4D4] backdrop-blur-xl bg-opacity-10 border-opacity-10 rounded-2xl overflow-hidden border border-solid relative border-white mx-auto px-7 max-[780px]:px-2 max-[780px]:pt-3 pt-9 pb-8 w-max">
                <h1 class="font-raleway font-normal text-white text-lg max-[900px]:text-sm max-[780px]:text-xs max-[1200px]:text-base leading-5 text-center">Merangkul seluruh elemen yang ada dalam internal Prodi Teknologi Informasi untuk berperan aktif dalam berdedikasi di lingkup Nasional maupun Internasional.</h1>
                <div class="bg-gradient-to-r from-[#F8CF35] to-[#00DED3] w-full h-3 absolute bottom-0 left-0"></div>
            </div>
            <div class="bg-[#D4D4D4] backdrop-blur-xl bg-opacity-10 border-opacity-10 rounded-2xl overflow-hidden border border-solid relative border-white mx-auto px-7 max-[780px]:px-2 max-[780px]:pt-3 pt-9 pb-8 w-max">
                <h1 class="font-raleway font-normal text-white text-lg max-[900px]:text-sm max-[780px]:text-xs max-[1200px]:text-base leading-5 text-center">Menciptakan Prinsip “Berakal, Berani, dan Bertanggung Jawab” yang harus dimiliki Mahasiswa Prodi Teknologi Informasi.</h1>
                <div class="bg-gradient-to-r from-[#00DED3] to-[#5C2374] w-full h-3 absolute bottom-0 left-0"></div>
            </div>
        </div>
    </div>
</div>

{{-- Arah Gerak --}}
<img src="{{ asset('assets/img/garisgerak1.png') }}" alt="" class="w-full mt-60">
<div class="flex px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 -mt-5">
    <div class="arahgerakkiri flex flex-wrap justify-center w-[40%] vertical-align">
        <h1 class="font-raleway font-extrabold text-white max-[1430px]:text-5xl max-[1000px]:text-4xl max-[770px]:text-2xl max-[500px]:text-xl max-[410px]:text-base max-[450px]:font-bold text-6xl"><span class="text-[#00DED3]">GEMA</span> NIRVANA</h1>
        <p class="font-raleway font-medium text-center text-white text-lg max-[900px]:text-sm max-[780px]:text-xs max-[1200px]:text-base max-[650px]:font-light mt-auto">Suara dan gerakan mahasIswa TeknologI Infromasi yang salIng merangkul untuk mencapaI keberhasIlan dan terwujudnya karya atau InovasI.</p>
    </div>
    <div class="arahgerakkanan flex flex-wrap justify-center w-[40%] ml-auto vertical-align">
        <h1 class="font-raleway font-extrabold text-white text-6xl max-[1430px]:text-5xl max-[1000px]:text-4xl max-[770px]:text-2xl max-[500px]:text-xl max-[410px]:text-base max-[450px]:font-bold">ARAH <span class="text-[#F8CF35]">GERAK</span></h1>
        <h1 class="font-raleway max-[580px]:font-bold font-extrabold w-full text-center text-[#00DED3] text-2xl mt-20 max-[770px]:mt-10 max-[600px]:mt-5 max-[1000px]:text-lg max-[770px]:text-sm max-[580px]:text-xs mb-3">“HILIRISASI DEN KONSISTENSI”</h1>
        <p class="font-raleway font-medium text-center text-white text-lg max-[900px]:text-sm max-[780px]:text-xs max-[1200px]:text-base max-[650px]:font-light">Suara dan gerakan mahasIswa TeknologI Infromasi yang salIng merangkul untuk mencapaI keberhasIlan dan terwujudnya karya atau InovasI.</p>
    </div>
</div>
<img src="{{ asset('assets/img/garisgerak2.png') }}" alt="" class="w-full -mt-5">

{{-- Filosofi Logo --}}
<h1 class="text-white font-raleway font-extrabold text-5xl px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 mt-52 mb-28 hidden-up">Filosofi Logo</h1>
<div class="flex max-[750px]:flex-wrap items-center gap-40 max-[800px]:gap-0 max-[1400px]:gap-10 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 mx-auto px-36">
    <div class="flex max-[750px]:w-full items-center">
        <img src="{{ asset('assets/img/logo-techno.png') }}" alt="" class="max-[750px]:mx-auto">
    </div>
    <div class="float-right max-[750px]:w-full">
        <div class="flex items-center gap-10 max-[500px]:gap-5">
            <img src="{{ asset('assets/img/paus.png') }}" alt="" class="max-[500px]:w-[40%]">
            <dic class="h-max text-white">
                <h1 class=" font-raleway font-extrabold text-3xl max-[1050px]:text-2xl max-[600px]:text-xl max-[500px]:text-lg leading-3">PAUS ORCA</h1>
                <h1 class="font-raleway font-medium text-xl max-[500px]:text-sm max-[600px]:text-lg mt-3">Melambangkan sifat cerdas dan bangga menjadi bagian HMPSTI</h1>
            </dic>
        </div>
        <div class="flex items-center gap-10 mt-5 max-[500px]:gap-5">
            <img src="{{ asset('assets/img/gerigi.png') }}" alt="" class="max-[500px]:w-[40%]">
            <dic class="h-max text-white">
                <h1 class=" font-raleway font-extrabold text-3xl leading-3 max-[1050px]:text-2xl max-[600px]:text-xl max-[500px]:text-lg">GERIGI DAN</h1>
                <h1 class="font-raleway font-medium text-xl max-[600px]:text-lg max-[500px]:text-sm mt-3">HMPSTI yang bisa berkembang pesat dalam
                 lingkup organisasi dan kemajuan era digital pada masa sekarang.</h1>
            </dic>
        </div>
    </div>
</div>

{{-- Struktur Organisasi --}}
<div class="relative -top-20">
    <img src="{{ asset('assets/img/struktur.png') }}" class="image-hero -z-10" alt="">
</div>
<div class="w-full">
    <h1 class="text-white font-raleway font-extrabold max-[400px]:text-3xl max-[550px]:text-4xl text-5xl text-center mb-52 mt-36 flex justify-center hidden-up"><span class="text-[#F8CF35]">━</span><span>STRUCTURE <br> ORGANIZATION</span><span class="text-[#F8CF35]">━</span></h1>
</div>
<div class="w-full mx-auto mt-10 px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5">
    <div class="grid grid-cols-3 mt-10 fade-in max-[720px]:mt-24">
        <img src="{{ asset('assets/img/wakahim1.png') }}" alt="" class="justify-self-start">
        <img src="{{ asset('assets/img/kahim.png') }}" alt="" class="justify-self-center -mt-44">
        <img src="{{ asset('assets/img/wakahim2.png') }}" alt="" class="justify-self-end">
    </div>
</div>
<div class="relative">
    <img src="{{ asset('assets/img/kuningkanan.png') }}" alt="" class="absolute top-0 right-0 -z-10 w-[20%]">
    <img src="{{ asset('assets/img/saturnkiri.png') }}" alt="" class="absolute top-40 left-20 -z-10 max-[1000px]:hidden">
    <div class="grid grid-cols-4 w-[70%] max-[1000px]:w-[90%] mx-auto fade-in">
        <img src="{{ asset('assets/img/sekretaris1.png') }}" alt="" class="justify-self-start">
        <img src="{{ asset('assets/img/sekretaris2.png') }}" alt="" class="justify-self-start">
        <img src="{{ asset('assets/img/bendahara1.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/bendahara2.png') }}" alt="" class="justify-self-end">
    </div>
</div>

<div class="grid grid-cols-1"><img src="{{ asset('assets/img/formatur.png') }}" alt="" class="mx-auto fade-in max-[900px]:w-[30%]"></div>


<div class="-mt-10">
    <div class="grid grid-cols-4 w-[70%] max-[1000px]:w-[90%] mx-auto fade-in">
        <img src="{{ asset('assets/img/jminternal1.png') }}" alt="" class="justify-self-start">
        <img src="{{ asset('assets/img/jminternal2.png') }}" alt="" class="justify-self-start self-end">
        <img src="{{ asset('assets/img/jmeksternal1.png') }}" alt="" class="justify-self-end self-end">
        <img src="{{ asset('assets/img/jmeksternal2.png') }}" alt="" class="justify-self-end self-end">
    </div>
</div>
<div class="relative -top-20">
    <img src="{{ asset('assets/img/advobg.png') }}" class="image-hero -z-10" alt="">
</div>
<div class="relative mx-auto">
    <img src="{{ asset('assets/img/birukiri.png') }}" alt="" class="absolute top-52 left-0 -z-10 w-[20%]">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto fade-in">
        <img src="{{ asset('assets/img/kadivpsdm.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/psdmkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivpsdm.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="mx-auto fade-in">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto">
        <img src="{{ asset('assets/img/kadivadvokesma.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/advokata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivadvokesma.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="mx-auto fade-in">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto">
        <img src="{{ asset('assets/img/kadivperhub.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/perhubkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivperhub.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="relative mx-auto">
    <img src="{{ asset('assets/img/birukanan.png') }}" alt="" class="absolute top-40 right-0 -z-10 w-[20%]">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto fade-in">
        <img src="{{ asset('assets/img/kadivpuskom.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/puskomkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivpuskom.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="mx-auto fade-in">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto">
        <img src="{{ asset('assets/img/kadivekraf.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/ekrafkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivekraf.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class=" mx-auto">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto fade-in">
        <img src="{{ asset('assets/img/kadivdmb.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/dmbkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivdmb.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>

<div class="mx-auto relative ">
    <img src="{{ asset('assets/img/kuningkiri.png') }}" alt="" class="absolute top-0 left-0 -z-10 w-[20%]">
    <div class="grid grid-cols-3 w-[70%] max-[1000px]:w-[90%] mx-auto mb-44 fade-in">
        <img src="{{ asset('assets/img/kadivristek.png') }}" alt="" class="justify-self-end">
        <img src="{{ asset('assets/img/ristekkata.png') }}" alt="" class="justify-self-center self-center">
        <img src="{{ asset('assets/img/wakadivristek.png') }}" alt="" class="justify-self-start self-end">
    </div>
</div>
@endsection
