<?php

//fetch.php

$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=listar_confirmados";

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
        <td>'.$row->nombre.'</td>
       <td>'.$row->apellido.'</td>
      <td>'.$row->usuario.'</td>
      <td>'.$row->pass.'</td>
      <td>'.$row->tipo.'</td>
      <td>'.$row->dni.'</td>
      <td><a  class="btn btn-success" href="../archivos/'.$row->imagen.'" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a></td>
      
       <td align="center"><form  method="POST"  action="editar_usuario.php" >
           <input value='.$row->idusu.' id="idusu" name="idusu" type="hidden"  >
         <button class="btn btn-success btn-block" ><span class="glyphicon glyphicon-edit"></span> </button>
         </form> <form  method="POST"  action="http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=eliminar_usuario" >
       <input type="hidden" value='.$row->idusu.' id="idusu" name="idusu">
       <button class="btn btn-danger" > <span class="glyphicon glyphicon-trash"></span></button>
       </form></td>
     </tr>
         
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="2" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;

?>