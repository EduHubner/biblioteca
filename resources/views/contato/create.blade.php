@extends('layout.app')
@section('title','Criar novo Contato')
@section('content')
    <h1>Criar novo Contato</h1>
    {{Form::open(['route' => 'contatos.store', 'method' => 'POST','enctype'=>'multipart/form-data'])}}
        {{Form::label('nome', 'Nome')}}
        {{Form::text('nome','',['class'=>'form-control','required','placeholder' => 'Nome Completo'])}}
        {{Form::label('email', 'e-mail')}}
        {{Form::text('email','',['class'=>'form-control','required','placeholder' => 'e-mail' , 'pattern' => '[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?'])}}
        {{Form::label('telefone', 'Telefone')}}
        {{Form::text('telefone','',['class'=>'form-control','required','placeholder' => '(99) 99999-9999' , 'pattern' => '(\([0-9]{2}\))\s([9]{1})?([0-9]{4,5})-([0-9]{4})'])}}
        {{Form::label('cidade', 'Cidade')}}
        {{Form::text('cidade','',['class'=>'form-control','required','placeholder' => 'Cidade'])}}
        {{Form::label('estado', 'Estado')}}
        {{Form::text('estado','',['class'=>'form-control','required','placeholder' => 'Estado'])}}
        {{Form::label('foto', 'Foto')}}
        {{Form::file('foto',['class'=>'form-control','id'=>'foto'])}}
        <br>
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        {!!Form::button('Cancelar', ['onclick' => 'javascript:history.go(-1)', 'class' => 'btn btn-secondary'])!!}
    {{Form::close()}}
@endsection