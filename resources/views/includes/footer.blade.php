<footer>
    <section class="wrapper">
        <article class="a-panel">
            <img class="f-logo" src="{{ asset('storage/images/logoNegativo.svg') }}">
            <img class="mini" src="{{ asset('storage/images/catalogo.jpg') }}" />
            <a class="download" download href="download/Catalogo Ginedia 2016.pdf"><span><i class="fa fa-download"></i></span><br>Descargar catálogo 2016</a>
            </ul>
        </article>

        <article class="b-panel">
            <h2>Venezuela</h2>
            <figure><img src="{{ asset('storage/images/ve_flag.svg') }}" /></figure>

            <p>Carretera vieja de Baruta, Km. 5, Sector Industrial La Naya, Centro Gandión SS2, Local 5, Baruta 1080. Caracas - Venezuela.</p>

            <h2>Contacto</h2>

            <ul class="tlf">
                <li>+58 (212) 4929255</li>
                <li>+58 (212) 9754217</li>
            </ul>

            <ul class="contacts">
                <li>ginedia@hotmail.com</li>
            </ul>
        </article>
        <article class="c-panel">
            <h2>Panamá</h2>
            <figure><img src="{{ asset('storage/images/pa_flag.svg') }}"/></figure>

            <p>Calle 14 Pueblo Nuevo Al lado de Cristales y Perfiles. Ciudad de Panamá.</p>

            <h2>Contacto</h2>

            <ul class="tlf">
                <li>(507) 229 4474</li>
                <li>(507) 229 4470</li>
                <li>(507) 6053-0804</li>
            </ul>

            <ul class="contacts">
                <li>groupginedia@gmail.com</li>
            </ul>
        </article>
        <article id="contact_box">
            <h2>Escríbanos</h2>
            <!-- Start HTML5 form mail.php-->
            <form id="contact-form" action="" class="form pure-form pure-form-stacked">
                <div class="pure-g">
                    <div class="pure-u-1-2 pad-025 firstElem">
                        <input name="name" type="text" placeholder="Nombre y Apellido" required />
                        <span class="error" for="name" id="name_error">Es necesario que indiques su nombre</span>
                    </div>
                    <div class="pure-u-1-2 pad-025 lastElem">
                        <input name="email" type="email" placeholder="Dirección de correo" required />
                        <span class="error" for="name" id="email_error">Es necesario que indique un correo para responderle</span>
                        <span class="error" for="name" id="email_missing">Indica una dirección de correo válida</span>
                    </div>
                    <p class="reference-block">
                        <input name="reference" type="text" />
                    </p>
                    <div class="pure-u-1 pad-025 uniqueElem z-2">
                        <input name="subject" type="text" placeholder="Motivo de su mensaje" required />
                        <span class="error" for="name" id="subject_error">Es necesario que indique el asunto del mensaje</span>
                    </div>

                    <div class="message-block pure-u-1 pad-025 uniqueElem z-3">
                        <textarea name="message" type="text" placeholder="Escriba su mensaje aquí..." required /></textarea>
                        <span class="error" for="name" id="message_error">Necesitamos que explique un poco lo que necesita</span>
                    </div>

                    <div class="submit-block pure-u-1 pad-025 uniqueElem">
                        <input type="submit" class="buttonSubmit" value="Enviar mensaje" />
                    </div>
                </div>
            </form>
        </article>
    </section>
    <section class="credits">
        <div class="wrapper">
            <p>Ginedia Group © 2015 | Elaborado y mantenido por <a href="http://www.publilabs.com" target="_blank">Publilabs</a></p>
        </div>
    </section>
</footer>
