@extends('template.default')
@section('content')

    <section>
        <h1>Categoria</h1>
    </section>
    <section>
        <form action="{{url('/categoria/alterar/'.$categoria->idCategoria)}}" method="post"><br>
            {!! csrf_field() !!}
            <div>
                <input type="text" placeholder="Categoria" name="txt_Categoria" value="{{$categoria->categoria}}">
            </div>
            <input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
        </form>
    </section>

@endsection