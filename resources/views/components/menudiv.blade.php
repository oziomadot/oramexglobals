@props(['name', 'items', 'icon'])
<div class=" block my-2">
    <div
        x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
        x-on:keydown.escape.prevent.stop="close($refs.button)"
        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
        x-id="['dropdown-button']"
        class="relative"
    >
        <!-- Button -->
        <button
            x-ref="button"
            x-on:click="toggle()"
            :aria-expanded="open"
            :aria-controls="$id('dropdown-button')"
            type="button"
            class="relative flex items-center whitespace-nowrap justify-center gap-2 py-2 rounded-lg shadow-sm bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 hover:border-gray-200 px-4"
        >
        <i class="{{ $icon}} mr-2"></i>
            <span>{{ $name }}</span>

            <!-- Heroicon: micro chevron-down -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Panel -->
        <div
            x-ref="panel"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="close($refs.button)"
            :id="$id('dropdown-button')"
            x-cloak
            class=" left-0  rounded-lg shadow-sm  z-10 origin-top-left bg-slate-100 p-1.5 outline-none border border-gray-200"
        >

{{-- absolute mt-2 min-w-48--}}
            @if(isset($items))
               @foreach($items as $item)

               @php
                $classes = 'px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed';
                $classes .= ' ' . ($item['color'] ?? '');
                @endphp

                @if(isset($item['url']))
               <a href="{{route($item['url'])}}"   wire:navigate
               class="{{ $classes }}">

                    {{ $item['label'] }}
                </a>

                @elseif(isset($item['click']))
                <button wire:click="{{ $item['click'] }}"
                type="button"
                class="{{ $classes }}">
                {{ $item['label'] }}
                </button>
                @endif


                @endforeach

@endif
{{ $slot }}

        </div>
    </div>
</div>
