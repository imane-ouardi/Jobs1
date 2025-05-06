<div class="space-y-6">
    <h2 class="text-xl font-bold">Applicant Information</h2>
    <div>
        <strong>Name:</strong> {{ $record->user->name }}<br>
        <strong>Email:</strong> {{ $record->user->email }}<br>
        <strong>CV:</strong>
        @if($record->cv)
            <a href="{{ asset('storage/' . $record->cv) }}" target="_blank" class="text-blue-600 underline">Download</a>
        @else
            Not uploaded
        @endif
    </div>
    <div>
        <strong>Cover Letter:</strong>
        <div class="bg-gray-100 p-2 rounded">{{ $record->cover_letter }}</div>
    </div>
    <hr>
    <h2 class="text-xl font-bold">Job Information</h2>
    <div>
        <strong>Title:</strong> {{ $record->job->title }}<br>
        <strong>Type:</strong> {{ $record->job->type }}<br>
        <strong>Location:</strong> {{ $record->job->location }}<br>
        <strong>Salary:</strong> {{ $record->job->salary }}<br>
        <strong>Deadline:</strong> {{ $record->job->deadline }}
    </div>
    <div>
        <strong>Status:</strong>
        <span class="px-2 py-1 rounded bg-gray-200">{{ ucfirst($record->status) }}</span>
    </div>
    <div>
        <strong>Applied At:</strong> {{ $record->created_at->format('Y-m-d H:i') }}
    </div>
</div>
