<x-app-layout>


    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                {{-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3 ">

                    @if (Route::has('login'))
                        <livewire:welcome.navigation />
                    @endif
                </header> --}}
                <div class="flex justify-between ">
                    <div class=" font-bold text-4xl sm:pt-4 text-white sm:pb-4 font-Audiowide text-center">
                        ORAMEX GLOBALS LIMITED
                    </div>

                    <div class="p-2 text-xl">
                       <a href="/login">
                        <div class="bg-cyan-500 rounded-lg shadow-lg p-2 font-bold font-black">
                           Login
                        </div>
                        </a>
                    </div>
                    </div>

    <main>
      <div
        class="relative pt-10 pb-16 flex content-center items-center justify-center"
        style="min-height: 75vh;"
      >

        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <x-statusmessage/>
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">

              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                  Your story starts with us.
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                  The journey of a stress free life, happiness and peace of mind.
                  We give it all to make life easy through our services. We are the companion that you need.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>



      <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                    <div
                    class="text-white p-2 text-center inline-flex items-center justify-center w-full mb-5 shadow-lg rounded-lg bg-slate-300"
                  >
                    <img src="{{ asset('storage/img/house.webp') }}"/>
                  </div>
                  <h6 class="text-xl font-semibold text-slate-900 text-left">House and Land Agency and Management</h6>
                  <p class="mt-2 mb-4 text-gray-600 line-clamp-3">
                    Do you want to sell your house or land? Rent or Buy house or land? We are here to give you the best services. Our services are
                    stress free with the help of technology. If you are an agent or landlord, you can perfectly work with us to provide you clients
                    a beautiful services.
                  </p>
                  <b>
                    {{-- /houseandland --}}
                    <a href="https://oramexhouseandland.com"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                    <div
                    class="text-white p-2 text-center inline-flex items-center justify-center w-full mb-5 shadow-lg rounded-lg bg-blue-900"
                  >
                    <img src="{{ asset('storage/img/hotel1.webp') }}"/>
                  </div>
                  <h6 class="text-xl font-semibold text-blue-800 text-left">Hotel Managment and outsourcing</h6>
                  <p class="mt-2 mb-4 text-gray-600 line-clamp-3">
                    Are you a hotel owner? Do you want to give your customers a refined top notch services? Do you want to place your service above
                    your competitors? Here we are for you. We offer you our outsourcing services that includes staff management, services upgrade,
                    facitilies upgrade and lots more.
                  </p>
                  <b>
                    {{-- /hotel --}}
                    <a href="#"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                    <div
                    class="text-white p-2 text-center inline-flex items-center justify-center w-full mb-5 shadow-lg rounded-lg bg-yellow-600"
                  >
                    <img src="{{ asset('storage/img/animation.jpg') }}"/>
                  </div>
                  <div class="grid place-content-center">
                  <h6 class="text-xl font-semibold text-yellow-400 text-left">3D ACADEMY</h6>
                </div>
                  <p class="mt-2 mb-4 text-gray-600 line-clamp-3">
                    We offer to our new students opportunity to learn and develop their skills and talents through robust guidance. Are you interested to venture into the world of prgramming, animation,
                    gaming, etc we are here to offer you a comprehensive training and job opportunity after this learning adventure.
                  </p>
                  <b>
                    <a href="#"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
          </div>


          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                    <div
                    class="text-white p-2 text-center inline-flex items-center justify-center w-full mb-5 shadow-lg rounded-lg bg-violet-400"
                  >
                    <img src="{{ asset('storage/img/mobile.jpeg') }}"/>
                  </div>
                  <h6 class="text-xl font-semibold text-violet-900 text-left">Website and Android app development</h6>
                  <p class="mt-2 mb-4 text-gray-600 line-clamp-3">
                    Benefit from our robust, interactive web and mobile app development using different technologies that suits your dream. We develop
                    scalable apps for all kind of businesses and idea. Reliable and secured app for your client's need.
                  </p>
                  <b>
                    <a href="/academy"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                    <div
                    class="text-white p-2 text-center inline-flex items-center justify-center w-full mb-5 shadow-lg rounded-lg bg-stone-400"
                  >
                    <img src="{{ asset('storage/img/caregiving.webp') }}"/>
                  </div>
                  <h6 class="text-xl font-semibold text-stone-900 text-left">House keeping and Care giving</h6>
                  <p class="mt-2 mb-4 text-gray-600 line-clamp-3">
                    We care! We take care of your parents and children. Do your parents have it difficult to manage through their day to day activities?
                    Is it difficult for you to combine your work life and taking care of your children? We give you a helping hand. With our trained
                    caregivers, we give your the hands that you need.
                  </p>
                  <b>
                    {{-- /caregiving --}}
                    <a href="#"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center rounded-lg">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto ">
                  <div
                    class="text-white p-2 text-center inline-flex items-center justify-center w-full mb-5 shadow-lg rounded-lg bg-slate-200"
                  >
                  <img class="w-full rounded-lg" src="{{ asset('storage/img/cleaning.jpg') }}"/>
                  </div>
                  <h6 class="text-xl font-semibold text-slate-800 text-left">Cleaning services and House maintenance </h6>
                  <p class="mt-2 mb-4 text-black line-clamp-3">
                    We provides professional equipment, cleaning products and qualified staff to finish cleaning jobs quickly, fast and efficient.
                     We always work in a team and therefore can guarantee an outstanding service.!
                  </p>
                  {{-- /cleaning --}}
                   <b>
                    <a href="#"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
          </div>



          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class=" p-2 text-white text-center inline-flex items-center justify-center w-full  mb-5 shadow-lg rounded-lg bg-red-400"
                  >
                  <img class="w-full rounded-lg" src="{{ asset('storage/img/tv.jpg') }}"/>
                  </div>
                  <h6 class="text-xl font-semibold text-red-800 text-left">OG televission</h6>
                  <p class="mt-2 mb-4 text-gray-600 line-clamp-3">
                    Our team provide contents that is suitable for children and promotes Nigeria cultures and values. Nigeria Indigenous
                    Cartoon Network television.
                  </p>
                   <b>
                    {{-- /ogtv --}}
                    <a href="#"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                    <div
                    class=" p-2 text-white text-center inline-flex items-center justify-center w-full  mb-5 shadow-lg rounded-lg bg-emerald-100"
                  >
                  <img class="w-full rounded-lg" src="{{ asset('storage/img/nanny1.jpg') }}"/>
                  </div>
                  <h6 class="text-xl font-semibold text-emerald-600 text-left">Nanny and baby care</h6>
                  <p class="mt-2 mb-4 text-gray-600 line-clamp-3">
                    Do you need a helping hand for your child or children? With our team of trained nannies and baby seaters, we take care of
                    your child/children. Guided by our training and policies, we offer a high standard care for children.
                  </p>
                  <b>
                    {{-- /nanny --}}
                    <a href="#"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto ">
                    <div
                    class=" p-2 text-white text-center inline-flex items-center justify-center w-full  mb-5 shadow-lg rounded-lg bg-orange-100"
                  >
                  <img class="w-full rounded-lg" src="{{ asset('storage/img/house1.png') }}"/>
                  </div>
                  <h6 class="text-xl font-semibold text-orange-600 text-left"">Building maintenance </h6>
                  <p class="mt-2 mb-4 text-black line-clamp-3">
                    Are a landlord or landlady? We offer you our management and maintenance service. We stand as a go inbetween you and your
                    tenants. We take care of fixing and maintaining your building. Plumbing work, electrical work, painting, roof maintenance,
                    Capentary work etc. We take care and fix things for you. We talk to your tenants on your behalf and make sure your appartments
                    are prorperly maintained.
                  </p>
                  <b>
                    {{-- /building --}}
                    <a href="#"> <span class="text-blue-700">more...</span></a></b>
                </div>
              </div>
            </div>
          </div>














          <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
              <div
                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
              >
                <i class="fas fa-user-friends text-xl"></i>
              </div>
              <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Working with us is a pleasure
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
              >
                If you are looking for job, we are the best to connect with. We offer you job according to your capacity and ability.
                We offer training for skills needed for you to earn a living.
              </p>
              <p
                class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
              >
               Our workers are here to serve you. To give you the best services you need. What you need, we offer more.
              </p>

            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600"
              >
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                  class="w-full align-middle rounded-t-lg"
                />
                <blockquote class="relative p-8 mb-4">
                  <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                  >
                    <polygon
                      points="-30,95 583,95 583,65"
                      class="text-pink-600 fill-current"
                    ></polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-white">
                    Top Notch Services
                  </h4>
                  <p class="text-md font-light mt-2 text-white">
                    We are the best in what we do just like eagle, we soar so high. Nos sunt optima
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pb-20 relative block bg-gray-900">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-900 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white">Need something</h2>
              <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                The posibility is always there. Look around you and find something you need help for. We give it the best touch.
                You won't believe it until you see it.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-medal text-xl"></i>
              </div>
              <h6 class="text-xl mt-5 font-semibold text-white">
                Excelent Services
              </h6>
              <p class="mt-2 mb-4 text-gray-500">
                Our services are outstanding. It can only be us that gives such services.
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-poll text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">
                Grow your career
              </h5>
              <p class="mt-2 mb-4 text-gray-500">
                Join us for a fruitful career in the market. Blue coller job with diginity. We Grow every day
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-lightbulb text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
              <p class="mt-2 mb-4 text-gray-500">
                Call us for service, we respond with the speed of light. We are at you door step in to serve you.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="relative block py-24 lg:pt-0 bg-gray-900">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
              >
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                  <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                    Complete this form and we will get back to you in 24 hours.
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="full-name"
                      >Full Name</label
                    ><input
                      type="text"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Full Name"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="email"
                      >Email</label
                    ><input
                      type="email"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Email"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="message"
                      >Message</label
                    ><textarea
                      rows="4"
                      cols="80"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Type a message..."
                    ></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                      style="transition: all 0.15s ease 0s;"
                    >
                      Send Message
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative bg-gray-300 pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
              Find us on any of these platforms, we respond 1-2 business days.
            </h5>
            <div class="mt-6">
              <button
                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-twitter"></i></button
              ><button
                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-facebook-square"></i></button
              ><button
                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-instagram"></i></button
              >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
              <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span
                  class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                  >Useful Links</span
                >
                <ul class="list-unstyled">
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >About Us</a
                    >
                  </li>


                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >services</a
                    >
                  </li>
                </ul>
              </div>
              <div class="w-full lg:w-4/12 px-4">
                <span
                  class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                  >Other Resources</span
                >
                <ul class="list-unstyled">

                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >Terms &amp; Conditions</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >Privacy Policy</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#"
                      >Contact Us</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © 2024 Oramex Globals Limited
              <a
                href="https://www.oramexglobals.com"
                class="text-gray-600 hover:text-gray-900"
                >Oramex Globals Limited</a
              >.
            </div>
          </div>
        </div>
      </div>
    </footer>




            </div>
        </div>
    </div>





  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>

</x-app-layout>
