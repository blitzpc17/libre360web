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

     
    </main>
@endsection