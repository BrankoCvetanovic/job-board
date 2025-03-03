<x-layout>
    <x-nav class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '']" />
    <x-card><div class="mb-1 flex justify-between">
        <h2 class="text-lg font-meduim">{{$job->title}}</h2>
        <div class="text-slate-500">${{number_format($job->salary)}}</div>
    </div>
    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex gap-2 text-xs">
            <div>Company Name</div>
            <div>{{$job->location}}</div>
        </div>
        <div class="flex gap-1 text-xs">
            <div class="rounded-md border px-2 py-1">{{Str::ucfirst($job->expirience)}}</div>
            <div class="rounded-md border px-2 py-1">{{$job->category}}</div>
            
        </div>
    </div>
    <p class="mb-4 text-sm text-slate-500" >
        {!!nl2br(e($job->description))!!}
    </p>
    </x-card>
</x-layout>