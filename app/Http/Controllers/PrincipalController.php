<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use App\Slider;
use App\Contacto;
use App\Taller;
use App\Planes;
use App\Album;
use App\Galeria;
use App\Documento;
use Mail;
use App\Mail\ContactoMail;

class PrincipalController extends Controller
{
    public function index()
    {
    	$slider=Slider::orderBy('position','asc')->limit(6)->get();
    	$contacto=Contacto::find(1);
    	return view('front.inicio',compact('contacto'))->with([
    		'slider'=>$slider,
    		]);
    }

    public function quienes_somos()
    {
    	$contacto=Contacto::find(1);
    	return view('front.quienes_somos',compact('contacto'));
    }

    public function after_school()
    {
       $contacto=Contacto::find(1);
       $taller=Taller::find(1);
       $documentos=Documento::all();
        return view('front.after_school',compact(['contacto','taller','documentos'])); 
    }

    public function planes()
    {
        $contacto=Contacto::find(1);
       $plan=Planes::all();
        return view('front.planes',compact(['contacto']))
                    ->with('planes',$plan); 
    }


public function albums()
{
         $contacto=Contacto::find(1);
        $gal=Album::all();        
        return view('front.albums',compact(['contacto']))->with(['gal'=>$gal]); 
}
    public function galeria($id)
    {
        $contacto=Contacto::find(1);
        $albums=Album::find($id);
        $gal=Galeria::where(['albums_id'=>$id])->get();
       // $galeria=Galeria::all();
        return view('front.galeria',compact(['contacto','albums']))->with(['gal'=>$gal]); 
    }

    public function contacto()
    {
       $contacto=Contacto::find(1);
       
        return view('front.contacto',compact(['contacto'])); 
    }

     public function enviar_mail(ContactoRequest $request)
    {
      /*  
        $nombre=$request->nombre;
        $telefono=$request->telefono;
        $ciudad=$request->ciudad;
        $email=$request->email;
        $mensaje=$request->mensaje;

        Mail::to([$email,'jeanette.acevedo1977@gmail.com'],'PlayLands Contacto')->send(new ContactoMail($nombre,$telefono,$ciudad,$email,$mensaje)); */

        Mail::send('mail.mail',
        array( // puedes poner [] y representa un array
           'nombre' => $request->get('nombre'),//es los mismo que usar $request->nombre
           'telefono' => $request->get('telefono'),
           'ciudad' => $request->get('ciudad'),
           'email' => $request->get('email'),
           'mensaje' => $request->get('mensaje')
        ), function($message)
        {
       $message->to('vivi_m_b2@hotmail.com', 'Admin')->subject('Formulario contacto Playland');
        });
 
    return back()->with('success', 'Gracias por contactarnos!');

    }


}
