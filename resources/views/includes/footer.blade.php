<footer id="footer">
    <section class="wrapper v-flex">
        <article class="a-panel">
            <img class="f-logo" src="{{ asset('storage/images/logoNegativo.svg') }}" alt="logo"/>
            <!--img class="mini" src="{{ asset('storage/images/catalogo.jpg') }}" />
            <a class="download" download href="download/Catalogo Ginedia 2016.pdf"><span><i class="fa fa-download"></i></span><br>Descargar catálogo 2016</a-->
        </article>

        <article class="b-panel v-flex">
            <div>
                <p>Carretera vieja de Baruta, Km. 5, Sector Industrial La Naya, Centro Gandión SS2, Local 5, Baruta 1080. Caracas - Venezuela.</p>

                <h2>Contacto</h2>

                <ul class="tlf">
                    <li>+58 (212) 4929255</li>
                    <li>+58 (212) 9754217</li>
                </ul>

                <ul class="contacts">
                    <li>ginedia@hotmail.com</li>
                </ul>
            </div>
        </article>

        <article id="contact_box">
            @livewire('contact-form')
        </article>
    </section>

    <section class="credits">
        <div class="wrapper">
            <p>Ginedia Group © 2020 | Elaborado y mantenido por <a href="http://www.publilabs.com" target="_blank">Publilabs</a></p>
        </div>
    </section>
</footer>
