<header>
    <section class="wrapper">
        <figure id="logo">
            <a href="{{route('home')}}"><img class="svg" src="{{ asset("images/logo.svg") }}"/></a>
        </figure>

        <nav class="menu">
            <figure><img src="{{ asset("images/flags.svg") }}"/></figure>
            <ul>
                <li>
                    <a class="@if (request()->path() == "nosotros") {{ "active" }} @endif" href="la-empresa">
                        ¿Quiénes somos?
                    </a>
                </li>
                <li id="contact">
                    <a class="@if (request()->path() == "contactos") {{ "active" }} @endif" href="javascript:void(0);">
                        Contáctanos
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</header>
