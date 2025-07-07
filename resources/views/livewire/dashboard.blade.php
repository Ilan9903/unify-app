<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow-xl mb-8">
            <h2 class="text-2xl font-bold mb-4">Add a new link</h2>
            <form wire:submit="addLink">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                    <input type="text" id="title" wire:model="title" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    @error('title') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="url" class="block text-gray-700 font-bold mb-2">URL</label>
                    <input type="url" id="url" wire:model="url" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="https://example.com">
                    @error('url') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 font-semibold">Add Link</button>
            </form>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-xl">
            <h2 class="text-2xl font-bold mb-4">Your Links</h2>
            <div class="space-y-4">
                @forelse ($links as $link)
                    <div class="flex items-center justify-between p-4 border rounded-md hover:bg-gray-50">
                        <div>
                            <p class="font-semibold text-lg">{{ $link->title }}</p>
                            <a href="{{ $link->url }}" target="_blank" class="text-sm text-gray-500 hover:text-indigo-600">{{ $link->url }}</a>
                        </div>
                        <button wire:click="deleteLink({{ $link->id }})" wire:confirm="Are you sure you want to delete this link?" class="text-red-500 hover:text-red-700 font-semibold">
                            Delete
                        </button>
                    </div>
                @empty
                    <p class="text-gray-500">You haven't added any links yet. Add one above to get started!</p>
                @endforelse
            </div>
        </div>
    </div>
</div>