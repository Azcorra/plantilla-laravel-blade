<?php

namespace App\Http\Livewire;

use App\Events\RegistroContacto;
use App\Models\Contacto as Contactos;
use Livewire\Component;

class Contacto extends Component
{
    public $name, $email, $message;

    protected $rules = [
        'email'     => 'required|string|email|max:255|unique:contactos',
        'message'   => 'required|string|max:500',
        'name'      => 'required|string|min:6'
    ];

    // Método que permite renderizar la vista asociada al componente
    public function render()
    {
        return view('livewire.contacto');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // Método asociado al formulario y ejecutado desde la vista asociada al componente
    public function enviarContacto()
    {
        // sleep(3);

        $data = $this->validate();

        // $this->limpiarFormulario();

        // Se guarda los registros del contacto a través del modelo "Contactos"
        $contacto = Contactos::create([
            'email'=> $this->email,
            'message'=> $this->message,
            'name'=> $this->name
        ]);

        // Se ejecuta el evento asociado al envio de correo
        event(new RegistroContacto($contacto));

        // Función que permite limpiar los modelos definidos en la vista del componente
        $this->reset();

        // Se emite el evento que es cacheado en la vista a través de JavaScript
        $this->emit('mensajeEnviado', ['message' => 'Mensaje enviado con éxito.']);
    }

    public function limpiarFormulario()
    {
        $this->name = $this->email = $this->message = null;
    }
}
