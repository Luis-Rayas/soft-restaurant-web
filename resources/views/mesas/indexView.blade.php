<x-principal-layout>
    <x-nav-bar />
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Nueva Mesa
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="">
                            @csrf
                            <div class="form-group">
                                <label for="formFile" class="form-label">Cantidad de personas</label>
                                <input class="form-control" type="number" id="formFile">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Añadir</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Agregar Mesa Nueva
            </button>
        </div>
        <div class="row">
            @foreach ($mesas as $mesa)
                <div class="col-sm-4">
                    <x-mesa-card id="{{ $mesa->id }}" cant-personas="{{ $mesa->cant_personas }}"
                        disponible="{{ $mesa->disponible }}" />
                    <br>
                </div>
            @endforeach
        </div>
    </div>

    <div id="miModal" class="modal fade" role="dialog">
        @if (isset($mesa) && isset($mesa->id))
            <h1>Mesa No. {{ $mesa->id }}</h1>
        @else
            <h1>Mesa nueva</h1>
        @endif

        <form>
            @csrf
            <input type="hidden" name="id" @if (isset($mesa) && isset($mesa->id))
            value="{{ $mesa->id }}"
            @endif
            >
    </div>
    <div class="form-group">
        <label for="ingrediente-precio">Cantidad de personas</label>
        <input type="number" name="ingrediente-precio" class="form-control" id="platillo-name" placeholder="0.0"
            @if (isset($mesa) && isset($mesa->cant_personas))
        value="{{ $mesa->cant_personas }}"
        @endif>
    </div>
    <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</x-principal-layout>
