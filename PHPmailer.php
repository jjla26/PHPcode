<?php
$asunto= "Recibimos tus datos";
$mensaje= " Hola, dejanos informarte que tu solicitud será procesada en un lapso no mayor a 4horas hábiles. Todos los pagos se realizan entre las 10:00hrs y las 20:00hrs.

Gracias por preferirnos

Aguacatecambios

";
			  
mail($email,$asunto,$mensaje);
} 

else{
    mysqli_close($conexion);
$asunto= "Recibimos tus datos";
$mensaje= " El codigo ingresado es erróneo, por favor te invitamos a realizar el proceso nuevamente, verificando bien tus datos. Ten en cuenta que un error en el envío de tus datos puede retrasar considerablemente el proceso. Gracias

Aguacatecambios

";
			  
mail($email,$asunto,$mensaje);
}
?>