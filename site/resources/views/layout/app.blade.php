<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <title>Marco Venicio</title>
</head>

<body>
    <div id="progressbar"></div>
    <div id="scrollpath"></div>
    <main class="container">
        <header>
            <nav>
                <div class="menu">
                    <div class="logo">
                        <a href="#"><img src="img/logo.png" alt="logo overlord intellectus"></a>
                    </div>
                    <i class="fas fa-bars btn-menumobile"></i>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Projetos</a></li>
                        <li><a href="#">Skills</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contato">Contato</a></li>
                        @if (Auth::check())
                                <li> <a href="/home">Painel</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer class="footer">
            <div class="flex">
                <div>
                    <h2>Overlord Intellectus</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut quos totam odit quae, perspiciatis cumque repellendus obcaecati error at ipsa rem fugit maiores minus dicta sunt corporis dolor sapiente rerum consequu</p>
                </div>
                <div>
                    <ul>
                        <li>
                            <h2>Explorar</h2>
                        </li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Projetos</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>
                            <h2>Redes sociais</h2>
                        </li>
                        <li>
                            <a href=""></a>Linkedin</li>
                        <li>
                            <a href=""></a>Github</li>
                        <li>
                            <a href=""></a>Youtube</li>
                    </ul>
                </div>
            </div>
            <div class="b-footer">
                <p> All rigths Reserved by &copy; Marco Venicio</p>
            </div>
        </footer>
    </main>
    <script src="{{ asset('js/vanilla-tilt.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>