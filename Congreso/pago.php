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
					<h1>PAGO</h1>  
				</div>

</div>


<!--Formulario de Pago-->

<form>

    <div class="row">
                <div class="col-md-10">
                    <h2><p>FORMA DE PAGO</p></h2>
                    <input type="radio" id="Tarjeta" name="participantes" value="Tarjeta Credito">
                    <label for="Tarjeta de Credito">Tarjeta de Credito</label><br>
                    <input type="radio" id="Transferencia" name="participantes" value="Transferencia">
                    <label for="Transferencia">Transferencia</label><br>
                </div>
    </div>

<div class="col-md-5">

        <div class="row">
                <div class="col">
                    <label> Numero de la Tarjeta </label>
                    <input name="numerot" class= "form-control" type="text"  placeholder="Numero de Tarjeta" required placeholder= "numerot">
                </div>

                <div class="col">
                    <label> Fecha Vencimiento</label>
                    <input name="vencimiento" class="form-control" type="text" placeholder= "Exp MM/AA" required placeholder= "vencimiento">
                </div>
        </div>  

            <div class= "row">
                    <div class="col">
                        <label> Nombre en la Tarjeta</label>
                        <input name="nombret" class="form-control" type="text" placeholder="Nombre en la Tarjeta" required placeholder="nombret">
                    </div>


                    <div class="col">

                        <label> Codigo Seguridad </label>
                        <input name="codigo" class="form-control" type="text" placeholder="Codigo Seguridad" required placeholder="codigo">
                    </div>
            </div>



    <br>
    <br>

        <h2> DIRECCION DE FACTURACION </h2>

        <div class= "row">
                <div class="col">
                    <label> Pais</label>
                    <input name="pais" class="form-control" type="text" placeholder="Pais" required placeholder="pais">
                </div>


                <div class="col">

                    <label> Direccion </label>
                    <input name="direccion" class="form-control" type="text" placeholder="Direccion" required placeholder="direccion">
                </div>

        </div>

                <div class= "row">
                        <div class="col">
                            <label> Ciudad</label>
                            <input name="ciudad" class="form-control" type="text" placeholder="Ciudad" required placeholder="ciudad">
                        </div>

                        <div class="col">
                            <label> Codigo Postal</label>
                            <input name="codigop" class="form-control" type="text" placeholder="Codigo Postal">
                        </div>

                 </div>

                            <div class="row">
                                    <div class="col">
                                        <label> Numero Telefonico </label>
                                        <input name="numero" class="form-control" type="text" placeholder="Numero Telefonico" required placeholder="numero">
                                    </div>
                            </div> 



</div>

            <div class="row">
				<div class="col">
					<button type="submit" onclick="mensaje.html">PAGAR</button> 
				</div>
			</div>

</form> 



</body>
</html>