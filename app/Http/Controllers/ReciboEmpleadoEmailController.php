<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReciboEmpleado;
use App\Mail\TareaEnvioMasivo;
use App\Mail\MailBienvenida;
use App\Models\Empleado;


class ReciboEmpleadoEmailController extends Controller
{
    public function send_mails()
    {
        set_time_limit(0);
        $empleados = Empleado::all();
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css">';
        echo 
            '<div class="jumbotron">
                <h1 class="display-4">Envío Masivo de Correos Finalizado</h1>
                <p class="lead">Más abajo puede conseguir una lista de todas las direcciones que recibieron un correo</p>
                <hr class="my-4">
                <p>Ahora, puede volver atrás en el explorador y seguir trabajando.</p>
                <button class="btn btn-primary btn-lg" onclick="window.history.back();">
                Volver atrás
                </button>
            </div>';
        foreach ($empleados as $empleado) {
            if($empleado->H_estado == 'A' && 
                $empleado->H_email != null && 
                !empty($empleado->H_email))
            {
            // Encriptar el DNI del empleado
            $encryption_method = 'aes-256-cbc';
            $key = '9901:io=[<>602vV03&Whb>9J&M~Oq';
            $iv = '1234567812345678';
            $dni_encriptado = openssl_encrypt($empleado->H_dni, $encryption_method, $key, $options = 0, $iv);
            $encoded_dni = rawurlencode($dni_encriptado);

            // Generar link encriptado
            $localhost = 'http://localhost/cirsub/cirsubapp';
            // $test_server = 'http://190.220.255.138:8007/cirsub/CirsubApp';
            $server_produccion = 'http://190.220.255.138:8198/CirsubApp';
            $link_empleado = "$server_produccion/rrhh/views/recibo_pdf_empleado.php?id=$encoded_dni";
            
            
            try {
                $mail = new ReciboEmpleado($empleado, $link_empleado);
                // return $mail;
                Mail::to($empleado->H_email)->send($mail);
                echo 'Enviado correo para <strong>';
                echo $empleado->H_nombre . ' ' . $empleado->H_apellido;
                echo '</strong> a ' . $empleado->H_email . '<br>';
            } catch (\Exception $e) {
                $admin_title = 'Instancia de correo fallida';
                $admin_message = 'Fallido envío a <strong>'; 
                $admin_message .= 
                    ucwords(strtolower($empleado->H_nombre . ' ' . $empleado->H_apellido));  
                $admin_message .= '</strong> Error: ' . $e->getMessage();
                $mail_fallido = new TareaEnvioMasivo($admin_title, $admin_message);
                Mail::to('jesusr.nm@gmail.com')->send($mail_fallido);
            } 
        }
    }
    $mail_title = 'Envío de Correos Masivos exitoso';
    $mail_message = 'Los correos para descargar recibos en PDF han sido  
                        enviados con éxito a todos sus destinatarios';
    $mail_exito = new TareaEnvioMasivo($mail_title, $mail_message);
    Mail::to('jesusr.nm@gmail.com')->send($mail_exito);
        /* DEV TESTING, SINGLE EMAIL, UNCOMMENT NEXT FEW LINES */
        /* $empleado = new Empleado;
        $empleado->H_nombre = 'VERONICA   VIRGINIA';
        $empleado->H_apellido  = 'RACIGH';
        $empleado->H_email = 'veronica.racigh@cirsubgn.org';
        $empleado->H_dni = '25027054'; 
    
        // Encriptar el DNI del empleado
        $encryption_method = 'aes-256-cbc';
        $key = '9901:io=[<>602vV03&Whb>9J&M~Oq';
        $iv = '1234567812345678';
        $dni_encriptado = openssl_encrypt($empleado->H_dni, $encryption_method, $key, $options = 0, $iv);
        $encoded_dni = rawurlencode($dni_encriptado);
        
        // Generar link encriptado
        $localhost = 'http://localhost/cirsub/cirsubapp';
        // $test_server = 'http://190.220.255.138:8007/cirsub/CirsubApp';
        $server_produccion = 'http://190.220.255.138:8198/CirsubApp';

        
        $link_empleado = "$localhost/rrhh/views/recibo_pdf_empleado.php?id=$encoded_dni";
        
        try {
            $mail = new ReciboEmpleado($empleado, $link_empleado);
            return $mail;
            Mail::to($empleado['email'])->send($mail);
            echo 'Email sent to ' . $empleado->H_nombre . ' at ' . $empleado->H_email;
        } catch (\Exception $e) {
            echo $e->getMessage();
        } */
    }
}
