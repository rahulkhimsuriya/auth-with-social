@extends('layouts.app')

@section('content')
<div class="bg-gray-100 p-4 mt-16 flex item-center justify-center relative rounded shadow-lg">
    <div class="absolute top-0 -mt-20">
        <img src="{{ $user->getAvatar() }}" class="h-40 w-40 rounded-full border border-gray-300 shadow">
    </div>

    <div class="px-4 pt-20 pb-4 md:px-8 text-center">
        <div>
            <h2 class="text-3xl font-medium text-gray-800">{{ $user->name }}</h2>
            <h3 class="text-lg font-semibold text-gray-600">{{ $user->username }}</h3>
            <h3 class="text-lg font-semibold text-gray-600">{{ $user->email }}</h3>
        </div>

        <ul class="mt-4">
            <li class="font-normal text-gray-800 mb-1"><strong>Login with:</strong><span class="font-normal ml-2">{{ $user->provider }}</span></li>

            @if ($user->provider != 'Email Address')
            <li class="font-normal text-gray-800"><strong>{{ $user->provider }} id:</strong><span class="font-normal ml-2">{{ $user->provider_id }}</span></li>
            @endif
        </ul>
    </div>
</div>
@endsection
