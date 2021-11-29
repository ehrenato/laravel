<!-- herda o código do layout-->
@extends('layout')

{{-- Designa a seção em que esse código irá se encaixar no layout principal --}}
@section('cabecalho')
Temporadas de {{ $serie->nome }}
@endsection

@section('conteudo')
<ul class="list-group">
    @foreach ($temporadas as $temporada)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="/temporadas/{{ $temporada->id }}/episodios">
        Temporada {{ $temporada->numero }}
        </a>
        <span class="badge badge-secondary">
            {{ 0 / $temporada->episodios->count() }}
        </span>
    </li>
    @endforeach
</ul>
@endsection