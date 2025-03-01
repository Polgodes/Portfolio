@extends('app')
@section('title', 'Home')
@section('content')
<div class="flex flex-col md:flex-row items-center md:items-start justify-between px-6 md:px-16 py-10">
    
    <!-- Left Side: Text Content -->
    <div class="md:w-1/2 text-left">
        <h1 class="text-2xl font-semibold text-gray-800">Hi,</h1>
        <h2 class="text-5xl font-extrabold text-blue-600 mt-2">
            I'm <span class="my-name">{{ $user->name ?? 'Guest' }}</span>
        </h2>
        <h3 class="text-xl text-gray-700 mt-2 italic">
            {{ $user->title ?? 'A Web Enthusiast' }} @ 
            @if (!empty($user->github_url))
                <a href="{{ $user->github_url }}" class="text-pink-500 font-semibold hover:underline">
                    {{ $user->username ?? 'Unknown' }}
                </a>
            @else
                <span class="text-gray-500">{{ $user->username ?? 'Unknown' }}</span>
            @endif
        </h3>
    </div>

    <!-- Right Side: Image -->
    <div class="md:w-1/2 flex justify-center md:justify-end mt-6 md:mt-0">
        @if (!empty($user->hero_gift))
            <img src="{{ asset('storage/' . $user->hero_gift) }}" 
                 alt="{{ $user->name ?? 'User' }}" 
                 class="w-64 h-64 object-cover rounded-full shadow-lg">
        @else
            <div class="text-gray-500 italic">No image available</div>
        @endif
    </div>

</div>
@endsection