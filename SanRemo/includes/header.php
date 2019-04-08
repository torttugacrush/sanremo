<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
         <meta charset="utf-8">
         <title>Colegio San Remo</title>

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
          <!-- Estilos personalizados CSS -->
         <link href="css/estilos.css" rel="stylesheet">
         <link href="css/floating-labels.css" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300" />
  </head>
  <body>
    <header>
       <nav id="menu"  class="navbar navbar-expand-md navbar-light  rounded fixed-top"style="transition: all 1s ease;">
        <a class="navbar-brand" href="#">San Remo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  " id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
       
       

          <li class="nav-item ">
            <a class="nav-link" href="#"><div class="activo activo1"><i class="icono fas fa-home "></i><span  >Inicio</span><hr class="d-none d-sm-block activo hr"> <span class="mintext  d-none d-sm-block " >Noticias</span></div></a>
          </li>
         
      <div class="margen">
    
   </div>
   
        
            <li class="nav-item dropdown ">
              <a class="nav-link " href="https://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="quitartext textos "><i class="icono fas fa-arrow-alt-circle-down"></i><span>Propuesta</span><hr class="d-none d-sm-block hr"> <span class="mintext  d-none d-sm-block" >Educativa</span></div> </a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="#"><div class="hovf"><i class="icono fas fa-caret-right "></i>Primaria</div></a>
                <a class="dropdown-item" href="#"><div class="hovf"><i class="icono fas fa-caret-right "></i>Secundaria</div></a>
              </div>
            </li>

    
  <div class="margen">
    
   </div>



            <li class="nav-item dropdown">
              <a class="nav-link " href="https://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="quitartext textos"><i class="icono fas fa-arrow-alt-circle-down "></i><span>Nosotros</span><hr class="d-none d-sm-block hr"> <span class="mintext  d-none d-sm-block" >Colegio</span></div> </a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="#"><div class="hovf"><i class="icono fas fa-caret-right "></i>Presentación</div></a>
            
                <a class="dropdown-item" href="#"><div class="hovf"><i class="icono fas fa-caret-right "></i>Misión y Visión</div></a>
              
                <a class="dropdown-item" href="#"><div class="hovf"><i class="icono fas fa-caret-right "></i>Metodología</div></a>
              
                <a class="dropdown-item" href="#"><div class="hovf"><i class="icono fas fa-caret-right "></i>Infraestructura</div></a>
               
                <a class="dropdown-item" href="#"><div class="hovf"><i class="icono fas fa-caret-right "></i>Docentes</div></a>
              </div>
            </li>

   <div class="margen">
    
   </div>

          <li class="nav-item ">
            <a class="nav-link" href="#"><div class="quitartext textos" ><i class="icono fas fa-map-marked-alt "></i><span ">Contáctanos</span><hr class="d-none d-sm-block hr"> <span class="mintext  d-none d-sm-block " >Encuentranos</span></div></a>
          </li>


        </ul>

      <button type="submit" data-toggle="modal" data-target="#exampleModalCenter" class="botonpersonalizado col-sm-12 col-md-3 col-lg-3 col-xl-2 " ><div class=" quitartext textos iconoid iconidColor1"><i class="  far fa-address-card"></i><span > Iniciar sesión</span> <hr class="d-none d-sm-block hr"> <span class="mintext  d-none d-sm-block " >INTRANET</span></div></button>

      </div>
       
    </nav>

 <!--  aca comienza el amti sroll   -->

    </header>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">  
     <h5 class="modal-title" id="exampleModalCenterTitle"> Inicio de Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       </div> 
      <div class="modal-body">
        
<form class="form-signin"  action="login" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="./login_files/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">San Remo</h1>
        <p>La educación es el arma más poderosa que puedes usar para cambiar el mundo</p>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="txtUsu">
        <label for="inputEmail">Usuario</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""name="txtPas" >
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <button class="btn btn-lg btn-primary btn-block"name="btnIngresar" value="Ingresar" type="submit">Iniciar Sesión</button>
      <p class="mt-5 mb-3 text-muted text-center">© 2019</p>
    </form>




      </div>
   
    </div>
  </div>
</div>