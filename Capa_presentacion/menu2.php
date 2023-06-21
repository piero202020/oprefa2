<!DOCTYPE html>
<html>
	<head>
	 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body background="../archivos/logo22.jpg" with="100%" height="100%" align="center">
       

    
    <input type="checkbox" id="open">
    <label for="open">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <div id="menu">
        <article><a href="../Capa_presentacion/gestion_solicitud.php"><span><h1>Ver Solicitud</h1></span></a></article>
        <article><a href="../Capa_presentacion/mascota.php"><span><h1>Visualizar Boletas de pago</h1></span></a></article>
        <article><a href="../Capa_presentacion/usuario.php"><span><h1>Gestion de Usuarios</h1></span></a></article>
         <article><a href="../Capa_presentacion/chat/chat1.html"><span><h1>chat</h1></span></a></article>
     <!--  <article><a href="../Capa_presentacion/producto.php"><span><h1>PRODUCTOS</h1></span></a></article>  -->
        <article><a href="index.php"><span><h1>Cerrar Sesion</h1></span></a></article>
      <!--  <article><a href="../Capa_presentacion/reserva.php"><span><h1>RESERVAS</h1></span></a></article>-->
           
          
    </div>
        
         <img  src="../archivos/logo22.jpg"  width="1800" height="800" />
  
 
     <style type="text/css">
      

*{
    box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}

body{
    font-family:sans-serif;
    background: #fff; 
    font-size: 1.2em;
    color: #333;
     padding-top:10px;
 
     background-size: cover;
    line-height: 1.13m;
}


h2{
    font-size: 1.5em;
    line-height: 1.6em;
    max-width: 600px;
    display: inline-block;
    background: #fff;
    padding: 10px;
}


h1, h2, a span{
   font-family: 'Domine', cursive;
}

/* ESTRUCTURA Y ESTILO MENU*/
.content{
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 25vh 0;
}

#menu{
    position: fixed; 
    display: flex;
    flex-direction: row;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100vh;
    visibility: hidden;
    opacity: 0;
    z-index: 2; 
    transition: all ease 0.25s;
    animation: fadeOut 0.5s;
    counter-reset: enlaces;
}

#menu article{
    width: 25%;
    vertical-align: middle;
    transition: all ease 0.32s;
    position: relative;
}

#menu article a{
    display: block;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.8);
    transition:all ease 0.25s;
}


#menu article span{
    position: absolute;
    top: 50%;
    left:50%;
    font-size: 1.5em;
    text-transform: uppercase;
    transform: translate(-50%, -50%);
    display: block;
    text-align: left;
    color: #fff;
    transition: all ease 0.25s;
    transform: translate(-50%,-50%);
    letter-spacing: 2px;
    
}


#menu article span::before{
    counter-increment: enlaces;
    content:counter(enlaces);
    position: absolute;
    left: 50%;
    opacity: 0.1;
    font-size: 2em;
    transform: translate(-50%,-110%);
    transition:all ease 0.4s;
}

/* BOTÓN MENU */
label[for="open"]{
    position: fixed;
    right: 30px;
    top: 30px;
    z-index: 10;
    cursor: pointer;
}

label[for="open"] span{
    width: 21px;
    background: black;
    height: 2px;
    left: 5px;
    display: block;
    margin-bottom: 3px;
    transition: all ease 0.15s;
    cursor: pointer;
}

/* CHECKBOX OCULTO QUE FUNCIONA COMO DISPARADOR DEL MENÚ */
#open{
    position: fixed;
    top: 60px;
    right: 10px;
    z-index: 2;
    visibility: hidden;
}

/* ESTILOS CUANDO EL CHECKBOX ESTÁ ACTIVADO  */

#open:checked ~ label[for="open"] span:nth-child(1){
  transform: rotate(45deg) translateY(8px);
}

#open:checked ~ label[for="open"] span:nth-child(2){
   width: 0px;
}

#open:checked ~ label[for="open"] span:nth-child(3){
   transform: rotate(-45deg) translate(-1px, -7px);
}

#open:checked ~ label[for="open"] span{
    background: #fff;
}

#open:checked ~ #menu{
    visibility: visible;
    opacity: 1;
    animation: fadeIn 0.72s;
}

/* ESTILOS CUANDO ESTAMOS ENCIMA DE LOS ARTÍCULOS / ENLACES / COLUMNAS */
#menu article:hover{
    /*transform: scale(1.1);*/
    z-index: 2;
}
#menu article a:hover{
    background: rgba(233,255,125,0.9);
}

#menu article:hover a span{
    transform: translate(-50%,-50%) scale(0.7);
}

#menu article:hover a span:before{
   opacity: 0;
    
}

#menu article a:hover span{
    color:#000;
}

/* ANIMACION PARA MOSTRAR EL MENÚ */
@keyframes fadeIn{
    0%{opacity: 0; transform: translateY(-100%)}
    100%{opacity: 80%; transform: translateY(0)}
}

/* ESTILOS PARA DISPOSITIVOS MÓVILES*/
@media (max-width:980px){

    
    #menu{
        
        flex-direction: column;
        overflow: auto;
        
    }
    
    #menu article{
        width: 100%;
        height: 25%;
    }
    
    #menu article a span{
        font-size: 1em;
    }
    
     #menu article a span:before{
        font-size: 3em;
         display: none;
    }
}
     </style>

     <script type="text/javascript">
        // A $( document ).ready() block.
$( document ).ready(function() {
    $('#menu_on').click(function(){
      $('body').toggleClass('visible_menu');
    })
});
     </script>
	</body>
</html>

 


 