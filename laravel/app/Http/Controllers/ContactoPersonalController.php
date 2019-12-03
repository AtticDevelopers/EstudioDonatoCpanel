<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Http\Controllers\Helpers\DatabaseHelper;

class ContactoPersonalController extends Controller
{

    public function postContactoPersonal(Request $request){

      $this->validate($request, ['email' => 'required|email']);

      $data = array(
        'email' => $request->email,
        'nombre' => $request->nombre,
        'telefono' => $request->telefono,
        'mensaje' => $request->mensaje
      );

      Mail::send('emails.contactoPersonalMail',$data,function($message) use ($data) {
        $message->from('atticdevelopers@gmail.com');
        $message->to($request->emailEspecialista);
        $message->subject('[estudiodonato.com.ar]: Nuevo mensaje de '.$data['nombre']);
      });

      Session::flash('success','Su mail ha sido enviado');

      return redirect('/especialistas');

    }

    public function getContactoPersonalView(Request $request){
      $idEspecialista = $request->query('id');
      if(is_null($idEspecialista))
        return redirect('/contacto');
      $database = new DatabaseHelper();
      $especialista = $database->selectID('especialistas',$idEspecialista);
      if($especialista == null)
        return redirect('/contacto');
      return view('contactoPersonal', ['especialista' => $especialista[0],'page' => 'contacto']);
    }
}
