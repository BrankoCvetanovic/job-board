<x-layout>
    <x-nav :links="['My Jobs' => route('my-jobs.index'), 'Create' => '#']" class="mb-4" />
  
    <x-card class="mb-8">
      <form action="{{ route('my-jobs.store') }}" method="POST">
        @csrf
  
        <div class="mb-4 grid grid-cols-2 gap-4">
          <div>
            <label for="title">Job Title</label>
            <x-text-input name="title" />
          </div>
  
          <div>
            <label for="location" >Location</label>
            <x-text-input name="location" />
          </div>
  
          <div class="col-span-2">
            <label for="salary">Salary</label>
            <x-text-input name="salary" type="number" />
          </div>
  
          <div class="col-span-2">
            <label for="description" >Description</label>
            <x-text-input name="description" type="textarea" />
          </div>
  
          <div>
            <label for="experience" :required="true">Experience</label>
            <x-radio-input name="experience" :value="old('experience')"
              :all-option="false"
              :options="array_combine(
                  array_map('ucfirst', \App\Models\Job::$experience),
                  \App\Models\Job::$experience,
              )" />
          </div>
  
          <div>
            <label for="category" :required="true">Category</abel>
            <x-radio-input name="category" :all-option="false" :value="old('category')"
              :options="['IT', 'Finance', 'Sales', 'Marketing']" />
          </div>
  
          <div class="col-span-2">
            <button class="w-full rounded-md border border-slate-300 bg-white px-2.5 py-1.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-slate-100 ">Create Job</button>
          </div>
        </div>
      </form>
    </x-card>
  </x-layout>