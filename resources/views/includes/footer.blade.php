<footer id="footer">
    <section class="wrapper v-flex">
        <article class="a-panel">
            <img class="f-logo" src="{{ asset('storage/images/logoNegativo.svg') }}">
            <!--img class="mini" src="{{ asset('storage/images/catalogo.jpg') }}" />
            <a class="download" download href="download/Catalogo Ginedia 2016.pdf"><span><i class="fa fa-download"></i></span><br>Descargar catálogo 2016</a-->
            </ul>
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
            <h2>Escríbanos</h2>
            <!-- Start HTML5 form mail.php-->
            <form class="col s12 m12 no-pad" enctype="multipart/form-data" id="contact-form" name="innerForm">
                <div class="row no-pad">
                    <div class="input-field col s12 m6">
                        <input id="full_name" name="full_name" type="text" class="validate">
                        <label for="full_name">Nombre y Apellido</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Dirección de correo</label>
                    </div>

                    <div class="input-field col s12">
                        <textarea name="message" id="mesagge" class="materialize-textarea"></textarea>
                        <label for="message">Escriba su mensaje aquí...</label>
                    </div>

                    <!--div class="input-field s12 col">
                        <div class="g-recaptcha v-flex" data-sitekey="6LdfEW8UAAAAADg3SLfqKICPnlc2yZKYPwvyxwKL"></div>
                    </div-->

                    <div class="input-field s12 col">
                        <input id='enviar' class="btn-large ghost-btn contactSubmit" type="submit" value="Enviar" />
                    </div>
                </div>
            </form>
        </article>
    </section>

    <section class="credits">
        <div class="wrapper">
            <p>Ginedia Group © 2020 | Elaborado y mantenido por <a href="http://www.publilabs.com" target="_blank">Publilabs</a></p>
        </div>
    </section>
</footer>
