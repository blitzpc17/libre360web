@extends('Home.layout')


@section('title', 'BIENVENIDO')

@section('contenido')
    <main>
        <section class="hero">
            <h2>Viaja seguro, viaja <span class="highlight">Libre 360°</span></h2>
            <p>Rápido, cómodo y seguro.</p>

            <div class="row">

                <div class="option">
                    <img src="{{asset('Home/img/1080X1080-CHOFER.png')}}" alt="conductor">
                    <a class="btn-libre360">Viaja</a>
                </div>

                <div class="option">
                    <img src="{{asset('Home/img/1080X1080-CHOFER.png')}}" alt="conductor">
                    <a class="btn-libre360">Comienza a manejar</a>
                </div>
                
            </div>
      
        </section>

        <section class="promo">
            <h2>¡Acumula puntos y viaja gratis!</h2>
        </section>

        <section class="info">            
            <p>Somos un servicio de transporte público comprometido con ofrecerte comodidad, rapidez y seguridad en cada trayecto. Nuestra misión es llevarte a tu destino de forma eficiente, asegurándonos de que tu experiencia sea siempre agradable y confiable.</p>
            <h2>¡Estamos aquí, para llevarte a donde necesites!</h2>
        </section>
    </main>
@endsection