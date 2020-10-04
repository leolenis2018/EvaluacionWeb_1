<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Salario Postobón</title>
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
    
    <main>
        <div id="texto">
            <h1>Salario Postobón</h1>
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
    </main>

    <?php
    if (isset($_POST["total_horas"])) {
        $total_semanal = 0;
        $total = $_POST["total_horas"];
        if ($total <= 40) {
            $hora = 20000;
        } else {
            $hora = 25000;
        }

        if (isset($_POST["semanal"])) {
            if ($total <= 40) {
                $total_semanal = $total * $hora;
            } else {
                $number = '40';
                $total_semanal = $number * 20000;
            }
        } else if (isset($_POST["extras"]) && $total > 40) {
            $numero_a_restar = '40';
            $total_semanal = ($total - $numero_a_restar) * $hora;
        } else if (isset($_POST["total"])) {
            if ($total <= 40) {
                $total_semanal = $total * $hora;
            } else {
                $numero2 = '40';
                $total_modificado2 = $total - $numero2;
                $numero3 = $numero2 * 20000;
                $numero4 = $total_modificado2 * $hora;
                $total_semanal = $numero3 + $numero4;
            }
        } else {
            $total_semanal = 0;
        }
    } else {
        $total_semanal = 0;
    }
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