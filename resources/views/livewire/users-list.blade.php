<div class="max-w-md mx-auto mt-10 bg-white shadow rounded-lg">
    <ul class="divide-y divide-gray-200">
        @foreach ($users as $user)
            <li class="p-4 hover:bg-gray-50">
                <p class="text-sm font-semibold text-gray-800">
                    {{ $user->name }}
                </p>
                <p class="text-sm text-gray-500">
                    {{ $user->email }}
                </p>
            </li>
        @endforeach
    </ul>
        <div>
            {{$users->links()}}
        </div>
</div>

