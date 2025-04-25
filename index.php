<?php
    require_once("modelo/Numero.php");

    $numeros = array();
        array_push($numeros, new Numero("1", "https://www.pngmart.com/files/14/1-Number-PNG-Picture.png"));
        array_push($numeros, new Numero("2", "https://pngimg.com/uploads/number2/Number%202%20PNG%20images%20free%20download_PNG14928.png"));
        array_push($numeros, new Numero("3", "https://www.pngarts.com/files/3/Number-3-PNG-High-Quality-Image.png"));

        // Sortear  o número.
            $numeroSort = $numeros[rand(0, count($numeros) - 1)];

        // O palpite foi colocado?
        if (isset($_GET['palpite'])) {
        $numeroEsc = (string)$_GET['palpite']; //'(string)' pra não dar um choque de tipos quando for comparar com o '==', daria pra usar o '===' também.

            if ($numeroEsc < 1 or $numeroEsc > 3) { // Valor válido??
                echo "<h3>Insira um valor entre 1 e 3!</h3>";

                } else {
                    if ($numeroSort->getNome() == $numeroEsc) { // Se são  iguais.
                    echo "<h3>Você acertou!</h3>";
                    echo "<p>Você escolheu o número: " . $numeroSort->getNome() . "</p>";
                    echo "<img src='" . $numeroSort->getLink() . "' width='200'>";

                } else {
                    echo "<h3>Que pena! Você errou.</h3>";
                    echo "<p>O número correto era: " . $numeroSort->getNome() . "</p>";
                    echo "<img src='" . $numeroSort->getLink() . "' width='200' style='filter: blur(5px);'>"; // 'style='filter: blur(5px)' é pra deixar a imagem embaçada.
                }
            }
        } else { // Se o palpite não for colocado.
            echo "<h3>Você precisa inserir o seu palpite!</h3>";
            echo "<p>Exemplo: ?palpite=2</p>";
        }