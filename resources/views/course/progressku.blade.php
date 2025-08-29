@extends('course/layout_classroom/course')
@section('content_course')
<h1 class="font-bold text-slate-800 text-4xl mb-2">MyProgress</h1>
<div class="flex items-center text-sm font-normal text-slate-500 mb-6">
    <a href="#" class="hover:text-blue-600 transition-colors duration-200">Home</a>
    <i data-feather="chevron-right" class="w-4 h-4 mx-2 text-gray-400"></i>
    <a href="#" class="text-slate-400 cursor-default">MyProgress</a>
</div>

{{-- Overview --}}
<div class="relative flex items-center mb-6">
    <div class="flex-grow border-t border-gray-300"></div>
    <span class="flex-shrink mx-4 text-xl font-semibold text-slate-700 bg-white px-3 rounded-full shadow-sm">OVERVIEW</span>
    <div class="flex-grow border-t border-gray-300"></div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
    <div class="p-6 bg-white shadow-lg rounded-2xl border border-gray-100 transform hover:scale-102 transition-transform duration-300">
        <h1 class="font-bold text-xl text-slate-700 mb-4">My Cluster 👩‍🎓</h1>
        <hr class="my-4 -mx-6 border-gray-200">
        <div class="px-3">
            <div class="relative flex items-center mt-5 mb-4">
                <div class="flex-grow border-t border-gray-200"></div>
                <span class="flex-shrink mx-3 text-sm font-medium text-slate-600 bg-white px-2 rounded-full">SUPERVISOR</span>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>
            @if(isset($spv))
            <div class="flex items-center gap-3 mb-4 p-2 bg-slate-50 rounded-lg">
                <img class="rounded-full aspect-square object-cover w-11 h-11 border-2 border-blue-400 shadow-sm" src="{{ asset('storage/photo-profile/'.$spv->foto) }}" alt="Supervisor Photo">
                <h1 class="font-semibold text-base text-slate-700">{{ $spv->name }}</h1>
            </div>
            @else
            <p class="text-sm text-slate-500 text-center py-4">No Supervisor Assigned</p>
            @endif

            <div class="relative flex items-center mt-6 mb-4">
                <div class="flex-grow border-t border-gray-200"></div>
                <span class="flex-shrink mx-3 text-sm font-medium text-slate-600 bg-white px-2 rounded-full">MEMBERS</span>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>
            @forelse ($student as $stu)
            <div class="flex items-center gap-3 mb-3 p-1 hover:bg-slate-50 rounded-lg transition-colors duration-200">
                <img class="rounded-full aspect-square object-cover w-9 h-9 border border-gray-200" src="{{ asset('storage/photo-profile/'.$stu->foto) }}" alt="Student Photo">
                <h1 class="font-medium text-sm text-slate-600">{{ $stu->name }}</h1>
            </div>
            @empty
            <p class="text-sm text-slate-500 text-center py-4">No Members in this Cluster</p>
            @endforelse
        </div>
        <a href="{{ route('student') }}" class="mt-5 block text-center text-sm font-medium text-blue-600 hover:text-blue-800 transition-colors duration-200 flex items-center justify-end gap-1">
            More <i data-feather="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>

    <div class="p-6 bg-white shadow-lg rounded-2xl border border-gray-100 transform hover:scale-102 transition-transform duration-300">
        <h1 class="font-bold text-xl text-slate-700 mb-4">
            @if (Auth::user()->status === 'spv' or Auth::user()->status === 'admin')
            Cluster Task 📘
            @else
            My Task 📘
            @endif
        </h1>
        <hr class="my-4 -mx-6 border-gray-200">
        <div class="flex justify-center items-center py-6">
            <div class="w-full max-w-xs md:max-w-sm">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <div class="p-6 bg-white shadow-lg rounded-2xl border border-gray-100 transform hover:scale-102 transition-transform duration-300">
        <h1 class="font-bold text-xl text-slate-700 mb-4">Leaderboard 🏆</h1>
        <hr class="my-4 -mx-6 border-gray-200">
        <div class="px-3">
            <?php $no = 1; ?>
            @forelse ($leaderboard as $l)
            <div class="flex items-center gap-3 mb-4 p-2 rounded-lg @if($no <= 3) bg-gradient-to-r from-yellow-50 to-yellow-100 @else hover:bg-slate-50 @endif transition-colors duration-200">
                <div class="font-bold text-2xl text-slate-700 w-8 text-center">{{ $no }}</div>
                <img class="rounded-full aspect-square object-cover w-11 h-11 border-2 @if($no == 1) border-yellow-500 @elseif($no == 2) border-gray-400 @elseif($no == 3) border-amber-600 @else border-gray-300 @endif shadow-sm" src="{{ asset('storage/photo-profile/'.$l->foto) }}" alt="Leader Photo">
                <div class="flex-grow">
                    <h1 class="font-bold text-base text-slate-700">{{ $l->name }}</h1>
                    <p class="text-slate-500 text-xs">{{ $l->nama_kelas }}</p>
                </div>
            </div>
            <?php $no++; ?>
            @empty
            <p class="text-sm text-slate-500 text-center py-4">No Data on Leaderboard yet</p>
            @endforelse
        </div>
    </div>
</div>
{{-- End Overview --}}

{{-- Task Sections --}}
<div class="relative flex items-center my-10">
    <div class="flex-grow border-t border-gray-300"></div>
    <span class="flex-shrink mx-4 text-xl font-semibold text-slate-700 bg-white px-3 rounded-full shadow-sm">TASK OVERVIEW</span>
    <div class="flex-grow border-t border-gray-300"></div>
</div>

{{-- list Tasks --}}
<div class="w-full bg-white shadow-lg rounded-2xl p-6 mb-8 border border-gray-100">
    <h1 class="w-full border-b-2 border-green-400 text-slate-700 text-xl font-bold pb-4 mb-6 flex items-center gap-3">
        <span class="p-2 bg-green-100 rounded-full"><i data-feather="list" class="text-green-500 font-bold w-5 h-5"></i></span> Open To do List 
    </h1>
    <div class="overflow-x-auto">
        <table class="w-full whitespace-nowrap data-table bg-white min-w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                @if (Auth::User()->status === 'spv' or Auth::user()->status === 'admin')
                <tr>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Name</th>
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Total Task</th>
                    <th class="text-right text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Detail</th>
                </tr>
                @endif
                @if (Auth::User()->status === 'student')
                <tr>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">TASK</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">DUE</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">ASSIGNED TO</th>
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">ACTION</th> {{-- New column for detail button --}}
                </tr>
                @endif
            </thead>
            <tbody>
                @if (Auth::User()->status === 'student')
                    @forelse ($open as $o)
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-6 text-sm font-medium text-slate-700">{{ $o->nama_pelajaran }}</td>
                        <td class="py-3 px-6 text-sm text-slate-600">{{ $o->deadline }}</td>
                        <td class="py-3 px-6 text-sm text-slate-600">@if(isset($spv)) {{ $spv->name }} @else N/A @endif</td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('detail-task', ['id'=> $o->id_pelajaran]) }}" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-slate-500 text-sm">No list tasks at the moment.</td>
                    </tr>
                    @endforelse
                @endif
            </tbody>
        </table>
    </div>
</div>

{{-- In Progress Tasks --}}
<div class="w-full bg-white shadow-lg rounded-2xl p-6 mb-8 border border-gray-100">
    <h1 class="w-full border-b-2 border-blue-400 text-slate-700 text-xl font-bold pb-4 mb-6 flex items-center gap-3">
        In Progress <span class="p-2 bg-blue-100 rounded-full"><i data-feather="loader" class="text-blue-500 font-bold w-5 h-5"></i></span>
    </h1>
    <div class="overflow-x-auto">
        <table class="w-full whitespace-nowrap data-table-assigned min-w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                @if (Auth::User()->status === 'spv' or Auth::user()->status === 'admin')
                <tr>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Name</th>
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Total Task</th>
                    <th class="text-right text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Detail</th>
                </tr>
                @endif
                @if (Auth::User()->status === 'student')
                <tr>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">TASK</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">DUE</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">CHECKED BY</th>
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">ACTION</th> {{-- New column for detail button --}}
                </tr>
                @endif
            </thead>
            <tbody>
                @if (Auth::User()->status === 'student')
                    @forelse ($assigned as $a)
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-6 text-sm font-medium text-slate-700">{{ $a->nama_pelajaran }}</td>
                        <td class="py-3 px-6 text-sm text-slate-600">{{ $a->deadline }}</td>
                        <td class="py-3 px-6 text-sm text-slate-600">@if(isset($spv)) {{ $spv->name }} @else N/A @endif</td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('detail-task', ['id'=> $a->id_pelajaran]) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-slate-500 text-sm">No tasks in progress at the moment.</td>
                    </tr>
                    @endforelse
                @endif
            </tbody>
        </table>
    </div>
</div>

{{-- Closed Tasks --}}
<div class="w-full bg-white shadow-lg rounded-2xl p-6 mb-10 border border-gray-100">
    <h1 class="w-full border-b-2 border-amber-400 text-slate-700 text-xl font-bold pb-4 mb-6 flex items-center gap-3">
        Closed <span class="p-2 bg-amber-100 rounded-full"><i data-feather="check-circle" class="text-amber-500 font-bold w-5 h-5"></i></span>
    </h1>
    <div class="overflow-x-auto">
        <table class="w-full whitespace-nowrap data-table-closed min-w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                @if (Auth::User()->status === 'spv' or Auth::user()->status === 'admin')
                <tr>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Name</th>
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Total Task</th>
                    <th class="text-right text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">Detail</th>
                </tr>
                @endif
                @if (Auth::User()->status === 'student')
                <tr>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">TASK</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">DUE</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">ASSESSED BY</th>
                    <th class="text-left text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">MARK</th>
                    <th class="text-center text-sm font-semibold text-gray-600 uppercase tracking-wider py-3 px-6">ACTION</th> {{-- New column for detail button --}}
                </tr>
                @endif
            </thead>
            <tbody>
                @if (Auth::User()->status === 'student')
                    @forelse ($closed as $c)
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-6 text-sm font-medium text-slate-700">{{ $c->nama_pelajaran }}</td>
                        <td class="py-3 px-6 text-sm text-slate-600">{{ $c->deadline }}</td>
                        <td class="py-3 px-6 text-sm text-slate-600">@if(isset($spv)) {{ $spv->name }} @else N/A @endif</td>
                        <td class="py-3 px-6 text-sm text-slate-600">{{ $c->nilai }}</td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('detail-task', ['id'=> $c->id_pelajaran]) }}" class="inline-flex items-center px-4 py-2 bg-amber-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-amber-600 active:bg-amber-700 focus:outline-none focus:border-amber-700 focus:ring ring-amber-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-slate-500 text-sm">No closed tasks yet.</td>
                    </tr>
                    @endforelse
                @endif
            </tbody>
        </table>
    </div>
</div>
{{-- End Task Sections --}}

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@if(isset($chart))
<script>
    const ctx = document.getElementById('myChart');
    var chartData = <?php echo json_encode($chart); ?>;
    console.log(chartData);
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: chartData.label,
        datasets: [{
            labels: chartData.label,
            data: chartData.data,
            backgroundColor: [
                'rgb(255, 187, 51)', 
                'rgb(68, 207, 85)',
            'rgb(51, 179, 255)' 
            ],
            hoverOffset: 8, 
            borderWidth: 2,
            borderColor: '#ffffff', 
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, 
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    font: {
                        size: 14 
                    },
                    color: '#475569' 
                }
            },
            tooltip: {
                enabled: true,
                backgroundColor: 'rgba(0,0,0,0.8)',
                titleColor: '#ffffff',
                bodyColor: '#ffffff',
                padding: 10,
                cornerRadius: 8,
            }
        }
      }
    });
  </script>
@endif
<script type="text/javascript">
    // DataTables initialization (no changes as requested, only UI improvements)
    var detailRoute = "{{ route('detail-open', ['id' => ':id']) }}";

    $(document).ready(function() {
    $('.data-table').DataTable({
        responsive: true, // Enable DataTables responsiveness
        processing: true,
        serverSide: true,
        ajax: "{{ route('get-open') }}", // Replace with the correct route
        columns: [
            @if (Auth::User()->status === 'spv' or Auth::user()->status === 'admin')
            { data: 'name', name: 'name' },
            { "className": "text-center", data: 'total_pelajaran', name: 'total_pelajaran' },
            {
                "className": "text-right",
                data: 'id',
                render: function(data, type, row) {
                    // Replace ':id' with the actual row ID
                    var detailUrl = detailRoute.replace(':id', data);
                    return '<a class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:border-gray-400 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="' + detailUrl + '">Detail</a>';
                },
                orderable: false,
                searchable: false
            }
            @endif
        ]
    });
});
@if (Auth::User()->status === 'spv' or Auth::user()->status === 'admin')
    var detailAssigned = "{{ route('detail-assigned', ['id' => ':id']) }}";
    $(document).ready(function() {
    $('.data-table-assigned').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: "{{ route('get-assigned') }}", 
        columns: [

            { data: 'name', name: 'name' },
            { "className": "text-center", data: 'total_pelajaran', name: 'total_pelajaran' },
            {
                "className": "text-right",
                data: 'id',
                render: function(data, type, row) {
                    // Replace ':id' with the actual row ID
                    var detailUrl = detailAssigned.replace(':id', data);
                    return '<a class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:border-gray-400 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="' + detailUrl + '">Detail</a>';
                },
                orderable: false,
                searchable: false
            }

        ]
    });
});
@endif
var detailClosed = "{{ route('detail-closed', ['id' => ':id']) }}";
    $(document).ready(function() {
    $('.data-table-closed').DataTable({
        responsive: true, // Enable DataTables responsiveness
        processing: true,
        serverSide: true,
        ajax: "{{ route('get-closed') }}", // Replace with the correct route
        columns: [
            @if (Auth::User()->status === 'spv' or Auth::user()->status === 'admin')
            { data: 'name', name: 'name' },
            { "className": "text-center", data: 'total_pelajaran', name: 'total_pelajaran' },
            {
                "className": "text-right",
                data: 'id',
                render: function(data, type, row) {
                    // Replace ':id' with the actual row ID
                    var detailUrl = detailClosed.replace(':id', data);
                    return '<a class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:border-gray-400 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="' + detailUrl + '">Detail</a>';
                },
                orderable: false,
                searchable: false
            }
            @endif
        ]
    });
});
  </script>
@endsection