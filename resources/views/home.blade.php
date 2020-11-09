@extends('layouts.app')

@section('content')

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


<div class="container profile-page">
    <div class="row justify-content-around">

        <div class="col-md-4">
            <img class="profile-picture" alt="ProfileImage"
                src="https://images.vexels.com/media/users/3/137380/isolated/preview/1b2ca367caa7eff8b45c09ec09b44c16-icono-de-instagram-logo-by-vexels.png">
        </div>

        <div class="col-md-8">
            <div class="row pt-3">
                <p class="profile-name">Nombre del usuario</p>
                <button class="ml-3 btn btn-primary btn-follow">Follow</button>
            </div>
            <div class="row p-0 mt-2">
                <div class="col-4 p-0">
                    <p>
                        <strong>1337</strong> posts
                    </p>
                </div>
                <div class="col-4 p-0">
                    <p>
                        <strong>1338</strong> followers
                    </p>
                </div>
                <div class="col-4 p-0">
                    <p>
                        <strong>212</strong> following
                    </p>
                </div>

            </div>
            <div class="row">
                <p style="word-wrap: break-word; max-width: 100%">Texto de descripción</p>
            </div>
            <div class="row">
                <a href="https://www.mercadopago.com.pe" class="font-weight-bold profile-url">www.mercadopago.com.pe</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div>
            <i class="fas fa-check">Posts</i>
        </div>
        <div>

        </div>
    </div>
    <div class="row justify-content-center pt-5">

        <div class="col-md-4">
            <img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/d/de/Windows_live_square.JPG" alt="">
        </div>
        <div class="col-md-4">
            <img class="w-100" src="https://citytravelnyc.com/wp-content/uploads/2018/05/Times-Square-4-2.jpg" alt="">
        </div>
        <div class="col-md-4">
            <img class="w-100"
                src="https://play-lh.googleusercontent.com/IeNJWoKYx1waOhfWF6TiuSiWBLfqLb18lmZYXSgsH1fvb8v1IYiZr5aYWe0Gxu-pVZX3"
                alt="">
        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        </div>

    </div>

</div>
@endsection