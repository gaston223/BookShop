@guest
    <span class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Se Connecter</a>
    </span>
    @if (Route::has('register'))
        <span class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
        </span>
    @endif
@else
    <span><a href="{{url('/my-account')}}">Mes commandes</a></span>
    <span class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
           Se Déconnecter
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </span>
@endguest
