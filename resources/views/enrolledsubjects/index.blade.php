<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enrolled Subjects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('add-subjects') }}">Add Subjects</a>

                    <h6>Enrolled Subjects</h6>
                    <table class="border-separate border-spacing-5">
                        <thead>
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Units</th>
                            <th>Schedule</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrolled_Subjects as $enrollsub)
                            <tr>
                                <td>{{ $enrollsub->subjectCode}}</td>
                                <td>{{ $enrollsub->description}}</td>
                                <td>{{ $enrollsub->units}}</td>
                                <td>{{ $enrollsub->schedule}}</td>
                                <td>
                                        <a href="{{ route('students-show',['stuno' => $enrollsub->esno])}}">View</a>
                                        <a href="#">Edit</a>
                                        <a href="#">Delete</a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
