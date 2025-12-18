<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterForm extends Component
{
    use WithFileUploads;
    #[Rule('required|string|min:3|max:50')]
    public string $name;
    #[Rule('required|string|unique:users|email')]
    public string $email;
    #[Rule('required|min:2')]
    public string $password;
    #[Rule('nullable|sometimes|image|max:1024')]
    public $image;

    public function register()
    {
        $validated = $this->validate();
        if ($this->image)
        {
           $validated['image'] = $this->image->store('uploads', 'public');
        }
        User::create($validated);
        session()->flash('success', 'User register successfully');
        $this->reset('name', 'email', 'password', 'image');
    }
    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
