@extends('templates.default')
@section('alerts')
	<h1>Hey Collingswood! We're Coming to You!</h1>
	<p>Endgrain Coffee will be coming to Collingswood this autumn. Check out our <a href="https://www.facebook.com/EndgrainCoffee/posts/2690014561252097" target="_blank">Facebook post</a> for more info.</p>
@stop
@section('topthree')
  <div class="image bg-white rounded-lg shadow-xl overflow-hidden col-span-1 transform hover:-translate-y-1 hover:scale-105 transition ease-in-out duration-300">
    <a href="/menu">
      <img src="img/outpost-menu.jpg" alt="Photo of menu board in Collingswood location and various pastries on the counter" class="w-100">
      <span class="font-bold text-center p-4 text-gray-700 text-lg inline-block w-full">Browse Menu</span>
    </a>
  </div>

  <div class="image bg-white rounded-lg shadow-xl overflow-hidden col-span-1 transform hover:-translate-y-1 hover:scale-105 transition ease-in-out duration-300">
    <a href="/locations">
      <img src="img/locations-button.jpg" alt="Photo of a sticker on a metal lunch pail showing off the camping-themed Outpost logo for Endgrain Collingswood" class="w-100">
      <span class="font-bold text-center p-4 text-gray-700 text-lg inline-block w-full">View Locations</span>
    </a>    
  </div>

  <div class="image bg-white rounded-lg shadow-xl overflow-hidden col-span-1 transform hover:-translate-y-1 hover:scale-105 transition ease-in-out duration-300">
    <a href="https://store.endgrain.coffee" target="_blank">
      <img src="img/shop-button.jpg" alt="Photo of shirt, cans for coffee, coffee bags, and other merchandise" class="w-100">
      <span class="font-bold text-center p-4 text-gray-700 text-lg inline-block w-full">Shop Now</span>
    </a>                        
  </div>
@stop