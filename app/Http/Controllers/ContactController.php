<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Para manejar las peticiones HTTP
use Illuminate\Support\Facades\Mail; // Para enviar correos electrónicos usando el Facade Mail
use App\Mail\ContactFormMail; // Para tu clase Mailable personalizada
use Illuminate\Support\Facades\Session; // Para usar Session::flash (si aún usas flash messages en redirecciones tradicionales)
use Illuminate\Support\Facades\Log; // Para registrar errores
use Illuminate\Support\Facades\Validator; // Para usar el validador de datos manualmente (Validator::make)

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre'    => ['required', 'string', 'max:20', 'regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/'],
            'apellidos' => ['required', 'string', 'max:20', 'regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/'],
            'dni'       => ['required', 'string', 'min:7', 'max:9', 'regex:/^\d{7,9}$/'],
            'telefono'  => ['required', 'string', 'max:9', 'regex:/^9\d{8}$/'],
            'email'     => ['required', 'string', 'email'], // Asegúrate de que sea 'required'
            'message'   => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Los datos proporcionados no son válidos.',
                'errors' => $validator->errors()
            ], 422); // <-- Importante: código 422 para validación
        }

        $validatedData = $validator->validated();

        try {
            Mail::send(new ContactFormMail($validatedData)); // Asegúrate de que App\Mail\ContactFormMail exista y esté importada

            return response()->json(['message' => '¡Tu mensaje ha sido enviado correctamente! Nos pondremos en contacto contigo pronto.']); // <-- Respuesta JSON para éxito

        } catch (\Exception $e) {
            Log::error('Error al enviar correo del formulario de contacto: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
            return response()->json(['message' => 'Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.'], 500); // <-- Respuesta JSON para error
        }
    }
}