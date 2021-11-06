<x-principal-layout>
    <x-nav-bar/>

    <div class="container">
        <form>
            @csrf
            <input type="hidden" name="id" @if (isset($proveedor) && isset($proveedor->id))
            value="{{ $proveedor->id }}"
            @endif
            >
            <div class="form-group">
                <label for="platillo-name">Nombre del Proveedor</label>
                <input type="text" name="ingrediente-name" class="form-control" id="ingrediente-name"
                    placeholder="Nombre del Ingrediente" @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->nombre }}"
                @endif
                >
            </div>
            <div class="form-group">
                <label for="ingrediente-precio">Precio del platillo</label>
                <input type="number" name="ingrediente-precio" class="form-control" id="platillo-name" placeholder="0.0"
                    @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->precio }}"
                @endif>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>
</x-principal-layout>
