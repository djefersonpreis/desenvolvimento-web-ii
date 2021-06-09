<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="#" target="" class="navbar-brand">Atividade Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toogler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{route('contas.index')}}" class="nav-link">Contas</a>
            </li>
        </ul>
        @if (Route::getCurrentRoute()->getName() != 'contas.index')
            <a href="#" onclick="goBack()" class="btn btn-secundaty">
                Voltar
            </a>
        @endif
    </div>
</nav>
