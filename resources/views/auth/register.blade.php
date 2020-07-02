@extends('layouts.master')

@section('content')
  <div class="max-w-md w-full">
    <div>
      <h2 class="mt-6 text-center text-3xl leading-10 font-extrabold text-gray-900">
        Create new account
      </h2>
    </div>
    <div class="bg-gray-100 rounded shadow mt-8 p-6">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-2">
              <input aria-label="Email address" 
              name="name"
              value="{{ old('name') }}"
              type="text" 
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('name') border-red-600 focus:border-red-300 @enderror" 
              placeholder="Full Name"
              autocomplete="name" autofocus
              required />

              @error('name')
                 <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
              @endif
            </div>

            <div class="mb-2">
              <input aria-label="Email address" 
              name="email"
              value="{{ old('email') }}"
              type="email" 
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('email') border-red-600 focus:border-red-300 @enderror" 
              placeholder="Email address"
              autocomplete="email"
              required />

              @error('email')
                 <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
              @endif
            </div>           
            
            <div class="mb-2">
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

          <div>
              <input 
              aria-label="Password" 
              name="password_confirmation" 
              type="password"
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('password_confirmation') border-red-600 focus:border-red-300 @enderror"
              placeholder="Confirm Password"
              required />
            
            @error('password_confirmation')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @endif
          </div>

          <div class="mt-6">
            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
              Register
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
               <span>Already have account ? <a href="{{ route('login') }}" class="text-indigo-600 font-medium hover:underline">Sing in</a></span>
            </p>
        </div>
    </div>
  </div>
@endsection
