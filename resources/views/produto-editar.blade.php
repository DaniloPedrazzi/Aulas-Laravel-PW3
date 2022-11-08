@extends('template.default')
@section('content')

    <section>
        <h1>Categoria</h1>
    </section>
    <section>
        <form action="{{url('/produto/alterar/'.$produto->idProduto)}}" method="post"><br>
            {!! csrf_field() !!}
            <div>
                <input type="text" placeholder="Produto" name="txt_produto" value="{{$produto->produto}}"><br>
                <input type="text" placeholder="Valor" name="txt_valor" value="{{$produto->valor}}">
            </div>
            <input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
        </form>
    </section>

@endsection