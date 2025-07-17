<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Asegúrate de que esta línea exista para usar el Facade Mail
use App\Mail\ContactFormMail; // Asegúrate de que esta línea exista para usar tu Mailable
use Illuminate\Support\Facades\Session; // Asegúrate de que esta línea exista para usar Session::flash
use Illuminate\Support\Facades\Log; // Asegúrate de que esta línea exista para usar Log::error

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // 1. Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre'    => ['required', 'string', 'max:20', 'regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/'],
            'apellidos' => ['required', 'string', 'max:20', 'regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/'],
            'dni'       => ['required', 'string', 'min:7', 'max:9', 'regex:/^\d{7,9}$/'],
            'telefono'  => ['required', 'string', 'max:9', 'regex:/^9\d{8}$/'],
            'email'     => ['required', 'email'],
            'message'   => ['required', 'string'],
        ]);

        try {
            // 2. Enviar el correo electrónico
            // Los destinatarios 'dnef@jne.gob.pe' y 'voluntariado@jne.gob.pe' ya están definidos en el Mailable (ContactFormMail)
            Mail::send(new ContactFormMail($validatedData));

            // 3. Redirigir de vuelta con un mensaje de éxito
            Session::flash('success', '¡Tu mensaje de inscripción ha sido enviado correctamente! Nos pondremos en contacto contigo pronto.');
            return redirect()->back();

        } catch (\Exception $e) {
            // 4. Manejar errores
            // En producción, es crucial loguear el error y mostrar un mensaje genérico al usuario.
            Log::error('Error al enviar correo del formulario de inscripción: ' . $e->getMessage());
            Session::flash('error', 'Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.');
            return redirect()->back()->withInput();
        }
    }
}