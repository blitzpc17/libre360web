<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libre360 - @yield('title')</title>

    @push('css')

        <link rel="stylesheet" href="{{asset('Home/css/main.css')}}">

    @endpush
</head>
<body>

<header>
        <div class="navbar">
            <div class="logo">LIBRE <span>360°</span></div>
            <nav>
                <ul>
                    <li><a href="#">¿Qué es Libre 360°?</a></li>
                    <li><a href="#">Ayuda</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Viaja seguro, viaja <span class="highlight">Libre 360°</span></h1>
            <p>Rápido, cómodo y seguro.</p>
            <div class="hero-content">
                <div class="mapa">
                    <p>Cotiza tu viaje <strong>$80.47</strong></p>
                </div>
                <div class="imagen-manejo"></div>
            </div>
            <button class="btn-primary">Viaja</button>
            <button class="btn-secondary">Comienza a manejar</button>
        </section>

        <section class="promo">
            <h2>¡Acumula puntos y viaja gratis!</h2>
        </section>

        <section class="info">
            <h2>Estamos aquí, para llevarte a donde necesites</h2>
            <p>Somos un servicio de transporte público comprometido con ofrecerte comodidad, rapidez y seguridad.</p>
        </section>
    </main>

    <footer>
        <p>Términos y condiciones | Política de Privacidad</p>
        <div class="descargas">
            <button>Google Play</button>
            <button>App Store</button>
        </div>
    </footer>



<!-- js -->
@push('js')
@endpush
    
</body>
</html>