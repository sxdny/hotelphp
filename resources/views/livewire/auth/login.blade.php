<main class="flex flex-col gap-8 mx-auto p-10">
    
    <a href="/" class="text-5xl font-semibold text-white">Hotel PHP</a>
    
    @if (session()->has('message'))
        <div> {{ session('message')}} </div>
    @endif

    <form wire:submit.prevent="login" class="flex flex-col gap-4 bg-neutral-800 p-5 border border-neutral-600 ">
        @csrf
        <div class="flex flex-col gap-2 text-left">
            <label class="text-neutral-400 text-sm font-semibold">Email:</label>
            <input class="bg-neutral-700 border-neutral-600 text-neutral-300" type="text" wire:model="email"/>
            @error('email') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col gap-2 text-left">
            <label class="text-neutral-400 text-sm font-semibold">Password:</label>
            <input class="bg-neutral-700 border-neutral-600 text-neutral-300" type="password" wire:model="password"/>
            @error('password') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>

        @error('failed') <span class="text-red-400">{{ $message }}</span> @enderror
        
        <div class="flex justify-between items-center mt-3">
            <div>
                <a href="/restore-password" class="underline text-neutral-400">I forgot my password.</p>
            </div>
            <button class="bg-white text-black border border-black px-5 py-2 ml-auto" type="submit">Login</button>
        </div>
    </form>
</main>