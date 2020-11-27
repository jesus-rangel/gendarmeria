@component('mail::message')
  <h1 style="text-align: center;">
    Saludos, {{ucwords(strtolower($empleado->H_nombre . ' ' . $empleado->H_apellido))}}
  </h1>
  <p style="text-align: center;">
    De ahora en adelante, usted puede 
    <strong>descargar sus recibos de sueldo</strong> 
    desde el siguiente link:
  </p>
  @component('mail::button', ['url' => $link_empleado])
  <strong>Descargar Recibo de Sueldo</strong>  
  @endcomponent
  <p style="text-align: center;">
    Muchas Gracias<br>
    CirSub GN
  </p>
  <br>
  <p style="text-align: center;">
    <small>*Este correo es enviado automáticamente<br>
      Favor no responder a esta dirección si se desea contactar al admin</small>
  </p>
@endcomponent
