<x-principal-layout>
    <x-nav-bar/>

    <div class="container">

        <label for="fecha1">Fecha Inicial</label>
        <input type="date" value="{{$fecha1}}">
        <label for="">Fecha final</label>
        <input type="date" value="{{$fecha2}}">

        <table class="table table-responsive table-dark table-striped text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 20%">No. de Orden</th>
                    <th scope="col" style="width: 40%">Abierto Por</th>
                    <th scope="col" style="width: 20%">Total</th>
                    <th scope="col" style="width: 20%">Ver detalles</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <th scope="row">holi</th>
                        <td>holi</td>
                        <td>$holi</td>
                        <td>
                            <a class='btn btn-lg btn-primary mx-1' href="">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>

</x-principal-layout>
