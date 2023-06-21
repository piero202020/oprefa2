<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>DERMATOVET</title>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/prism.css" />
     <!-- Estilos CSS -->
     <link rel="stylesheet" href="./css/estilos.css">
</head>
<body bgcolor="black">

     <main class="container">
          <nav class=" teal darken-4">
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo"> DERMATOVET</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="modal-trigger" href="#modal2" >¿QUIENES SOMOS?</a></li>
     
      <li><a  >CONTACTO</a></li>
      <li><a  class="modal-trigger" href="#modal3" >RESERVACION</a></li>
      <li><a class="modal-trigger" href="#modal1">LOGIN</a></li>
      <!-- Dropdown Trigger -->
      
    </ul>
  </div>
</nav>
<div class="row">
               <div class="col s12 center-align">
                    <h4 class="titulo">RESERVE SU CITA AQUI !!</h4>
                    
               </div>
          </div>
           
<div class="row">
    <form class="col s12" method="post" action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=registrar_reserva">

      <div class="row">
        <div class="input-field col s3">
          <input type="text" class="datepicker" id="fecha" name="fecha" placeholder="Ingrese la Fecha" required>
       <label for="first_name">Fecha de Reservacion</label>
        </div>
        <div class="input-field col s3">
          <input type="text" class="timepicker" id="hora" name="hora"  placeholder="Ingrese la Hora" required>
          <label for="last_name">Hora de Reservacion</label>
        </div>
        <div class="input-field col s3">
         <input  type="text" class="validate" id="nombre" name="nombre" placeholder="Ingrese su Nombre" required>
          <label for="last_name">Nombre del Cliente:</label>
        </div>
        <div class="input-field col s3">
          <input id="telefono" name="telefono" type="text" class="validate"  placeholder="Ingrese su Telefono" required> 
          <label for="last_name">Telefono del Cliente</label>
        </div>
        <div class="input-field col s3">
          <input id="dni" name="dni" type="text" class="validate" placeholder="Ingrese su DNI" required>
          <label for="last_name">DNI del Cliente</label>
        </div>
        <div class="input-field col s3">
          <input id="correo" name="correo" type="text" class="validate" placeholder="Ingrese su Correo" required>
          <label for="last_name">Correo del Cliente</label>
        </div>
        <div class="input-field col s3">
          <input id="direccion" name="direccion" type="text" class="validate" placeholder="Ingrese su Direccion" required>
          <label for="last_name">Direccion del Cliente</label>
           <input type="hidden"  name="estado" id="estado" value="pendiente" >
        </div>
        <div class="input-field col s3">
          
  <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
     
  </button>
        </div>
      </div>
       
       
       
       
    </form>
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

    $(document).ready(function(){
    $('.modal').modal();
  });
 var elem = document.querySelector('.modal');
        var options = {};
        var instance = new M.Modal(elem, options);
      </script>
      <script type="text/javascript">
        
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.timepicker').timepicker();
  });
         
      </script>
      
      <script type="text/javascript">
        const Calender = document.querySelector('.datepicker');
M.Datepicker.init(Calender,{
format: 'dd-mmmm-yyyy',
disableWeekends: true,
i18n: {
months : 
['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SETIEMBRE','OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'], 
monthsShort:['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGOS','SET','OCT','NOV','DIC'],
weekdays :['DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO'],
weekdaysShort :['DOM','LUN','MAR','MIE','JUE','VIE','SAB'],
weekdaysAbbrev:  ['D','L','M','M','J','V','S']

}
});
      </script>
     
             
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.2/js/materialize.min.js"></script>



       
     
     </main>



     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script src="js/main.js"></script>
</body>
</html>