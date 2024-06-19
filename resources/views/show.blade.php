@extends('layout')
@section('title', 'Persona | ' . $persona->nPerCodigo)

@section('content')
<table class="table" style="font-size: 0.9em;">
    <tr>
        <th>Código:</th>
        <td>{{$persona->nPerCodigo}}</td>
    </tr>
    <tr>
        <th>Apellido:</th>
        <td>{{$persona->cPerApellido}}</td>
    </tr>
    <tr>
        <th>Nombre:</th>
        <td>{{$persona->cPerNombre}}</td>
    </tr>
    <tr>
        <th>Dirección:</th>
        <td>{{$persona->cPerDireccion}}</td>
    </tr>
    <tr>
        <th>Fecha de Nacimiento:</th>
        <td>{{$persona->dPerFecNac}}</td>
    </tr>
    <tr>
        <th>Edad:</th>
        <td>{{$persona->nPerEdad}}</td>
    </tr>
    <tr>
        <th>Sexo:</th>
        <td>{{$persona->cPerSexo}}</td>
    </tr>
    <tr>
        <th>Sueldo:</th>
        <td>{{$persona->nPerSueldo}}</td>
    </tr>
    <tr>
        <th>RND:</th>
        <td>{{$persona->cPerRnd}}</td>
    </tr>
    <tr>
        <th>Estado:</th>
        <td>{{$persona->nPerEstado}}</td>
    </tr>
    <tr>
        <th>Fecha de Creación:</th>
        <td>{{$persona->created_at->diffForHumans()}}</td>
    </tr>
</table>
@endsection
