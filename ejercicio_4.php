<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio Matemático</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>
    </header>

    <div id="texto">
        <p>
            <p></p>
        </p>
        <form method="post" action="ejercicio_4.php">
            <div id="valores">
                <input type="text" name="precio" class="valores_2" placeholder="Ingresar Precio" />
                <input type="text" name="cantidad" class="valores_2" placeholder="¿Cuantos pares lleva?" />

            </div>
            <div id="botones">
                <button type="submit" name="calcular" class="botones">Calcular</button>

            </div>
        </form>

        <?php

        if (isset($_POST["precio"]) && isset($_POST["cantidad"])) {
            $precio = $_POST["precio"];
            $cantidad  = $_POST["cantidad"];
        }


        if (isset($_POST["calcular"]))
            if ($cantidad = 3) {
                $total = $precio * $cantidad;
                $descuento = $total * 0.1;
                $total_pagar = $total - $descuento;
            } else if (isset($_POST["calcular"]) and $cantidad > 8) {
                $total = $precio * $cantidad;
                $descuento = $total * 0.5;
                $total_pagar = $total - $descuento;
            } else {
                $descuento = 0;
                $total_pagar = 0;
            }










        ?>
        <div id="total">
            <label for="">Descuento</label>
            <input type="text" id="resultado" value="<?php echo $descuento; ?>" />
        </div>

        <div id="total">
            <label for="">Total a pagar</label>
            <input type="text" id="resultado" value="<?php echo $total_pagar; ?>" />
        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>