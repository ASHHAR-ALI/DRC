@extends('User.layout.default')



@section('title', 'Signin')



@section('content')


<div class="wrapper">
    <div class="logo"></div>
    <!-- <div class="text-center mt-4 name text-danger"> Delivery System </div>-->
    <img src="{{ asset('public/allassets/images/DRC.png') }}" class="rounded mx-auto d-block"
        style="height: 80px; width: 150px; margin: auto;">
    <div class="text-center mt-4 name"> Login </div>
    <form class="p-3 mt-3" id="login-form" action="{{ asset('/adminlogin') }}" method="POST">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" placeholder="Email">
            <span class="text-danger"></span>
        </div>

        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" placeholder="Password">
            <span class="text-danger"></span>
        </div>

        <button class="btn mt-3 mb-3" name="submit">Login</button>

        {{-- @include('FlashMessage.Messages.errormessage') --}}

    </form>
    <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div> -->
</div>


<style>
    .wrapper {
        max-width: 420px;
        min-height: 500px;
        margin: 30px auto;
        padding: 40px 30px 30px 30px;
        background-color: #ecf0f3;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
    }

    .logo {
        width: 80px;
        margin: auto
    }

    .logo img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
    }

    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #555
    }

    .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #666;
        padding: 10px 15px 10px 10px
    }

    .wrapper .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 40px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
    }

    .wrapper .form-field .fas {
        color: #555
    }

    .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: #03A9F4;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
        letter-spacing: 1.3px
    }

    .wrapper .btn:hover {
        background-color: #039BE5
    }

    .wrapper a {
        text-decoration: none;
        font-size: 0.8rem;
        color: #03A9F4
    }

    .wrapper a:hover {
        color: #039BE5
    }

    @media(max-width: 400px) {
        .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px
        }
    }
</style>

@endsection