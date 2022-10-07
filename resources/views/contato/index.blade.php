@extends('layout.app')
@section('title','Listagem de Contatos')
@section('content')
    <h1>Listagem de Contatos</h1>
    @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{Session::get('mensagem')}}
        </div>
    @endif
    {{Form::open(['url' => ['contatos/buscar']])}}
    <div class="row">
        <div class="col-sm-3">
            <a class="btn btn-success" href="{{url('contatos/create')}}">Criar novo Contato</a>
        </div>
        <div class="col-sm-9">
            <div class="input-group ml-5">
                {{Form::text('busca', $busca, ['class' => 'from-control', 'required', 'placeholder' => 'Buscar'])}}
                &nbsp;
                <span class="input-group-btn">
                    {{Form::submit('Buscar', ['class' => 'btn btn-secondary'])}}
                </span>
            </div>
        </div>
    </div>
    {{Form::close()}}
    <br><br>
    <table class="table table-striped">
        @foreach ($contatos as $contato)
            <tr>
                <td><a href="{{url('contatos/'.$contato->id)}}">{{$contato->nome}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection