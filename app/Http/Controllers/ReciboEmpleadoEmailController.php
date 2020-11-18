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
        $empleados = Empleado::all();
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css">';
        echo 
            '<div class="jumbotron">
                <h1 class="display-4">Envío Masivo de Correos Iniciado</h1>
                <p class="lead">Este proceso puede tardar varios minutos dependiendo de la carga del servidor</p>
                <hr class="my-4">
                <p>Mientras tanto, puede volver atrás en el explorador y seguir trabajando.</p>
                <button class="btn btn-primary btn-lg" onclick="window.history.back();">
                Volver atrás
                </button>
                <br><br>
                <p>Al finalizar usted recibirá un correo confirmando el éxito de la operación</p>
                <small>*Abajo tiene una lista de todos los destinatarios del proceso</small>
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

            // Generar link encriptado
            $test_server = 'http://190.220.255.138:8007/cirsub/CirsubApp';
            // $server_produccion = 'http://190.220.255.138:8198/CirsubApp';
            $link_empleado = "$test_server/rrhh/views/recibo_pdf_empleado.php?id=$dni_encriptado";
            
            
            try {
                $mail = new ReciboEmpleado($empleado, $link_empleado);
                return $mail;
                Mail::to($empleado->H_email)->send($mail);
                echo 'Enviando correo para <strong>';
                echo $empleado->H_nombre . ' ' . $empleado->H_apellido;
                echo '</strong> a ' . $empleado->H_email . '<br>';
            } catch (\Exception $e) {
                $admin_title = 'Instancia de correo fallida';
                $admin_message = "Fallido envío a $empleado->H_email.  Error: $e->getMessage()";
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
        /* $empleado = [
            'nombre' => 'Jesus Rangel', // 'Evanny Mariela Leguizamon'
            'email' => 'jesusr.nm@gmail.com',
            'dni' => '95805562' // '37799723'
        ];
    
        // Encriptar el DNI del empleado
        $encryption_method = 'aes-256-cbc';
        $key = '9901:io=[<>602vV03&Whb>9J&M~Oq';
        $iv = '1234567812345678';
        $dni_encriptado = openssl_encrypt($empleado['dni'], $encryption_method, $key, $options = 0, $iv);
    
        // Generar link encriptado
        $test_server = 'http://190.220.255.138:8007/cirsub/CirsubApp';
    
        $link_empleado = "$test_server/rrhh/views/recibo_pdf_empleado.php?id=$dni_encriptado";
        try {
            $mail = new ReciboEmpleadoMail($empleado, $link_empleado);
            // return $mail;
            Mail::to($empleado['email'])->send($mail);
            echo 'Email sent to ' . $empleado['nombre'] . ' at ' . $empleado['email'];
        } catch (\Exception $e) {
            echo $e->getMessage();
        } */
    }
}
