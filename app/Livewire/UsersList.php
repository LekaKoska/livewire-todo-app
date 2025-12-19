<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersList extends Component
{
    
    public function render()
    {
        return view('livewire.users-list', ['users' => User::latest()->paginate(5)]);
    }
}
