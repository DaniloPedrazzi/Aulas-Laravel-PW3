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

        foreach ($cliente as $c) {
            echo "<h1>".$c->nome."</h1>";
            echo $c->dtNasc ."<br>";
            echo $c->estadoCivil ."<br>";
            echo $c->endereco ."<br>";
            echo $c->numero ."<br>";
            echo $c->complemento ."<br>";
            echo $c->cep ."<br>";
            echo $c->cidade ."<br>";
            echo $c->estado ."<br>";
            echo $c->rg ."<br>";
            echo $c->cpf ."<br>";
            echo $c->email ."<br>";
            echo $c->fone ."<br>";
            echo $c->celular ."<br>";
            echo "<br>";
        }
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
