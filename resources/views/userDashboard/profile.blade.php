@extends('layouts.userDashboardNS')
@section('title')
Profile
@endsection
@section('header')
 Profile 
@endsection
@section('content')
 

{{--  FORM  --}}


<div class="  bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative px-4 py-10 bg-white sm:rounded-1xl sm:p-20">
        <div class="grid sm:grid-cols-2 gap-4">
        <div>
                <label for="" class="text-xs font-semibold px-1 text-black">Firstname</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">lastname</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Smith">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">Phone Number</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="tel" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[4]{0-9}" placeholder="876-XXX-XXXX">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">Email</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="example@gmail.com">
                </div>
               
        </div>
        <div>
                <label for="" class="text-xs font-semibold px-1 text-black">Address</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">Country</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <select id="country" name="country" autocomplete="country" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                      </select>
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">TRN</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input type="tel" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[3]{0-9}" placeholder="XXX-XXX-XXX">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">Upload driver's license</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                    <input  type="file" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                </div>
                <label for="" class="text-xs font-semibold px-1 text-black">Re-type Password</label>
               
        </div>

      </div>
      {{--    --}}
                <div class="mt-10 justify-center flex items-center">
                <a href="{{route('homepage')}}">
                    <button  class="border-2 border-black rounded-full font-bold text-black px-10 py-2 transition duration-300 ease-in-out mr-6 mt-14">Cancel</button>
                </a>
                <a href="">
                    <button  class="bg-green-600 rounded-full font-bold text-black px-10 py-2 transition duration-300 ease-in-out mr-6 mt-14 ">Update</button>
                </a>
                </div>
      {{--    --}}
    </div>
  </div>
  
 

@endsection