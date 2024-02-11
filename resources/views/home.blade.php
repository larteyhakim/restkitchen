@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (Auth::user()->hasRole ('Admin'))
                @include('dashboard.admin')
            @endif
            {{-- @if (Auth::user()->role->name == 'Manager')
                @include('dashboard.manager')
            @endif
            @if (Auth::user()->role->name == 'Kitchen Staff')
                @include('dashboard.kitchen_staff')
            @endif
            @if (Auth::user()->role->name == 'Staff')
                @include('dashboard.staff')
            @endif
            @if(Auth::user()->role->name == 'Customer')
            @include('dashboard.customer')
        @endif   --}}
        </div>
    </div>
@endsection
