<x-principal-layout>
    <x-nav-bar/>


    <div class="container">
        <div class="container">
            <a href="{{ route('mesaCreate') }}" class="btn btn-primary">Agregar nueva mesa</a>
        </div>
        <div class="row">
        @foreach ($mesas as $mesa)
        <div class="col-sm-4">
            <x-mesa-card id="{{$mesa->id}}" cant-personas="{{$mesa->cant_personas}}" disponible="{{$mesa->disponible}}"/>
            <br>
        </div>
        @endforeach
        </div>
    </div>
</x-principal-layout>
