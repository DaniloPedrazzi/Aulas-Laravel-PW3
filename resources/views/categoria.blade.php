@extends('template.default')
@section('content')

    <section>
        <h1>Categoria</h1>
        @foreach ($categoria as $c)
            <h1>{{$c->categoria}}</h1>
            <spam>{{$c->idCategoria}}</spam>
        @endforeach
    </section>
    <section>
        <form action="{{url('/categoria/inserir')}}" method="post"><br>
            {!! csrf_field() !!}
            <div>
                <input type="text" placeholder="Categoria" name="txt_Categoria" value="<?php echo @$_GET['categoria'];?>">
            </div>
            <input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
        </form>
    </section>

@endsection