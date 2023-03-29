<link rel="stylesheet" href="{{ asset('./css/navbar.css') }}">

<nav class="navbar">
    <div class="navbar-container">
        <div class="">
            <a href="/">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>

        </div>
        @if (Auth::user() && !Auth::user()->isAdmin)
            <div class="link-menu">
                <a href="/home/male"> Hombre</a>
            </div>

            <div class="link-menu">
                <a href="/home/female"> Mujer</a>
            </div>

            <div class="link-menu">
                <a href="/user/ShoppinCart"> Carrito</a>
            </div>

            <div class="link-menu">
                <a href="/user/Favorites">Favoritos</a>
            </div>
        @elseif (Auth::user() && Auth::user()->isAdmin)
            <div class="link-menu">
                <a href="/users"> Usuarios</a>
            </div>
            <div class="link-menu">
                <a href="/clothes"> Ropa</a>
            </div>
            <div class="link-menu">
                <a href="/clothestype"> Tipo de Ropa</a>
            </div>
            <div class="link-menu">
                <a href="/discounts"> Descuentos</a>
            </div>
        @endif



        <div class="navbar-dropdown">
            <div class="navbar-dropdown-toggle">
                @auth
                    <div>{{ Auth::user()->name }}</div>
                @endauth
                @guest
                    <div>Invitado</div>
                @endguest
                <div></div>
            </div>

            <ul class="navbar-dropdown-menu">
                @auth


                    @if (Auth::user()->isAdmin)
                        <li class="navbar-dropdown-menu-item"> <a href="/users">Gestionar Usuarios</a></li>
                        <li class="navbar-dropdown-menu-item"> <a href="/clothes">Gestionar Ropa</a></li>
                        <li class="navbar-dropdown-menu-item"> <a href="/clothestype">Gestionar Tipo de Ropa</a></li>
                        <li class="navbar-dropdown-menu-item"> <a href="/discounts">Gestionar Descuentos</a></li>
                        <li class="navbar-dropdown-menu-item"> <a href="/bankdata">Gestionar Datos Bancarios</a></li>
                        <x-dropdown-link :href="route('profile.edit')">Ajustes</x-dropdown-link>
                    @else
                        <li class="navbar-dropdown-menu-item"> <a href="/user/ShoppinCart">Carrito</a></li>
                        <li class="navbar-dropdown-menu-item"> <a href="/user/Favorites">Favoritos</a></li>
                        <li class="navbar-dropdown-menu-item"> <a href="/profile">Ajustes</a></li>
                    @endif
                    <li class="navbar-dropdown-menu-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                        this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            @endauth

            @guest
                <li class="navbar-dropdown-menu-item">
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar Sesión</a>
                </li>
                <li class="navbar-dropdown-menu-item">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrate</a>
                    @endif
                </li>
            @endguest
            </>
        </div>
</nav>
