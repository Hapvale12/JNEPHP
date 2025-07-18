@extends('layouts.app')

@section('title', 'Información sobre DNE')

@section('content')

<!-- Espacio entre franjas -->
    <div class="h-11 bg-transparent"></div>

<x-escaleraInteractiva :imagen-inicial="request('categoria', 'info')" /> 

<!-- Espacio entre franjas -->
    <div class="h-6 bg-transparent"></div>
@endsection
