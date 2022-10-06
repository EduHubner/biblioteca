@extends('layout.app')
@section('title','Listagem de Contatos')
@section('content')
    <h1>Listagem de Contatos</h1>
    <a href="{{url('contatos/create')}}">Criar novo Contato</a>
    <ul>
    @foreach ($contatos as $contato)
        <li><a href="{{url('contatos/'.$contato->id)}}">{{$contato->nome}}</a></li>
    @endforeach
    </ul>
@endsection