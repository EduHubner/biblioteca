@extends('layout.app')
@section('title','Empréstimo - '.$emprestimo->id)
@section('content')
    <div class="card w-50">
        <div class="card-header">
            <h1>Empréstimo - {{$emprestimo->id}}</h1>
        </div>
        <div class="card-body">
                <h3 class="card-title">ID: {{$emprestimo->id}}</h3>
                Data: {{\Carbon\Carbon::$emprestimo->datahora->format('d/m/Y H:i:s')}}
                Contato: {{$emprestimo->contato->nome}}<br/>
                Livro: {{$emprestimo->livro->titulo}}<br/>

                <p class="text">Observação: {{$emprestimo->obs}}</p>
        </div>
        <div class="card-footer">
            {{Form::open(['route' => ['livros.destroy',$livro->id],'method' => 'DELETE'])}}
            @if ($nomeimagem !== "./img/livros/livrosemfoto.webp")
               {{Form::hidden('foto',$nomeimagem)}}
            @endif
            <a href="{{url('livros/'.$livro->id.'/edit')}}" class="btn btn-success">Alterar</a>
            {{Form::submit('Excluir',['class'=>'btn btn-danger','onclick'=>'return confirm("Confirma exclusão?")'])}}
            <a href="{{url('livros/')}}" class="btn btn-secondary">Voltar</a>
            {{Form::close()}}
        </div>
    </div>
@endsection
