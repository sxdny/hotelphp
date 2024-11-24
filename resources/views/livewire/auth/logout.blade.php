<form wire:submit.prevent="logout" method="post">
    @csrf
    <button type="submit" class="px-3text-red-500">Logout</button>
</form>