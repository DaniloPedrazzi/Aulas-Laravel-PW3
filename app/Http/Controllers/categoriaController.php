<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoriaModel;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //
    public function index()
    {
        $categoria = categoriaModel::all();
        // $categoria = categoriaModel::where('idCategoria',3)->get();
        // $categoria = categoriaModel::where('categoria','Brinquedo')->get();        
        // $categoria = categoriaModel::where('idCategoria','>',2)->get();
        // $contato = categoriaModel::where('categoria','=','tecnologia')->get();
        // $categoria = categoriaModel::where('idCategoria','>',0)->orderBy('categoria','desc')->get();
        // $categoria = categoriaModel::where('idCategoria','>',0)->orderBy('categoria','asc')->get(); 
        
        return view('categoria',compact('categoria'));
    }
    
    public function store(Request $request){
        $categoria = new categoriaModel();
        $categoria -> categoria = $request->txt_Categoria;
        $categoria -> save();
        return redirect("/categoria");
    }
    
    public function destroy($id){
        categoriaModel::where('idCategoria', $id)->delete();
        return redirect()->action('categoriaController@index');
    }
    
    public function edit($id)
    {
        $categoria = categoriaModel::find($id);
        $title  = "Editar Categoria {$categoria->categoria}";
        return view('categoria-editar',compact('titles', 'categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = categoriaModel::find($id);
        $categoria->update(['categoria'=>$request->txt_Categoria]);
        return redirect()->action('categoriaController@index');
    }
}
