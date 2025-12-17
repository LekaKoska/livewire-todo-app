<input wire:model="todoName" type="text" placeholder="Todo.."
       class="bg-gray-100  text-gray-900 text-sm rounded block w-full p-2.5"
       value="Todo name">

@error('todoName')
<span class="text-red-500 text-xs block">{{$message}}</span>
@enderror
