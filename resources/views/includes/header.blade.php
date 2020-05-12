<header id="header">
    <section class="wrapper">
        <figure id="logo">
            <a href="{{route('home')}}"><img class="svg" src="{{ asset("storage/images/logo.svg") }}"/></a>
        </figure>

        <nav class="menu">
            <ul>
                <li>
                    <a href="la-empresa">¿Quiénes somos?</a>
                </li>
                <li>
                    <a class="contact"  href="javascript:void(0);">Contáctanos</a>
                </li>
            </ul>
        </nav>
    </section>
</header>

<!-- class="@if (request()->path() == "nosotros") {{ "active" }} @endif" -->