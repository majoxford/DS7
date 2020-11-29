<!DOCTYPE html>
<html lang="en">
<<head>
    <title>CONGRESO INTERNACIONAL DE INGENIERIA, CIENCIAS Y TECNOLOGÍA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Draco is free PSD &amp; HTML template by @afnizarnur">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/custom.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<style>
		.intro h1:before {
			/* Edit this with your name or anything else */
			content: 'IESTEC';
		}
	</style>
</head>
<body>

<!-- Navigation -->
<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo">IESTEC</span>
				</div>
			    <nav id="navbar-1" class="navbar item-nav">
				    <ul>
				        <li class="active"><a href="index.php#inicio">Inicio</a></li>
				        <li><a href="index.php#hospedaje">Hospedaje</a></li>
				        <li><a href="index.php#inscripcion">Inscripcion</a></li>
				        <li><a href="index.php#contacto">Contacto</a></li>
				    </ul>
				</nav>
			</header>
		</div>
	</div>

<!-- Introduction -->
<div class="intro section" id="inicio">
		<div class="container">
			<div class="units-row units-split wrap">
				<div class="unit-20">
					<img src="img/UTP.jpg" alt="Avatar">
				</div>
				<div class="unit-80">
					<h1>REGISTRO</h1>  
				</div>

</div>


<!-- Formulario de Registro -->
<div> 
	<form> 
		<div class="row">
			<div class="col-md-10">
				<h2><p>Participantes</p></h2>
				<input type="radio" id="ESTUD-NAC-PREG" name="participantes" value="ESTUDIANTES NACIONALES PREGRADO">
				<label for="ESTUDIANTES NACIONALES PREGRADO">ESTUDIANTES NACIONALES PREGADO</label><br>
				<input type="radio" id="ESTUD-NAC-POST" name="participantes" value="ESTUDIANTES NACIONALES POSTGRADO">
				<label for="ESTUDIANTES NACIONALES POSTGRADO">ESTUDIANTES NACIONALES POSTGRADO</label><br>
				<input type="radio" id="PROF-NAC" name="participantes" value="PROFESIONALES NACIONALES">
				<label for="PROFESIONALES NACIONALES">PROFESIONALES NACIONALES</label><br>
				<input type="radio" id="ESTUD-INT-PRE-POST" name="participantes" value= "ESTUDIANTES INTERNACIONALES PREGRADO Y POSTGRADO">
				<label for="ESTUDIANTES INTERNACIONALES PREGRADO Y POSTGRADO">ESTUDIANTES INTERNACIONALES PREGRADO Y POSTGRADO</label><br>
				<input type="radio" id="PARTICIP-INT" name="participantes" value= "PARTICIPANTES INTERNACIONALES">
				<label for="PARTICIPANTES INTERNACIONALES">PARTICIPANTES INTERNACIONALES</label><br>
			
			</div>
		</div>


		<div class="col-md-5">

			<div class="row">
				<div class="col">
						<label>Nombre(s )* </label><br>
						<input name= "nombre" class="form-control" type= "text" placeholder="Nombre(s) *" required placeholder= nombre> <br>
				</div>
				<div class="col">
					<label> Apellido(s) * </label> <br>
			<input name="apellido" class="form-control" type="text" placeholder="Apellido(s) *" required placeholder=apellido><br>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<label> Identificacion(cedula/pasaporte) * </label>
					<input name="id" class="form-control" type="text" placeholder="Identificacion(cedula/pasaporte) *" required placeholder=Identificacion(cedula/pasaporte)>
				</div>
			<div class="col">
				<label> Miembro IEEE: Dto. 15% *</label>
				<select class="form-control"id="IEEE" name="IEEE" form="IEEE">
				<option value="NO">NO</option>
				<option value="CODIGO MEMBRESIA">CODIGO DE MEMBRESIA</option>
				</select>
				
			</div>
			
			<label id="memb_titulo"> Codigo de Membresia *</label><br>
			<input name="membresia"  class="form-control" id="memb_input" type="text" placeholder="Codigo de Membresia" required placeholder = membresia><br>

			<div class="row">
						<div class="col">
							<label>Sexo * </label><br>
			<select class="form-control"id="sexo" name="sexo" form="sexoform">
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
			</select><br>
						</div>
						<div class="col">
							<label>Telefono * </label> <br>
			<input name="telefono" class="form-control" type="text" placeholder= "Telefono *" required placeholder=Telefono><br>
						</div>
					</div>
							
								<div class="row">
				<div class="col">
					<label>Provincia * </label><br>
			<input name="provincia" class="form-control" type="text" placeholder="Provincia(s) *" required placeholder=provincia><br>
				</div>
				<div class="col">
					<label> Ciudad * </label><br>
			<input name="ciudad" class="form-control" type="text" placeholder="Ciudad *" required placeholder=ciudad><br>
				</div>
			</div>


						<div class="row">
				<div class="col">
					<label> Institución / Entidad / Universidad * </label>
			<input name="institucion" class="form-control" type="text" placeholder="Institución / Entidad / Universidad *" required placeholder=institucion>
				</div>
				<div class="col">
				<label> Unidad/Departamento/Facultad * </label>
			<input name="unidad" class="form-control" type="text" placeholder="Unidad/Departamento/Facultad *" required placeholder=unidad>
				</div>
			</div>
			
		<div class="row">
					<div class="col">
						<label> Email * </label><br>
						<input name="email" class="form-control" type="text" placeholder="Email *" required placeholder=email><br>
					</div>
		</div>

			<label><h1> Áreas de Interés * </h1> </label>
			<div class="row">
				<div class="col">
					<input type="checkbox" id="agroindustria" name="agroindustria" value="Agroindustria">
					<label for="agroindustria"> Agroindustria</label><br>
					<input type="checkbox" id="cienciasbasicas" name="cienciasbasicas" value="Ciencias Basicas">
					<label for="cienciasbasicas"> Ciencias Basicas</label><br>
					<input type="checkbox" id="economiaysociedad" name="economiaysociedad" value="Economia y Sociedad">
					<label for="economiaysociedad"> Economia y Sociedad</label><br>
					<input type="checkbox" id="educacioneningenieria" name="educacioneningenieria" value="Educacion en Ingenieria">
					<label for="educacioneningenieria"> Educacion en Ingenieria</label><br>
					<input type="checkbox" id="energiayambiente" name="energiayambiente" value="Energia y Ambiente">
					<label for="energiayambiente"> Energia y Ambiente</label><br>
					<input type="checkbox" id="gestionempresarial" name="gestionempresarial" value="Gestión Empresarial, Emprendimiento e Innovación">
					<label for="gestionempresarial"> Gestión Empresarial, Emprendimiento e Innovación</label><br>
					<input type="checkbox" id="infraestructura" name="infraestructura" value="Infraestructura">
					<label for="infraestructura"> Infraestructura</label><br>
					<input type="checkbox" id="logistica" name="logistica" value="Logística y Transporte">
					<label for="logistica"> Logística y Transporte</label><br>
					<input type="checkbox" id="robotica" name="robotica" value="Robótica, automatización e inteligencia artificial">
					<label for="logistica"> Robótica, automatización e inteligencia artificial</label><br>
					<input type="checkbox" id="TI" name="TI" value="Tecnologías de la Información y Comunicación">
					<label for="TI"> Tecnologías de la Información y Comunicación</label><br>
					<input type="checkbox" id="tecnologiasemergentes" name="tecnologiasemergentes" value="Tecnologías Emergentes">
					<label for="TI"> Tecnologías Emergentes</label><br>
					<input type="checkbox" id="otros" name="otros" value="Otro(s)">
					<label for="otros"> Otro(s)</label><br>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<button type="submit" onclick="pago.php">REGISTRARME</button> 
				</div>
			</div>
	</form> 
</div>
</body>
</html>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
        $("#memb_titulo").hide();
        $("#memb_input").hide();
	});
	
	$("#IEEE").change(function(){
		var tipo = $("#IEEE").val();
		if(tipo == "CODIGO MEMBRESIA"){
         $("#memb_titulo").show();
        $("#memb_input").show();
 }else{
        $("#memb_titulo").hide();
        $("#memb_input").hide();
}
});
</script>

