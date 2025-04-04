<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Create new account
      </h1>
    
      <x-card class="py-8 px-16">
        <form action="{{ route('register.store') }}" method="POST">
          @csrf
    
          
          <div class="mb-8">
            <label for="name"
              class="mb-2 block text-sm font-medium text-slate-900">Name</label>
            <x-text-input name="name" />
          </div>


          <div class="mb-8">
            <label for="email"
              class="mb-2 block text-sm font-medium text-slate-900">E-mail</label>
            <x-text-input name="email" />
          </div>
    
          <div class="mb-8">
            <label for="password" class="mb-2 block text-sm font-medium text-slate-900">
              Password
            </label>
            <x-text-input name="password" type="password" />
          </div>

          <div class="mb-8">
            <label for="password_confirmation" class="mb-2 block text-sm font-medium text-slate-900">
              Confirm Password
            </label>
            <x-text-input name="password_confirmation" type="password" />
          </div>
    
          <button class="w-full rounded-md border border-slate-300 bg-green-100 px-2.5 py-1.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-green-200 ">Login</button>
        </form>
      </x-card>
</x-layout>