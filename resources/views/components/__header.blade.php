<header class="bg-blue-600 text-white py-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center px-4">
        <h1 class="text-2xl font-bold">My Portfolio</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
                <li><a href="{{ route('photo') }}" class="hover:underline">Photos</a></li>
                <li><a href="{{ route('project') }}" class="hover:underline">Projects</a></li>
            </ul>
        </nav>
    </div>
</header>
