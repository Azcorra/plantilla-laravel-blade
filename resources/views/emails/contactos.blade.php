<x-mail::message>
# Nuevo mensaje

<strong>Mensaje: </strong>  {{ $contacto->message }}<br />
<strong>Nombre: </strong>  {{ $contacto->name }}<br />
<strong>Correo: </strong>  {{ $contacto->email }}
</x-mail::message>
