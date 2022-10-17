@extends('layout.app')
@section('title','Criar novo Contato')
@section('content')
    <h1>Cadastrar novo Livro</h1>
    {{Form::open(['route' => 'livros.store', 'method' => 'POST','enctype'=>'multipart/form-data'])}}
        {{Form::label('titulo', 'Titulo')}}
        {{Form::text('titulo','',['class'=>'form-control','required','placeholder' => 'Titulo do Livro'])}}
        {{Form::label('descricao', 'Descricão')}}
        {{Form::text('descricao','',['class'=>'form-control','required','placeholder' => 'Descrição'])}}
        {{Form::label('autor', 'Autor')}}
        {{Form::text('autor','',['class'=>'form-control','required','placeholder' => 'Autor'])}}
        {{Form::label('editora', 'Editora')}}
        {{Form::text('editora','',['class'=>'form-control','required','placeholder' => 'Editora'])}}
        {{Form::label('ano', 'Ano')}}
        {{Form::text('ano','',['class'=>'form-control','required','placeholder' => 'Ano'])}}
        {{Form::label('foto', 'Foto')}}
        {{Form::file('foto',['class'=>'form-control','id'=>'foto'])}}
        <br>
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        {!!Form::button('Cancelar', ['onclick' => 'javascript:history.go(-1)', 'class' => 'btn btn-secondary'])!!}
    {{Form::close()}}
@endsection