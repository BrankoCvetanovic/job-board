<x-card class="mb-4" >
<div class="mb-1 flex justify-between">
    <h2 class="text-lg font-meduim">{{$job->title}}</h2>
    <div class="text-slate-500">${{number_format($job->salary)}}</div>
</div>
<div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
    <div class="flex gap-2 text-xs">
        <div>{{$job->employer->company_name}}</div>
        <div>{{$job->location}}</div>
    </div>
    <div class="flex gap-1 text-xs">
        <a href="{{route('jobs.index', ['experience' => $job->experience])}}" class="rounded-md border px-2 py-1">{{Str::ucfirst($job->experience)}}</a>
        <a href="{{route('jobs.index', ['category' => $job->category])}}" class="rounded-md border px-2 py-1">{{$job->category}}</a>
    </div>
</div>
{{$slot}}
</x-card>