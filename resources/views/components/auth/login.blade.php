<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="flex flex-col">
        <div class="form-group row">
            <input id="email" type="email" placeholder="email"
                class="input input-info input-bordered w-72 my-2 mx-auto form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="my-2 mx-auto  w-72">

        </div>
        <div class="form-group row">
            <input id="password" type="password" placeholder="password"
                class="input input-info input-bordered w-72 my-2 mx-auto form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row">
            <div class=" my-2 mx-auto w-72">
                <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"
                    class="checkbox checkbox-info float-right">
                <span class="label-textfont-bold text-blue_ocean text-md float-right mr-4">Remember
                    me ?</span>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="float-left mr-4 text-blue_ocean text-md">forgot
                    password ?
                </a>
            @endif
        </div>
        <button type="submit" class="btn btn-info my-2 mx-auto w-72 text-xl lowercase text-white ">login</button>
    </div>
    <div class="border-b border-blue_ocean mb-2">
        <p class="text-center text-xs">Atau masuk dengan :</p>
    </div>
</form>
<div class="p-4">
    <div class="flex justify-between items-center gap-3">
        <a href="/" class="btn btn-sm btn-info capitalize w-32">
            <img class="w-4 h-4 mr-4" src="{{ asset('/images/icon/facebook.svg') }}" alt="">facebook</a>
        <a href="/" class="btn btn-sm btn-ghost bg-white_smoke capitalize w-32"><img class="w-4 h-4 mr-4"
                src="{{ asset('/images/icon/gmail.svg') }}" alt="">google</a>
    </div>
</div>
