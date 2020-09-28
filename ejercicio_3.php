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

    <div id="texto">
        <p>Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal.
            <p>Se sabe que si trabaja 40 horas o menos, se le pagará $20000 por hora; pero si trabaja más de 40 horas; entonces las horas extras se le pagarán a $25000 por hora.</p>
        </p>
        <form method="post" action="ejercicio_2.php">
            <div id="valores">
                <input type="text" name="total_horas" class="valores_2" placeholder="Horas Trabajadas" />

            </div>
            <div id="botones">
                <button type="submit" name="semanal" class="botones">Salario Semanal</button>
                <button type="submit" name="extras" class="botones">Salario Horas Extras</button>
                <button type="submit" name="total" class="botones">Salario Total</button>
            </div>
        </form>

        <?php
       
        ?>
        <div id="total">
            <label for="">Total a Pagar</label>
            <input type="text" id="resultado" value="<?php echo "$ " . number_format($total_semanal, 0); ?>" />
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>