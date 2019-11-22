@extends('index')
@section('contenido')
<style>
.card
{
    margin-bottom: 20px;
    background-color: #2a3f54;
}
.card-text
{
    text-align: center;
}
</style>
<div class="row">
@foreach($mascotas as $mas)
@if($mas->status_mascota=="")
    <div class="col-md-3">
        <div class="card">
            <img src="Archivos/{{$mas->archivo}}" class="card-img-top" alt="{{$mas->nombre_mascota}}">
            <div class="card-body">
                <h5 class="card-title" align="center">{{$mas->nombre_mascota}}</h5>
                <p class="card-text">Raza: {{$mas->raza_mascota}}</p>
                <p class="card-text">Genero: {{$mas->genero}}</p>
                <p class="card-text">Castrad@: {{$mas->castrado}}</p>
                <p class="card-text">Altura: {{$mas->altura}}</p>
                <p class="card-text">Peso: {{$mas->peso}}</p>
            </div>
        </div>
    </div>
@endif
@endforeach
</div>

@stop