<x-principal-layout>
    <div class="container" style="background: #ffffff;border-radius: 8px;">
        <div class="container">
            <div class="row">
                @foreach ($platillos as $platillo)
                    <div class="col-sm-4 border">
                        <x-platillo-card id="{{ $platillo->id }}" />
                        <div class="form-group">
                            <form action="">
                                <input class="input-text" type="number" name="" id="" value="" placeholder="Cantidad">
                                <a class="btn btn-primary" href="">Agregar</a>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-principal-layout>
