@extends('layouts.adminDashboard')
@section('title')
Order Listing 
@endsection
@section('header')
Order Listing 
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
                Member ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Vehicle
              </th>
             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Pick-up
              </th>
             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Return
              </th>
             <th   scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
              </th>
               {{-- <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th> --}}
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                0001
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                John Brown
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Toyota
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                June 2, 2022
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                June 7, 2022
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-white bg-green-800 rounded-sm p-2">Approve</a>
                <a href="#" class="text-white  bg-red-800 rounded-sm p-2">Deny</a>
              </td>
              {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td> --}}
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
 
  
@endsection