<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = 'shortcut icon' href= "/img/icon-cozinhalivre.png" type = "image/x-icon"/>

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src ="/js/scripts.js"></script>

       
    </head>
   <header>
       
         <nav class="navbar navbar-expand-lg navbar-light">
         <div class="collapse navbar-collapse" id="navbar">
         <a href="" class="navbar-brand">
         <img src="/img/livrenacozinha.png" alt="Livre na Cozinha">
         </a>
         <ul class="navbar-nav">
         <li class="nav-item">
         <a href="/" class="nav-link">Receitas</a>
         </li>
         <li class="nav-item">
         <a href="/receitas/create" class="nav-link">Cadastrar Receitas</a>
         </li>
         @auth
         <li class="nav-item">
         <a href="/dashboard" class="nav-link">Minhas Receitas</a>
         </li>
         <li class="nav-item">
         <form action="/logout" method="POST">
            @csrf 
            <a href="/logout" class="nav-link" onclick="event.preventDefault();
            this.closest('form').submit();">Sair</a>
         </form>
         </li>
         @endauth
         @guest
         <li class="nav-item">
         <a href="/login" class="nav-link">Entrar</a>
         </li>
         <li class="nav-item">
         <a href="/register" class="nav-link">Cadastrar</a>
         </li>
         @endguest
         </ul>
         
         </div>
         </nav>
   </header>

    <body>
    <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
    </main>
    <div class="footer">
        <p>Livre na Cozinha &copy; 2021</p>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>
