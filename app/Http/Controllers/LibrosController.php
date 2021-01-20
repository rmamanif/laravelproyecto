<?php

namespace App\Http\Controllers;

use App\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['libros']=Libros::paginate(1);

        return view('biblioteca.index',$datos);



    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('biblioteca.create');
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

        //$datosBiblioteca=request()->all();

        $campos=[
            'Titulo' => 'required|string|max:100',
            'Reseña' => 'required|string|max:300',
            'Editorial' => 'required|string|max:100',
            'Autor' => 'required|string|max:100',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

    
        $datosLibros=request()->except('_token');
        
        
        Libros::insert($datosLibros);
       

        //return response()->json($datosLibros);
        return redirect('biblioteca')->with('Mensaje','Libro agregado exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(Libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $libro= Libros::findOrFail($id);

        return view('biblioteca.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $campos=[
            'Titulo' => 'required|string|max:100',
            'Reseña' => 'required|string|max:300',
            'Editorial' => 'required|string|max:100',
            'Autor' => 'required|string|max:100',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);



        $datosLibros=request()->except(['_token','_method']);
        Libros::where('id','=',$id)->update($datosLibros);
       
        //$libro= Libros::findOrFail($id);
        //return view('biblioteca.edit',compact('libro'));

        return redirect('biblioteca')->with('Mensaje','Libro modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Libros::destroy($id);

        return redirect('biblioteca')->with('Mensaje','Libro eliminado');
    }
}
