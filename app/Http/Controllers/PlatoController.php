<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Plato;
use App\Models\Ingrediente;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos=Plato::all();
        
        return view('plato.index')->with('platos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['ingredientes']= DB::table('ingredientes')->get();
        
        return view('plato.create',$datos);
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
        //dd($request);
        $info_plato = request()->all();
        
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $info_plato['image'] = "$profileImage";
        }
         
         //dd($info_plato);
         
         $plato=Plato::create($info_plato);

        $ingredientes=$request->ingrediente_id;
        $arr_ingredientes=Ingrediente::find($ingredientes);
        $plato->ingredientes()->attach($arr_ingredientes);



        // $datos=Plato::all();
         return redirect()->route('plato.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function show(Plato $plato)
    {
        $id= Plato::find($plato);

        return view('plato.index',['platos'=>$id]);
    }
    // public function showw(Plato $plato)
    // {
    //     $id= Plato::find($plato);
    //     return view('plato.index',['platos'=>$id]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function edit(Plato $plato)
    {
        
        $ingredientes=Ingrediente::all();
        //dd($plato);
        return view('plato.edit')->with('plato',$plato)->with('ingredientes',$ingredientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Plato $plato)
     {
       // dd($request);
        $plato= Plato::find($request->id);
        
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        
        

        $plato->update($plato);
    
        $ingredientes=$request->ingrediente_id;

        $arr_ingredientes=Ingrediente::find($ingredientes);
        $plato->ingredientes()->detach();
        $plato->ingredientes()->attach($arr_ingredientes);
        
        return redirect()->route('plato.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $plato=Plato::find($id);
        
        
        
        $image_path = public_path('image/'.$plato->image);
        if ($plato->image=="null") {
            
            unlink($image_path);
        }
        
        
        Plato::destroy($id);
        return redirect('plato');
    }

    public function inicio()
    {   
        $datos['platos']= DB::table('platos')->get();
        $datos['ingredientes']= DB::table('ingredientes')->get();
        return view('inicioplatos',$datos);
    }
}
