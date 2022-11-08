@extends('template.default')
@section('content')

    <section>
        <h1>Categoria</h1>
        
        @foreach ($categoria as $c)
            <center>
                <table>
                    <tr>
                        <th>Categoria</th>
                        <th>ID</th>
                    </tr>
                    <tr>
                        <td>{{$c->categoria}}</td>
                        <td>{{$c->idCategoria}}</td>
                        <td><a href="/categoria/exclude/{{$c->idCategoria}}" style="color: red">Excluir</a></td>
                        <td><a href="/categoria/edit/{{$c->idCategoria}}/editar" style="color: yellow">Editar</a></td>
                    </tr>
                </table>
            </center>
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