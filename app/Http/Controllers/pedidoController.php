<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pedidoModel;

class pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = pedidoModel::all(); //SELECT *
        return view('pedido', compact('pedido'));

        // foreach ($pedido as $c) {
        //     echo "<h1>".$c->idPedido."</h1>";
        //     echo $c->idCliente ."<br>";
        //     echo $c->endereco ."<br>";
        //     echo $c->numero ."<br>";
        //     echo $c->complemento ."<br>";
        //     echo $c->cep ."<br>";
        //     echo $c->idProduto ."<br>";
        //     echo $c->valor ."<br>";
        //     echo $c->produto ."<br>";
        // }
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
