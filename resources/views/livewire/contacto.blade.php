<form  wire:submit.prevent="enviarContacto" class="wow fadeInUp" data-wow-delay="0.8s">
    <div class="col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <input wire:model="name" type="text" class="form-control" id="name" placeholder="Name">
            @error('name') <span class="help-block wow fadeIn">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <input wire:model="email" type="email" class="form-control" id="email" placeholder="Email">
            @error('email') <span class="help-block wow fadeIn">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            <textarea wire:model="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
            @error('message') <span class="help-block wow fadeIn">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
        <button type="submit" class="form-control">SEND MESSAGE</button>
    </div>
</form>

@push('scripts')

<script>
    // Escuchando el evento "mensajeEnviado" emitido desde el componente "Contacto"
    Livewire.on('mensajeEnviado', data => {
        iziToast.success({
            message: data.message,
        });
    })
</script>
@endpush