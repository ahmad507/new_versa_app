<nav>
    <div class="bg-blue_ocean py-0.5 md:p-0.5"></div>
    <div class="p-2 bg-white items-center flex flex-wrap ">
        <ul class="sm:flex flex-1 gap-5 justify-center items-center">
            <div class="py-1">
                <img class="h-4 md:h-8 mr-16" src="{{ asset('/images/logo_new.png') }}" alt="__logo">
            </div>
            @foreach ($navMenu as $item)
                <li><a href="{{ $item->_url }}">{{ $item->_nav }}</a></li>
            @endforeach
            @guest
                @if (Route::has('login'))
                    <li class="flex items-center gap-5 ml-16">
                        <div class=" dropdown dropdown-end">
                            <div tabindex="0" class="m-1 btn btn-sm btn-info rounded-2xl">Login</div>
                            <div tabindex="0" class="p-8 shadow menu dropdown-content bg-base-100 h-content">
                                <div class="font-semibold text-center text-blue_ocean ">Login ke Akun Anda</div>
                                <div class="border-b border-blue_ocean"></div>
                                <x-form.login_form></x-form.login_form>
                            </div>
                        </div>
                        <div class="text-sm">Don't have account ? please <a class="text-blue_ocean"
                                href="{{ route('register') }}">Register</a>
                        </div>
                    </li>
                @endif
            @endguest
        </ul>
    </div>
    <div class="border-b border-gray_stone"></div>
    <div class="p-1 items-center flex flex-wrap gap-5 justify-center items-center bg-white_smoke">
        <div class="dropdown dropdown-hover">
            <div tabindex="0" class="m-1 cursor-pointer">Transportasi</div>
            <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 w-60">
                @foreach ($trans as $item)
                    <li><a href="/" class="bg-smoke_white">{{ $item->product }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" class="m-1 cursor-pointer">Tempat Menginap</div>
            <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 w-60">
                @foreach ($htls as $item)
                    <li><a href="/" class="bg-smoke_white">{{ $item->product }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" class="m-1 cursor-pointer">Liburan</div>
            <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 w-60">
                @foreach ($vcn as $item)
                    <li><a href="/" class="bg-smoke_white">{{ $item->product }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" class="m-1 cursor-pointer">Special Trip</div>
            <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 w-60">
                @foreach ($trp as $item)
                    <li><a href="/" class="bg-smoke_white">{{ $item->product }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" class="m-1 cursor-pointer">Tagihan & Isi Ulang</div>
            <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 w-60">
                @foreach ($pymt as $item)
                    <li><a href="/" class="bg-smoke_white">{{ $item->product }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="border-b border-blue_ocean"></div>
</nav>
