@props(['value'])

<label {{ $attributes->merge(['class' => 'block uppercase font-bold text-xs text-lime-900 mt-4']) }}
    >
    {{ $value ?? $slot }}
</label>
