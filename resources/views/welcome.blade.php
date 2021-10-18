@extends ('layout')
@section ('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                {{config("app.name")}}
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Clothing</a>
                <a href="https://laracasts.com">Sporting Goods</a>
                <a href="https://laravel-news.com">Patriotic</a>
                <a href="https://blog.laravel.com">Electronics</a>
                <a href="https://nova.laravel.com">Made in USA</a>
                <a href="https://forge.laravel.com">Non-Woke</a>

            </div>
        </div>
    </div>
@endsection