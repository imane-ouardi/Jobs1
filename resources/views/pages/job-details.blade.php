@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded shadow p-6 max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-2">{{ $job->title }}</h1>
        <p class="text-gray-600 mb-2">
            <span>{{ $job->type }}</span> •
            <span>{{ $job->location }}</span> •
            <span>{{ $job->salary ? $job->salary . ' $' : '' }}</span>
        </p>
        <p class="mb-4">
            <strong>Company:</strong>
            @if($job->company)
                <a href="{{ route('employer.detail', $job->company->id) }}" class="text-blue-600 hover:underline">
                    {{ $job->company->name }}
                </a>
            @else
                N/A
            @endif
        </p>
        <div class="mb-4">
            <strong>Description:</strong>
            <div class="text-gray-700 mt-2">{{ $job->description }}</div>
        </div>
        <div class="mb-4">
            <strong>Deadline:</strong>
            <span>{{ $job->deadline }}</span>
        </div>
        <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Apply Now</a>
    </div>
</div>
@endsection
