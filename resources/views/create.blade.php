@extends('layout')

@section('title', 'Crear Persona')

@section('content')
<table cellpadding="3" cellspacing="5" >
    <tr>
         <th colspan="2">Crear nueva Persona</th>
    </tr>
    <form action="{{ route('personas.store') }}" method="post">
        @csrf
        <tr>
            <th>Apellido</th>
            <td><input type="text" name="cPerApellido" value="{{ old('cPerApellido') }}">
            <br>{{$errors->first('cPerApellido')}}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre') }}">
            <br>{{$errors->first('cPerNombre')}}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion') }}">
            <br>{{$errors->first('cPerDireccion')}}</td>
        </tr>
        <tr>
            <th>Fecha de nacimiento</th>
            <td><input type="date" name="dPerFecNac" value="{{ old('dPerFecNac') }}">
            <br>{{$errors->first('dPerFecNac')}}</td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><input type="text" name="nPerEdad" value="{{ old('nPerEdad') }}">
            <br>{{$errors->first('nPerEdad')}}</td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><input type="text" name="cPerSexo" value="{{ old('cPerSexo') }}">
            <br>{{$errors->first('cPerSexo')}}</td>
        </tr>
        <tr>
            <th>Sueldo</th>
            <td><input type="text" name="nPerSueldo" value="{{ old('nPerSueldo') }}">
            <br>{{$errors->first('nPerSueldo')}}</td>
        </tr>
        <tr>
            <th>Rnd</th>
            <td><input type="text" name="cPerRnd" value="{{ old('cPerRnd') }}">
            <br>{{$errors->first('cPerRnd')}}</td>
        </tr>
        <tr>
            <th>Estado de Persona</th>
            <td>
                <select name="nPerEstado">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button type="submit">Guardar</button></td>
        </tr>
    </form>
</table>
@endsection

