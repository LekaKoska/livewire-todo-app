<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TodoList extends Component
{
    #[Rule('required|min:3|string')]
    public string $name;
    #[Rule('min:2|string')]
    public string $search = '';

    public int $editingTodoID;

    #[Rule('required|string|min:3')]
    public string $todoName;


    public function add()
    {
        $validated = $this->validateOnly('name');
        Todo::create($validated);
        $this->reset('name');
       session()->flash('success', 'Saved');
    }

    public function update(Todo $todo)
    {
        $this->validateOnly('todoName');
        $todo->name = $this->todoName;
        $todo->update();
        $this->cancel();
    }

    public function delete(Todo $todo)
    {
       $todo->delete();
    }

    public function toggle(Todo $todo)
    {
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function edit(Todo $todo)
    {
        $this->editingTodoID = $todo->id;
        $this->todoName = $todo->name;
    }

    public function cancel()
    {
        $this->reset('editingTodoID', 'todoName');
    }
    public function render()
    {
        session()->flash('fail', 'Error');
        return view('livewire.todo-list', ['todos' => Todo::latest()->where('name', 'LIKE', "%{$this->search}%")->paginate(5)]);
    }
}
