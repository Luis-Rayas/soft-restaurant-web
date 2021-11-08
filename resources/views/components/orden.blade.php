<div>
    <div class="card text-center">
        <div class="card-header">
            Fecha: <br>
            {{ date('d/m/Y H:H:s') }}
        </div>
        <div class="card-body">
            <h2 class="card-tittle">Mesa No. #</h2>
            <h5 class="card-title">Orden No. #####</h5>
            <a href="#" class="btn btn-primary float-right">Agregar</a>
            <div class="card-text">
                <table class="table table-responsive">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 5%">#</th>
                            <th scope="col" style="width: 50%">Platillo</th>
                            <th scope="col" style="width: 15%">Cantidad</th>
                            <th scope="col" style="width: 20%">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td></td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="table-secondary">Total</td>
                            <td class="table-secondary">$#####</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="#modal-closed" class="btn btn-secondary">Cerrar orden</a>
        </div>
        <div class="card-footer text-muted">
            Siempre servicial, siempre atento
        </div>
    </div>
</div>
