<x-principal-layout>

    <div class="container" style="background: #ffffff;border-radius: 8px;">
        <div class="container">
            <div class="row">
                @foreach ($platillos as $platillo)
                    <div class="col-sm-4 border">
                        <x-platillo-card id="{{ $platillo->id }}" />
                        <div class="form-group">
                            <form action="">
                                <div class="form-control">
                                    <input class="form-control" type="number" name="" id="" value="" placeholder="Cantidad">
                                    <textarea class="form-control" name="comentarios" id="" placeholder="Comentarios"></textarea>
                                    <a class="btn btn-primary form-control" href="">Agregar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-principal-layout>
