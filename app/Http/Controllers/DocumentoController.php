<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Documento;
use Validator;
use App\Http\Controllers\File;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos=Documento::all();
        return view('documento.index')->with('documentos',$documentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'nombre_documento' => 'required',
            'archivo' => 'required'
        ],
        [
            'required' => 'Este campo es requerido',
        ]
        );
        if ($validator->fails()) 
        {
            return redirect()->route('documentos.create')
                                ->withErrors($validator)
                                ->withInput();
        }
        $file=$request->archivo;
        $file->move('uploads/documentos',$request->archivo->getClientOriginalName());
        $documento=new Documento();
        $documento->nombre=$request->nombre_documento;
        $documento->nombre_archivo=$request->archivo->getClientOriginalName();
        $documento->save();

        return redirect()->route('documentos.index')->with('success', true)->with('message','Documento almacenado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $documento=Documento::find($id);
        return view('documento.edit',compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentoRequest $request, $id)
    {
        if($request->nombre!='')
      {
        $file=$request->archivo;
        $pdf = $file->move('uploads/documentos',$request->archivo->getClientOriginalName());
        Documento::find($id)->update([
            'nombre_archivo'=>$request->archivo->getClientOriginalName(),
            ]);
        return redirect()->route('documentos.index');
      }

      else
      {
        Documentos::find($id)->update([
            'nombre'=>$request->nombre_documento,            
            ]);
        return redirect()->route('documentos.index')->with('success', true)->with('message','Documento actualizado correctamente');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $archivo = Documento::find($id);
        $nombre= $archivo->nombre_archivo;
        $direccion_archivo = public_path().'/uploads/documentos/'.$nombre;
        \File::delete($direccion_archivo);
        Documento::find($id)->delete();        
        return redirect()->route('documentos.index')->with('success', true)->with('message','Documento eliminado correctamente');
    }
}
