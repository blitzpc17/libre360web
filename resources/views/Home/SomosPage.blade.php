
@extends('Home.layout')
@section('title', '¿Quiénes somos?')

@section('contenido')
    <main>
        <section class="somos">
           <div class="contenido">
                <div class="texto">

                <img src="{{asset('Home/img/NEGATIVO-NEGRO.png')}}" alt="logo-negativo" srcset="">
                <p>Somos un servicio de transporte público comprometido con ofrecerte comodidad, rapidez y seguridad en cada trayecto. Nuestra misión es llevarte a tu destino de forma eficiente, asegurándonos de que tu experiencia sea siempre agradable y confiable.</p>
                <h2>¡Estamos aquí, para llevarte a donde necesites!</h2>

                </div>
                <div class="img">
                    <img src="{{asset('Home/img/1080X1080-PERSONAS.png')}}" alt="personas">
                </div>
           </div>
      
        </section>

     
    </main>
@endsection