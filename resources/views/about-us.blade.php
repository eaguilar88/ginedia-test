@extends('layouts.app')

@section('title')
    <title>Ginedia | Ginedia | Acerca de la empresa</title>
@endsection

@section('content')
    <section class="container wrapper {{ url()->current() }}">
        <h2>Comercializadora Ginedia</h2>
        <img src="{{ asset('images/acerca-de.jpg') }}" />
        <p>Nos dedicamos a la  importación, distribución y comercialización de puertas automáticas, herrajes y accesorios para la industria del vidrio arquitectónico de interiores y exteriores, fachadas de edificios, construcciones comerciales y residenciales.<br><br>
            La calidad y responsabilidad es nuestra mayor carta de presentación, comercializamos productos de excelente calidad seleccionados por su robustez y diseños contemporáneos, los cuales son elaborados por las principales empresas del ramo a nivel mundial; ofreciendo una línea innovadora con las nuevas tendencias del mercado a precios muy competitivos para las soluciones arquitectónicas de nuestros clientes.<br><br>
            Nos destacamos por ofrecer atención personalizada y asesoramiento adecuado para cada una de sus necesidades.</p>
    </section>

    <section class="container valores">
        <article class="wrapper">
            <ul>
                <h2>Ofrecemos:</h2>
                <li>Seriedad y compromiso</li>
                <li>Entregas a tiempo</li>
                <li>Atención Personalizada</li>
                <li>Precios Competitivos</li>
            </ul>
            <ul>
                <h2>Nuestras ventajas:</h2>
                <li>Variedad de productos</li>
                <li>Calidad</li>
                <li>Diseño</li>
                <li>Durabilidad</li>
                <li>Garantía</li>
            </ul>
        </article>
    </section>
@endsection
