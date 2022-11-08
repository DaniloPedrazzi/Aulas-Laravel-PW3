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
        return redirect()->action('produtoController@index');
    }

    public function edit($id)
    {
        $produto = produtoModel::find($id);
        $title  = "Editar Nome {$produto->produto}";
        $title  = "Editar Valor {$produto->valor}";
        return view('produto-editar',compact('titles', 'produto'));
    }

    public function update(Request $request, $id)
    {
        $categoria = produtoModel::find($id);
        $categoria->update(['produto'=>$request->txt_produto]);
        $categoria->update(['valor'=>$request->txt_valor]);
        return redirect()->action('produtoController@index');
    }

}
