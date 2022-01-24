@extends('layouts.general-nav-bar')
@section('title')
Contact us
@endsection
@section('content')


<div class="flex items-center  justify-center mt-20 ">
{{-- <div class="container min-h-screen "> --}}
<div class="navcolor pt-20 pb-20  ">
    <div class="text-center py-4 px-20">
    <h1 class="text-white text-5xl">Get in Touch</h1>
    <p class="text-white text-xl">We love to hear from our customers</p>
    <hr class="mt-6">
    </div>
</div>
    <div class="">
        <img src="{{url('image/cstserv.jpg')}}" width="400" height="200">
    </div>
{{-- </div>   --}}
</div>


<div class="  bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative px-4 py-10 bg-white sm:rounded-1xl sm:p-20">
      <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h1 class="text-black text-5xl">Contact us</h1>
            <p class="text-black text-xl mb-10">Drop us a line and we will get back to you as quickly as possible.</p>
                <label for="" class="text-xs font-semibold px-1 text-black">Name</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">Email</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="example@gmail.com">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">Phone Number</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="tel" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[4]{0-9}" placeholder="876-XXX-XXXX">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">Message</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <textarea class="resize-none w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Tell what’s on your mind."></textarea>
                </div>
                <a href="">
                    <button  class="bg-blue-500 rounded-full font-bold text-black px-10 py-2 transition duration-300 ease-in-out navcolor mr-6 mt-14">Send </button>
                </a>
    
        </div>
        {{-- <div class="">
          <p class="font-bold text-gray-500 rounded-full bg-gray-50 " style="height: 50px; width: 50px;">or</p>
        </div> --}}
        <div>
            <b><h1 class="text-black text-2xl">Byphone</h1></b>
            <p class="text-black text-xl">Whether you need help with an order, having trouble with your account, or have questions about a particular vehicle Half Time Rental Customer Service is here for you 24 hours a day.</p>
            <p class="text-black text-xl">1-876-238-2477</p>
    
            <b><h1 class="text-black text-2xl mt-10">Want to join our team?</h1></b>
            <p class="text-black text-xl">Are you a vehicle owner who is interested in featuring your vehicle for rent on our website? If so, contact Half Time Rental for details.</p>
            <p class="text-black text-xl">halfttime_rental@gmail.com</p>
    
            <b><h1 class="text-black text-2xl  mt-10">Press inquiries</h1></b>
            <p class="text-black text-xl">Please forward all media requests to the Half Time Rental Public Relations Department </p>
            <h1 class="text-black text-xl">halftime_pr@gmail.com</h1>
        </div>
      </div>
    </div>
  </div>
@endsection