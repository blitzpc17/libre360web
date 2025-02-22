<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libre360 - @yield('title')</title>

    @stack('css')
    <link rel="stylesheet" href="{{asset('Home/css/style.css')}}">

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
        <div class="footer-content">           
            
            <div class="footer-section">
                <ul>
                    <li><a href="#inicio">Términos y condiciones</a></li>
                    <li><a href="#servicios">Politica de privacidad</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Descarga ahora</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{asset('Home/img/googleplay.png')}}" alt="googleplay" class="googleplay">
                        </a>
                    </li>
                    <li><a href="#">
                        <img src="{{asset('Home/img/appstore.png')}}" alt="ios" class="ios">
                    </a> </li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <span>&copy; {{date('Y')}}</span> <span class="libref">LIBRE</span><span class="f360">360</span> <span>. Todos los derechos reservados</span>
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