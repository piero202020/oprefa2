<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>OPREFA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #8b8b8e; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">OPREFA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">QUIENES SOMOS</a></li>
        <li><a href="#">SERVICIOS</a></li>
        <li><a href="#">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">OPREFA</h3>
  <img src="../archivos/logo6.png"   style="display:inline" alt="Bird" width="850" height="550">
   
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">¿QUÉ ES OPREFA?</h3>
  <p> 
Oficina Previsional de las Fuerzas Armadas,
Unidad Ejecutora N°009.
Tiene a su cargo el pago de las pensiones al personal Militar de las cuentas Montepio y victimas del Terrorismo, y las pensiones al personal Civil en el Sector Defensa, también los beneficios de escolaridad, aguinaldos por fiestas patrias y navidad, subsidios por fallecimiento y/o invalidez, gastos de luto y las bonificaciones a los excombatientes de la Campaña Militar de 1941 y Defensores Calificados de la Patria (1978, 1981 y 1995).</p>
   
</div>

<!-- Third Container (Grid) -->
   
 
  
    

 <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <br>
           
          
        <button type="submit"  class="btn btn-default">LOGIN</button> 
           

          <form method="post" action="http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=login">
       <table align="center">
         <tr>
          
        <td width="300px"><input type="text" id="usuario" name="usuario"   class="form-control" placeholder="Usuario"></td>
      </tr>
      <tr><td><p></p></td></tr>
      <tr><br>
        <td><input type="password" id="pass" name="pass"   class="form-control" placeholder="Password"></td>
      </tr>
      <tr><td><p></p></td></tr>
      <tr> 
        <td><button type="submit"  class="btn btn-primary btn-block btn-flat">Ingresar</button></td>

      </tr>
      </table>
    </form>
        </div>
      </div>
       
  </section>

<!-- Footer -->
 

</body>
</html>