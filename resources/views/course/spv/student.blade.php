@extends('course/layout_classroom/course')
@section('content_course')

<h1 class="font-bold text-slate-800 text-4xl mb-2">Student</h1>
<div class="flex items-center text-sm font-normal text-slate-500 mb-6">
    <a href="#" class="hover:text-blue-600 transition-colors duration-200">Home</a>
    <i data-feather="chevron-right" class="w-4 h-4 mx-2 text-gray-400"></i>
    <a href="#" class="text-slate-400 cursor-default">Student</a>
</div>

{{-- SPV Section --}}
<div class="w-full bg-white shadow-lg rounded-2xl p-6 mb-8 border border-gray-100">
    <h1 class="w-full border-b-2 border-sky-400 text-slate-700 text-xl font-bold pb-4 mb-6 flex items-center gap-3">
        Supervisors <span class="p-2 bg-sky-100 rounded-full"><i data-feather="monitor" class="text-sky-500 font-bold w-5 h-5"></i></span>
    </h1>
    <div class="overflow-x-auto">
        <table class="w-full whitespace-nowrap min-w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Name</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Cluster</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">NIM</th>
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Contact</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($spv as $s)
                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors duration-200">
                    <td class="py-3 px-6 text-sm font-normal text-slate-700">
                        <div class="flex items-center">
                            <img class="w-10 h-10 shadow rounded-full aspect-square object-center object-cover mr-3 border border-gray-200" src="{{ asset('storage/photo-profile/'.$s->foto) }}" alt="SPV Photo">
                            <span>{{ $s->name }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-sm text-slate-600">{{ $s->nama_kelas }}</td>
                    <td class="py-3 px-6 text-sm text-slate-600">{{ $s->nim }}</td>
                    <td class="py-3 px-6 text-center">
                        <a href="https://wa.me/{{ preg_replace('/^0/', '62', $s->no_hp) }}" target="_blank" class="inline-flex items-center justify-center px-4 py-2 bg-sky-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-600 active:bg-sky-700 focus:outline-none focus:border-sky-700 focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150">
                            <i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Hubungi
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-6 text-slate-500 text-sm">No supervisors found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- Student Section --}}
<div class="w-full bg-white shadow-lg rounded-2xl p-6 mb-10 border border-gray-100">
    <h1 class="w-full border-b-2 border-violet-500 text-slate-700 text-xl font-bold pb-4 mb-6 flex items-center gap-3">
        Students <span class="p-2 bg-violet-100 rounded-full"><i data-feather="users" class="text-violet-500 font-bold w-5 h-5"></i></span>
    </h1>
    <div class="overflow-x-auto">
        <table class="w-full whitespace-nowrap min-w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Names</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Cluster</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">NIM</th>
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Contact</th>
                    @if (Auth::user()->status === 'spv' || Auth::user()->status === 'admin')
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Status</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $d)
                <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors duration-200">
                    <td class="py-3 px-6 text-sm font-normal text-slate-700">
                        <div class="flex items-center">
                            <img class="w-10 h-10 shadow rounded-full aspect-square object-center object-cover mr-3 border border-gray-200" src="{{ asset('storage/photo-profile/'.$d->foto) }}" alt="Student Photo">
                            <span>{{ $d->name }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-sm text-slate-600">{{ $d->nama_kelas }}</td>
                    <td class="py-3 px-6 text-sm text-slate-600">{{ $d->nim }}</td>
                    <td class="py-3 px-6 text-center">
                        <a href="https://wa.me/{{ preg_replace('/^0/', '62', $d->no_hp) }}" target="_blank" class="inline-flex items-center justify-center px-4 py-2 bg-violet-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:border-violet-700 focus:ring ring-violet-300 disabled:opacity-25 transition ease-in-out duration-150">
                            <i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Hubungi
                        </a>
                    </td>
                    @if (Auth::user()->status === 'spv' || Auth::user()->status === 'admin')
                        <td class="py-3 px-6 text-center">
                            @if ($d->validate === 'approved')
                            <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                <i data-feather="check-circle" class="w-4 h-4 mr-1"></i> Approved
                            </span>
                            @else
                            <a href="{{ route('student-check',['id'=> $d->id]) }}" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                                <i data-feather="check" class="w-4 h-4 mr-2"></i> Check
                            </a>
                            @endif
                        </td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td colspan="{{ (Auth::user()->status === 'spv' || Auth::user()->status === 'admin') ? '5' : '4' }}" class="text-center py-6 text-slate-500 text-sm">No students found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- Script for DataTables (No changes to backend logic) --}}
<script>
    var detailRoute = "{{ route('student-check', ['id' => ':id']) }}";

    $(document).ready(function() {
        // DataTables for SPV/Admin view (if needed in the future, currently manual loop is used)
        // I've commented out the DataTable initialization for students as the Blade loop handles it.
        // If you intend to use DataTables for the student list, you'll need to adapt the Blade foreach loop
        // to pass data to the DataTable configuration instead.
        /*
        $('.data-table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('get-student') }}",
            columns: [
                {
                    data: 'photo_and_name',
                    name: 'name',
                    render: function(data, type, row) {
                        return '<div class="flex items-center">' +
                                '<img class="w-10 h-10 shadow rounded-full aspect-square object-center object-cover mr-3 border border-gray-200" src="' + row.photo_url + '" alt="Student Photo">' +
                                '<span>' + row.name + '</span>' +
                                '</div>';
                    },
                    orderable: false,
                    searchable: false
                },
                { data: 'nama_kelas', name: 'nama_kelas' },
                { data: 'nim', name: 'nim' },
                {
                    data: 'no_hp',
                    name: 'no_hp',
                    render: function(data, type, row) {
                        var waNumber = data.replace(/^0/, '62');
                        return '<a href="https://wa.me/' + waNumber + '" target="_blank" class="inline-flex items-center justify-center px-4 py-2 bg-violet-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:border-violet-700 focus:ring ring-violet-300 disabled:opacity-25 transition ease-in-out duration-150">' +
                                '<i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Hubungi' +
                                '</a>';
                    },
                    orderable: false,
                    searchable: false
                },
                @if (Auth::user()->status === 'spv' || Auth::user()->status === 'admin')
                {
                    data: 'validate',
                    name: 'validate',
                    render: function(data, type, row) {
                        if (data === 'approved') {
                            return '<span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold bg-green-100 text-green-700">' +
                                    '<i data-feather="check-circle" class="w-4 h-4 mr-1"></i> Approved' +
                                    '</span>';
                        } else {
                            var checkUrl = detailRoute.replace(':id', row.id);
                            return '<a href="' + checkUrl + '" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">' +
                                    '<i data-feather="check" class="w-4 h-4 mr-2"></i> Check' +
                                    '</a>';
                        }
                    },
                    orderable: false,
                    searchable: false
                }
                @endif
            ]
        });
        */
    });
</script>
@endsection