@extends('layout.app')
@section('title','Livro - {{$livro->titulo}}')
@section('content')
    <h1>Livro - {{$livro->titulo}}</h1>
    <ul>
        <li>ID: {{$livro->id}}</li>
        <li>Descricão: {{$livro->descricao}}</li>
        <li>Telefone: {{$livro->autor}}</li>
        <li>Cidade: {{$livro->editora}}</li>
        <li>Estado: {{$livro->ano}}</li>
    </ul>
    {{Form::open(['route' => ['livros.destroy', $livro->id], 'method' => 'DELETE'])}}
    <a href="{{url('livros/'.$livro->id.'/edit')}}" class="btn btn-success">Alterar</a>
    {{Form::submit('Excluir',['class' => 'btn btn-danger', 'onclick' => 'return confirm("Confirmar Exclusão?")'])}}
    <a href="{{url('livros/')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection