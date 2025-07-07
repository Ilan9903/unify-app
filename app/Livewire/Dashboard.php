<?php

namespace App\Livewire;

use App\Models\Link;
use Illuminate\Support\Collection;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Dashboard extends Component
{
    public Collection $links;

    #[Rule('required|string|max:255')]
    public string $title = '';

    #[Rule('required|url')]
    public string $url = '';

    public function mount(): void
    {
        // This will always be a Collection, even if it's empty
        $this->links = auth()->user()->links()->get();
    }

    public function addLink(): void
    {
        $this->validate();

        auth()->user()->links()->create([
            'title' => $this->title,
            'url'   => $this->url,
        ]);

        // Clear the input fields and refresh the link list
        $this->reset('title', 'url');
        $this->mount();
    }

    public function deleteLink(int $linkId): void
    {
        $link = Link::findOrFail($linkId);

        // Security check: Make sure the user owns this link before deleting
        if ($link->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $link->delete();
        $this->mount(); // Refresh the link list
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}