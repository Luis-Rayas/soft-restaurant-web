<x-principal-layout>
    <x-nav-bar />

    <div class="container">
        <div class="d-flex justify-content-center">
            @if (isset($platillo) && $platillo->img_path == asset('img/menu/' . $platillo->id . $platillo->nombre . '.jpg'))
                <img src="{{ asset('img/menu/' . $platillo->id . $platillo->nombre . '.jpg') }}"
                    alt="Imagen de platillo">
            @else
                <img src="{{ asset('img/menu/img-not-found.jpg') }}" alt="Imagen de platillo">
            @endif
        </div>
        <form>
            @csrf
            <input type="hidden" name="id" @if (isset($platillo) && isset($platillo->id))
            value="{{ $platillo->id }}"
            @endif
            >
            <div class="form-group">
                <label for="formFile" class="form-label">Imagen del platillo</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-group">
                <label for="platillo-name">Nombre del platillo</label>
                <input type="text" name="platillo-name" class="form-control" id="platillo-name"
                    placeholder="Nombre de platillo" @if (isset($platillo) && isset($platillo->id))
                value="{{ $platillo->nombre }}"
                @endif
                >
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del platillo</label>
                <textarea name="descripcion" class="form-control" id="descripcion" rows="3">
                @if (isset($platillo) && isset($platillo->id))
                    {{ $platillo->descripcion }}
                @endif
                </textarea>

            </div>
            <div class="form-group">
                <label for="platillo-name">Precio del platillo</label>
                <input type="number" name="platillo-name" class="form-control" id="platillo-name" placeholder="0.0"
                    @if (isset($platillo) && isset($platillo->id))
                value="{{ $platillo->precio }}"
                @endif>
            </div>
            <label for="">Ingredientes del platillo</label>


            <div class="row">
                @foreach ($ingredientes as $ingrediente)
                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </div>

                @endforeach
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>
</x-principal-layout>
