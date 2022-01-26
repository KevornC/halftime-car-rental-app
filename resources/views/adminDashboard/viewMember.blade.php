@extends('layouts.adminDashboard')
@section('title')
Memver Listing
@endsection
@section('header')
Member Listing 
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
                Firstname
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Lastname
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Address
              </th>
             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Country
              </th>
             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Telephone
              </th>
             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                License
              </th>
               {{-- <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th> --}}
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                John
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Brown
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                25 Love Gone Lane
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Jamaica
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                jonny@gmail.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                876-234-1227
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">download</a>
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