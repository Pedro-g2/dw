<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav gap-2">
                {{-- Links Padrão --}}
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('evangelho') ? 'active' : '' }}" href="{{ route('evangelho') }}">Evangelho do dia</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('horarios') ? 'active' : '' }}" href="{{ route('horarios') }}">Informações e horários</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('sobre') ? 'active' : '' }}" href="{{ route('sobre') }}">Sobre</a></li>

                {{-- O helper @auth('fiel') verifica se o usuário está logado com o guard 'fiel' --}}
                @auth('fiel')
                    {{-- Se ESTIVER LOGADO, mostra estes links --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dizimo/pagamento') ? 'active' : '' }}" href="{{ route('dizimo.pagamento') }}">Pagar Dízimo</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="nav-link" style="border:none; background:none;">Sair</button>
                        </form>
                    </li>
                @else
                    {{-- Se NÃO ESTIVER LOGADO, mostra o link de login --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Pagar Dízimo</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>