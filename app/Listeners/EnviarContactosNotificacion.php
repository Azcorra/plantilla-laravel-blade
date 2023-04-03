<?php

namespace App\Listeners;

use App\Events\RegistroContacto;
use App\Mail\Contactos;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EnviarContactosNotificacion
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\RegistroContacto  $event
     * @return void
     */
    public function handle(RegistroContacto $event)
    {
        // Se ejecuta el facade Mail al cual se le pasa una nueva instancia de la clase "Contactos"
        Mail::send(new Contactos($event->contacto));
    }
}
