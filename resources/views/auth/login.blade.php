@extends('layouts.master')

@section('content')
  <div class="max-w-md w-full">
    <div>
      <h2 class="mt-6 text-center text-3xl leading-10 font-extrabold text-gray-900">
        Sign in to your account
      </h2>
    </div>
    <div class="bg-gray-100 rounded shadow mt-8 p-6">
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div>
              <input aria-label="Email address" 
              name="email"
              value="{{ old('email') }}"
              type="email" 
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('email') border-red-600 focus:border-red-300 @enderror" 
              placeholder="Email address"
              autocomplete="email" autofocus
              required />

                  @error('email')
                     <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                  @endif
            </div>

            <div class="mt-2">
              <input 
              aria-label="Password" 
              name="password" 
              type="password"
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('password') border-red-600 focus:border-red-300 @enderror" 
              placeholder="Password"
              required />
                
                @error('password')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @endif
            </div>

          <div class="mt-6 flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember" 
              type="checkbox" 
              class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
              <label for="remember" 
              class="ml-2 block text-sm leading-5 text-gray-900">
                Remember me
              </label>
            </div>

            <div class="text-sm leading-5">
              <a href="{{ route('password.request') }}" 
              class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                Forgot your password?
              </a>
            </div>
          </div>

          <div class="mt-6">
            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
              </span>
              Sign in
            </button>
          </div>
        </form>
        <div class="mt-4">
            <div class="flex flex-col items-center justify-center mb-4">
                <span class="block border-b border-gray-400 p-2 w-full"></span>
                <p class="bg-gray-100 text-gray-600 px-2 -mt-4 ">Or continue with</p>
            </div>

            @include('_social-buttons')

            <p class="mt-4 text-gray-800 text-center font-normal">
               <span>Create account with Email. <a href="{{ route('register') }}" class="text-indigo-600 font-medium hover:underline">Register</a></span>
            </p>
        </div>
    </div>
  </div>
@endsection
