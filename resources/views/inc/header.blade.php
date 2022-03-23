@section('header')
    <header class="flex-shrink-0">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark px-3">
            <a class="navbar-brand" href="{{ route('home') }}">Анализатор страниц</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('urls') }}">Сайты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
