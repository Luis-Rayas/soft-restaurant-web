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
                    <form action="{{ route('mesaStore') }}" method="POST">
                        <div class="">
                            @csrf
                            <div class="form-group">
                                <label for="formFile" class="form-label">Cantidad de personas</label>
                                <input class="form-control" type="number" id="cant_personas" name="cant_personas">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Añadir">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @error('cant_personas')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</x-principal-layout>
