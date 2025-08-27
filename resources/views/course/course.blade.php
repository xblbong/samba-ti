@extends('course/layout_classroom/course')
@section('content_course')
                    {{-- Jumbotron --}}
                    <div class="w-full mb-6 wrap7">
                        <div class="p-6 max-[750px]:p-0 bg-gradient-to-r from-blue-400 to-cyan-400 shadow z-30 rounded-lg full7 hilang-margin7">
                            <div class="wrapper-jumb">
                                <div class="flex px-4 py-3">
                                    <div class="py-4 max-[550px]:py-1 w-[70%]">
                                        <div class="relative h-full">
                                            <div class="">
                                                <h1 class="text-white font-bold text-3xl max-[550px]:text-lg max-[400px]:text-sm max-[650px]:text-2xl tracking-wide min-[1150px]:text-5xl">Selamat datang, <span class="text-yellow-300">Namakamu!</span></h1>
                                                <p class="text-white text-sm max-[400px]:text-[10px] max-[550px]:text-xs max-[650px]:text-sm max-[650px]:w-[85%] w-[50%] tracking-wide min-[1150px]:text-xl min-[1150px]:mt-2">Deadline tugasmu semakin dekat segera selesaika tugasmu.</p>
                                                <a href="{{ route('tugasku') }}" class="absolute bottom-0 text-white font-bold max-[400px]:text-sm max-[650px]:text-base text-xl min-[1150px]:text-2xl"><span class="flex justify-center items-center">Lihat Tugas<i data-feather="arrow-right-circle" class="text-white ml-2"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/samba/kapal.svg') }}" alt="logo-kapal" class="min-[1150px]:w-[80%]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end jumbotron --}}
                    <div class="w-full mb-6 wrap7">
                        <div class="flex gap-7 max-[750px]:flex-wrap-reverse">
                            <div class="w-[75%] max-[750px]:w-full">
                                <div class="flex ">
                                    <h1 class="font-bold text-black text-lg">Riwayat Tugas</h1>
                                    <a href="{{ route('tugasku') }}" class="ml-auto text-base font-[450] text-slate-500">Lihat Tugas</a href="#">
                                </div>
                                <div class="grid grid-cols-3 max-[550px]:gap-5 max-[550px]:grid-cols-1 max-[1024px]:grid-cols-2 md gap-3 mt-2">
                                    @foreach ($data as $d)
                                        <div class="">
                                            <div class="px-3 py-2 rounded-t-lg" style="background-color: {{ $d->background }};">
                                                <a href="{{ route('detail-task', ['id'=> $d->id_pelajaran]) }}" class="font-bold text-base text-white cursor-pointer">{{ $d->nama_pelajaran }}</a>
                                                <p class="text-white text-sm font-light">{{ $d->name }}</p>
                                            </div>
                                            <div class="bg-white px-3 py-4 rounded-b-lg">
                                                <p class="text-slate-700 text-sm font-[450]">Deadline : {{ $d->deadline }}</p>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>

                            {{-- Hubungi spv --}}
                            <div class="w-[25%] max-[750px]:w-1/2 max-[550px]:w-full">
                                <div class="flex">
                                    <h1 class="font-bold text-black text-lg">Hubungi SPV</h1>
                                    <a href="{{ route('student') }}" class="ml-auto text-base font-[450] text-slate-500">Lihat Cluster</a>
                                </div>
                                <div class="mt-2">
                                    @foreach ($spv as $s)
                                    <div class="bg-white p-3 rounded-lg mb-3">
                                        <div class="flex gap-2 items-center">
                                            <img class="rounded-full aspect-square object-center object-cover w-12" src="{{ asset('storage/photo-profile/'.$s->foto) }}" alt="">
                                            <div class="w-{70%}">
                                                <h1 class="font-bold text-base">{{ $s->nama_kelas }}</h1>
                                                <p class="text-slate-500 text-sm">{{ $s->name }}</p>
                                            </div>
                                        </div>
                                        <a href="https://wa.me/{{ $s->no_hp }}" class="flex mt-3 justify-center items-center text-sm py-1 font-normal rounded text-white bg-gradient-to-r from-cyan-300 to-violet-950 w-full mx-auto">
                                            Hubungi
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- End Hubungi spv --}}
                        </div>
                    </div>

@endsection
