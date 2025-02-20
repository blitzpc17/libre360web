@extends('Home.layout')


@section('title', 'BIENVENIDO')

@section('contenido')
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
@endsection