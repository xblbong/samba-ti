@extends('course/layout_classroom/course')
@section('content_course')
    {{-- Jumbotron --}}
    <div class="w-full mb-8">
        <div class="relative p-6 lg:p-8 bg-gradient-to-r from-sky-500 to-sky-600 rounded-2xl shadow-lg overflow-hidden md:flex md:items-center">
            {{-- Background elements (optional, for visual flair) --}}
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" fill="none" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                    <path d="M0 60 L100 0 L100 100 L0 100 Z" fill="url(#grad1)"></path>
                    <defs>
                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:0.2" />
                            <stop offset="100%" style="stop-color:rgb(255,255,255);stop-opacity:0.05" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between w-full">
                <div class="text-center md:text-left py-4 pr-0 md:pr-8 flex-grow">
                    <h1 class="text-white font-extrabold text-3xl sm:text-4xl lg:text-5xl tracking-tight leading-tight mb-2">
                        Selamat datang, <span class="text-yellow-300">{{ Auth::user()->name }}!</span>
                    </h1>
                    <p class="text-sky-100 text-sm sm:text-base lg:text-lg mb-6 max-w-xl mx-auto md:mx-0">
                        Deadline tugasmu semakin dekat, segera selesaikan tugasmu agar tidak menumpuk.
                    </p>
                    <a href="{{ route('tugasku') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-full shadow-md text-sky-700 bg-white hover:bg-sky-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all duration-300">
                        Lihat Tugas
                        <i data-feather="arrow-right" class="ml-2 w-5 h-5"></i>
                    </a>
                </div>
                <div class="mt-6 md:mt-0 flex-shrink-0">
                    <img src="{{ asset('assets/img/samba/kapal.svg') }}" alt="logo-kapal" class="w-48 sm:w-56 lg:w-64 h-auto object-contain mx-auto">
                </div>
            </div>
        </div>
    </div>
    {{-- end jumbotron --}}

    <div class="w-full mb-6">
        <div class="flex flex-col-reverse lg:flex-row gap-8">
            {{-- Riwayat Tugas Section --}}
            <div class="w-full lg:w-3/4">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="font-bold text-gray-800 text-xl">Riwayat Tugas</h2>
                    <a href="{{ route('tugasku') }}" class="text-base font-medium text-sky-600 hover:text-sky-800 transition-colors duration-200">Lihat Semua Tugas</a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                    @forelse ($data as $d)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="px-5 py-4" style="background-color: {{ $d->background }};">
                                <a href="{{ route('detail-task', ['id'=> $d->id_pelajaran]) }}" class="font-semibold text-lg text-white hover:underline cursor-pointer block truncate">
                                    {{ $d->nama_pelajaran }}
                                </a>
                                <p class="text-sky-100 text-sm font-light mt-1">{{ $d->name }}</p>
                            </div>
                            <div class="bg-white px-5 py-4 border-t border-gray-100">
                                <p class="text-gray-600 text-sm font-medium flex items-center">
                                    <i data-feather="calendar" class="w-4 h-4 mr-2 text-gray-400"></i>
                                    Deadline: <span class="ml-1 font-semibold text-gray-800">{{ \Carbon\Carbon::parse($d->deadline)->isoFormat('DD MMMM YYYY') }}</span>
                                </p>
                                {{-- Placeholder for task status if you add it later --}}
                                {{-- <div class="mt-3 flex items-center text-sm font-medium">
                                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs">Completed</span>
                                </div> --}}
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full bg-white p-6 rounded-xl shadow-md text-center text-gray-500">
                            Tidak ada tugas yang tersedia saat ini.
                        </div>
                    @endforelse
                </div>
            </div>

            {{-- Hubungi SPV Section --}}
            <div class="w-full lg:w-1/4">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="font-bold text-gray-800 text-xl">Hubungi SPV</h2>
                    <a href="{{ route('student') }}" class="text-base font-medium text-sky-600 hover:text-sky-800 transition-colors duration-200">Lihat Cluster</a>
                </div>
                <div class="mt-4 space-y-4">
                    @forelse ($spv as $s)
                        <div class="bg-white p-5 rounded-xl shadow-md flex flex-col items-center text-center hover:shadow-lg transition-shadow duration-300">
                            <img class="rounded-full w-16 h-16 object-cover object-center border-2 border-sky-200 mb-3" src="{{ asset('storage/photo-profile/'.$s->foto) }}" alt="{{ $s->name }} Profile">
                            <h3 class="font-bold text-lg text-gray-800 leading-tight">{{ $s->nama_kelas }}</h3>
                            <p class="text-gray-500 text-sm mt-1 mb-4">{{ $s->name }}</p>
                            <a href="https://wa.me/{{ $s->no_hp }}" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center justify-center text-sm px-4 py-2 font-medium rounded-full text-white bg-gradient-to-r from-cyan-500 to-sky-600 hover:from-cyan-600 hover:to-sky-700 transition-all duration-300 shadow-md">
                                <i data-feather="message-circle" class="w-4 h-4 mr-2"></i>
                                Hubungi
                            </a>
                        </div>
                    @empty
                        <div class="bg-white p-5 rounded-xl shadow-md text-center text-gray-500">
                            Tidak ada data SPV.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection