<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <link href="imgs/logo.png" rel="icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estiloform.css" rel="stylesheet" type="text/css">
	<title>TERMINAR COMPRA</title>
</head>
<body><br>
	<h1>Antes de continuar, proporcionanos algunos datos: </h1><br>
	<h1>Datos del envío</h1><br>
	<div>
		<form action="/floreria/pantallafinal.html" method="post">
			Cantidad: <br><input type=text name=cant size=20 class="noestirar" required><br><br>
			Tipo de envío:
			<br><select name="env" class="noestirar" required>
			 <option> Normal (gratis)
			 <option> Express ($149)
			</SELECT>
            <div>
                <img src="imgs/camion.png" height="100px" width="110px">
            </div>
            <br>
			Método de pago:
			<br><select name="metpag" class="noestirar" required>
			 <option> Tarjeta de crédito o débito
			 <option> Mercado Pago
 		     <option> Paypal
 			 <option> Tiendas OXXO
			</SELECT>
            
            <div>
                <img src="imgs/metodosdepago.png" height="120px" width="110px">
            </div>
            
			<br>
			<input type="submit" class="noestirar" id="envio" value="Terminar con la compra" > <input type=reset class="noestirar" id="reset">
		</form>

	</div>
</body>
</html>