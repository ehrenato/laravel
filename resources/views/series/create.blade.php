@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection
       
    @section('conteudo')
        <form method="post">
           <div class="form-group">
               <label for="nome" class="">Nome</label>
               <input class="form-control" type="text" name="nome">
           </div>

           <button class="btn btn-primary">Adicionar</button>
        </form>

        @endsection