<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class PublicProfile extends Component
{
    public User $user;

    public function mount(string $username)
    {
        // Trouve l'utilisateur par son pseudo ou renvoie une erreur 404
        $this->user = User::where('username', $username)->firstOrFail();
    }

    public function render()
    {
        // Utilise le layout simple pour les invités, sans le menu du dashboard
        return view('livewire.public-profile')
            ->layout('layouts.guest');
    }
}