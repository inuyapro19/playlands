<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlanRequest;
use App\Planes;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan=Planes::all();
        return view('planes.index')->with('plan',$plan);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanRequest $request)
    {
        $file=$request->imagen;
        $file->move('uploads/plan',$request->imagen->getClientOriginalName());
        //$imagen=$file->store('plan');
        $plan=new Planes();
        $plan->nombre_plan=$request->nombre_plan;
        $plan->imagen=$request->imagen->getClientOriginalName();
        $plan->descripcion=$request->descripcion;
        $plan->precio_plan=$request->precio_plan;
        $plan->cantidad_per=$request->cantidad_per;
        $plan->save();

        return redirect()->route('planes.index')->with('success', true)->with('message','Plan creado correctamente');
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
        $plan=Planes::find($id);
        return view('planes.edit',compact('plan'));
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
      if($request->imagen!='')
      {
        $file=$request->imagen;
        $imagen= $file->move('uploads/plan',$request->imagen->getClientOriginalName());
        Planes::find($id)->update([
            'nombre_plan'=>$request->nombre_plan,
            'imagen'=>$request->imagen->getClientOriginalName(),
            'descripcion'=>$request->descripcion,
            'precio_plan'=>$request->precio_plan,
            'cantidad_per'=>$request->cantidad_per
            ]);
        return redirect()->route('planes.index');
        return redirect()->route('planes.index')->with('success', true)->with('message','Plan actualizado correctamente');
      }

      else
      {
        Planes::find($id)->update([
            'nombre_plan'=>$request->nombre_plan,            
            'descripcion'=>$request->descripcion,
            'precio_plan'=>$request->precio_plan,
            'cantidad_per'=>$request->cantidad_per
            ]);
        return redirect()->route('planes.index')->with('success', true)->with('message','Plan actualizado correctamente');
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
        $plan = Plan::find($id);
        $nombre_imagen= $plan->imagen;
        $direccion_archivo = public_path().'/uploads/plan/'.$nombre_imagen;
        \File::delete($direccion_archivo);

        Planes::find($id)->delete();
        return redirect()->route('planes.index');
        return redirect()->route('planes.index')->with('success', true)->with('message','Plan eliminado correctamente');
    }
}
