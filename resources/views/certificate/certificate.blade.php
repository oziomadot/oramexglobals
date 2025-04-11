<x-app-layout>
    <div  style="padding-top:2px; position: relative; background-color:blue; max-width;" >


    <div style=" padding-top:2px; background-color: rgb(251, 251, 251); max-width; height:98%;">
        <div style="overflow: hidden; ">
            <div style="position:absolute; z-index:4; top:-18px; left:-18px; background-color: rgb(21, 72, 214);
            width:75px; height75; border-radius:0% 0% 50% 0%;">
                <div style="background-color: rgb(137, 251, 16); width:60px; height:60px;">
                <div style="border-radius: 50%; background-color: rgb(159, 48, 228); width:60px; height:60px" >

                    </div>
                </div>
            </div>
<div style="position: relative; margin:10px; z-index:1;  height: 98%;">


            <div style="height: 500px; width: 400px;   background-color: rgb(159, 48, 228); border-radius:50% 0% 0%
          ">
{{-- behind rectangle --}}
            </div>



          <div style="position:absolute; top:4px; left:4px; height:92%;
          background-color: rgb(251, 251, 251); padding: 5px;">
                {{-- certificate --}}
<div style="position: absolute; z-index: -1">
    @if( $training->interest->id === 2 )
                    <img src="{{  public_path('storage/img/android.gif') }}" alt="" style="height:100%; width:100%;
                    opacity: 0.6">

    @elseif ($training->interest->id === 1)
        <img src="{{  public_path('storage/img/website.png') }}" alt="" style="height:100%; width:100%;
                    opacity: 0.7">

@elseif ($training->interest->id === 3)
<img src="{{  public_path('storage/img/android.gif') }}" alt="" style="height:100%; width:100%;
            opacity: 0.7">

        @endif
</div>

                <div  style="text-align:center">

                <p  style="font-family: Sofia; font-size:40px; text-shadow: 5px 5px 5px #bbe768 "
                class="font-effect-fire">  ORAMEX ACADEMY</p>
            </div>



            <div style="text-align: center;">
                <p style=" font-family: Tillana;  font-weight: 200;  font-style: normal;">
                    through
                </p>

            </div>
            <div style="text-align: center;">
                <div class="">
                <p style=" font-size:30px" class="tangerine-bold">
                   <h2 class="font-effect-outline "> ORAMEX GLOBALS LIMITED </h2>
                </p>

                </div>

            </div>

                <div style="text-align: center;">
                <p style=" font-family: Tillana;  font-weight: 200;  font-style: normal;">
                    present this certificate to
                </p>
            </div>


               <div style="text-align: center; max-width; ">
                <p style="   font-weight: 400;  font-style: normal; font-size:40px;  "
                class="mea-culpa-regular">
                    {{ $training->surname }} {{ $training->firstname }}</p>
                    <hr style="border-top:3px dotted rgb(8, 8, 106)">
                </div>

            <div style="text-align: center; ">
                <p style=" font-family: Tillana;  font-weight: 400;  font-style: normal; ">
                    as a testament that he/she participated in <b> {{ $training->interest->name }} </b>programming workshop held by Oramex Globals limited
                    through Oramex Academy in December 2024
                </p>
            </div>


            <div>
                <div>

                        {{-- sign --}}



        <div style="">
                    <div style="display: inline-block; width: 30%; text-align:center;">

                        <div style="">
                            <div style="">
                                <img src="{{  public_path('storage/img/oz1.png') }}" alt="" style="width: 150px;"
                            >
                            </div>

                           <hr style="border-top:3px dotted rgb(8, 8, 106)">

                        </div>
                        <p style=" font-family: Tillana;  font-weight: 400;  font-style: normal;">
                            Ezeomeke Ozioma
                        </p>
                        <p style=" font-family: Tillana;  font-weight: 400;  font-style: normal; colour: black;">
                            Trainer
                        </p>
                    </div>

                    {{-- qrcode --}}

    <div style="display:inline-block; width:30%">

        <div style="text-align: center">

            <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
            <p class="mb-0">Scan to verify</p>
        </div>

    </div>


                    <div style="display: inline-block; width: 30%; text-align: right; text-align:center;">
                        <div style=" ">

                            <div style="">
                                <img src="{{  public_path('storage/img/don1.png') }}" alt="" style="width: 150px;"
                            >
                            </div>
                            <hr style="border-top:3px dotted rgb(8, 8, 106)">

                            </div>
                        <p style=" font-family: Tillana;  font-weight: 400;  font-style: normal;">
                        Okachi Francis
                    </p>
                    <p style=" font-family: Tillana;  font-weight: 400;  font-style: normal; tex-align: center; colour: black;">
                        Manager
                    </p>
                    </div>
                </div>

                </div>


            </div>




            </div>

            <div style="position:absolute; z-index:-2; bottom:-1px; right:-20px; width: 200px; height: 200px; background-color: rgb(225, 132, 26);
            border-radius: 50%;">
{{-- behind circle --}}
            </div>



        </div>

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
