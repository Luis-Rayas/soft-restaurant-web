<x-principal-layout>
    <x-nav-bar />
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- New Ingrediente Modal -->
    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Nuevo Ingrediente
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ingredienteStore') }}" method="POST">
                        <div class="">
                            @csrf
                            <div class="form-group">
                                <label for="cant_ingred" class="form-label">Cantidad disponibles en almacen</label>
                                <input class="form-control" type="number" id="cant_ingred" name="cantidad">
                            </div>
                            <div class="form-group">
                                <label for="costo" class="form-label">Costo</label>
                                <input class="form-control" type="number" id="cant_ingred" name="costo">
                            </div>
                            <div class="form-group">
                                <label for="cant_ingred" class="form-label">Proveedor que lo suministra</label>
                                <select name="idProveedor" id="select-proveedor">
                                    <option value="null">Sin Proveedor</option>
                                    <!--Rellenar proveedores -->
                                    <option value="">PEdro</option>
                                </select>
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

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Buscar Ingrediente
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="resetForm()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="No. de Mesa"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" id="tf-search-mesa"
                            onclick="resetForm()">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button" id="btn-search-mesa"
                                onclick="findMesaById()">Buscar</button>
                        </div>
                    </div>
                    <div class="container" id="informacion-ingred">
                        <p id="id-mesa">Ingrediente No. #</p>
                        <div class="info-mesa" id="div-info-mesa">
                            <form action="{{ route('ingredienteUpdate') }}" method="POST" id="form-mesa"
                                onkeypress="return disableEnterKey(event)">
                                @csrf
                                <div class="form-group">
                                    <label for="cant_ingred" class="form-label">Cantidad disponibles en
                                        almacen</label>
                                    <input class="form-control" type="number" id="cant_ingred" name="cantidad">
                                </div>
                                <div class="form-group">
                                    <label for="costo" class="form-label">Costo</label>
                                    <input class="form-control" type="number" id="cant_ingred" name="costo">
                                </div>
                                <div class="form-group">
                                    <label for="cant_ingred" class="form-label">Proveedor que lo suministra</label>
                                    <select name="idProveedor" id="select-proveedor" class="form-select">
                                        <option value="null">Sin Proveedor</option>
                                        <!--Rellenar proveedores -->
                                        <option value="">PEdro</option>
                                    </select>
                                </div>
                            </form>
                            <form action="{{ route('ingredienteDelete') }}" method="POST" id="form-mesa-delete" hidden>
                                @csrf
                                <input type="hidden" name="id" id="hd-id-ingrd-delete">
                            </form>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="opc-mesa" class="form-check-input" id="rad-edit-info"
                                onchange="editInformacion(this)">
                            <label class="form-check-label" for="ck-edit-info">Editar</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="opc-mesa" class="form-check-input" id="rad-delete-info"
                                onchange="editInformacion(this)">
                            <label class="form-check-label" for="ck-edit-info">Eliminar</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-guardar-mesa" class="btn btn-primary" data-dismiss="modal" hidden
                        onclick="sendFormMesa()">Guardar</button>
                    <button type="button" id="btn-eliminar-mesa" class="btn btn-danger" data-dismiss="modal" hidden
                        onclick="deleteMesa()">Eliminar</button>
                    <span></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="resetForm()">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newModal">
                Agregar Ingrediente Nuevo
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editModal">
                Editar informacion de Ingrediente
            </button>
        </div>
        <br>
        <!--<a class="btn btn-primary float-right" href="{{ url('platillos/store') }}">Agregar nuevo ingrediente</a>-->
        <h2 class="h2 d-inline">Ingredientes</h2>
        <table class="table table-responsive table-dark text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 25%">Nombre</th>
                    <th scope="col" style="width: 25%">Cantidad en existencia</th>
                    <th scope="col" style="width: 25%">Precio de proveedor</th>
                    <th scope="col" style="width: 25%">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredientes as $ingrediente)
                    <tr>
                        <td>{{ $ingrediente->nombre }}</td>
                        <td>{{ $ingrediente->cantidad }}</td>
                        <td>${{ $ingrediente->precio }}</td>
                        <td class="d-flex justify-content-center">
                            <a class='btn btn-lg btn-primary mx-1'
                                href="{{ url('ingredientes/edit/' . $ingrediente->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class='btn btn-lg btn-primary mx-1' href="">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            <a class='btn btn-lg btn-primary mx-1' href="">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('js/mesas.js') }}"></script>
</x-principal-layout>
