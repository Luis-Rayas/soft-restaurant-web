<div class="card text-center m-2">
    <div class="card-header card-title h2">
        {{ $nombre }}
    </div>
    <div class="card-body">
        <img src="{{ asset('img/menu/1Hamburguesa.jpg') }}" alt="">
        <p class="card-text">
            {{ $descripcion }}
        <div class="card-footer text-muted">
            Precio: ${{ $precio }}
        </div>
    </div>
</div>
