<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="estilo.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de electronicos</title>
    
</head>
<body>
<body background="electro1.jpg" >
<div class="form-login">
      <div class="cabecera">
        <h1>EL ELECTRON</h1>
        <span>VENTA DE PRODUCTOS ELECTRONICOS</span>
    </div>
    <form action="proceso.php" method="POST">
        <h2>Escoja el producto que desea comprar</h2>

<input type="radio" name="producto" id="1" value="1" required>Laptop $525.00 + IVA

<br><br>

<input type="radio" name="producto" id="2" value="2" required>Memoria RAM $15.00 + IVA

<br><br>

<input type="radio" name="producto" id="3" value="3" required>Audifonos $10.00 + IVA 

<br>
<br><br><br><br>

        
        <label for="txtcantidad">CANTIDAD:</label>
        <input type="number" name="txtcantidad" id="txtcantidad" required >
        <br><br>
        <input type="submit" value="CALCULAR VENTA">
    </form>
</body>
</html>