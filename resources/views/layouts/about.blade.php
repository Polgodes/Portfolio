@extends('app')
@section('title', 'About us')
@section('content')
    <main class="container mx-auto px-6 py-12">
    <section id="profile" class="bg-base-200 p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-center space-x-2">
                <img src="{{ asset('images/icons/dudu-smile.png') }}" alt="Smile Icon" class="w-12">
                <h2 class="text-3xl font-bold">{{ $user->username }}.<span class="text-pink-500">profile</span></h2>
            </div>            
            <p class="text-gray-600 text-center">Hello</p>
            <div class="flex flex-col md:flex-row items-center mt-6">
                <div class="avatar">
                    <div class="w-32 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img src="{{ asset('storage/' . $user->hero_gift) }}" alt="{{ $user->name }}">
                    </div>
                </div>
                <div class="mockup-code mt-6 md:mt-0 md:ml-6">
                    <pre><code>{{ $user->username }}.<span class="text-green-500">pronouns</span> = "{{ $user->pronouns }}"</code></pre>
                    <pre><code>{{ $user->username }}.<span class="text-green-500">location</span> = "{{ $user->location }}"</code></pre>
                    <pre><code>{{ $user->username }}.<span class="text-green-500">languages</span> = [@foreach ($user->languages as $language) "{{ $language }}", @endforeach]</code></pre>
                </div>
            </div>
        </section>

        <section id="education-experience" class="mt-12">
            <h3 class="text-2xl font-bold text-center">Education</h3>
            <div class="grid md:grid-cols-2 gap-6 mt-6">
                @foreach ($educations as $education)
                    <div class="card bg-white shadow-lg p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-green-500">{{ $education->education_degree }}</h4>
                        <p>{{ $education->education_location }}</p>
                        <h5 class="mt-2 font-bold">Achievements</h5>
                        @php $achievements = explode(',', $education->education_achievements); @endphp
                        <ul class="list-disc pl-6">
                            @foreach ($achievements as $achievement)
                                <li>{{ $achievement }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </section>

        <section id="tech-stack" class="mt-12">
            <h3 class="text-2xl font-bold text-center">Tech Stack</h3>
            <div class="flex flex-wrap justify-center gap-4 mt-6">
                @foreach ($techstacks as $item)
                    <a href="{{ $item->url }}" class="btn btn-outline btn-primary">
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-6 h-6 rounded-full">
                        {{ $item->name }}
                    </a>
                @endforeach
            </div>
        </section>

        <section id="all-social-media" class="mt-12">
            <h3 class="text-2xl font-bold text-center">Contact</h3>
            <p class="text-center text-gray-600">Find me on the internet:</p>
            <div class="flex flex-wrap justify-center gap-4 mt-6">
                <a href="{{ $user->linkedin_url }}" class="btn btn-outline btn-info">
                    <i class="fa-brands fa-linkedin"></i> LinkedIn
                </a>
                <a href="{{ $user->github_url }}" class="btn btn-outline btn-dark">
                    <i class="fa-brands fa-github"></i> GitHub
                </a>
                <a href="{{ $user->insta_url }}" class="btn btn-outline btn-error">
                    <i class="fa-brands fa-instagram"></i> Instagram
                </a>
                <a href="mailto:{{ $user->email }}" class="btn btn-outline btn-warning">
                    <i class="fa-solid fa-envelope"></i> Email
                </a>
            </div>
        </section>
    </main>
@endsection
