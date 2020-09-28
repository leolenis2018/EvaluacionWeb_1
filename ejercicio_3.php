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
        <p>El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal basado en el formula: <p>𝐼𝑀𝐶=𝑃𝐸𝑆𝑂 /𝐴𝐿𝑇𝑈𝑅𝐴∗𝐴𝐿𝑇𝑈𝑅𝐴</p>       
        </p>
        <form method="post" action="ejercicio_3.php">
            <div id="valores">
                <input type="text" name="peso" class="valores_2" placeholder="Ingrese su peso" />
                <input type="text" name="altura" class="valores_2" placeholder="Ingrese su Estatura" />

            </div>
            <div id="botones">
                <button type="submit" name="calcular_imc" class="botones">Calcular IMC</button>

            </div>
        </form>

        <?php

        if (isset($_POST["calcular_imc"])) {
            $peso = $_POST["peso"];
            $altura  = $_POST["altura"];
        }
      
        $total =  $peso / ($altura * $altura);

        if ($total <= 18.5) {
            $clasificacion =  "Peso Insuficiente";
        } else if ($total > 18.5 && $total <= 24.9) {
            $clasificacion =  "Peso Normal";
        } else if ($total > 25 && $total <= 26.9) {
            $clasificacion = "Sobrepeso Grado I";
        } else if ($total > 27 && $total <= 29.9) {
            $clasificacion = "Sobrepeso Grado II";
        } else if ($total > 30 && $total <= 34.9) {
            $clasificacion = "Obesidad Tipo  I";
        } else if ($total > 35 && $total <= 35.9) {
            $clasificacion = "Obesidad Tipo  II";
        } else if ($total > 40 && $total <= 49.9) {
            $clasificacion = "Obesidad Tipo  III";
        } else if ($total > 50) {
            $clasificacion = "Obesidad Tipo  IV";
        } else {
            $total = "";
            $clasificacion = " ";
        }

        ?>
        <div id="total">
            <label for="">Indice Masa Corporal</label>
            <input type="text" id="resultado" value="<?php echo $total; ?>" />
        </div>

        <div id="total">
            <label for="">Clasificación</label>
            <input type="text" id="resultado" value="<?php echo $clasificacion; ?>" />
        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>