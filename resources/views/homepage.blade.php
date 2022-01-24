@extends('layouts.general-nav-bar')
@section('title')
homepage
@endsection
@section('content')
<!-- component -->
<!-- Hero Section -->
<section class="">
    <div class="bg-[url('https://i.imgur.com/jAXaawT.jpg')] h-screen bg-cover bg-center flex justify-items-center items-center">
      <div class="px-10 lg:px-32 xl:px-40">
        <h1 class="text-6xl font-semibold font-serif">
          <span class="textcolor">Rent From Our</span> <br />
          <span>New Collection</span>
        </h1>
        <p class="text-lg max-w-md">We are a safe and secure rental platform that offer the best vehicles to meet your needs on demand. </p>
      <button class="navcolor inline-block  rounded-full text-lg text-white font-semibold px-10 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6 hover:text-blue-dark mt-5" type="button" x-data="{}" x-on:click="window.livewire.emitTo('signup-modal', 'show')">Register</button>
      </div>
      <div class="">
          <a href="#">
        <img src="image/phone.png" />
          </a>
    </div>
    </div>
    <livewire:signup-modal />
  </section>

  <h1 class="text-3xl font-semibold font-serif text-center mb-2">
    <span class="textcolor">Luxury</span>
    <span class="textcolor">Vehicles</span>
  </h1>
{{-- START SLIDER --}}


  <section class="">
    {{-- slider class was used on section --}}
   <ul id="autoWidth" class="cs-hidden">
 
    <li class="item-a">
      <div class="box">
      {{-- <div class="slide-img"> --}}
      <img alt="car" src="image/blue.png" class="imgtag">
      <div class="overlay">
      <a href="#" class="buy-btn">Book Now</a>	
      </div>
      {{-- </div> --}}
      <div class="detail-box">
      <div class="type">
      <a href="#">Mercedes</a>
          <span>Rental Cost: USD$129</span>
          <span>Rating: </span>
      </div>
      </div>
      </div>		
       </li>
    
   
     <li class="item-a">
   <div class="box">
   {{-- <div class="slide-img"> --}}
   <img alt="car" src="image/yellow.png" class="imgtag">
   <div class="overlay">
   <a href="#" class="buy-btn">Book Now</a>	
   </div>
   {{-- </div> --}}
   <div class="detail-box">
   <div class="type">
   <a href="#">Mazda</a>
        <span>Rental Cost: USD$299</span>
          <span>Rating: </span>
   </div>
   </div>
   </div>		
    </li>
    
    
     <li class="item-a">
   <div class="box">
   {{-- <div class="slide-img"> --}}
   <img alt="car" src="image/bmwwhite.png" class="imgtag">
   <div class="overlay">
   <a href="#" class="buy-btn">Buy Now</a>	
   </div>
   {{-- </div> --}}
   <div class="detail-box">
   <div class="type">
   <a href="#">BMW</a>
       <span>Rental Cost: USD$109</span>
          <span>Rating: </span>
   </div>
   </div>
   </div>		
    </li>
    
    
     <li class="item-a">
   <div class="box">
   {{-- <div class="slide-img"> --}}
   <img alt="car" src="image/red.png" class="imgtag">
   <div class="overlay">
   <a href="#" class="buy-btn">Book Now</a>	
   </div>
   {{-- </div> --}}
   <div class="detail-box">
   <div class="type">
   <a href="#">Toyota Supra</a>
        <span>Rental Cost: USD$675</span>
          <span>Rating: </span>
   </div>
   </div>
   </div>		
    </li>
    
    
     <li class="item-a">
   <div class="box">
   {{-- <div class="slide-img"> --}}
   <img alt="car" src="image/yellow.png" class="imgtag">
   <div class="overlay">
   <a href="#" class="buy-btn">Book Now</a>	
   </div>
   {{-- </div> --}}
   <div class="detail-box">
   <div class="type">
   <a href="#">Radaclat</a>
       <span>Rental Cost: USD$785</span>
          <span>Rating: </span>
   </div>
   </div>
   </div>		
    </li>
    
    
     <li class="item-a">
   <div class="box">
   {{-- <div class="slide-img"> --}}
   <img alt="car" src="image/white.png" class="imgtag">
   <div class="overlay">
   <a href="#" class="buy-btn">Book Now</a>	
   </div>
   {{-- </div> --}}
   <div class="detail-box">
   <div class="type">
   <a href="#">BMW</a>
       <span>Rental Cost: USD$12</span>
          <span>Rating: </span>
   </div>
   </div>
   </div>		
    </li>


 </ul>
   </section>
 
     
{{--  END SLIDER  --}}

<h1 class="text-3xl font-semibold font-serif text-center mt-40 mb-2">
  <span class="textcolor">Founders</span>
</h1>

<!-- component -->
<div class="  flex flex-wrap items-center  justify-center  mb-32 ">
            
  <div class="flex flex-col sm:flex-col lg:flex-row xl:flex-row md:flex-row justify-center items center  ">
  <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-16 w-full md:max-w-min sm:w-full cardfounder shadow-xl sm:shadow-none md:shadow-xl lg:shadow-xl xl:shadow-xl z-30 ">
          <div class="text-center py-4 px-16">
            <img class="rounded-lg" src="image/propic1.jpg"/>
              <p class="text-black mt-10">Malachi_Callum</p>
              <p class="text-black mt-2">Co-Founder</p>
              
          </div>
          <div class="text-center mt-3">
              <p class="text-sm text-black">
                Meet Mr. Kurt a fun and artistic individual who assists in the operation of the financial aspects of the company.
              </p>
          </div>
      </div>
      <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-16 w-full md:max-w-min sm:w-full bg-white transform scale-1 sm:scale-1 md:scale-105 lg:scale-105 xl:scale-105 z-40  shadow-xl sm:shadow-none md:shadow-xl lg:shadow-xl xl:shadow-xl">
          <div class="text-center py-4 px-16">
            <img class="rounded-lg" src="image/propic.jpg"/>
            <p class="text-black  mt-10">Shaneika_Lewis</p>
            <p class="text-black mt-2">Co-Founder</p>

              
          </div>
          <div class="text-center mt-3">
            <p class="text-sm text-black">
              Meet Ms. Lewis, one of the co-founders of Half-Time Car Rental who overseas the operation of the company. She is an all natural individual that loves to cook, sing and conduct many charity events.
            </p>
          </div>
          <div class="flex items-center  justify-center">
          <button class=" rounded-md px-4 mt-6 mb-3 py-2 text-white font-semibold navcolor hover:shadow-xl duration-200 hover:bg-blue-300">Contact</button>
          </div>
      </div>
      <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-16 w-full md:max-w-min sm:w-full cardfounder shadow-xl sm:shadow-none md:shadow-xl lg:shadow-xl xl:shadow-xl z-30">
          <div class="text-center py-4 px-16">
            <img class="rounded-lg" src="image/propic1.jpg"/>
            <p class="text-black  mt-10">Kevorn_Callum</p>
            <p class="text-black mt-2">Co-Founder</p>

              
          </div>
          <div class="text-center mt-3">
            <p class="text-sm text-black">
              Meet Mr. Callum is a fun energetic visionary that aims to take Half-Time Car Rental to an international level. He has been apart of the company from conception until birth.
            </p>
          </div>
      </div>
  </div>
   
</div>

{{--    --}}

@endsection



