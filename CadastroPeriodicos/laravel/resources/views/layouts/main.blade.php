<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <!-- fonte do google -->
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <!-- css bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Css da aplicação -->
    <script src="/js/scripts.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-ligth">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                <img src="/img/icone.png" alt="Periodicos"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Periodicos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Periodicos</a>
                    </li>
                    @auth
                    <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Meus Periodicos</a>
                </li>
                <li class="nav-item">
                   <form  action="/logout" method="POST">
                   @csrf
                   <a href="/logout" 
                   class="nav-link" 
                   onclick="event.preventDefault(); 
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
   <main>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
            @endif
            @yield('content')
        </div>
    </div>
   </main>
    <footer>
        <p>Desenvolvido por Gian &copy; 2022</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>