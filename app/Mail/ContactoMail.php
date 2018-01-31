<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $nombre;
    protected $telefono;

    protected $email;
    protected $ciudad;
    protected $mensaje;

    public function __construct($nombre,$telefono,$ciudad,$email,$mensaje)
    {
      $this->nombre=$nombre;
      $this->telefono=$telefono;
      $this->ciudad=$ciudad;
      $this->email=$email;
      $this->mensaje=$mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      /*  return $this->to('jeanette.acevedo1977@gmail.com')
                     ->view('mail.mail')
                     ->with(['mensaje'=>$this->mensaje,'email'=>$this->email,'nombre'=>$this->nombre,'telefono'=>$this->telefono,'ciudad'=>$this->ciudad]); */
        return $this->to('vivi_m_b2@hotmail.com')
                     ->view('mail.mail')
                     ->with(['mensaje'=>$this->mensaje,'email'=>$this->email,'nombre'=>$this->nombre,'telefono'=>$this->telefono,'ciudad'=>$this->ciudad]);
    }
}
