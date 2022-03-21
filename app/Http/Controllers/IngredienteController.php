<?php

namespace App\Http\Controllers;
use App\Models\Plato;
use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos=Ingrediente::all();
        
        return view('ingrediente.index')->with('ingredientes',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingrediente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
         //  $datos=request()->all();
         $datos = request()->except('_token');
         Ingrediente::insert($datos);
         $datos=Ingrediente::all();
         return view('ingrediente.index')->with('ingredientes',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function show(Ingrediente $ingrediente)
    {
        $id= Ingrediente::find($ingrediente);
        return view('ingrediente.index',['ingredientes'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingrediente=Ingrediente::findORFail($id);
        return view('ingrediente.edit',compact('ingrediente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except('_token','_method');
        Ingrediente::where('id','=',$id)->update($datos);
        //$ingrediente=Ingrediente::findORFail($id);
        //return view('ingrediente.edit',compact('ingrediente'));
        return redirect('ingrediente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ingrediente::destroy($id);
        return redirect('ingrediente');
    }
}
