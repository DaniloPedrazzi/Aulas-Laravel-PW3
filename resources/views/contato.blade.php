@extends('template.default')
@section('content')

    <section>
        <h1>Contato</h1>
    </section>
    <section>
        <form action="" method="post"><br>
            <div>
                <input type="text" placeholder="Nome" name="txt_nome" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="Email" name="txt_email" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="Telefone" name="txt_fone" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="Mensagem" name="txt_mensagem" value="<?php echo @$_GET['categoria'];?>">
            </div>
            <input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Enviar">
        </form>
    </section>

@endsection