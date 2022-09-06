@extends('template.default')
@section('content')

    <section>
        <h1>Cliente</h1>
        @foreach ($cliente as $c) 
            <h1>{{$c->nome}}</h1>
            {{$c->dtNasc}}<br>
            {{$c->estadoCivil}}<br>
            {{$c->endereco}}<br>
            {{$c->numero}}<br>
            {{$c->complemento}}<br>
            {{$c->cep}}<br>
            {{$c->cidade <br>
            {{$c->estado <br>
            {{$c->rg <br>
            {{$c->cpf <br>
            {{$c->email <br>
            {{$c->fone <br>
            {{$c->celular <br>
        @endforeach
    </section>

@endsection