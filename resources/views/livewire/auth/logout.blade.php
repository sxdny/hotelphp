<form wire:submit.prevent="logout" method="post">
    @csrf
    <button type="submit" class="mr-auto bg-red-800 px-3 py-1 text-red-50 border-red-300 border rounded">Logout</button>
</form>