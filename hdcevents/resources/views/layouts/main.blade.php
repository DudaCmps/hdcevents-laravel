<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid" id="navbar">
            
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo-teste.png" alt="HDC Events">
                    </a>
            
                    <div class="collapse navbar-collapse">
                        <!-- Menu à esquerda -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/events/create" class="nav-link">Criar eventos</a>
                            </li>
                        </ul>
                        @auth
                        <a href="/dashboard" class="btn btn-outline-light me-2 text-light">Meus eventos</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger me-2 text-light">
                                Sair
                            </button>
                        </form>
                        @endauth
                        @guest
                            <!-- Botões à direita -->
                        <div class="d-flex">
                            <a href="/login" class="btn btn-outline-light me-2 text-light">Entrar</a>
                            <a href="/register" class="btn btn-outline-light text-light">Cadastrar</a>
                        </div>
                        @endguest
                        
                    </div>
            
                </div>
            </nav>
        </header>

        <main class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg"> {{session('msg')}} </p>
                @endif
                @yield('content')
            </div>
        </main>
        <footer>
            <p>HDC Events &copy; 2025</p>
        </footer>
        <!-- Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>