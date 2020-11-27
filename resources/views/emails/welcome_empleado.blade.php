@component('mail::message')
<h1 style="text-align: center;">
  Saludos, {{ucwords(strtolower($empleado->H_nombre . ' ' . $empleado->H_apellido))}}  
</h1> 
<br>
<p style="text-align: center;">
Le damos la bienvenida al nuevo sistema de correo de CirSub
</p>
<p style="text-align: center;">
De ahora en adelante usted recibirá links para descargar su <br>
recibo de sueldo en PDF por esta vía a su dirección <br>
<strong>{{$empleado->H_email}}</strong>
</p>
<br>
<p style="text-align: center;">Gracias por su atención</p>
@endcomponent