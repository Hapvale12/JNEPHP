<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscripcionesFormMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class InscripcionesController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre'    => ['required', 'string', 'max:20', 'regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/'],
            'apellidos' => ['required', 'string', 'max:20', 'regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/'],
            'dni'       => ['required', 'string', 'min:8', 'max:9', 'regex:/^\d{8,9}$/'],
            'telefono'  => ['required', 'string', 'max:9', 'regex:/^9\d{8}$/'],
            'email'     => ['required', 'string', 'email'], 
            'message'   => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Los datos proporcionados no son válidos para la inscripción.',
                'errors' => $validator->errors()
            ], 422);
        }

        $validatedData = $validator->validated();

        try {
            // *** CAMBIO CLAVE AQUÍ: Enviar con la nueva clase Mailable y al correo de inscripciones ***
            Mail::to('jordon.mccullough17@ethereal.email')->send(new InscripcionesFormMail($validatedData)); 

            return response()->json(['message' => '¡Tu inscripción ha sido enviada correctamente! Nos pondremos en contacto contigo pronto.']);

        } catch (\Exception $e) {
            Log::error('Error al enviar correo del formulario de inscripciones: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
            return response()->json(['message' => 'Hubo un problema al procesar tu inscripción. Por favor, inténtalo de nuevo más tarde.'], 500);
        }
    }
}