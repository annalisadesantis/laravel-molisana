<header>
    <div class="logo">
        <img src="{{ asset('images/logo-molisana.png')}}" alt="Logo Molisana">
    </div>
    <div class="nav">
        <ul>
            <li>
                <a class="{{ Request::route()->getName() == 'homepage' ? 'active' : ''}}" href="{{ url('/')}}">
                    Home
                </a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'pagina_prodotti' ? 'active' : ''}}" href="{{ route('pagina_prodotti')}}">
                    Prodotti
                </a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'pagina_news' ? 'active' : ''}}" href="{{ route('pagina_news')}}">
                    News
                </a>
            </li>
        </ul>
    </div>
</header>
