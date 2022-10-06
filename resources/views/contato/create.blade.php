@extends('layout.app')
@section('title','Criar novo Contato')
@section('content')
    <h1>Criar novo Contato</h1>
    {{Form::open(['route' => 'contatos.store', 'method' => 'POST'])}}
        {{Form::label('nome', 'Nome')}}
        {{Form::text('nome','',['class'=>'form-control','required','placeholder' => 'Nome Completo'])}}
        {{Form::label('email', 'e-mail')}}
        {{Form::text('email','',['class'=>'form-control','required','placeholder' => 'e-mail'])}}
        {{Form::label('telefone', 'Telefone')}}
        {{Form::text('telefone','',['class'=>'form-control','required','placeholder' => '(99) 99999-9999'])}}
        {{Form::label('cidade', 'Cidade')}}
        {{Form::text('cidade','',['class'=>'form-control','required','placeholder' => 'Cidade'])}}
        {{Form::label('estado', 'Estado')}}
        {{Form::text('estado','',['class'=>'form-control','required','placeholder' => 'Estado'])}}
        <br>
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        {!!Form::button('Cancelar', ['onclick' => 'javascript:history.go(-1)', 'class' => 'btn btn-secondary'])!!}
    {{Form::close()}}
@endsection