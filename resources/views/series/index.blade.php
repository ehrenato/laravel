<!-- herda o código do layout-->
@extends('layout')

{{-- Designa a seção em que esse código irá se encaixar no layout principal --}}
@section('cabecalho')
Séries
@endsection

@section('conteudo')
@if(!@empty($mensagem))
<div class="alert alert-success">
{{ $mensagem }}
</div>
@endif
<!-- Adicionar botão com outra rota. -->
<a href="{{route('criar_serie')}}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
@foreach ($series as $serie)
<li class="list-group-item d-flex justify-content-between align-items-center"> 
{{$serie->nome; }} {{-- Sintaxe do Blade que substitui o php--}}

<span class="d-flex">
        {{-- Rota para associar o id com a temporada --}}
<a href="/series/{{ $serie->id }}/temporadas" class="btn btn-info btn-sm mr-2">
        <i class="fas fa-external-link-alt"></i>
</a>

<Form method="POST" action="/series/remover/{{$serie->id}}" onsubmit="return confirm('Deseja mesmo apagar?')">
        @csrf
        <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
</Form>
</span>
</li> 
@endforeach
</ul>

@endsection