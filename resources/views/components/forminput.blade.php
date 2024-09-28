@props(['name', 'type'])




    <input  {{ $attributes->merge([ 'value' => old($name),
    'class' => 'border border-cyan-200 text-black w-80 rounded block ml-4'])}}
           name="{{ $name }}"
           id="{{ $name }}"
           type = "{{ $type }}"


    ></input>

    <x-formerror name="{{ $name }}"/>
