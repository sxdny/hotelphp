<div>
    @if (session()->has('message'))
        <div> {{ session('message')}} </div>
    @endif

    <form wire:submit.prevent="add" class="bg-white border p-5 flex flex-col gap-3">
        <div>
            <label class="text-black">Name:</label>
            <input class="text-black" type="text" wire:model="name"/>
            @error('name') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="text-black">surname:</label>
            <input class="text-black" type="text" wire:model="surname">
            @error('surname') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="text-black">email:</label>
            <input class="text-black" type="text" wire:model="email">
            @error('email') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="text-black">phone_number:</label>
            <input class="text-black" type="text" wire:model="phone_number">
            @error('phone_number') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="text-black">username:</label>
            <input class="text-black" type="text" wire:model="username">
            @error('username') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="text-black">password:</label>
            <input class="text-black" type="text" wire:model="password">
            @error('password') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        <button class="bg-black px-3 py-1 text-white" type="submit">Create client</button>
    </form>
</div>
