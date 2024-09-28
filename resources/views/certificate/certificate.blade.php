<x-app-layout>

{{-- <div style="backgroud-image: url('{{ data: asset('storage/img/web.jpg') }}')"> --}}
    {{-- <img class="w-full" src="{{ asset('storage/img/web.jpg') }}" alt=""> --}}
   <div class="w-full">
    <div>
        <div>
            <div>
                <div class="rounded-full border-2 border-sky-500">
                    <div class="rounded-full border-2 border-sky-500">
                        <div class="rounded-full border-2 border-sky-500">
                            <div class="rounded-full border-2 border-sky-500">
                                <div class="rounded-full border-2 border-sky-500">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <div class="flex justify-center w-full">

                <p  class="font-protest font-3xl "> ORAMEX GLOBALS LIMITED</p>
            </div>
            </div>


            <div class="flex justify-center">
                <div>
                <p>
                    through
                </p>
            </div>
            </div>
            <div class="flex justify-center">
                <div>
                <p class="font-audiowide">
                    ORAMEX ACADEMY
                </p>

                </div>

            </div>

                <div>
                <p>
                    present this certificate to
                </p>
            </div>

            <div class="grid grid-cols-1 divide-y-2 divide-dashed">
               <div><p class=""> {{ $trainee->surname }} {{ $trainee->firstname }}</p></div>
            </div>
            <div>
                <p>
                    as a testment that he/she participated in {{ $trainee->interest->name }} workshop held by Oramex Globals limited
                    through Oramex Academy in December 2024
                </p>
            </div>
            <div>
                <div>
                    <div>
                        <p>
{{-- divider  --}}
                        </p>
                    </div>
                    <div>
                        <p>
                            Ezeomeke Ozioma
                        </p>
                    </div>
                    <div>
                        <p>
                            Trainer
                        </p>
                    </div>

                </div>
                <div>
                <div>

                    {{-- divider  --}}

                </div>

                <div>
                    <p>
                        Okachi Francis
                    </p>

                </div>
                <div>
                    <p>
                        Manager
                    </p>
                </div>
            </div>
            </div>
            </div>
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <div>
                                                <div>
                                                    <div>
                                                        <div>
                                                            <div class="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>



    {{-- qrcode --}}

    <div>

        <div class="col-md-2">
            <p class="mb-0">Color Change</p>
            {{ $changeColor }}
        </div>

    </div>
   </div>

{{-- </div> --}}



<script>

    function downloadSVG() {
      const svg = document.getElementById('container').innerHTML;
      const blob = new Blob([svg.toString()]);
      const element = document.createElement("a");
      element.download = "w3c.svg";
      element.href = window.URL.createObjectURL(blob);
      element.click();
      element.remove();
    }
    </script>
</x-app-layout>
