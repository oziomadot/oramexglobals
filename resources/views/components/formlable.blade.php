@props(['name'])

<label class="block mb-2 uppercase font-bold text-base text-lime-900 mt-4 ml-4"
       for="{{ $name }}">
    {{ ucwords($name) }}
</label>
