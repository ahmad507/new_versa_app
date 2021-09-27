<div class="hidden sm:flex flex-1">
    <div class="container flex justify-between text-white_smoke gap-5">
        <div class="container">
            <h2><strong>Address</strong></h2>
            <hr>
            <div class="px-4 py-4 flex flex-col gap-5">
                <div class="flex justify-start items-center gap-5"><img class="h-4" src="/images/icon/pin.png"
                        alt="__pin"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                        repellendus.</span>
                </div>
            </div>
        </div>
        <div class="container ">
            <h2><strong>Contact Us</strong></h2>
            <hr>
            <div class="px-4 py-4 flex flex-col gap-5">
                <div class="flex justify-start items-center gap-5"><img class="h-4" src="/images/icon/mail.png"
                        alt="__email"><span>email address</span>
                </div>
                <div class="flex justify-start items-center gap-5"><img class="h-4"
                        src="/images/icon/phone.png" alt="__phone"><span>phone number</span>
                </div>
                <div class="flex justify-start items-center gap-5"><img class="h-4" src="/images/icon/wa.png"
                        alt="__wa"><span>wa number</span></div>
            </div>
        </div>
        <div class="container">
            <h2><strong>Follow Us</strong></h2>
            <hr>
            <div class="px-4 py-4 flex flex-col gap-5">
                <div class="flex justify-start items-center gap-5"><img class="h-4"
                        src="/images/icon/fb_w.png" alt="__email"><span>FB Page</span>
                </div>
                <div class="flex justify-start items-center gap-5"><img class="h-4"
                        src="/images/icon/ig_w.png" alt="__phone"><span>IG Official</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container flex flex-wrap gap-5 justify-end text-white_smoke cursor-pointer">
        <div id="trans">
            <h2><strong>Transportation</strong></h2>
            <hr>
            @foreach ($trans as $item)
                <h1>{{ $item->product }}</h1>
            @endforeach
        </div>
        <div id="hotel">
            <h2><strong>Hotel dan Penginapan</strong></h2>
            <hr>
            @foreach ($htls as $item)
                <h1>{{ $item->product }}</h1>
            @endforeach
        </div>
        <div id="vacation">
            <h2><strong>Paket Liburan</strong></h2>
            <hr>
            @foreach ($vcn as $item)
                <h1>{{ $item->product }}</h1>
            @endforeach
        </div>
        <div id="trip">
            <h2><strong>Paket Perjalanan</strong></h2>
            <hr>
            @foreach ($trp as $item)
                <h1>{{ $item->product }}</h1>
            @endforeach
        </div>
        <div id="payment">
            <h2><strong>Pembayaran dan Tagihan</strong></h2>
            <hr>
            @foreach ($pymt as $item)
                <h1>{{ $item->product }}</h1>
            @endforeach
        </div>
    </div>
</div>
<div class="bottom-0 left-0 flex sm:hidden flex-1 justify-center items-center gap-2 p-2 bg-blue_ocean text-white_smoke">
    <p><Strong>Versa Technology</Strong></p>
    <p>|technology at your fingertips</p>
</div>
