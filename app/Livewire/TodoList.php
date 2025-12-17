<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TodoList extends Component
{
    #[Rule('required|min:3|string')]
    public string $name;

    public string $search;

    public function add()
    {
        $validated = $this->validateOnly('name');
        Todo::create($validated);
        $this->reset('name');
       session()->flash('success', 'Saved');

    }
    
    public function render()
    {
        return view('livewire.todo-list', ['todos' => Todo::paginate(5)]);
    }
}
