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
                    placeholder="Nombre del proveedor" @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->nombre }}"
                @endif
                >
            </div>
            <div class="form-group">
                <label for="ingrediente-precio">RFC</label>
                <input type="text" name="ingrediente-precio" class="form-control" id="platillo-name" placeholder=""
                    @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->rfc }}"
                @endif>
            </div>
            <div class="form-group">
                <label for="ingrediente-precio">Direccion</label>
                <input type="text" name="ingrediente-precio" class="form-control" id="platillo-name" placeholder=""
                    @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->direccion }}"
                @endif>
            </div>
            <div class="form-group">
                <label for="ingrediente-precio">Contacto</label>
                <input type="text" name="ingrediente-precio" class="form-control" id="platillo-name" placeholder=""
                    @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->contacto }}"
                @endif>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>
</x-principal-layout>
