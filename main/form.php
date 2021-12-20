<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Datos Alumno</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head> 

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-black navbar-black"> 
            <div class="container-fluid">
              <a href="#" class="navbar-brand">Formando <span>Profesionales</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>  
                        
                        <div class="nav-item dropdown">                          
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Datos Alumno</a> 
                            <div class="dropdown-menu">
                                <a href="form.html" class="dropdown-item">Agregar Datos Alumno</a>
                                <a href="Documento-Alumno.html" class="dropdown-item">Agregar Documento Alumno</a>
                                <a href="verAlumnno.html" class="dropdown-item">Ver Datos Alumno</a>                                
                            </div>
                        </div>
                  
                       
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Semestre</a> 
                            <div class="dropdown-menu">
                                <a href="FormularioSemestre1.html" class="dropdown-item">Agregar semestre 1</a>
                                <a href="FormularioSemestre2.html" class="dropdown-item">Agregar semestre 2</a>
                                <a href="FormularioSemestre3.html" class="dropdown-item">Agregar semestre 3</a>
                                <a href="FormularioSemestre4.html" class="dropdown-item">Agregar semestre 4</a>
                                <a href="FormularioSemestre5.html" class="dropdown-item">Agregar semestre 5</a>
                                <a href="FormularioSemestre6.html" class="dropdown-item">Agregar semestre 6</a>
                                
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver Semestre</a> 
                          <div class="dropdown-menu">
                              <a href="semestre1.html" class="dropdown-item">Semestre 1</a>
                              <a href="semestre1.html" class="dropdown-item">Semestre 2</a>
                              <a href="semestre1.html" class="dropdown-item">Semestre 3</a>
                              <a href="semestre1.html" class="dropdown-item">Semestre 4</a>
                              <a href="semestre1.html" class="dropdown-item">Semestre 5</a>
                              <a href="semestre1.html" class="dropdown-item">Semestre 6</a>
                              
                          </div>
                      </div>  
                         
                        <div class="nav-item dropdown">                          
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Datos Padre/Madre</a> 
                          <div class="dropdown-menu">
                              <a href="verPadre.html" class="dropdown-item">Ver datos Padre</a>
                              <a href="verMadre.html" class="dropdown-item">Ver datos Madre</a>                              
                          </div>                            
                      </div>   

                      <!--<div class="nav-item dropdown">                          
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Madre</a> 
                          <div class="dropdown-menu">
                              <a href="verMadre.html" class="dropdown-item">Ver datos</a>
                              <a href="madre.html" class="dropdown-item">Agregar datos</a>                                
                          </div>                            
                      </div>-->
                                            
                        <!--<div class="nav-item dropdown">                          
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Escuela</a> 
                            <div class="dropdown-menu">
                                <a href="verEscuela.html" class="dropdown-item">Ver datos</a>
                                <a href="escuela.html" class="dropdown-item">Agregar datos</a>                                
                            </div>
                        </div>-->

                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        
        
        
        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>.</p>
                                <h2>Datos del alumno</h2> 
                            </div>
                            <form action="" method="POST"> 

                              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active"><a href="" data-toggle="tab"><i class="zmdi zmdi-female zmdi-hc-fw"></i>DATOS PERSONALES</a></li>
                              </ul>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Matrícula</label>
                                <input type="text" class="form-control" id="matricula" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input type="text" class="form-control" id="nombreAlumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ape1Alumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido Materno</label>
                                <input type="text" class="form-control" id="ape2Alumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha de Inscripción</label>
                                <input type="date" class="form-control" id="fechaInscripcion" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha de Baja</label>
                                <input type="date" class="form-control" id="fechaBaja" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">No. Expediente</label>
                                <input type="number" class="form-control" id="numExpediente" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Folio del Alumno</label>
                                <input type="number" class="form-control" id="folioAlumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">CURP del Alumno</label>
                                <input type="text" class="form-control" id="CURPAlumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Folio CURP del Alumno</label>
                                <input type="text" class="form-control" id="folioCURPAlumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">RFC del Alumno</label>
                                <input type="text" class="form-control" id="RFCAlumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Sexo</label>
                                <select class="form-control" id="idSexo">
                                  <option>--Seleccione una opcion--</option>
                                  <option>Femenino</option>
                                  <option>Masculino</option>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Lugar de nacimiento del Alumno</label>
                                <input type="text" class="form-control" id="lugarNacimientoAlumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Entidad Federativa</label>
                                <input type="text" class="form-control" id="idEntidadFederativa" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fechaNacimientoAlumno" placeholder="">
                              </div><br>
                              
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Edad</label>
                                <input type="number" class="form-control" id="idEdad" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Correo Electrónico Personal</label>
                                <input type="email" class="form-control" id="correoPersonalAlumno" placeholder="name@example.com">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Correo Electrónico Institucional</label>
                                <input type="email" class="form-control" id="correoInstitucionalAlumno" placeholder="name@example.com">
                              </div><br>
                              
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Grado</label>
                                <select class="form-control" id="idGrado">
                                  <option>--Seleccione una opcion--</option>
                                  <option>1er Semestre</option>
                                  <option>2do Semestre</option>
                                  <option>3er Semestre</option>
                                  <option>4to Semestre</option>
                                  <option>5to Semestre</option>
                                  <option>6to Semestre</option>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Grupo</label>
                                <input type="text" class="form-control" id="idGrupo" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Teléfono Celular del Alumno</label>
                                <input type="number" class="form-control" id="telefonoCelularAlumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Teléfono Fijo del Alumno</label>
                                <input type="number" class="form-control" id="telefonoFijoAlumno" placeholder="">
                              </div><br>
                              
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">El Alumno trabaja actualmente</label>
                                <select class="form-control" id="idAlumnoTrabaja">
                                  <option>--Seleccione una opcion--</option>
                                  <option>Si</option>
                                  <option>No</option>
                                </select>
                              </div><br>
                              
                              <div class="form-group">
                              <label for="exampleFormControlInput1">Tipo de Seguro de Salud</label>
                                <select class="form-control" name="cmbTipoSeguroSocial" id="idTipoSeguroSocial">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  tiposegurosocial";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['idTipoSeguroSocial']."'>".$regSeguroSocial["nombreSeguroSocial"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Número de Seguro Social</label>
                                <input type="number" class="form-control" id="numSeguroSocial" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">El Alumno esta inscrito actualmente</label>
                                <select class="form-control" id="idInscritoAlumno">
                                  <option>--Seleccione una opcion--</option>
                                  <option>Si</option>
                                  <option>No</option>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Beca</label>                                
                                <select class="form-control" name="cmbBeca" id="idBeca">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  beca";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['idBeca']."'>".$regSeguroSocial["beca"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Folio de Beca</label>
                                <input type="number" class="form-control" id="folioBeca" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">No. Aciertos de examen de ingreso</label>
                                <input type="number" class="form-control" id="aciertosExamenIngresoAlumno" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre del Tutor</label>
                                <input type="text" class="form-control" id="nombreTutor" placeholder="">
                              </div><br>                             

                              <div class="form-group">
                              <label for="exampleFormControlInput1">De quien Depende Económicamente el Alumno</label>                              
                                <select class="form-control" name="cmbDependeEconomicamente" id="idDependeEconomicamente">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  parentesco";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['idParentesco']."'>".$regSeguroSocial["parentesco"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>

                              <div class="form-group">
                              <label for="exampleFormControlInput1">Ocupación de quien Depende Económicamente el Alumno</label>                            
                                <select class="form-control" name="cmbOcupacionDependeEconomicamente" id="idOcupacionDependeEconomicamente">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  ocupacion";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['idOcupacion']."'>".$regSeguroSocial["ocupacion"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>

                              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active"><a href="" data-toggle="tab"><i class="zmdi zmdi-female zmdi-hc-fw"></i>DOMICILIO</a></li>
                              </ul>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Calle</label>
                                <input type="text" class="form-control" id="calle" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Número</label>
                                <input type="text" class="form-control" id="numero" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Estado </label>                                
                                <select class="form-control" name="cmbEstado" id="idEstado">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  estado";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['id']."'>".$regSeguroSocial["nombre"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Municipio</label>                                
                                <select class="form-control" name="cmbMunicipio" id="idMunicipio">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  municipio WHERE estado = 15";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['id']."'>".$regSeguroSocial["nombre"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Localidad</label>                                
                                <select class="form-control" name="cmbLocalidad" id="idLocalidad">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM localidad WHERE municipio = 15026";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['id']."'>".$regSeguroSocial["nombre"].".    C.P".$regSeguroSocial["codigo_postal"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>
                            

                              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active"><a href="" data-toggle="tab"><i class="zmdi zmdi-female zmdi-hc-fw"></i>REFERENCIA DOMICILIO</a></li>
                              </ul>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Referencia Domicilio</label>
                                <input type="text" class="form-control" id="referencia" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Entre Calle</label>
                                <input type="text" class="form-control" id="entreCalle" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Y Calle</label>
                                <input type="text" class="form-control" id="yCalle" placeholder="">
                              </div><br>

                              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active"><a href="" data-toggle="tab"><i class="zmdi zmdi-female zmdi-hc-fw"></i>SECUNDARIA DE PROCEDENCIA</a></li>
                              </ul>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre de la Secundaria de Procedencia</label>
                                <input type="text" class="form-control" id="nombreSecundaria" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">CCT Secundaria</label>
                                <input type="text" class="form-control" id="CCTSecundaria" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Población de Secundaria</label>
                                <input type="text" class="form-control" id="poblacionSecundaria" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Promedio de Secundaria</label>
                                <input type="number" class="form-control" id="promSecundaria" placeholder="">
                              </div><br>

                              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active"><a href="" data-toggle="tab"><i class="zmdi zmdi-female zmdi-hc-fw"></i>PADRE</a></li>
                              </ul>

                              <div class="form-group">                              
                                <select class="form-control" name="cmbParentescoPadre" id="idParentescoPadre">                                  
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  parentesco WHERE idParentesco = 2";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['idParentesco']."'>".$regSeguroSocial["parentesco"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input type="text" class="form-control" id="nombrePadre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ape1Padre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido Materno</label>
                                <input type="text" class="form-control" id="ape2Padre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Grado de Estudio</label>
                                <input type="text" class="form-control" id="idGradoEstudioPadre" placeholder="">
                              </div><br>
                              
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Ocupacion</label>                                
                                <select class="form-control" name="cmbOcupacionPadre" id="idOcupacionPadre">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  ocupacion";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['idOcupacion']."'>".$regSeguroSocial["ocupacion"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Teléfono celular del Padre</label>
                                <input type="number" class="form-control" id="telefonoCelularPadre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Curp del Padre</label>
                                <input type="text" class="form-control" id="CURPAPadre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Clave del elector del Padre</label>
                                <input type="text" class="form-control" id="claveElectorPadre" placeholder="">
                              </div><br>

                              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active"><a href="" data-toggle="tab"><i class="zmdi zmdi-female zmdi-hc-fw"></i>MADRE</a></li>
                              </ul>

                              <div class="form-group">                              
                                <select class="form-control" name="cmbParentescoMadre" id="idParentescoMadre">           
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  parentesco WHERE idParentesco = 1";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['idParentesco']."'>".$regSeguroSocial["parentesco"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input type="text" class="form-control" id="nombreMadre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ape1Madre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Apellido Materno</label>
                                <input type="text" class="form-control" id="ape2Madre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Grado de Estudio</label>
                                <input type="text" class="form-control" id="idGradoEstudioMadre" placeholder="">
                              </div><br>
                              
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Ocupacion</label>                                
                                <select class="form-control" name="cmbOcupacionMadre" id="idOcupacionMadre">
                                  <option>--Seleccione una opcion--</option>
                                  <?php
                                  include("../funciones/conexion.php");
                                  $sentencia = "SELECT * FROM  ocupacion";
                                  $resultado = mysqli_query($conexion,$sentencia);
                                  while($regSeguroSocial = mysqli_fetch_assoc($resultado)){
                                    echo "
					                          <option value='".$regSeguroSocial['idOcupacion']."'>".$regSeguroSocial["ocupacion"]."</option>
					                          ";
                                  }
                                ?>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Teléfono celular de la Madre</label>
                                <input type="number" class="form-control" id="telefonoCelularMadre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Curp de la Madre</label>
                                <input type="text" class="form-control" id="CURPAMadre" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Clave del elector de la Madre</label>
                                <input type="text" class="form-control" id="claveElectorMadre" placeholder="">
                              </div><br>

                            </form>

                            <!--<form>
                              <div class="form-group">
                                <label for="exampleFormControlFile1">Subir Archivo</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                            </form>-->

                            
                            <p class="text-center">
                              <button href="#!" class="btn btn-warning " style="color: rgb(0, 0, 0); font-size: 100%;"><i class="zmdi zmdi-floppy zmdi-hc-fw"></i>GUARDAR DATOS</button>
                            </p>
                            

                              <script>
                              // Example starter JavaScript for disabling form submissions if there are invalid fields
                              (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                  var forms = document.getElementsByClassName('needs-validation');
                                  // Loop over them and prevent submission
                                  var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                      if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                      }
                                      form.classList.add('was-validated');
                                    }, false);
                                  });
                                }, false);
                              })();
                              </script>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Booking End -->
        


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
