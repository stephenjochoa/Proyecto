@extends('layouts.app')
@section('title', 'Editor de formularios')

@section('content')
<br>
<h3>
    Editar formulario
</h3>

<form action="/formularios/{{$formulario->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreformulario">Modifique el nombre del formulario</label>
        <input name="nombre_formulario" id="nombreformulario" value="{{$formulario->nombre_formulario}}" type="text" class="form-control" id="nombreformulario">

    </div>
    <div class="mb-3">
        <label for="descripcionformulario">Modifique la descripcion del formulario</label>
        <input name="descripcion_formulario" id="nombreformulario" value="{{$formulario->descripcion_formulario}}" type="text" class="form-control" id="nombreformulario">

    </div>
    <div class="mb-3">
        <label for="imagen">Cargue nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">

    </div>
    <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>



</form>

@endsection
