@extends('Home.layout')


@section('title', 'REGISTRO')

@section('contenido')
    <main>

        <section class="bar-promo">
            <div>
                @if($tipo == 'C')
                <p>Genera ingresos conduciendo <span>ÚNETE a nosotros</span></p>
                @else
                <p>Obtén $40 MXN de descuento en tu primer viaje *Sujeto a términos y condiciones.</p>
                @endif
            </div>
        </section>


        @if($tipo=='C')

        <section class="registro">

            <div class="contenido">
                <div class="frase">
                    <h3>Haz que tu tiempo cuente y maneja con Libre360.</h3>
                </div>

                <div class="form">
                    <form action="#">

                        <div class="input-container">
                            <i class="fa-solid fa-circle-user prefix-icon"></i>
                            <input type="text" placeholder="Nombre(s):">
                        </div>

                        <div class="input-container">
                            <i class="fa-solid fa-circle-user prefix-icon"></i>
                            <input type="text" placeholder="Apellido(s):">
                        </div>

                        <div class="input-container">
                            <i class="fa-solid fa-envelope prefix-icon"></i>
                            <input type="email" placeholder="Correo Eléctronico:">
                        </div>


                        <div class="input-container">
                            <i class="fa-solid fa-phone prefix-icon"></i>
                            <input type="text" placeholder="Teléfono:">
                        </div>

                        <div class="input-container">
                            <i class="fa-solid fa-lock prefix-icon"></i>
                            <input type="password" placeholder="Contraseña:">
                        </div>

                        <button class="btn-form" type="submit">Registrar</button>

                    </form>

                </div>
            </div>            
      
        </section>

        @else

        <section class="registro">

            <div class="contenido">
                <div class="frase">
                    <h3>Viaja seguro a tu destino</h3>
                </div>

                
                <div class="form">
                    <form action="#">

                        <div class="input-container">
                            <i class="fa-solid fa-circle-user prefix-icon"></i>
                            <input type="text" placeholder="Nombre(s):">
                        </div>

                        <div class="input-container">
                            <i class="fa-solid fa-circle-user prefix-icon"></i>
                            <input type="text" placeholder="Apellido(s):">
                        </div>

                        <div class="input-container">
                            <i class="fa-solid fa-envelope prefix-icon"></i>
                            <input type="email" placeholder="Correo Eléctronico:">
                        </div>


                        <div class="input-container">
                            <i class="fa-solid fa-phone prefix-icon"></i>
                            <input type="text" placeholder="Teléfono:">
                        </div>

                        <div class="input-container">
                            <i class="fa-solid fa-lock prefix-icon"></i>
                            <input type="password" placeholder="Contraseña:">
                        </div>

                        <button class="btn-form" type="submit">Registrar</button>

                    </form>

                </div>

            </div>            

        </section>

        @endif

     
    </main>
@endsection