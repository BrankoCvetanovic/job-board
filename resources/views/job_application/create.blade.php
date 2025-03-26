<x-layout>
    <x-nav class="mb-4"
      :links="[
          'Jobs' => route('jobs.index'),
          $job->title => route('jobs.show', $job),
          'Apply' => '#',
      ]" />
  
    <x-job-card :$job />
  
    <x-card>
      <h2 class="mb-4 text-lg font-medium">
        Your Job Application
      </h2>
  
      <form action="{{ route('job.application.store', $job) }}" method="POST">
        @csrf
        <div class="mb-4">
          <label for="expected_salary"
            class="mb-2 block text-sm font-medium text-slate-900">Expected Salary</label>
          <x-text-input type="number" name="expected_salary" />
        </div>
  
        <button class="w-full rounded-md border border-slate-300 bg-green-100 px-2.5 py-1.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-green-200 ">Apply</button>
      </form>
    </x-card>
  </x-layout>