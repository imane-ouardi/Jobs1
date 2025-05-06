@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded shadow p-6 max-w-2xl mx-auto">
        <div class="flex items-center mb-4">
            @if($company->logo)
                <img src="{{ asset('storage/' . $company->logo) }}" alt="Logo" class="w-16 h-16 rounded mr-4">
            @endif
            <div>
                <h1 class="text-2xl font-bold">{{ $company->name }}</h1>
                <p class="text-gray-600">{{ $company->location }}</p>
                <a href="{{ $company->website }}" class="text-blue-600 hover:underline" target="_blank">
                    {{ $company->website }}
                </a>
            </div>
        </div>
        <div class="mb-4">
            <strong>Description:</strong>
            <div class="text-gray-700 mt-2">{{ $company->description }}</div>
        </div>
        <div>
            <strong>Jobs at this company:</strong>
            <ul class="list-disc pl-6 mt-2">
                @foreach($company->jobs as $job)
                    <li>
                        <a href="{{ route('jobs.show', $job->id) }}" class="text-blue-600 hover:underline">
                            {{ $job->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
