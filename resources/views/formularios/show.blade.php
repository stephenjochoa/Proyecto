@extends ('layouts.app')
@section('title', 'detalles formularios')

@section('content')

<div class="text-center">

    <img style="height: 400px; width:300px;margin:20px" src="{{ Storage:: url($formulario->imagen)}}" class="card-img-top mx-auto d-block" alt="">
    <div class="card-body"  >
        <p class="card-title">{{$formulario->descripcion_formulario}}</p>
        <br>
    </div>
    <a href="/formularios/{{$formulario->id}}/edit" class="btn btn-dark"> Editar formulario</a>
</div>

@endsection('content')
