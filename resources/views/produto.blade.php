@extends('template.default')
@section('content')

    <section>
        <h1>Produto</h1>
        @foreach ($produto as $p) 
            <center>
            <table>
                <tr>
                    <th>Produto</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>{{$p->produto}}</td>
                    <td>{{$p->valor}}</td>
                    <td><a href="/produto/exclude/{{$p->idProduto}}" style="color: red">Excluir</a></td>
                    <td><a href="/produto/edit/{{$p->idProduto}}/editar" style="color: yellow">Editar</a></td>
                </tr>
            </table>
            </center>
        @endforeach
    </section>
    <section>
        <form action="{{url('/produto/inserir')}}" method="post"><br>
        {!! csrf_field() !!}
            <div>
                <input type="text" placeholder="Produto" name="txt_produto" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="Valor" name="txt_valor" value="<?php echo @$_GET['categoria'];?>">
            </div>
            <input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
        </form>
    </section>

@endsection