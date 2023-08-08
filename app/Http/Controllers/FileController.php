<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArchivosRequest;
use App\Archivo;
use Illuminate\Support\Facades\Storage;

class fileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('archivos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archivos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArchivosRequest $request)
    {
        if($request->hasfile('archivo') != null){
            $archivo = $request->file('archivo');
            $nom_archivo = date('d-m-Y-').$archivo->getClientOriginalName();

            if (Storage::putFileAs('/Archivos/', $request->archivo, $nom_archivo)) {
                $guardar = Archivo::create([
                    'id'            => $request->id,
                    'nom_file'      => $nom_archivo,
                    'rut_file'      => "Archivos/".$nom_archivo,
                    'fecha_upload'  => date('d-m-Y-')
                ]);  
            }

            // return "El Archivo se guardado";
            return redirect()->route('archivos.index')->with('mensaje', 'El archivo se ha creado exitosamente');
    
        }
        return "error, no subiste ningún archivo.";
        // return dd($request);
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
