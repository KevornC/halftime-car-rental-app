<div>
    <div class="flex flex-col justify-center sm:py-12">
        <h1 class="text-black text-center text-lg pb-2">Fill the information then click add to register a new vehicle</h1>
        <div class="relative px-4 py-2 bg-white sm:rounded-1xl sm:p-20">
            <div class="grid sm:grid-cols-2 gap-4">
            <div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Name</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-400 outline-none focus:border-indigo-500" placeholder="Nissan">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Model</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-400 outline-none focus:border-indigo-500" placeholder="Sunny">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Rental Cost</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-400 outline-none focus:border-indigo-500" placeholder="$">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Quantity</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-400   outline-none focus:border-indigo-500" placeholder="1">
                    </div>
            </div>
            <div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Seating Capacity</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-400   outline-none focus:border-indigo-500" placeholder="1">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Driver Type</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <select id="country" name="country" autocomplete="country" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-400 text-gray-400 outline-none focus:border-indigo-500">
                            <option>Choose one</option>
                            <option>Left Hand Drive</option>
                            <option>Right Hand Drive</option>
                          </select>
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Colour</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-400 outline-none focus:border-indigo-500" placeholder="white">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Upload image</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input  type="file" class="w-full -ml-10 pl-10 pr-3 py-1.5 rounded-lg border-2 border-gray-400  outline-none focus:border-indigo-500">
                    </div>
            </div>

          </div>
          {{--    --}}
                   
                    <div class="mt-2 justify-center flex items-center">
                    {{-- <a href="{{route('homepage')}}"> --}}
                        <button  class="border-2 border-black rounded-full font-bold text-black px-10 py-2 transition duration-300 ease-in-out mr-6 mt-14">Cancel</button>
                    </a>
                    <a href="">
                        <button  class="bg-green-600 rounded-full font-bold text-black px-10 py-2 transition duration-300 ease-in-out mr-6 mt-14 ">Add</button>
                    </a>
                    </div>
          {{--    --}}
        </div>
      </div>
      

</div>

</div>
