@extends('layouts.admin')

@section('title','login')

@section('content')

        @include('includes/handling/error')

        <form action="{{ route('dashboard.login') }}" method="POST" class="form login">

            <div class="form__field">
                <label for="login__login"><svg class="icon">
                        <use xlink:href="#icon-user"></use>
                    </svg><span class="hidden">Email</span></label>
                <input autocomplete="username" id="login__email" type="text" name="email" class="form__input" placeholder="Email" required>
            </div>

            <div class="form__field">
                <label for="login__password"><svg class="icon">
                        <use xlink:href="#icon-lock"></use>
                    </svg><span class="hidden">Password</span></label>
                <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" >
            </div>

            <div class="form__field">
                <input type="submit" value="Sign In">
            </div>
            @csrf
        </form>




<!-- /.login-box -->
@endsection()
