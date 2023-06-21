<!DOCTYPE html>
<html>
	<head>
		 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</head>
	<body   background="../archivos/fondoclaro.jpg" >
		<style type="text/css">
	 
 
.right{
    float: right;
      text-align:center
 
}
</style>
		 
			<br />
			
			<h3 align="center">VISUALIZAR BOLETAS DE PAGO</h3>
			<center><a href="../Capa_presentacion/menu.php"   class="btn btn-primary">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a>  </center>
 
			   <div class="col-lg-12 parte01">
                <div class="card">
				  	<div class="right" align="right" id="right">
				  		<label>BUSCAR  <span class="glyphicon glyphicon-search"></span></label>
     <input id="myInput" type="text" class="form-control"  placeholder="filtrar...">
  </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
				<table  class="table table-bordered" cellspacing="0">
					<thead>
						<tr class="info">
						<!--	<th>IDMASCOTA</th>-->							       
						<th>FECHA</th>
							<th>DNI DEL PENSIONISTA</th>
							<th>MONTO</th>
						<!--	<th>RAZA</th>  -->
							<th>Boletas de Pago</th>
						<!--	<th>FOTO</th>
							<th>CONSULTA</th>
							<th>VACUNA</th>
							<th>OPCIONES</th>-->
						</tr>
					</thead>
					<tbody id="myTable"></tbody>
				</table>
			</div>
		</div>
		</div>
		</div>
	</body>
</html>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

<script type="text/javascript">
 


$(document).ready(function(){

	fetch_data();

	function fetch_data()
	{
		$.ajax({
			url:"tabla_mascota.php",
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
 