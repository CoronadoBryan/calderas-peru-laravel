<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller; 
use App\Models\Proyecto;
use App\Models\Presupuesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log; 

class UserSolicitudController extends Controller
{
    public function presupuesto()
    {
        return view('Frontend.formularios.presupuesto');
    }

    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id); // Obtiene el proyecto por ID o lanza un error 404
        return view('Frontend.proyectos.show', compact('proyecto'));
    }

    public function enviarPresupuesto(Request $request)
    {
        Log::info('Iniciando el proceso de envío de presupuesto.');

        try {
            // Validar los datos del formulario
            $validatedData = $request->validate([
                // Datos de la Empresa
                'razon_social' => 'required|string|max:255',
                'ruc' => 'required|string|max:20',
                'giro_empresa' => 'nullable|string|max:255',
                'direccion' => 'nullable|string|max:255',
                'distrito' => 'nullable|string|max:255',
                'departamento' => 'nullable|string|max:255',
                'pais' => 'nullable|string|max:255',
                'telefono' => 'nullable|string|max:20',
                'fax' => 'nullable|string|max:20',
                'email' => 'required|email|max:255',

                // Datos del Solicitante
                'nombres' => 'required|string|max:255',
                'apellidos' => 'required|string|max:255',
                'anexo' => 'nullable|string|max:20',
                'celular' => 'required|string|max:20',
                'email_solicitante' => 'required|email|max:255',

                // Datos de la Caldera Industrial
                'capacidad_bhp' => 'nullable|string|max:255',
                'cantidad' => 'nullable|integer',
                'tipo' => 'nullable|string|max:255',
                'combustible_utilizar' => 'nullable|string|max:255',
                'presion_trabajo' => 'nullable|string|max:255',
                'voltaje_disponible' => 'nullable|string|max:255',
                'altura_operacion' => 'nullable|string|max:255',
                'lugar_instalacion' => 'nullable|string|max:255',
                'equipos_complementarios' => 'nullable|string|max:255',

                // Datos del Mantenimiento
                'norma' => 'nullable|string|max:255',
                'diametro' => 'nullable|string|max:255',
                'pies_longitud' => 'nullable|string|max:255',
                'servicio_retubado' => 'nullable|string|max:255',

                // Datos de los Repuestos
                'repuesto_accesorio' => 'nullable|string|max:255',
                'marca' => 'nullable|string|max:255',
                'voltaje_disponible_repuesto' => 'nullable|string|max:255',
                'diametro_repuesto' => 'nullable|string|max:255',
                'otros' => 'nullable|string',

                // Comentarios
                'comentarios' => 'nullable|string',
            ]);

            Log::info('Datos validados correctamente.', $validatedData);

            // Validar correo de la empresa
            $empresaEmail = config('mail.from.address');
            if (empty($empresaEmail)) {
                Log::error('El correo de la empresa no está configurado.');
                return redirect()->back()->with('error', 'El correo de la empresa no está configurado.');
            }

            // Guardar los datos en la base de datos
            $presupuesto = Presupuesto::create($validatedData);
            Log::info('Presupuesto guardado en la base de datos.', ['id' => $presupuesto->id]);

            // Enviar correo a la empresa
            Mail::send('emails.presupuesto', ['data' => $validatedData], function ($message) use ($empresaEmail) {
                $message->to($empresaEmail)
                    ->subject('Nuevo Presupuesto Recibido');
            });
            Log::info('Correo enviado a la empresa correctamente.');

            // Enviar correo al usuario
            Mail::send('emails.confirmacion', ['data' => $validatedData], function ($message) use ($validatedData) {
                $message->to($validatedData['email_solicitante'])
                    ->subject('Confirmación de Recepción de Presupuesto');
            });
            Log::info('Correo de confirmación enviado al usuario correctamente.');

            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'El formulario se envió correctamente.');
        } catch (\Exception $e) {
            Log::error('Error en el proceso de envío de presupuesto.', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()->with('error', 'Ocurrió un error al enviar el formulario. Por favor, inténtelo de nuevo.');
        }
    }
}