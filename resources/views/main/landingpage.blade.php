@extends('layouts.master.mainlayout')
@section('content')
    <header class="top-0 left-0 w-screen bg-white">
        <x-navigation :navMenu='$navigationMenu' :trans='$transportation' :htls='$hotel' :vcn='$vacation'
            :trp='$special_trip' :pymt='$payment'></x-navigation>
    </header>
    <div class="p-4">
        <section class="container h-32">
            <div id="sec_1">CARI TIKET PESAWAT</div>
        </section>
        <section class="container h-32">
            <div id="sec_2">COMPANY VALUE</div>
        </section>
        <section class="container h-32">
            <div id="sec_3">PRODUCT SCOPE DESCRIPTION</div>
        </section>
        <section class="container h-32">
            <div id="sec_2">SECTION TRANSPORTATION DESC</div>
        </section>
        <section class="container h-32">
            <div id="sec_1">SECTION HOTEL AND ACCOMODATION DESC</div>
        </section>
        <section class="container h-32">
            <div id="sec_2">SECTION VACATION PACKAGE DESC</div>
        </section>
        <section class="container h-32">
            <div id="sec_3">SECTION SPECIAL TRIP DESC</div>
        </section>
        <section class="container h-32">
            <div id="sec_1">SECTION PAYMENT AND BILL DESC</div>
        </section>
        <section class="container h-32">
            <div id="sec_2">SECTION MEMBERSHIP AND AGENT DESC</div>
        </section>
    </div>
    <footer class="bottom-0 left-0 w-screen p-4 bg-blue_ocean">
        <x-footer :trans='$transportation' :htls='$hotel' :vcn='$vacation' :trp='$special_trip' :pymt='$payment'>
        </x-footer>
    </footer>
@endsection
