<div>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <form wire:submit.prevent="register"
              class="w-full max-w-md bg-white p-6 rounded-2xl shadow-lg space-y-4">

            <h2 class="text-2xl font-semibold text-gray-800 text-center">
                Register
            </h2>

            <div>
                <input
                    wire:model="name"
                    type="text"
                    placeholder="Name"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2
                       focus:outline-none focus:ring-2 focus:ring-indigo-500
                       focus:border-indigo-500"
                >
                @error('name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input
                    wire:model="email"
                    type="email"
                    placeholder="Email"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2
                       focus:outline-none focus:ring-2 focus:ring-indigo-500
                       focus:border-indigo-500"
                >
                @error('email')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input
                    wire:model="password"
                    type="password"
                    placeholder="Password"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2
                       focus:outline-none focus:ring-2 focus:ring-indigo-500
                       focus:border-indigo-500"
                >
                @error('password')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input
                    wire:model="image"
                    type="file"
                    accept="image/jpeg, image/png"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2
                       focus:outline-none focus:ring-2 focus:ring-indigo-500
                       focus:border-indigo-500"
                >
                @error('image')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
                @if($image)
                    <img src="{{$image->temporaryUrl()}}" alt="">
                @endif

                <div wire:loading wire:target="image">
                    <span>Uploading..</span>
                </div>
            </div>

            <button wire:loading.attr="disabled"
                type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-lg
                   hover:bg-indigo-700 transition
                   disabled:opacity-50"
            >
                Register
            </button>

            @if (session()->has('success'))
                <p class="text-center text-sm text-green-600">
                    {{ session('success') }}
                </p>
            @endif

        </form>
    </div>



</div>
