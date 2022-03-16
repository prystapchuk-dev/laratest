<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href={{ mix('/css/app.css') }}>
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active menu-link menu-link__active" aria-current="page" href="#">Головна сторіна</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#">Каталог статей</a>
                            </li>
                        </ul>
                        <a class="d-flex justify-content-end" target="_blank" href="https://github.com/prystapchuk-dev/laratest">
                            <i class="bi bi-github" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="hero" style="background-image: url(/img/tim.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero__content text-center">
                                <div class="hero__content-tag">
                                    <a href="#">Розробник PHP-Laravel</a>
                                </div>
                                <h2>
                                    <a href="#">Тестове завдання</a>
                                </h2>
                                <div class="hero__content-tag">
                                    <a href="#">Udemy.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
