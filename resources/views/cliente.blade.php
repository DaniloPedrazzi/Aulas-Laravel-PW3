@extends('template.default')
@section('content')

    <section>
        <h1>Cliente</h1>
        @foreach ($cliente as $c)
            <center>
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Nasc</th>
                        <th>Estado Civil</th>
                        <th>Endereço</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>CEP</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                    </tr>
                    <tr> 
                        <td>{{$c->nome}}</td>
                        <td>{{$c->dtNasc}}</td>
                        <td>{{$c->estadoCivil}}</td>
                        <td>{{$c->endereco}}</td>
                        <td>{{$c->numero}}</td>
                        <td>{{$c->complemento}}</td>
                        <td>{{$c->cep}}</td>
                        <td>{{$c->cidade}}</td>
                        <td>{{$c->estado}}</td>
                        <td>{{$c->rg}}</td>
                        <td>{{$c->cpf}}</td>
                        <td>{{$c->email}}</td>
                        <td>{{$c->fone}}</td>
                        <td>{{$c->celular}}</td>
                        <td><a href="/cliente/exclude/{{$c->idCliente}}" style="color: red">Excluir</a></td>
                    </tr>
                </table>
            </center>
        @endforeach
    </section>
    <section>

        <form action="{{url('/cliente/inserir')}}" method="post"><br>
        {!! csrf_field() !!}
            <div>
                <input type="text" placeholder="Nome" name="txt_nome" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Data de Nascimento" name="txt_dtNasc" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Estado Civil" name="txt_estadoCivil" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="Endereço" name="txt_endereco" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Número" name="txt_numero" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Complemento" name="txt_complemento" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="CEP" name="txt_cep" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Cidade" name="txt_cidade" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Estado" name="txt_estado" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="RG" name="txt_rg" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="CPF" name="txt_cpf" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Email" name="txt_email" value="<?php echo @$_GET['categoria'];?>"><br>
                <input type="text" placeholder="Telefone" name="txt_fone" value="<?php echo @$_GET['categoria'];?>">
                <input type="text" placeholder="Celular" name="txt_celular" value="<?php echo @$_GET['categoria'];?>">
            </div>
            <input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
        </form>
    </section>

@endsection