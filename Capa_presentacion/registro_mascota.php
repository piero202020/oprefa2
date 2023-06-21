 

<?php
 
 
$dni = !empty($_POST['dni']) ? $_POST['dni'] : '';

 $api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_cliente2&dni=$dni";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if($result > 0)
	//count($result) > 0)
{
	foreach($result as $row1)
	{
		$output .= '
		 <head>
  <title>DERMATOVET</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
  <body background="../archivos/fondo2.jpg" with="100%" height="100%" align="center"  >
  <div class="container" align="center"  >
  <h1><font face="univers" size="6"  ><center>REGISTRO DE MASCOTAS DEL CLIENTE</center></font></h1>
    <div class="col-lg-12 parte01" align="center">
                <div class="card" align="center">
               
		 <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=registrar_mascota" align="center">
      <input value='.$row1->dni.' id="dni"  required="" name="dni" type="hidden" >
			 
			<div class="col-md-6" >
			 
			        	<label><font face="univers" size="5"  >Nombre de la Mascota</label>
				 <input   id="nombre"  required="" name="nombre" type="text" class="form-control input-lg">
				 </div>  
				  <div class="col-md-6">
				   
			        	<label><font face="univers" size="5" >Especie de la Mascota</label>
				 <input   id="especie"  required="" name="especie" type="text" class="form-control input-lg">
				 </div>
				 
				    <div class="col-md-6">
			        	<label><font face="univers" size="5"  >Raza de la Mascota</label>
				 <input  id="raza"  required="" name="raza" type="text" class="form-control input-lg">
				 </div>
				  
				 <div class="col-md-6">
			        	<label><font face="univers" size="5"  >Sexo de la Mascota</label>
				 <input   id="sexo"  required="" name="sexo" type="text" class="form-control input-lg">
				 </div>
				 
				 <div class="col-md-6">
				 
			        	<label><font face="univers" size="5"  >Foto de la Mascota</label>
				 <input   id="imagen"  name="imagen" type="file" class="form-control input-lg">
				 </div>
				 
<div class="col-md-6">
<br>
<input type="submit" value="REGISTRAR MASCOTA" class="btn btn-info btn-block">
  <br>
</div>
 

		 </form>
				  </div>
				  </div>
<style type="text/css">
	.container{
    text-align:left
}
 
.right{
    float: left;
      text-align:left
 
}
</style>
 
  
				
				 	<div   class="col-md-2" align="right" id="left">
				  		 
     
  </div>
  <br>
   
  <table class="table table-bordered" cellspacing="0" width="100%"  cellspacing="0">
<thead>
<tr  > <td colspan="4" BGCOLOR="#338AAA"><center> <h4 ><font face="univers" size="6"  >Mascotas registradas del cliente:'.$row1->nombre.' '.$row1->apellido.'</font></h4></center></td>
<td BGCOLOR="#338AAA"  ><a href="../Capa_presentacion/cliente.php"   class="btn btn-primary btn-block">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a></td>
  
<td colspan="2" BGCOLOR="#338AAA"><input id="myInput" type="text" class="form-control"    placeholder="Filtrar..."></td>
</tr>
 
						<tr   align="center">
							 
							<th width="180"  align="center" BGCOLOR="#338AAA" ><font face="univers" size="3" >Dni_Cliente</font></th>
							<th width="180" align="center" BGCOLOR="#338AAA"><font face="univers" size="3" >Nombre_Mascota</font></th>
							<th width="180" align="center" BGCOLOR="#338AAA"><font face="univers" size="3">Tipo_Especie</font></th>
							<th width="180" align="center" BGCOLOR="#338AAA"><font face="univers" size="3" >Tipo_de_Raza</font></th>
							<th width="180" align="center" BGCOLOR="#338AAA"><font face="univers" size="3" >Sexo_de_Mascota</font></th>
							 <th width="180" align="center" BGCOLOR="#338AAA"><font face="univers" size="3">FOTO</font></th>
							   
						</tr>
					</thead>
  </table>
   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
		 
		';

	}
	 
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">no se a encontrado datos</td>
	</tr>
	';
}

echo $output;

$api_url1 = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_dni_mascota&dni=$dni";
 
$client1 = curl_init($api_url1);

curl_setopt($client1, CURLOPT_RETURNTRANSFER, true);

$response1 = curl_exec($client1);

$result = json_decode($response1);

$output = '';

if($result > 0)
{
  
	foreach($result as $row)
	{
		$output .= '

 <div class="col-lg-12 parte01">
                <div class="card">
		 <table class="active" cellspacing="0" width="100%" BORDER="2" >
		 <tbody id="myTable">
		<tr   class="active" align="center" >
		  
			<td width="200" align="center" BGCOLOR="#75D0F1" ><center><font face="univers" size="5" >'.$row->dni.'</center></td>
			<td width="220" align="center" BGCOLOR="#75D0F1" ><center><font face="univers" size="5" >'.$row->nombre.'</center></td>
			<td width="220" align="center" BGCOLOR="#75D0F1" ><center><font face="univers" size="5" >'.$row->especie.'</center></td>
			<td width="220" align="center" BGCOLOR="#75D0F1" ><center><font face="univers" size="5" >'.$row->raza.'</center></td>
			<td width="220" align="center" BGCOLOR="#75D0F1" ><center><font face="univers" size="5" >'.$row->sexo.'</center></td>
			<td width="220" align="center" BGCOLOR="#75D0F1" ><a  class="btn btn-success" href="../archivos/'.$row->imagen.'" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a></td>
			 
			 </tr>
			 </tbody>

			 </table>
			 </div>
</div>

		 ';
			}
 
 }
 else
{
	$output .= '
	<tr>
		<td colspan="7" align="center"><h1>NO TIENE MASCOTAS REGISTRADAS AUN!!</h1></td>
	</tr>
	';
}

echo $output;

?>

    
 