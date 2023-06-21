<!DOCTYPE html>
<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body  background="../archivos/fondoclaro.jpg">
		<div class="container">
			<br />
			
			<h3 align="center">ESTADO DE SOLICITUDES</h3>
			 
			 
			            </div> 














<style type="text/css">
	.container{
    text-align:center
}
 
.right{
    float: right;
      text-align:center
 
}
</style>
			 
				   <div class="col-lg-9 parte01">
                <div class="card">
				  	<div class="right" align="right" id="right">
				  		<label>BUSCAR  <span class="glyphicon glyphicon-search"></span></label>
     <input id="myInput" type="text" class="form-control input-lg"  placeholder="filtrar...">
  </div>
  <a href="../Capa_presentacion/menu2.php"   class="btn btn-primary">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a>   
 
				<table   class="table table-bordered">
					<thead>
						<tr class="info">
							 <th>Persona</th>
							<th>Asunto</th>
						 <th>Codigo de pensionista</th>
							<th>Descripcion</th>
							
						 <th>Respuesta</th>
						  <th>Estado</th>
							<th>Archivo</th>
							
						<!--	<th>REGISTRAR<br>MASCOTA</th>--->
							<th>OPCION</th>
						</tr>
					</thead>
					<tbody id="myTable"></tbody>
				</table>
			 	</div>	</div>
		</div>


	</body>
</html> 



<script type="text/javascript">
 


$(document).ready(function(){

	fetch_data();

	function fetch_data()
	{
		$.ajax({
			url:"tabla_estado_solicitud.php",
			success:function(data)
			{
				$('tbody').html(data);
			}
		})
	}
});
 
 
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 <script>
   document.getElementById("imagen").onchange = function(e) {
	let reader = new FileReader();
  
  reader.onload = function(){
    let preview = document.getElementById('preview'),
    		image = document.createElement('img');

    image.src = reader.result;
    
    preview.innerHTML = '';
    preview.append(image);
  };
 
  reader.readAsDataURL(e.target.files[0]);
}
</script>