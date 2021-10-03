@extends('layouts.master.mainlayout')
@section('content')
    <div class="container flex flex-col items-center gap-5 p-8 w-96 shadow-lg">
        <div class="text-start text-blue_ocean ">
            <p><strong> Bergabung Bersama Kami</strong></p>
            <p>dan dapatkan berbagai macam kemudahan bertransaksi</p>
            <div class="border-b border-blue_ocean"></div>
        </div>
        <div>
            <x-form.register_form></x-form.register_form>
        </div>
        <div class="text-start text-blue_ocean ">
            <div class="border-b border-blue_ocean"></div>
            <p calss="mb-8">Sudah memiliki akun ? <a href="/" class="ml-4"><strong>login</strong></a></p>
            <div class="border-b border-blue_ocean mb-2">
                <p class="text-center text-xs">Atau masuk dengan :</p>
            </div>
            <div class="p-2">
                <div class="flex justify-between items-center gap-3">
                    <a href="/" class="btn btn-sm btn-info capitalize w-32">
                        <img class="w-4 h-4 mr-4" src="{{ asset('/images/icon/facebook.svg') }}" alt="">facebook</a>
                    <a href="/" class="btn btn-sm btn-ghost bg-white_smoke capitalize w-32"><img class="w-4 h-4 mr-4"
                            src="{{ asset('/images/icon/gmail.svg') }}" alt="">google</a>
                </div>
            </div>
        </div>
    </div>
@endsection
