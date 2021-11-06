<x-principal-layout>
    <x-nav-bar />

    <div class="container">
        <a class="btn btn-primary float-right" href="{{ url('platillos/store')}}">Agregar nuevo ingrediente</a>
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
                            <a class='btn btn-lg btn-primary mx-1' href="{{ url('ingredientes/edit/' .$ingrediente->id) }}">
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
</x-principal-layout>
