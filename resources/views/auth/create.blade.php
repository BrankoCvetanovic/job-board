<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Sign in to your account
      </h1>
    
      <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="POST">
          @csrf
    
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
    
          <div class="mb-8 flex justify-between text-sm font-medium">
            <div>
              <div class="flex items-center space-x-2">
                <input type="checkbox" name="remember"
                  class="rounded-sm border border-slate-400">
                <label for="remember">Remember me</label>
              </div>
            </div>
            <div>
              <a href="#" class="text-indigo-600 hover:underline">
                Forget password?
              </a>
            </div>
          </div>
    
          <button class="w-full rounded-md border border-slate-300 bg-green-100 px-2.5 py-1.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-green-200 ">Login</button>
        </form>
      </x-card>
</x-layout>