@extends('layouts.master.mainlayout')
@section('content')
    <header class="top-0 left-0 w-screen bg-white">
        <x-navigation :navMenu='$navigationMenu' :trans='$transportation' :htls='$hotel' :vcn='$vacation'
                      :trp='$special_trip' :pymt='$payment'></x-navigation>
    </header>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="/">Home</a>
        <div>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
@endsection
