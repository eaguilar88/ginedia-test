<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h2>Escríbanos</h2>
    <form class="col s12 m12 no-pad" enctype="multipart/form-data" id="contact-form" name="innerForm"
          wire:submit.prevent="submit">
        <div class="row no-pad">
            <div class="input-field col s12 m6">
                <input wire:model="name" id="full_name" name="full_name" type="text" class="validate">
                <label for="full_name">Nombre y Apellido</label>
            </div>

            <div class="input-field col s12 m6">
                <input wire:model="email" id="email" name="email" type="email" class="validate">
                <label for="email">Dirección de correo</label>
            </div>

            <div class="input-field col s12">
                <textarea wire:model="message" name="message" id="mesagge" class="materialize-textarea"></textarea>
                <label for="message">Escriba su mensaje aquí...</label>
            </div>

            <!--div class="input-field s12 col">
                <div class="g-recaptcha v-flex" data-sitekey="6LdfEW8UAAAAADg3SLfqKICPnlc2yZKYPwvyxwKL"></div>
            </div-->
            @if (session()->has('message'))
                <div class="alert alert-{{session('type')}}">
                    {{ session('message') }}
                </div>
            @endif
            <div class="input-field s12 col">
{{--                <button class="btn-large ghost-btn contactSubmit">Enviar</button>--}}
                <input id='enviar' class="btn-large ghost-btn contactSubmit" type="submit" value="Enviar" />
            </div>
        </div>
    </form>
</div>
