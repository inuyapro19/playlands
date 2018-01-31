<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use Image;
use Yajra\Datatables\Datatables;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::orderBy('position','asc')->get();
        return view('slider.index')->with('slider',$slider);
    }

    public function data(Datatables $datatables)
    {
        return $datatables->eloquent(Slider::select('id','imagen','link'))
                          ->addColumn('action', 'eloquent.tables.sliders-action')
                          ->rawColumns([4])
                          ->make();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('imagen')){
             if (!file_exists('uploads/slider/')) {
                mkdir('uploads/slider/', 777, true);
            }
            $imagen=Image::make($request->imagen->getRealPath())->resize(1920, 780)->save('uploads/slider/'.$request->imagen->getClientOriginalName());
            $filename=$request->imagen->getClientOriginalName();

            Slider::create([
                    'imagen'=>$filename,
                    'link'=>''
                ]);

            return redirect()->route('slider.index')->with('success', true)->with('message','Slider creado correctamente');
        }
        else
        {
            echo 'File not UPLOAD';
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
        $slider=Slider::find($id);
        return view('slider.edit',compact('slider'));
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
        $file=$request->imagen;        
        $imagen=$file->move('uploads/slider',$file->getClientOriginalName());
        Slider::find(['id'=>$id])->update([
            'imagen'=>$file->getClientOriginalName(),
            'link'=>'vacio'
            ]);
        
        return redirect()->route('slider.index')->with('success', true)->with('message','Slider actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $nombre_imagen= $slider->imagen;
        $direccion_archivo = public_path().'/uploads/slider/'.$nombre_imagen;
        \File::delete($direccion_archivo);

        Slider::find($id)->delete();
        return redirect()->route('slider.index')->with('success', true)->with('message','Slider eliminado correctamente');
    }
}
