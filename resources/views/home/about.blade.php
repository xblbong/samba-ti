@extends('home/layout/layout')
@section('content_home')

<div class="relative flex items-center justify-center">
    <img src="{{ asset('assets/img/bulanungu.png') }}" alt="" class="absolute -z-10">
    <img src="{{ asset('assets/img/gema.png') }}" alt="">
</div>

<div class="relative min-[720px]:-mt-40">
    <div class="relative flex w-[50%] max-[1000px]:w-[80%]  items-center justify-center translate-y-[-50%] top-[50%] translate-x-[-50%] left-[50%]">
        <div class="rounded-xl bg-[#697070] bg-opacity-60 py-5 px-10 border border-white rounded-tr-[80px] rounded-bl-[80px] ">
            <h1 class="text-white text-lg max-[900px]:text-sm max-[400px]:text-xs">HMPSTI (Himpunan Mahasiswa Program Studi Teknologi Informasi) adalah organisasi mahasiswa yang berada di bawah Program Studi Teknologi Informasi, Fakultas Vokasi, Universitas Brawijaya. HMPSTI berperan sebagai wadah bagi mahasiswa untuk mengembangkan keterampilan, pengetahuan, dan pengalaman dalam bidang teknologi informasi melalui berbagai kegiatan seperti seminar, workshop, dan kompetisi. Selain itu, organisasi ini juga berfungsi untuk mempererat hubungan antara mahasiswa, dan dosen.</h1>
        </div>
        <img src="{{ asset('assets/img/bawah-kiri.png') }}" class="absolute w-36 -left-16 -bottom-12">
        <img src="{{ asset('assets/img/atas-kanan.png') }}" class="absolute w-36 -top-16 -right-12">
    </div>
</div>

<div class="relative">
    <img src="{{ asset('assets/img/efekabout.png') }}" alt="" class="absolute -z-10 w-full left-0 -top-96">
    <div class="w-[70%] max-[1000px]:w-[90%] max-[900px]:flex-wrap mt-10 flex mx-auto">
        <div class="w-[35%] max-[900px]:w-[100%] mb-5 flex justify-center items-center hidden-up">
            <img src="{{ asset('assets/img/visi.png') }}" alt="">
        </div>
        <div class="w-[65%] max-[900px]:w-[100%] rounded-tr-[100px] rounded-xl rounded-bl-[100px] bg-[#697070] bg-opacity-60 py-5 px-16 border-2 border-white text-white flex justify-center items-center hidden-right">
            <p class="text-white text-lg text-center max-[720px]:text-sm">Terwujudnya HMPSTI Sebagai wadah mahasiswa Prodi Teknologi Informasi yang Dinamis, Kolaboratif dan Inovatif dalam mewujudkan kontribusi secara Internal maupun Eksternal</p>
        </div>
    </div>
</div>
<div class="w-[70%] max-[1000px]:w-[90%] mx-auto mt-10">
    <div class="flex max-[900px]:flex-wrap mx-auto mt-24">
        <div class="w-[35%] max-[900px]:w-[100%] mb-5 flex justify-center items-center hidden-right">
            <img src="{{ asset('assets/img/misi.png') }}" alt="">
        </div>
        <div class="w-[65%] max-[900px]:w-[100%] rounded-tr-[100px] rounded-xl rounded-bl-[100px] bg-[#697070] bg-opacity-60 py-5 px-16 border-2 border-white text-white flex justify-center items-center hidden-up">
            <div class="">
                <ul class="list-disc ml-5">
                    <li class="text-white text-lg max-[720px]:text-sm">Menciptakan Prinsip “Berakal, Berani, dan Bertanggung Jawab” yang harus dimiliki Mahasiswa Prodi Teknologi Informasi.</li>
                    <li class="text-white text-lg max-[720px]:text-sm">Merangkul seluruh elemen yang ada dalam internal Prodi Teknologi Informasi untuk berperan aktif dalam berdedikasi di lingkup Nasional maupun Internasional.</li>
                    <li class="text-white text-lg max-[720px]:text-sm">Optimalisasi HMPSTI untuk lebih berperan dalam kesejahteraan mahasiswa agar lebih bermutu dan berakhlak baik.</li>
                    <li class="text-white text-lg max-[720px]:text-sm">Menciptakan lingkungan HMPSTI yang lebih Solid, Sistematis, dan Progresif.</li>
                    <li class="text-white text-lg max-[720px]:text-sm">Menyatukan suara dan mempererat kekeluargaan mahasiswa Program Studi Teknologi Informasi dalam Gerakan atau Kegiatan yang positif.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex max-[900px]:flex-wrap-reverse mx-auto mt-24">
        <div class="w-[60%] max-[900px]:w-[100%] rounded-tr-[100px] rounded-xl rounded-bl-[100px] bg-[#697070] bg-opacity-60 py-5 px-16 border-2 border-white text-white flex justify-center items-center hidden-up">
            <p class="text-white text-xl text-center max-[720px]:text-base">Suara dan gerakan mahasIswa TeknologI Infromasi yang salIng merangkul untuk mencapaI keberhasIlan dan terwujudnya karya atau InovasI.</p>
        </div>
        <div class="w-[44%] max-[900px]:w-[100%] mb-2 flex justify-center items-center hidden-up">
            <img src="{{ asset('assets/img/makna.png') }}" alt="">
        </div>
    </div>

    <div class="flex max-[900px]:flex-wrap mx-auto mt-24">
        <div class="w-[44%] flex justify-center items-center hidden-up max-[900px]:w-[100%] mb-2">
            <img src="{{ asset('assets/img/arah.png') }}" alt="">
        </div>
        <div class="w-[60%] rounded-tr-[100px] max-[900px]:w-[100%] rounded-xl rounded-bl-[100px] bg-[#697070] bg-opacity-60 py-5 px-16 border-2 border-white text-white flex justify-center items-center hidden-up">
            <p class="text-white text-xl text-center max-[720px]:text-base">Mewadahi ekspresi Mahasiswa Teknologi Informasi yang mewujudkan dan mempertahankan kreasi / inovasi yang berkualitas.</p>
        </div>
    </div>

    <div class="flex max-[900px]:flex-wrap mx-auto mt-52">
        <div class="w-[70%] max-[900px]:w-[100%]">
            <div class="flex justify-center items-center">
                <div class="w-[55%] rounded-3xl bg-[#697070] bg-opacity-60 py-5 max-[720px]:px-10 px-16 border-2 border-white text-white flex justify-center items-center hidden-right">
                    <p class="text-white text-xl text-center w-[70%] max-[720px]:w-full max-[720px]:text-base">Melambangkan
                        sifat cerdas dan bangga
                        menjadi bagian HMPSTI.</p>
                </div>
                <div class="w-[45%] flex justify-center items-center max-[900px]:justify-end hidden-up">
                    <img src="{{ asset('assets/img/gemapolos.png') }}" alt="">
                </div>
            </div>

            <div class="flex justify-center items-center mt-5">
                <div class="w-[55%] rounded-3xl bg-[#697070] bg-opacity-60 py-5 max-[720px]:px-10 px-16 border-2 border-white text-white flex justify-center items-center hidden-right">
                    <p class="text-white text-xl text-center max-[720px]:text-base">HMPSTI yang bisa berkembang pesat dalam
                        lingkup organisasi dan kemajuan era digital pada masa sekarang.</p>
                </div>
                <div class="w-[45%] flex justify-center items-center max-[900px]:justify-end hidden-up">
                    <img src="{{ asset('assets/img/gemaluaran.png') }}" alt="">
                </div>
            </div>

        </div>
        <div class="w-[30%] max-[900px]:w-[100%] max-[900px]:grid-cols-3 grid grid-cols-2 hidden-up">
            <div class="rounded-xl aspect-square self-center max-[900px]:justify-self-center max-[900px]:mt-4 min-[900px]:justify-self-center w-24 bg-[#D4D4D4]"></div>
            <div class="rounded-xl aspect-square self-center max-[900px]:justify-self-center max-[900px]:mt-4 min-[900px]:justify-self-start w-24 bg-[#C5E3ED]"></div>
            <div class="rounded-xl aspect-square self-center max-[900px]:justify-self-center max-[900px]:mt-4 min-[900px]:justify-self-center w-24 bg-[#E7E7E7]"></div>
            <div class="rounded-xl aspect-square self-center max-[900px]:justify-self-center max-[900px]:mt-4 min-[900px]:justify-self-start w-24 bg-[#A9DDEB]"></div>
            <div class="rounded-xl aspect-square self-center max-[900px]:justify-self-center max-[900px]:mt-4 min-[900px]:justify-self-center w-24 bg-[#F1F1F1]"></div>
            <div class="rounded-xl aspect-square self-center max-[900px]:justify-self-center max-[900px]:mt-4 min-[900px]:justify-self-start w-24 bg-[#6DD8FA]"></div>
        </div>
    </div>


    <img src="{{ asset('assets/img/struktur.png') }}" alt="" class="mx-auto mt-44 hidden-up">

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
