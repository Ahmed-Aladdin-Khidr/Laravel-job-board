<x-card {{ $attributes->class(['mb-4']) }}>
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <p class="text-sm text-slate-500">
            ${{ number_format($job->salary) }}
        </p>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-4">
            <div>Compnay Name</div>
            <div> {{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
            <x-tag>{{ Str::ucfirst($job->category) }}</x-tag>
        </div>
    </div>

    <p class="mb-4 text-sm text-slate-500">
        {!! nl2br(e($job->description)) !!}
    </p>

    {{ $slot }}
</x-card>