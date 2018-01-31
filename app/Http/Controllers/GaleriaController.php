<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Galeria;

use App\Album;
use Image;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $gal=Galeria::where(['albums_id'=>$id])->get();
        //dd($gal);
       // $data=array('gal'=>$gal,'id'=>$id);
       return view('album.galeria.index')->with(['gal'=>$gal,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('album.galeria.create')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
     foreach ($request->file as $photo) {
             
            
            $photo->move('uploads/galeria' , $photo->getClientOriginalName());
              
            Galeria::create([                
                'imagen' => $photo->getClientOriginalName(),                
                'albums_id'=>$request->albums_id
            ]);

               
        }     

  
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
    public function destroy(Request $request,$id)
    {
        $galeria = Galeria::find($id);
        $nombre_imagen= $galeria->imagen;
        $direccion_archivo = public_path().'/uploads/galeria/'.$nombre_imagen;
        \File::delete($direccion_archivo);

        $el=$request->id;
        Galeria::find($id)->delete();
        return redirect()->route('galerias.index',$el)->with('success', true)->with('message','Imagen eliminada correctamente');
    }
}
