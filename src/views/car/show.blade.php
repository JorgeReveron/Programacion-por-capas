@extends("layouts.master")

@section("title", "List Car")

@section("subtitle", "Listado de coches")

@section("container")
<p>Nombre: {{$name}}</p>
<p>Matricula: {{$matricula}}</p>
@endsection