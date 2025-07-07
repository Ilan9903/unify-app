<div class="max-w-2xl mx-auto text-center py-12 px-4 font-sans">
    <div class="mb-8">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900">{{ $user->name }}</h1>
        <p class="mt-4 text-lg text-gray-600">{{ $user->bio }}</p>
    </div>

    <div class="space-y-4">
        @foreach ($user->links as $link)
            <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer"
               class="block w-full bg-indigo-600 text-white p-4 rounded-lg text-lg font-semibold hover:bg-indigo-700 transition-transform hover:scale-105">
                {{ $link->title }}
            </a>
        @endforeach
    </div>

    <footer class="mt-12 text-sm text-gray-400">
        <p>Powered by Unify</p>
    </footer>
</div>