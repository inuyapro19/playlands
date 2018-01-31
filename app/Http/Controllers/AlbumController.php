<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Album;
use Image;
use Validator;
use App\Http\Controllers\File;
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $al=Album::all();
        return view('album.index')->with('album',$al);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.create');
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
            'nombre' => 'required',
            'imagen' => 'required|image|dimensions:width<=5000,height<=5000'
        ],
        [
            'required' => 'Este campo es requerido',
            'image' => 'El archivo seleccionado debe ser una imagen',
            'dimensions' => 'La imagen seleccionada supera el tamaño permitido'
        ]
        );
        if ($validator->fails()) 
        {
            return redirect()->route('albums.create')
                                ->withErrors($validator)
                                ->withInput();
        }

             if (!file_exists('uploads/albums/')) {
                mkdir('uploads/albums/', 777, true);
            }
            $imagen=Image::make($request->imagen->getRealPath())->resize(500, 250)->crop(500,250)->save('uploads/albums/'.$request->imagen->getClientOriginalName());
            $filename=$request->imagen->getClientOriginalName();

            Album::create([
                    'nombre'=>$request->nombre,
                    'descripcion'=>'file',
                    'imagen'=>$filename,
                    
                ]);

            return redirect()->route('albums.index')->with('success', true)->with('message','Album almacenado correctamente');


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
        $album=Album::find($id);
        return view('album.edit',compact('album'));
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
           if($request->hasFile('imagen')){
             if (!file_exists('uploads/albums/')) {
                mkdir('uploads/albums/', 777, true);
            }
            $imagen=Image::make($request->imagen->getRealPath())->resize(500, 250)->crop(500,250)->save('uploads/albums/'.$request->imagen->getClientOriginalName());
            $filename=$request->imagen->getClientOriginalName();

            Album::find($id)->update([
                    'nombre'=>$request->nombre,
                    'descripcion'=>'file',
                    'imagen'=>$filename,
                    
                ]);

            return redirect()->route('albums.index')->with('success', true)->with('message','Album actualizado correctamente');
        }
        else
        {
             Album::find($id)->update([
                    'nombre'=>$request->nombre,
                    'descripcion'=>'file',                   
                    
                ]);

            return redirect()->route('albums.index')->with('success', true)->with('message','Album actualizado correctamente');
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
        $album = Album::find($id);
        $nombre_imagen= $album->imagen;
        $direccion_archivo = public_path().'/uploads/albums/'.$nombre_imagen;
        \File::delete($direccion_archivo);
//
        Album::find($id)->delete();
        return redirect()->route('albums.index')->with('success', true)->with('message','Album eliminado correctamente');
    }
}
