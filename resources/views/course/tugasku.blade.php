@extends('course/layout_classroom/course')
@section('content_course')

<div class="bg-white p-6 rounded-lg shadow-md mb-8">
    <h1 class="font-bold text-gray-800 text-4xl mb-2">MyTask</h1>
    <div class="flex items-center text-sm font-medium text-gray-500">
        <a href="#" class="hover:text-gray-700">Home</a>
        <i data-feather="chevron-right" class="w-4 h-4 mx-2 text-gray-400"></i>
        <span class="text-gray-600">MyTask</span>
    </div>
</div>

{{-- Task Section --}}
<div class="mb-6">
    <div class="flex items-center justify-between border-b-2 border-gray-200 pb-3 mb-6">
        <h2 class="text-2xl font-semibold text-gray-700">TASK</h2>
        @if (Auth::user()->status === "spv" or Auth::user()->status === "admin")
        <a href="{{ route('create-course') }}" class="flex items-center px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition duration-300">
            <i data-feather="plus" class="w-5 h-5 mr-2"></i> ADD TASK
        </a>
        @endif
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($data as $d)
        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300">
            <div class="p-4" style="background: {{ $d->background }};">
                <a href="{{ route('detail-task', ['id'=> $d->id_pelajaran]) }}" class="font-bold text-lg text-white block truncate mb-1">
                    {{ $d->nama_pelajaran }}
                </a>
               <p class="text-white text-sm font-light">{{ $d->name }}</p>
            </div>
            <div class="p-4 flex flex-col">
                <p class="text-gray-700 text-sm mb-2">{{ $d->deskripsi }}</p>
                <p class="text-gray-500 text-xs mb-4">Deadline: {{ $d->deadline }}</p>

                <div class="flex justify-end space-x-2 mt-auto">
                    @if (Auth::user()->status === "spv" or Auth::user()->status === "admin")
                    <a href="{{ route('edit-course',['id'=> $d->id_pelajaran]) }}" class="flex items-center px-3 py-1 bg-yellow-500 text-white text-xs font-medium rounded-md hover:bg-yellow-600 transition duration-300">
                        <i data-feather="edit-2" class="w-4 h-4 mr-1"></i> Edit
                    </a>
                    @endif
                    <a href="{{ route('detail-task', ['id'=> $d->id_pelajaran]) }}" class="flex items-center px-3 py-1 bg-sky-500/95 text-white text-xs font-medium rounded-md hover:bg-sky-600 transition duration-300">
                        <i data-feather="eye" class="w-4 h-4 mr-1"></i> View Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- end task --}}
@endsection