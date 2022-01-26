@extends('layouts.adminDashboard')
@section('title')
Vehicle Listing 
@endsection
@section('header')
Vehicle Listing 
@endsection
@section('content')
   
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 mt-16">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-50">
              <tr>
                <th  colspan="6" scope="col" class="px-6 py-3 text-center text-md font-medium text-gray-500 uppercase tracking-wider">
                  Listing
                </th>
              </tr>
            </thead>
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Image
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Model
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Rental Cost
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Quantity
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Action
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
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  Toyota
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  GXL
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  $79
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  700
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-white bg-green-800 rounded-sm p-2">Edit</a>
                    <a href="#" class="text-white  bg-red-800 rounded-sm p-2">Remove</a>
                  </td>
              </tr>
  
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
   
    @endsection