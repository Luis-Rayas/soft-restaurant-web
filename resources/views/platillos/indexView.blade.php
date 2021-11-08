<x-principal-layout>
    <x-nav-bar />
    <div class="container">
        <br>

        <a class="btn btn-primary float-right" href="{{ url('platillos/store')}}">Agregar nuevo platillo</a>
        <h2 class="h2 d-inline">Alimentos</h2>
        <table class="table table-responsive table-dark table-striped text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 20%">Platillo</th>
                    <th scope="col" style="width: 40%">Descripción</th>
                    <th scope="col" style="width: 20%">Precio</th>
                    <th scope="col" style="width: 20%">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alimentos as $alimento)
                    <tr>
                        <th scope="row">{{ $alimento->nombre }}</th>
                        <td>{{ $alimento->descripcion }}</td>
                        <td>${{ $alimento->precio }}</td>
                        <td>
                            <a class='btn btn-lg btn-primary mx-1' href="{{ url('platillos/edit/'.$alimento->id)}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class='btn btn-lg btn-primary mx-1' href="">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button class="btn btn-primary float-right">Agregar nueva bebida</button>
        <h2 class="h2 d-inline">Bebidas</h2>
        <table class="table table-responsive table-dark table-striped text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 20%">Bebidas</th>
                    <th scope="col" style="width: 40%">Descripción</th>
                    <th scope="col" style="width: 20%">Precio</th>
                    <th scope="col" style="width: 20%">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bebidas as $bebida)
                    <tr>
                        <td>{{ $bebida->nombre }}</td>
                        <td>{{ $bebida->descripcion }}</td>
                        <td>${{ $bebida->precio }}</td>
                        <td>
                            <a class='btn btn-lg btn-primary mx-1' href="#">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class='btn btn-lg btn-primary mx-1' href="#">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-principal-layout>
