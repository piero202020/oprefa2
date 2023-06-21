<?php

 
$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=listar_animales";

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
		

		<tr class="active">
		 
		 
			<td>'.$row->nombre.'</td>
			<td>'.$row->especie.'</td>
			<td>'.$row->raza.'</td>
			 

			<td>
<a  class="btn btn-danger" href="../archivos/'.$row->imagen.'" target="_blank"> <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" width="40"></span></a>
 
			</td>
			
			
			 
		</tr>
  	
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="8" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;

?>

<!--
<td>
<form  method="POST"  action="registrar_consulta.php" >
 <input type="hidden" value='.$row->idmascota.' id="idmascota" name="idmascota">
			<button class="btn btn-info btn-block">
         <span class="glyphicon glyphicon-calendar"></span> 
        </button>
</form>
        </td>
<td>
        <form  method="POST"  action="registrar_vacuna.php" >
         <input type="hidden" value='.$row->idmascota.' id="idmascota" name="idmascota">
<button class="btn btn-warning btn-block">
        <span class="glyphicon glyphicon-pushpin"></span> 
        </button>
        </form>
        </td>
			<td align="center"><form  method="POST"  action="editar_mascota.php" >
			 <input type="hidden" value='.$row->idmascota.' id="idmascota" name="idmascota">
			 <button class="btn btn-primary"> <span class="glyphicon glyphicon-edit"></span></button>
			 </form><form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=eliminar_mascota" >
			 <input type="hidden" value='.$row->idmascota.' id="idmascota" name="idmascota">
			 <button class="btn btn-danger" id="eliminado"  name="eliminado"> <span class="glyphicon glyphicon-trash"></span></button>
			 </form></td>-->