<x-principal-layout>
    <x-nav-bar/>


    <div class="container">
        <div class="row">
        @foreach ($mesas as $mesa)
        <div class="col-sm-4">
            <x-mesa-card id="{{$mesa->id}}" cant-personas="{{$mesa->cant_personas}}" disponible="{{$mesa->disponible}}"/>
            <br>
        </div>
        @endforeach
        </div>
    </div>

    <div class="container">
        <x-orden id="modal-opened"/>
    </div>
</x-principal-layout>
