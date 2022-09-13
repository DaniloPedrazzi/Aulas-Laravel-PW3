@extends('template.default')
@section('content')

    <section>
        <h1>Produto</h1>
        @foreach ($produto as $p) 
            <h1>{{$p->produto}}</h1>
            <spam>{{$p->valor}}</spam><br>
        @endforeach
    </section>
    <section>
        <?php
            if(@$_GET['id']){
                $id = $_GET['id'];
                $action="categoria-alterar.php?id=$id";
            }else{
                $action="categoria-salvar.php";
            }
        ?>

        <form action="<?php echo $action?>" method="post"><br>
            <div>
                <input type="text" placeholder="Produto" name="txt_produto" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="Valor" name="txt_valor" value="<?php echo @$_GET['categoria'];?>">
            </div>
            <input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
        </form>
    </section>

@endsection