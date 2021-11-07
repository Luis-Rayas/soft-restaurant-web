<div>
    <div class="card text-center">
        <div class="card-header">
            Mesa {{ $id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Mesa para {{ $cantPersonas }} personas
            </h5>

            @if ($disponible)
                <div class="alert alert-success" role="alert">
                    Mesa Disponible
                </div>
                <a href="#" class="btn btn-primary">
                    Abrir orden
                </a>
            @else
                <div class="alert alert-danger" role="alert">
                    Mesa Ocupada
                </div>
                <a href="#modal-opened" class="btn btn-secondary">
                    Ver orden abierta
                </a>
            @endif
        </div>
    </div>
</div>
