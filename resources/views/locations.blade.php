@extends('templates.fullbleedheader')
@section('featureImage')
@stop
@section('pageTitle')
  Locations and Hours
@stop
@section('pageSubtitle')
  Stop by our Pitman cafe to caffeinate your day
@stop
@section('body')
  <p class="mb-8">You've got good tastes! Stop by our Pitman flagship cafe for great coffee, tea, and more.</p>
</div>
@stop
@section('body2')
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-16">
    <div class="mb-16 p-8 border-t-2 border-b-2 border-grey-300">
    <div class="lg:flex justify-center">
      <div class="w-full h-48 md:h-64 md:w-64 bg-cover text-center overflow-hidden rounded-md shadow-lg md:mr-12 mb-8 md:mb-0" style="background-image: url('../img/pitman-cafe.jpg');background-position: center;" title="The Roastery"></div>
      <section class="lg:flex lg:justify-between max-w-2xl flex-grow">
        <div class="zone">
          <div class="text-gray-900 font-bold text-xl mb-2">Pitman<br>(Endgrain Roasters)</div>
          <div class="flex">
            <svg class="fill-current text-yellow-400 h-10 mr-2" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                <g id="icon-shape">
                  <path d="M10,20 C10,20 17,10.8659932 17,7 C17,3.13400675 13.8659932,0 10,0 C6.13400675,0 3,3.13400675 3,7 C3,10.8659932 10,20 10,20 Z M10,9 C11.1045695,9 12,8.1045695 12,7 C12,5.8954305 11.1045695,5 10,5 C8.8954305,5 8,5.8954305 8,7 C8,8.1045695 8.8954305,9 10,9 Z" id="Combined-Shape"></path>
                </g>
              </g>
            </svg>
            <div class="text-gray-700 text-base">
              <address>
                10 Pitman Ave<br>
                Pitman, NJ 08071
              </address>
              
            </div>
          </div>
          <div class="mt-4 md:mt-8 mb-4 lg:mb-0">
            <a href="https://www.google.com/maps/dir//Endgrain+Coffee+Roasters,+10+Pitman+Ave,+Pitman,+NJ+08071/@39.7319862,-75.131985,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89c6d71537da09bb:0xca300b8c1d0783b2!2m2!1d-75.1297963!2d39.7319862" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-yellow-800 bg-grey-300 hover:text-yellow-900 hover:bg-grey-400 focus:outline-none focus:shadow-outline-yellow focus:border-yellow-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
              <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-4 w-4 text-yellow-600 hover:text-yellow-700 fill-current mr-2">
                <g id="Page-1" stroke-width="1" fill-rule="evenodd">
                  <g id="icon-shape">
                    <polygon id="Rectangle-535" points="0 0 20 8 12 12 10 20"></polygon>
                  </g>
                </g>
              </svg>
              Get Directions
            </a>
          </div>
        </div>
        <table class="transition-all duration-500 ease-in-out w-full lg:w-auto" data-hours="pSH">
          <thead>
            <tr>
              <th class="text-left">Day</th>
              <th class="text-right">Hours</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-grey-900 leading-none">Mon</td>
              <td class="text-grey-600 text-right">0800 - 1500</td>
            </tr>
            <tr>
              <td class="text-grey-900 leading-none">Tue</td>
              <td class="text-grey-600 text-right">0800 - 1500</td>
            </tr>
            <tr>
              <td class="text-grey-900 leading-none">Wed</td>
              <td class="text-grey-600 text-right">0800 - 1500</td>
            </tr>
            <tr>
              <td class="text-grey-900 leading-none">Thu</td>
              <td class="text-grey-600 text-right">0800 - 1500</td>
            </tr>
            <tr>
              <td class="text-grey-900 leading-none">Fri</td>
              <td class="text-grey-600 text-right">0800 - 1500</td>
            </tr>
            <tr>
              <td class="text-grey-900 leading-none">Sat</td>
              <td class="text-grey-600 text-right">0800 - 1500</td>
            </tr>
            <tr>
              <td class="text-grey-900 leading-none">Sun</td>
              <td class="text-grey-600 text-right">0900 - 1500</td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
    </div>
    <div class="mb-16 p-8 border-t-2 border-b-2 border-grey-300 hidden">
      <div class="lg:flex justify-center">
        <div class="w-full h-48 md:h-64 md:w-64 bg-cover text-center overflow-hidden rounded-md shadow-lg md:mr-12 mb-8 md:mb-0" style="background-image: url('../img/contact-us.jpg');background-position: bottom;" title="The Outpost"></div>
        <section class="lg:flex lg:justify-between max-w-2xl flex-grow">
          <div class="zone">
            <div class="text-gray-900 font-bold text-xl mb-2">Collingswood<br>(Endgrain Outpost)</div>
            <div class="flex">
              <svg class="fill-current text-yellow-400 h-10 mr-2" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                  <g id="icon-shape">
                    <path d="M10,20 C10,20 17,10.8659932 17,7 C17,3.13400675 13.8659932,0 10,0 C6.13400675,0 3,3.13400675 3,7 C3,10.8659932 10,20 10,20 Z M10,9 C11.1045695,9 12,8.1045695 12,7 C12,5.8954305 11.1045695,5 10,5 C8.8954305,5 8,5.8954305 8,7 C8,8.1045695 8.8954305,9 10,9 Z" id="Combined-Shape"></path>
                  </g>
                </g>
              </svg>
              <p class="text-gray-700 text-base">
                <address>
                  13 Fern Ave.<br/>
                  Collingswood, NJ 08108
                </address>
              </p>
            </div>
            <div class="mt-4  md:mt-8 mb-4 lg:mb-0">
              <a href="https://www.google.com/maps/dir//Endgrain+Coffee+Outpost,+13+Fern+Ave,+Collingswood,+NJ+08108/@39.8238124,-75.1676618,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89c6c98066033507:0xc3ea0799464f6347!2m2!1d-75.0654483!2d39.9156808" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-yellow-800 bg-grey-300 hover:text-yellow-900 hover:bg-grey-400 focus:outline-none focus:shadow-outline-yellow focus:border-yellow-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-4 w-4 text-yellow-600 hover:text-yellow-700 fill-current mr-2">
                  <g id="Page-1" stroke-width="1" fill-rule="evenodd">
                    <g id="icon-shape">
                      <polygon id="Rectangle-535" points="0 0 20 8 12 12 10 20"></polygon>
                    </g>
                  </g>
                </svg>
                Get Directions
              </a>
            </div>
          </div>
          <table class="transition-all duration-500 ease-in-out w-full lg:w-auto" data-hours="pSH">
            <thead>
              <tr>
                <th class="text-left">Day</th>
                <th class="text-right">Hours</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-grey-900 leading-none">Mon</td>
                <td class="text-grey-600 text-right">0800 - 1400</td>
              </tr>
              <tr>
                <td class="text-grey-900 leading-none">Tue</td>
                <td class="text-grey-600 text-right">0800 - 1400</td>
              </tr>
              <tr>
                <td class="text-grey-900 leading-none">Wed</td>
                <td class="text-grey-600 text-right">0800 - 1400</td>
              </tr>
              <tr>
                <td class="text-grey-900 leading-none">Thu</td>
                <td class="text-grey-600 text-right">0800 - 1400</td>
              </tr>
              <tr>
                <td class="text-grey-900 leading-none">Fri</td>
                <td class="text-grey-600 text-right">0800 - 1400</td>
              </tr>
              <tr>
                <td class="text-grey-900 leading-none">Sat</td>
                <td class="text-grey-600 text-right">0800 - 1400</td>
              </tr>
              <tr>
                <td class="text-grey-900 leading-none">Sun</td>
                <td class="text-grey-600 text-right">0800 - 1400</td>
              </tr>
            </tbody>
          </table>
        </section>
      </div>
    </div>
  </div>
  
@stop
