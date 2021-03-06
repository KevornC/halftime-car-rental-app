<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
  <style>
      body {
          font-family: 'Nunito', sans-serif;
      }
      
      .navcolor{
          background: #1D4B72;
      }
      .textcolor{
          color:#1D4B72;
      }
      .bodycolor{
          /* background: rgba(112, 112, 112, 0.51); */
      }
      .cardfounder{
        background: #F1F9FF;
      }
      .search {
    --border-opacity: 1;
    border-color: #1D4B72;
    /* border-color: rgba(35, 56, 118, var(--border-opacity)); */
}
  </style>

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    
    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>@yield('title')</title>
   </head>
<body>
<div class="flex overflow-hidden bg-gray-100">
 
  <!-- Static sidebar for desktop -->
  <div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-grow pb-4 overflow-y-auto bg-white ">
        <div class="px-4 pt-1.5 pb-1.5 navcolor">
         <svg xmlns="http://www.w3.org/2000/svg" width="60" height="53" viewBox="0 0 60 53">
            <g id="Group_73604" data-name="Group 73604" transform="translate(-29 -101)">
              <text id="HT" transform="translate(40 138)" fill="#fff" stroke="#1384e3" stroke-width="1" font-size="29" font-family="Arial-BoldMT, Arial" font-weight="700"><tspan x="0" y="0">HT</tspan></text>
              <g id="Path_38263" data-name="Path 38263" transform="translate(29 101)" fill="none">
                <path d="M30,0C46.569,0,60,11.864,60,26.5S46.569,53,30,53,0,41.136,0,26.5,13.431,0,30,0Z" stroke="none"/>
                <path d="M 30 5 C 16.21495056152344 5 5 14.64486312866211 5 26.5 C 5 38.35513687133789 16.21495056152344 48 30 48 C 43.78504943847656 48 55 38.35513687133789 55 26.5 C 55 14.64486312866211 43.78504943847656 5 30 5 M 30 0 C 46.56853866577148 0 60 11.86444854736328 60 26.5 C 60 41.13553619384766 46.56853866577148 53 30 53 C 13.43146133422852 53 0 41.13553619384766 0 26.5 C 0 11.86444854736328 13.43146133422852 0 30 0 Z" stroke="none" fill="#fbf6f6"/>
              </g>
            </g>
          </svg>
          
        </div>
        <div class="flex w-full justify-center">
          <img class="h-32 mt-10 rounded-full" src="{{url('image/propic.jpg')}}" alt="profile">
        </div>
        <div class="">
         <p class="mt-5 mb-10 font-bold text-center">Dashboard</p>
        </div>
        <div class="flex flex-col flex-grow mt-5">
          <nav class="flex-1 px-2 space-y-1 bg-white">
            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 border-l rounded-md hover:text-blue-800 hover:border-blue-500 hover:bg-blue-200 group">
              <!--
                Heroicon name: outline/home

                Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
              -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Home
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 border-l rounded-md hover:text-blue-800 hover:border-blue-500 hover:bg-blue-200 group">
              <!-- Heroicon name: outline/users -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              Vehicle
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 border-l rounded-md hover:border-blue-500 hover:bg-blue-200 hover:text-blue-800 group">
              <!-- Heroicon name: outline/folder -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
              </svg>
              Member
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 border-l rounded-md hover:text-blue-800 hover:border-blue-500 hover:bg-blue-200 group">
              <!-- Heroicon name: outline/calendar -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Order
            </a>

            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 border-l rounded-md hover:text-blue-800 hover:border-blue-500 hover:bg-blue-200 group">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
              Logout
            </a>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="flex flex-col flex-1 w-0 overflow-hidden">
    <div class="justify-center w-full flex flex-shrink-0 h-16 navcolor">
      
      <div class="flex items-center justify-items-center">
        <div class="flex flex-1">
           <p class="text-3xl font-bold text-white"> Half Time Car Rental </p>
        </div>
      </div>
    </div>


    <main class="  flex-1 overflow-y-auto focus:outline-none">
      <div class="py-6">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
          <h1 class="text-2xl font-semibold text-gray-900">@yield('header')</h1>
        </div>
        <div class="px-4 mx-auto  sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <div class="py-4">
            {{-- <div class="border-4 border-gray-200 border-dashed rounded-lg h-96"></div> --}}
            @yield('content')
          </div>
          <!-- /End replace -->
        </div>
      </div>
    </main>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <footer class="bg-white">
      <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>
    
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
            </svg>
          </a>
    
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Twitter</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>
    
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
            </svg>
          </a>
    
          
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
          <p class="text-center text-base text-gray-400">
            &copy; 2022 Neika Designz, Inc. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
  </div>
</div>
{{-- @livewire('livewire-ui-modal') --}}
@livewireScripts
</body>
</html>