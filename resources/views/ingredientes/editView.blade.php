<x-principal-layout>
    <x-nav-bar />

    <div class="container">

        <form>
            @csrf
            <input type="hidden" name="id" @if (isset($ingrediente) && isset($ingrediente->id))
            value="{{ $ingrediente->id }}"
            @endif
            >
            <div class="form-group">
                <label for="platillo-name">Nombre del Ingrediente</label>
                <input type="text" name="ingrediente-name" class="form-control" id="ingrediente-name"
                    placeholder="Nombre del Ingrediente" @if (isset($ingrediente) && isset($ingrediente->id))
                value="{{ $ingrediente->nombre }}"
                @endif
                >
            </div>
            <div class="form-group">
                <label for="ingrediente-precio">Precio del platillo</label>
                <input type="number" name="ingrediente-precio" class="form-control" id="platillo-name" placeholder="0.0"
                    @if (isset($ingrediente) && isset($ingrediente->id))
                value="{{ $ingrediente->precio }}"
                @endif>
            </div>
            <label for="">Proveedores</label>
            <div class="row">
                @foreach ($proveedores as $proveedor)
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input type="hidden" name="ingrediente_id" id="ingrediente_id">
                            <input type="checkbox" name="ingrediente_nombre" id="ingrediente_nombre">
                            <label for="">{{$proveedor->nombre}}</label>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <div class="row">
                    @foreach ($proveedores as $proveedor)
                    <div class="col-6">
                        <select class="select" name="" id="">
                            @foreach ($proveedores as $proveedor)
                                <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <input class="" type="text" placeholder="Costo de proveedor">
                    </div>
                    @endforeach
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>
</x-principal-layout>
