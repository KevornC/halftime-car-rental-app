@extends('layouts.userDashboardNS')
@section('title')
    Rent a Car
@endsection
@section('header')
  Rent a Car  
@endsection
@section('content')
    <div>
        <livewire:live-rent-search />
    </div>
@endsection