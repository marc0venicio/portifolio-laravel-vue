<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="app/styles.css" />
    <title>Overlord intellectus</title>
</head>

<body id="body">
    <div class="container">
        @yield('content')
        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    <a href="/"><img src="app/assets/logo.png" alt="logo" />
                    <h1>Overlord</h1></a>
                </div>
                <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-home"></i>
                    <a href="/home">Dashboard</a>
                </div>
                <h2>MNG</h2>
                <div class="sidebar__link">
                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                    <a href="#">Gestão Administrativa</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-building-o"></i>
                    <a href="#">Gestão da companhia</a>
                </div>
                <div class="sidebar__link">
                  <i class="fas fa-blog"></i>
                    <a href="/create">Novo Post</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-archive"></i>
                    <a href="/assinantes">Assinantes</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-handshake-o"></i>
                    <a href="#">Contratos</a>
                </div>
                <h2>LEAVE</h2>
                <div class="sidebar__link">
                    <i class="fa fa-question"></i>
                    <a href="#">Solicitações</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-sign-out"></i>
                    <a href="#">Política de licença</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-calendar-check-o"></i>
                    <a href="#">Dias especiais</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-files-o"></i>
                    <a href="#">Inscreva-se para sair</a>
                </div>
                <h2>FOLHA DE PAGAMENTO</h2>
                <div class="sidebar__link">
                    <i class="fa fa-money"></i>
                    <a href="#">FOLHA DE PAGAMENTO</a>
                </div>
                <div class="sidebar__link">
                    <i class="fa fa-briefcase"></i>
                    <a href="#">Nível salarial</a>
                </div>
                <div class="sidebar__logout">
                    <i class="fa fa-power-off"></i>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="app/script.js"></script>
</body>

</html>
