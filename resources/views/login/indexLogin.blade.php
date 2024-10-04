@extends('layouts.login')
    @section('content')

    <!-- Content -->
    <div class="container">
        <div class="left-container">
            <form class="form-login" action="/" method="post">
                @csrf
                <h2>LOGIN</h2>
                <p>Login with your account</p>
                <div class="form-floating">
                    <input class="form-control rounded-bottom" type="text" id="username" name="username" placeholder="Username" required autofocus value="{{ old('username')}}">
                    <label for="username">Username</label>
                </div>

                <div class="form-floating">
                    <input class="form-control rounded-bottom" type="password" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <button class="login-btn" type="submit">Login</button>
            </form>
            
        </div>
        <div class="right-container">
            <img src="/img/login-img.png" alt="">
        </div>
    </div>

    @endsection
    
 