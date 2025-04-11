<div>
    <input wire:model.defer="email" type="email" placeholder="Enter your email">

    <p>Current Email: {{ $email }}</p>

    @if (session()->has('message'))
        <span class="text-green-500">{{ session('message') }}</span>
    @endif
</div>
