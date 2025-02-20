<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libre360 - @yield('title')</title>

    @stack('css')
    <link rel="stylesheet" href="{{asset('Home/css/main.css')}}">

</head>
<body>

    <header>

        <nav class="navbar">
            <div class="nav-desktop">
                <div class="logo">
                    <span class="libre">LIBRE</span>
                    <span class="tres-seis-cero">360</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#quienes-somos">Inicio</a></li>
                    <li><a href="#ayuda">¿Quiénes somos?</a></li>
                    <li><a href="#ayuda">Registrate</a></li>
                </ul>
                <div class="hamburger" aria-label="Menú móvil">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
            <div class="mobile-menu">
                <ul class="nav-links-mobile">
                    <li><a href="#quienes-somos">Inicio</a></li>
                    <li><a href="#ayuda">¿Quiénes somos?</a></li>
                    <li><a href="#ayuda">Registrate</a></li>
                </ul>
            </div>
        </nav>

    </header>


    @yield('contenido')

   

    <footer>
        <p>Términos y condiciones | Política de Privacidad</p>
        <div class="descargas">
            <button>Google Play</button>
            <button>App Store</button>
        </div>
    </footer>



<!-- js -->
<script>
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    });
</script>
@stack('js')
    
</body>
</html>