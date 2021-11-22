<x-principal-layout>
    <x-nav-bar/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/orderView.css')}}" rel="stylesheet" />

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper" style="overflow-y: scroll;">
            <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                @foreach ($platillos as $platillo)
                    <div class="list-group-item list-group-item-action list-group-item-light p-6">
                        <x-platillo-card id="{{ $platillo->id }}" />
                        <div class="form-group">
                            <form action="">
                                <div class="form-control">
                                    <input class="input-text" type="number" name="" id="" value="" placeholder="Cantidad">
                                    <textarea class="input-textarea" name="comentarios" id="" placeholder="Comentarios"></textarea>
                                    <a class="btn btn-primary" href="">Agregar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="container-fluid">
                <div class="card text-center">
                    <div class="card-header">
                        Fecha: <br>
                        {{ date('d/m/Y H:H:s') }}
                    </div>
                    <div class="card-body">
                        <h2 class="card-tittle">Mesa No. {{$mesa->id}}</h2>
                        <h5 class="card-title">Orden No. {{$orden[0]->id}}</h5>
                        <button class="btn btn-primary float-right" id="sidebarToggle">Toggle Menu</button>
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
        </div>
    </div>
    <!-- Core theme JS-->
    <script src="{{asset('js/ordenView.js')}}"></script>
</x-principal-layout>
