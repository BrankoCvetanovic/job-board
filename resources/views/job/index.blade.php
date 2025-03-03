<x-layout>
    <x-nav class="mb-4" :links="['Jobs' => route('jobs.index')]" />
        <x-card class="mb-4 text-sm">
                <form action="{{route('jobs.index')}}" method="GET" >
                <div class="mb-4 grid grid-cols-2 gap-4">
                    <div>
                        <div class="mb-1 font-semibold">Search</div>
                        <x-text-input name="search" value="{{request('search')}}" placeholder="Search for any text" />
                    </div>
                    <div>
                        <div class="mb-1 font-semibold">Salary</div>
                        <div class="flex space-x-2">
                            <x-text-input name="min_salary" value="{{request('min_salary')}}" placeholder="From" />
                            <x-text-input name="max_salary" value="{{request('max_salary')}}" placeholder="To" />
                        </div>
                    </div>
                    <div>1</div>
                    <div>1</div>
                </div>
                <button class="w-full">Filter</button>
            </form>
        </x-card>
        
    @foreach ($jobs as $job)
  
    <x-card class="mb-4">
        <div class="mb-1 flex justify-between">
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
        <x-link-btn :href="route('jobs.show', $job)">Show</x-link-btn>
    </x-card>
    @endforeach
</x-layout>