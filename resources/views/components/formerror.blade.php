@props(['name', 'message'])

@error($name)
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
@enderror
