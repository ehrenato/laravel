<!-- herda o código do layout-->
@extends('layout')

{{-- Designa a seção em que esse código irá se encaixar no layout principal --}}
@section('cabecalho')
Séries
@endsection
       
    @section('conteudo')
    
                <!-- Adicionar botão com outra rota. -->
        <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

        @foreach ($series as $serie)
        <ul class="list-group">
               <li class="list-group-item"> 
                       {{$serie->nome; }} {{-- Sintaxe do Blade que substitui o php--}}
               </li> 
           @endforeach
        </ul>
    
        @endsection