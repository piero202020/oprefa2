<?php

//fetch.php

$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=listar_reserva";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if(count($result) > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr  class="active">
		 
		 <td>'.$row->diacita.'</td>
		<td>'.$row->horacita.'</td>	 
		 <td>'.$row->nombre.'</td>
		  <td>'.$row->telefono.'</td>
			<td>'.$row->dni.'</td>
			<td>'.$row->correo.'</td>
			<td>'.$row->direccion.'</td>
			<td>'.$row->estado.'</td>
			 
			<td align="center">  <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=actualizar_estado" >
			 <input type="hidden" value='.$row->idreserva.' id="idreserva" name="idreserva">
			 <input type="hidden" value='.$row->diacita.' id="diacita" name="diacita">
			 <input type="hidden" value='.$row->horacita.' id="horacita" name="horacita">
			 <input type="hidden" value='.$row->nombre.' id="nombre" name="nombre">
			 <input type="hidden" value='.$row->telefono.' id="telefono" name="telefono">
			 <input type="hidden" value='.$row->dni.' id="dni" name="dni">
			 <input type="hidden" value='.$row->correo.' id="correo" name="correo">
			 <input type="hidden" value='.$row->direccion.' id="direccion" name="direccion">
			 <input type="hidden" value="confirmado" id="estado" name="estado">
			 <button class="btn btn-warning btn-block"> <span class="glyphicon glyphicon-list-alt"></span></span></button>
			 </form></td>
			 <td>
			  <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=eliminar_reserva" >
			 <input type="hidden" value='.$row->idreserva.' id="idreserva" name="idreserva">
			 <button class="btn btn-danger" id="eliminado"  name="eliminado"> <span class="glyphicon glyphicon-trash"></span></button>
			 </form></td>
			 
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="10" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;

?>