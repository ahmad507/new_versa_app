@extends('layouts.master.mainlayout')
@section('content')
    <header class="top-0 left-0 w-screen bg-white">
            <x-auth.header></x-auth.header>
    </header>
    <div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div
            class="flex flex-col justify-center items-center float-right shadow mr-96 mt-12 p-8  gap-3  rounded-xl">
            <div class="font-semibold text-center text-blue_ocean ">Login ke Akun Anda</div>
            <div class="border-b border-blue_ocean"></div>
            <div class="form-group row">
                <input id="name" type="text" placeholder="nama lengkap"
                    class="input input-info input-bordered w-72 my-2 mx-auto form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <input id="email" type="email" placeholder="email"
                    class="input input-info input-bordered w-72 -my-2 mx-auto form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <input id="password" type="password" placeholder="password"
                    class="input input-info input-bordered w-72 my-2 mx-auto form-control @error('password') is-invalid @enderror"
                    name="password" value="{{ old('email') }}" required autocomplete="new-password" autofocus>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <input id="password-confirm" type="password" placeholder="password confirmation"
                    class="input input-info input-bordered w-72 -my-2 mx-auto form-control " name="password_confirmation"
                    required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-info  my-2 mx-auto w-72 text-xl capitalize text-white ">Register</button>
        </div>
    </form>
    </div>
@endsection
