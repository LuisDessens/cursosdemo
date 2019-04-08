<footer>
    <nav class="navbar {{ (\Request::route()->getName() == 'login') ? 'fixed-bottom' : (\Request::route()->getName() == 'register') ? 'fixed-bottom' : (\Request::route()->getName() == 'password.request') ? 'fixed-bottom' : (\Request::route()->getName() == 'home') ? 'fixed-bottom' : (\Request::route()->getName() == 'shopping-detail') ? 'fixed-bottom' : '' }} navbar-expand-sm navbar-dark bg-dark">

        <div class="container">
            <div class="row">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }} </a> 
                <span class="navbar-text">
                    Todos los derechos reservados © 2019
                </span>

            </div>
        </div>
    </nav>
</footer>