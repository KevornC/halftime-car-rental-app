@extends('layouts.adminDashboard')
@section('title')
Homepage
@endsection
@section('header')
  Administrator Dashboard  
@endsection
@section('content')
 <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <!-- This example requires Tailwind CSS v2.0+ -->
<div>
  <dl class="mt-5 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 md:grid-cols-3 md:divide-y-0 md:divide-x">
    <div class="px-4 py-5 sm:p-6">
      <dt class="text-base font-normal text-gray-900">
        Total Subscribers
      </dt>
      <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          71,897
          <span class="ml-2 text-sm font-medium text-gray-500">
            from 70,946
          </span>
        </div>

        <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-up -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Increased by
          </span>
          12%
        </div>
      </dd>
    </div>

    <div class="px-4 py-5 sm:p-6">
      <dt class="text-base font-normal text-gray-900">
        Avg. Open Rate
      </dt>
      <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          58.16%
          <span class="ml-2 text-sm font-medium text-gray-500">
            from 56.14%
          </span>
        </div>

        <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-up -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Increased by
          </span>
          2.02%
        </div>
      </dd>
    </div>

    <div class="px-4 py-5 sm:p-6">
      <dt class="text-base font-normal text-gray-900">
        Avg. Click Rate
      </dt>
      <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          24.57%
          <span class="ml-2 text-sm font-medium text-gray-500">
            from 28.62%
          </span>
        </div>

        <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-down -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Decreased by
          </span>
          4.05%
        </div>
      </dd>
    </div>
  </dl>
</div>

      </div>
   
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 mt-16">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-blue-50">
            <tr>
              <th  colspan="3" scope="col" class="px-6 py-3 text-center text-md font-medium text-gray-500 uppercase tracking-wider">
                Favourite Vehicles
              </th>
            </tr>
          </thead>
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Vehicle
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Rental Cost
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Rating
              </th>
              {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th> --}}
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-16 w-16">
                    <img class="h-16 w-16 rounded-md" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                  </div>
                  {{-- <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      Jane Cooper
                    </div>
                    <div class="text-sm text-gray-500">
                      jane.cooper@example.com
                    </div>
                  </div> --}}
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">USD$176</div>
                {{-- <div class="text-sm text-gray-500">Optimization</div> --}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold  ">
                      <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
                    </span>
              </td>
              {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td> --}}
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
 
  
@endsection