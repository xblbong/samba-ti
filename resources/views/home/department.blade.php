@extends('home/layout/layout')
@section('content_home')

<div class="px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 mt-44">
    <div class="flex gap-10 w-full rounded-[20px] bg-white bg-opacity-[3%] border border-white border-opacity-10 py-10 px-16">
        <div class="w-1/2">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="mx-auto mb-10">
            <div class="rounded-[15px] bg-white bg-opacity-[6%] border border-white border-opacity-[18%] py-10 px-7">
                <h1 class="text-white font-raleway font-light text-base">
                    Badan Pengurus Inti (BPI) dalam sebuah organisasi adalah kelompok pengurus utama yang bertanggung jawab atas pengambilan keputusan strategis dan
                    pelaksanaan fungsi kepemimpinan inti. BPI biasanya terdiri dari posisi seperti ketua, wakil ketua, sekretaris, dan bendahara, yang masing-masing
                    memiliki peran penting dalam mengelola organisasi. Mereka bertugas mengoordinasikan jalannya program kerja, menjaga stabilitas operasional, serta
                    memastikan bahwa organisasi berjalan sesuai dengan visi, misi, dan tujuan yang telah ditetapkan. Sebagai inti dari struktur organisasi, BPI juga
                    menjadi penghubung utama antara anggota dan pengurus lainnya.
                </h1>
            </div>
        </div>
        <div class="w-1/2">
            <h1 class="border-b border-white w-full pb-9 font-extrabold font-raleway text-white text-3xl">Badan Pengurus Inti</h1>
            <img src="{{ asset('assets/img/hero1.png') }}" alt="" class="w-full rounded-xl mt-10">
        </div>
    </div>
</div>

<div class="px-36 max-[1300px]:px-20 max-[1100px]:px-10 max-[728px]:px-5 mt-10">
    <div class="w-full rounded-[20px] bg-white bg-opacity-[3%] border border-white border-opacity-10 py-16 px-16">
        {{-- start looping --}}
        <div class="rounded-[15px] bg-white bg-opacity-[9%] border border-white border-opacity-[18%] py-10 px-7 mb-5">
           <div class="flex items-center">
            <div class="w-[20%]">
                <img src="{{ asset('assets/img/raka.png') }}" alt="" class="w-full">
            </div>
            <div class="w-[80%]">
                <h1 class="text-3xl text-white font-extrabold font-raleway">Raka Freda Sandimeru</h1>
                <h1 class="border-b font-raleway text-white text-xl border-white w-full pb-3">Ketua Himpunan</h1>
                <p class="font-raleway text-white text-sm mt-3">Ketua himpunan bertanggung jawab sebagai pemimpin organisasi dengan tugas utama mengarahkan, mengoordinasikan, dan memastikan terlaksananya program
                    kerja sesuai visi dan misi yang telah ditetapkan. Ketua Himpunan menjadi representasi utama himpunan dalam berbagai forum, menjaga hubungan baik
                    dengan pihak internal maupun eksternal, serta memberikan solusi strategis terhadap permasalahan yang dihadapi organisasi.</p>
            </div>
           </div>
        </div>
        {{-- end looping --}}
    </div>
</div>

@endsection
