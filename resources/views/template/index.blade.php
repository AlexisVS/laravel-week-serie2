<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/nom">Nom</a>
                        <a class="nav-link" href="/prenom">Prénom</a>
                        <a class="nav-link" href="/age">Age</a>
                        <a class="nav-link {{ url()->current() == 'http://127.0.0.1:8000/chat' ? 'active' : '' }}"
                            aria-current="page" href="/chat">Chat</a>
                        <a class="nav-link {{ url()->current() == 'http://127.0.0.1:8000/couleur' ? 'active' : '' }}"
                            href="/couleur">Couleur</a>
                        <a class="nav-link {{ url()->current() == 'http://127.0.0.1:8000/plat' ? 'active' : '' }}"
                            href="/plat">Plat</a>
                        <a class="nav-link {{ url()->current() == 'http://127.0.0.1:8000/plat' ? 'active' : '' }}"
                            href="/outilsScolaire">OutilsScolaire</a>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            @yield("IndexcarrouselContent")
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @yield('content')
    <footer class="pt-5">
        <div
            class="position-fixed bottom-0 d-flex justify-content-center align-items-center bg-dark text-white py-3 w-100">
            <h5 class="m-0 p-0">Copyright</h5>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
