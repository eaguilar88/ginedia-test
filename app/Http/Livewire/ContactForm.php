<?php

namespace App\Http\Livewire;

use Mail;
use App\Mail\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        try {
            Mail::to('support@ginedia.test')->send(new Contact($validateData));
            session()->flash('message', 'Mensaje enviado');
            session()->flash('type', 'success');
        } catch (\Exception $e) {
            Log::debug("Error on ContactForm: " . $e->getMessage());
            session()->flash('message', 'No se pudo enviar su mensaje. Contacte al soporte del sitio');
            session()->flash('type', 'error');
        }
    }
}
