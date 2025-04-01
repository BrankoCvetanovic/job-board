<x-layout>
    <x-card>
      <form action="{{ route('employer.store') }}" method="POST">
        @csrf
        <div class="mb-4">
          <label for="company_name">Company Name</label>
          <x-text-input name="company_name" />
        </div>
  
        <button class="w-full rounded-md border border-slate-300 px-2.5 py-1.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-green-200 ">Create</button>
      </form>
    </x-card>
  </x-layout>