<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ReciboEmpleadoMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Empleado;


class ReciboEmpleadoEmailController extends Controller
{
    public function send_mails()
    {
        ini_set('max_execution_time', '0');
        set_time_limit(500);
        $empleados = Empleado::all();
        foreach ($empleados as $empleado) {
            
            // Encriptar el DNI del empleado
            $encryption_method = 'aes-256-cbc';
            $key = '9901:io=[<>602vV03&Whb>9J&M~Oq';
            $iv = '1234567812345678';
            $dni_encriptado = openssl_encrypt($empleado->dni, $encryption_method, $key, $options = 0, $iv);

            // Generar link encriptado
            $test_server = 'http://190.220.255.138:8007/cirsub/CirsubApp';
            // $server_produccion = 'http://190.220.255.138:8198/CirsubApp';
            $link_empleado = "$test_server/rrhh/views/recibo_pdf_empleado.php?id=$dni_encriptado";

            try {
                $mailer = new ReciboEmpleadoMail;
                $mail = $mailer->markdown('emails.recibo_empleado', compact('empleado', 'link_empleado'));
                // return $mail;
                Mail::to($empleado->email)->send($mail);
                echo "Email sent to $empleado->nombre at $empleado->email\n";
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }

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
            $mailer = new ReciboEmpleadoMail;
            $mail = $mailer->markdown('emails.recibo_empleado', compact('empleado', 'link_empleado'));
            // return $mail;
            Mail::to($empleado['email'])->send($mail);
            echo 'Email sent to ' . $empleado['nombre'] . ' at ' . $empleado['email'];
        } catch (\Exception $e) {
            echo $e->getMessage();
        } */
    }
}
