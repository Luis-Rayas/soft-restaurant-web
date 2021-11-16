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
        <form action="{{ route('platilloStore')}}" method="POST">
            @csrf
            <input type="hidden" name="id" @if (isset($platillo) && isset($platillo->id))
            value="{{ $platillo->id }}"
            @endif
            >
            <div class="form-group">
                <label for="formFile" class="form-label">Imagen del platillo</label>
                <input class="form-control" type="file" id="formFile" name="platilloImg">
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label">Tipo de Platillo</label>
                <select name="tipo_alimento" id="" class="form-control">
                    @foreach ($tipoAlimento as $tipo)
                        <option value="{{$tipo->id}}"
                            @if (isset($platillo) && $platillo->tipo_alimento_id == $tipo->id)
                                seleted
                            @endif>{{$tipo->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="platillo-name">Nombre del platillo</label>
                <input type="text" name="platillo_name" class="form-control" id="platillo-name"
                    placeholder="Nombre de platillo" @if (isset($platillo) && isset($platillo->id))
                value="{{ $platillo->nombre }}"
                @endif
                requiered>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del platillo</label>
                <textarea name="descripcion" class="form-control" id="descripcion" rows="3">@if (isset($platillo) && isset($platillo->id)){{ $platillo->descripcion }}@endif</textarea>
            </div>
            <div class="form-group">
                <label for="platillo_precio">Precio del platillo</label>
                <input type="number" name="platillo_precio" class="form-control" id="platillo_precio" placeholder="0.0"
                    @if (isset($platillo) && isset($platillo->id))
                value="{{ $platillo->precio }}"
                @endif requiered min="1">
            </div>
            <label for="">Ingredientes del platillo</label>
            <div class="row">
                @foreach ($ingredientes as $ingrediente)
                    <div class="col-sm-4">
                        <span class="input-group-text d-flex justify-content-center">{{$ingrediente->nombre}}</span>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Cantidad</span>
                            </div>
                            <input type="hidden" name="id_ingrediente[]" value="{{$ingrediente->id}}">
                            <input name="cant_ingredientes[]" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="0">
                        </div>
                    </div>
                @endforeach
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>
</x-principal-layout>
