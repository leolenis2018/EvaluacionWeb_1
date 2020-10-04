<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion Web I</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="ejercicio_1.php">Calculadora<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ejercicio_2.php">Salario Postobón<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ejercicio_3.php">Calcular IMC<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ejercicio_4.php">Descuentos Zapatos<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>


    <main>
        <div class="introduccion">
            <h1>Programación para la Web I</h1>
            <p>Docente: Juan José Gallego Mesa</p>
            
        </div>
    </main>



    <footer> Derechos Reservados &copy;</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>


</body>

</html>