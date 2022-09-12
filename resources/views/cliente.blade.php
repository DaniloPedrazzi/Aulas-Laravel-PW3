@extends('template.default')
@section('content')

    <section>
        <h1>Cliente</h1>
        @foreach ($cliente as $c) 
            <h1>{{$c->nome}}</h1>
            <spam>{{$c->dtNasc}}</spam><br>
            <spam>{{$c->estadoCivil}}</spam><br>
            <spam>{{$c->endereco}}</spam><br>
            <spam>{{$c->numero}}</spam><br>
            <spam>{{$c->complemento}}</spam><br>
            <spam>{{$c->cep}}</spam><br>
            <spam>{{$c->cidade}}</spam> <br>
            <spam>{{$c->estado}}</spam> <br>
            <spam>{{$c->rg}}</spam> <br>
            <spam>{{$c->cpf}}</spam> <br>
            <spam>{{$c->email}}</spam> <br>
            <spam>{{$c->fone}}</spam> <br>
            <spam>{{$c->celular}}</spam> <br>
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

        <form action="<?php echo $action?>" method="post">
            <div>
                <input type="text" placeholder="Nome" name="txt_nome" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Data de Nascimento" name="txt_dtNasc" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Estado Civil" name="txt_estadoCivil" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Endereço" name="txt_endereco" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Número" name="txt_numero" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Complemento" name="txt_complemento" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="CEP" name="txt_cep" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Cidade" name="txt_cidade" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Estado" name="txt_estado" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="RG" name="txt_rg" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="CPF" name="txt_cpf" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Email" name="txt_email" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Telefone" name="txt_fone" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Celular" name="txt_celular" value="<?php echo @$_GET['categoria'];?>">
            </div>
            <input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
        </form>
    </section>

@endsection