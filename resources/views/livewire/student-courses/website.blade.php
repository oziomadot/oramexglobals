<div>


   <div class=" bg-emerald-50 sm:m-8 grid grid-cols-1 place-items-center ">
    <div class="flex justify-center font-Protest text-2xl text-lime-900 p-4">
        ORAMEX ACADEMY
    </div>
    @if($currentVideo)


    <div x-data="{ show: false, message: '', type: '' }"
    x-on:alert.window="show = true; message = $event.detail[0]; type = $event.detail[1]; setTimeout(() => show = false, 3000)">
   <div x-show="show" x-transition class="p-3 rounded text-white" :class="type === 'success' ? 'bg-green-500' : 'bg-red-500'">
       <p x-text="message"></p>
   </div>
</div>



    @if($techSelected)
<div class="flex justify-between">
    @foreach($currentVideo->course->technologies as $tech)
    <x-general-button type="button"  class="@if($tech->id === $activeTechnologyId) bg-cyan-700 @else bg-cyan-100 @endif" wire:click="loadTechnologyVideos({{$tech->id}})" value="{{$tech->id }}">
        {{ $tech->name }}
    </x-general-button>


    @endforeach


</div>
@endif

<div class="grid grid-cols-1 place-content-end gap-4 w-full my-2 mx-4">
<div class="flex justify-between mb-1">
    <span class="text-base font-medium text-blue-700 dark:text-green">Study Progress</span>
    <span class="text-sm font-medium text-blue-700 dark:text-cyan-500 px-4">{{ $progress }}%</span>
  </div>
<div class="w-full bg-gray-200 rounded-full h-4">


    <div class="bg-green-500 h-4 rounded-full"
         style="width: {{ $progress }}%">
    </div>
</div>
</div>

    <div class="flex justify-center  font-Sofia text-2xl">
      <h3>{{ $currentVideo->title->name }}</h3>
    </div>
{{-- <div class="flex justify-center"> --}}
<div  class="">
   {{-- <div id="player" class="p-4 "> --}}
    <iframe width="560" height="315"
   src="{{ $currentVideo->youtube_url }}"
   type="video/mp4"
         title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen >
        </iframe>

   {{-- </div> --}}
 </div>
<div>
    {{$currentVideo->description  }}
</div>


 @else

 <div>
<p> No tutorial avaliable </p>
</div>

@endif



@if($chooseEnd)

<x-formerror name="endSelected" wire:model="endSelected"/>
<div class="flex justify-between w-full px-4 sm:px-20">

    <div class="flex items-center">
        <input type="radio" wire:model="endSelected" value="1" class="w-2 h-2 text-gray-100 bg-gray-100 border-gray-300 focus:ring-blue-100 dark:focus:ring-blue-200 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
        <label for="default-radio-2" class="ms-2 text-sm font-medium text-blue-900">Frontend</label>


    </div>
    <div class="flex items-center">
        <input type="radio" wire:model="endSelected" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2  dark:border-gray-600">
        <label for="default-radio-2" class="ms-2 text-sm font-medium text-blue-900">Backend</label>
    </div>

</div>
@endif
   <x-general-button type="button" class="bg-cyan-900 text-white m-2" wire:click="next" x-bind:disabled="!isReady || !canProceed">Next</x-general-button>
</div>
</div>





<script>
    {{-- function youtubePlayer() {
        return {
            isReady: false,
            canProceed: false,
            player: null,
            requiredTime: 120, // Time in seconds (e.g., 1 minute)

            init() {
                let tag = document.createElement('script');
                tag.src = "https://www.youtube.com/iframe_api";
                let firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                window.onYouTubeIframeAPIReady = () => {
                    this.player = new YT.Player('player', {
                        height: '360',
                        width: '640',
                        videoId: '5fZibE1aVIg', // Replace with your YouTube video ID
                        playerVars: { 'autoplay': 0, 'controls': 1 },
                        events: {
                            'onReady': () => this.isReady = true,
                            'onStateChange': (event) => this.trackTime(event)
                        }
                    });
                };
            },

            trackTime(event) {
                if (event.data == YT.PlayerState.PLAYING) {
                    let interval = setInterval(() => {
                        if (this.player.getCurrentTime() >= this.requiredTime) {
                            this.canProceed = true;
                            clearInterval(interval); // Stop checking
                        }
                    }, 1000);
                }
            }
        }
    }
</script> --}}
</div>
