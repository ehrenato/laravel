<!-- herda o código do layout-->
@extends('layout')

{{-- Designa a seção em que esse código irá se encaixar no layout principal --}}
@section('cabecalho')
Temporadas de {{ $serie->nome }}
@endsection

@section('conteudo')
<ul class="list-group">
    @foreach ($temporadas as $temporada)
    <li class="list-group-item">Temporada {{ $temporada->numero }}</li> 
    @endforeach
</ul>
@endsection