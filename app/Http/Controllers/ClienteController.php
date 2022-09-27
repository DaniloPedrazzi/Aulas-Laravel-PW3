<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClienteModel;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = ClienteModel::all(); //SELECT *
        return view('cliente', compact('cliente'));
    }

    public function store(Request $request){
        $cliente = new ClienteModel();
        $cliente -> nome = $request->txt_nome;
        $cliente -> dtNasc = $request->txt_dtNasc;
        $cliente -> estadoCivil = $request->txt_estadoCivil;
        $cliente -> endereco = $request->txt_endereco;
        $cliente -> numero = $request->txt_numero;
        $cliente -> complemento = $request->txt_complemento;
        $cliente -> cep = $request->txt_cep;
        $cliente -> cidade = $request->txt_cidade;
        $cliente -> estado = $request->txt_estado;
        $cliente -> rg = $request->txt_rg;
        $cliente -> cpf = $request->txt_cpf;
        $cliente -> email = $request->txt_email;
        $cliente -> fone = $request->txt_fone;
        $cliente -> celular = $request->txt_celular;
        $cliente -> save();
        return redirect("/cliente");
    }

    public function destroy($id){
        ClienteModel::where('idCliente', $id)->delete();
        return redirect("/cliente");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
