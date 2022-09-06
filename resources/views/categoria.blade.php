@extends('template.default')
@section('content')

    <section>
        <h1>Categoria</h1>
        @foreach ($categoria as $c)
            <h1>{{$c->categoria}}</h1>
            <h3>{{$c->idCategoria}}</h3>
        @endforeach
    </section>

@endsection