<x-principal-layout>
    <x-nav-bar/>

    <div class="container">
        <form>
            @csrf
            <input type="hidden" name="id" @if (isset($mesa) && isset($mesa->id))
            value="{{ $mesa->id }}"
            @endif
            >
            </div>
            <div class="form-group">
                <label for="ingrediente-precio">Cantidad de personas</label>
                <input type="number" name="ingrediente-precio" class="form-control" id="platillo-name" placeholder="0.0"
                    @if (isset($mesa) && isset($mesa->cant_personas))
                value="{{ $mesa->cant_personas }}"
                @endif>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>

    </div>
</x-principal-layout>
