<!DOCTYPE html>
<html>
    <title> CALCULADORA DE IMC </title>

    <head>
        <h1> CALCULADORA DE IMC </h1>
    </head>

    <body>
        <form action="index.php" method="POST">
        <p> Ingrese su peso: <input type = "text" name = "peso" ></p>

        <p> Ingrese su altura: <input type = "text" name = "altura" ></p>
        <p> <input type = "submit" name = "btn" value = "Calcular IMC"></p>
        </form>

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $imc = $_POST["peso"] / ($_POST["altura"] ** 2);
                echo "Tu IMC es $imc <br>";

                if ($imc < 18.5) {
                    echo "Bajo peso";

                } elseif ($imc >= 18.5 and $imc < 25) {
                    echo "Peso normal";

                } elseif ($imc >= 25 and $imc < 30) {
                    echo "Tienes sobrepeso";

                } else {
                    echo "Padeces obesidad";
                }
            }
        ?>

    </body>
</html>
