<div class="mt-5 flex flex-col gap-8">
    <form class="flex flex-col gap-2" wire:submit.prevent="editRoom">
        <input wire:model="roomId" wire:change="roomIdChanged">
        @csrf
        <div class="flex flex-col gap-2 text-left">
            <label class="text-neutral-400 text-sm font-semibold">Name:</label>
            <input class="bg-neutral-700 border-neutral-600 text-neutral-300" type="text" wire:model.live="name"/>
            @error('name') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col gap-2 text-left">
            <label class="text-neutral-400 text-sm font-semibold">Description:</label>
            <textarea class="resize-none bg-neutral-700 border-neutral-600 text-neutral-300" wire:model="description" cols="30" rows="5"></textarea>
            @error('description') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col gap-2 text-left">
            <label class="text-neutral-400 text-sm font-semibold">Type:</label>
            <select class="bg-neutral-700 border-neutral-600 text-neutral-300" wire:model="type">
                <option class="bg-neutral-700 border-neutral-600 text-neutral-300" value="individual">Individual</option>
                <option class="bg-neutral-700 border-neutral-600 text-neutral-300" value="presidential">Presidential</option>
                <option class="bg-neutral-700 border-neutral-600 text-neutral-300" value="twin">Twin Room</option>
                <option class="bg-neutral-700 border-neutral-600 text-neutral-300" value="deluxe">Deluxe</option>
              </select>
            @error('type') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col gap-2 text-left">
            <label class="text-neutral-400 text-sm font-semibold">Capacity:</label>
            <input class="bg-neutral-700 border-neutral-600 text-neutral-300" type="number" wire:model="capacity"/>
            @error('capacity') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col gap-2 text-left">
            <label class="text-neutral-400 text-sm font-semibold">Price:</label>
            <input class="bg-neutral-700 border-neutral-600 text-neutral-300" type="number" wire:model="price"/>
            @error('price') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col gap-2 text-left">
            <label class="text-neutral-400 text-sm font-semibold">Image (Optional)</label>
            <input class="bg-neutral-700 border-neutral-600 text-neutral-300" type="file" wire:model="image"/>
            @error('image') <span class="text-red-400">{{ $message }}</span> @enderror
        </div>
        <button class="bg-white text-black mr-auto px-3 py-2 border-black border rounded" type="submit">Add</button>
    </form>
</div>