@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>قائمة الوظائف</h1>
        @if($jobs->count())
            <ul>
                @foreach($jobs as $job)
                    <li>{{ $job->title }} - {{ $job->location }} ({{ $job->type }})</li>
                @endforeach
            </ul>
        @else
            <p>لا توجد وظائف متاحة حالياً.</p>
        @endif
    </div>
@endsection