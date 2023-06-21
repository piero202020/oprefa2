<?php

$api_url = "http://localhost:8081/veterinaria_lopcan/Capa_service/test_api.php?action=listar_producto";

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
		<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>        
        <title>Carrito de Compras</title>
      </head>
		    <br>
		    <body  background="../archivos/fondo2.jpg" with="100%" height="100%"  >
		    <div class="container mt-4">
            <div class="row">
                
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-header">
                                    <label class="col-lg-12">'.$row->nombre.'</label>                                    
                                </div>
                                <div class="card-body text-center d-flex" align="center">
                                   <img src="../archivos/'.$row->imagen.'" width="80" height="80"  >  
                                </div>
                                <div class="card-footer">
                                    <div class="col-lg-12">
                                        '.$row->descripcion.'   </div>
                                    <div class=" col-lg-12 text-center">                                
                                          <a href="'.$row->precio.'"  class="btn btn-danger"> COMPRAR</a>
                                    </div>                         
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
 </body>

          
        </html>

		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="6" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;

?>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>