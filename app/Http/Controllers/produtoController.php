<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produtoModel;

class produtoController extends Controller
{
    public function index(){
        $produto = produtoModel::all(); //SELECT *
        return view('produto', compact('produto'));
    }

    public function store(Request $request){
        $produto = new produtoModel();
        $produto -> produto = $request->txt_produto;
        $produto -> valor = $request->txt_valor;
        $produto -> save();
        return redirect("/produto");
    }

    public function destroy($id){
        produtoModel::where('idProduto', $id)->delete();
        return redirect("/produto");
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
