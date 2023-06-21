<!DOCTYPE html>
<html>
	<head>
		<title>DERMATOVET</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body background="../archivos/fondo2.jpg">

		<div class="container">
			<br />
			
			<h3 > <center>PRODUCTOS</center>  </h3>
			  


			<br />
			<div class="col-lg-3 parte01">
                <div class="card">
                	 <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=insertar_producto" >
 
			<div class="form-group">
			        	<label>Nombre del Producto</label>
			        	<input type="text" name="nombre" id="nombre" class="form-control input-lg"  required=""  />
			        </div>
			        <div class="form-group">
			        	<label>Tipo del Producto</label><br>
			        	<input type="radio" name="Gender" id="Gender" value="Alimento"  />Alimento
			        	<input type="radio" name="Gender" id="Gender" value="Ropa"  />Ropa
			        	<input type="radio" name="Gender" id="Gender" value="Accesorios"  />Accesorios
			        </div>
			        <div class="form-group">
			        	<label>Proveedor del Producto</label>
			        	 <select class="form-control input-lg" id="proveedor" name="tipo">
	<option>----------------------------------------------------</option>
    <option value="Mister_Pet">Mister_Pet</option>
    <option value="LOPCAN">LOPCAN</option>
    <option value="UNICACHI">UNICACHI</option>
    <option value="Otro">otro</option>
     
  </select>

			        </div>
			        <div class="form-group">
			        	<label>Descripcion</label>
			        	  <textarea class="form-control input-lg"  required="" rows="3" id="descripcion" name="descripcion"></textarea>

			        </div>
			         <div class="form-group">
			        	<label>Precio</label>
			           <input type="number" min="1"  required="" name="precio" id="precio" class="form-control input-lg"  />
			        </div>
			         <div class="form-group">
			        	<label>Cantidad</label>
			        	<input type="number" min="1"  required="" name="cantidad" id="cantidad" class="form-control input-lg"  />
			        </div>
			         <div class="form-group">
			        	<label>Imagen</label>
			        	<input type="file" name="imagen" id="imagen" class="form-control input-lg" />
			        </div>
			        <div class="form-group">
			        	<style>
                                  #preview {
  border:1px solid #ddd;
  padding:5px;
  border-radius:2px;
  background:#fff;
  max-width:200px;
}

#preview img {width:100%;display:block;}
                              </style> 
                            <div id="preview"></div>
			        </div>
			        <div class="form-group"><center><button  class="btn btn-info btn-block">REGISTRAR</button></center></div>
			        
			    </form>
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
			         </div>
			          </div>
			 
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
.button6 {background-color: ###A3E4D7;} /* verde */
.button7 {background-color: #FF8000;} /* naranja */
.button8 {background-color: #9A0303;} /* vino */
</style>
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
  <a href="../Capa_presentacion/menu.php"   class="btn btn-primary">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a>  
				<table   class="table table-bordered" align="let" >
					<thead align="center">
						<tr class="info">
							 
							<th align="center">NOMBRE</th>
                            <th align="center">TIPO</th>
							<th align="center">PROVEEDOR</th>
							<th align="center">DESCRIPCION</th>
							<th align="center">PRECIO</th>
							<th align="center">CANTIDAD</th>
							<th align="center">IMAGEN</th>
							<th align="center">ACCION</th>
						 
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
 

<script type="text/javascript">
$('#grabar').click(function(){
		alert("Registrado Correctamente");
	});

$('#eliminado').click(function(){
		alert("Eliminado Correctamente");
	});


$(document).ready(function(){

	fetch_data();

	function fetch_data()
	{
		$.ajax({
			url:"tabla_producto.php",
			success:function(data)
			{
				$('tbody').html(data);
			}
		})
	}
});
 

  
</script>


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

