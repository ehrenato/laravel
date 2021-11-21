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
           <div class="form-group">
               <label for="nome" class="">Nome</label>
               <input class="form-control" type="text" name="nome">
           </div>

           <button class="btn btn-primary">Adicionar</button>
        </form>

        @endsection