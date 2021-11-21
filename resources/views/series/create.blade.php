@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection
       
    @section('conteudo')

    {{-- bloco que verifica erros, percorre os erros e exibe-os na tela ($errors é varial padrão)--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}
                </li>
                @endforeach
            </ul>
        </div>
    @endif
  
      
        <form method="post">
            @csrf     {{-- proteção de dados --}}

        <div class="row">
           <div class="col col-8">
               <label for="nome">Nome</label>
               <input class="form-control" type="text" name="nome">
           </div>

           <div class="col col-2">
               <label for="nome">Nº de Temporadas</label>
               <input class="form-control" type="number" name="num_temporadas">
           </div>

           <div class="col col-2">
               <label for="nome">Ep. por Temporadas</label>
               <input class="form-control" type="number" name="epi_temporada">
           </div>

        </div>

           <button class="btn btn-primary mt-2">Adicionar</button>
        </form>

        @endsection