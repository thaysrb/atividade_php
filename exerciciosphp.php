<!-- 
    Thays Rodrigues Barboza 
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Atividade PHP</title>
    <script src='script.js'></script>
</head>

<body>
    <h1> Questão 1 </h1>
    <?php 
        $n = 6;
        $linha = " ";
        $i = 1;
        for($j = 1; $j <= 6; $j++) {
            $linha .= $j.") ";    

            for($k = 0; $k < $j; $k++) {
                $linha .= $i.' ';
                $i++;
            }
            $linha.="<br>";
        }
        echo $linha;
    ?>
    
    <h1> Questão 2 </h1>
        
    <?php
        $vetor = array();
        array_push($vetor, "Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");

        $n = 0;
        echo "<p>Valor n: " .($n). "</p>";


        switch ($n) {
            case 0:
                $diaSemana = $vetor[0];
                break;
            case 1:
                $diaSemana = $vetor[1];
                break;
            case 2:
                $diaSemana = $vetor[2];
                break;
            case 3:
                $diaSemana = $vetor[3];
                break;
            case 4:
                $diaSemana = $vetor[4];
                break;
            case 5:
                $diaSemana = $vetor[5];
                break;
            case 6:
                $diaSemana = $vetor[6];
                break;
        }
        echo "<p>Dia da semana correspondente: " . ($diaSemana). "</p>";
    ?>

    <h1> Questão 3 </h1>
    <?php 
        define("LIM", 2);
        echo "<p> Valor da constante LIM: ".(LIM). "</p>";

        $altura = array();

        for($i = 0; $i < LIM; $i++) {
            $valorAltura = rand(130, 200);
            $valorAltura = $valorAltura/100;

            array_push($altura, $valorAltura);
        }
        
        echo "<p> Vetor de alturas: ";
        echo "<pre>" .print_r($altura). "</pre>";

        asort($altura);
        
        if(LIM % 2 == 0) {
            $pos = LIM/2;

            $a = $altura[$pos];
            $pos = $pos/2;
            $b = $altura[$pos];
            $mediana = ($a + $b)/2;

        } else {
            $pos = (LIM-1)/2;

            $mediana = 0;
            $mediana = $altura[$pos];
        }

        echo "<p> Mediana: " .($mediana). "</p>";
    ?>

    <h1> Questão 4 </h1>
    <?php 
        define("N", 1);
        echo "<p> Valor da constante N: ".(N). "</p>";

        $pi = 3.14159;

        $repeticoes = pow(N, 2);
        $somatorio = 0;

        for($i = 1; $i <= $repeticoes; $i++) {
            $numerador = pow(($pi + $i), 3);
            $denominador = $pi - $i;
            $somatorio += $numerador / $denominador;
        }
        echo "<p> Valor calculado: " .($somatorio). "</p>";
    ?>

    <h1> Questão 6 </h1>
    <?php 
        $vetor = array();

        array_push($vetor, 3, 1, 6, 3, 5);

        echo "<p> Array: </p>";
        print_r($vetor);

        $reverso = array_reverse($vetor);
        echo "<p> Array invertido: </p>";
        print_r($reverso);
    ?>

    <h1> Questão 7 </h1>
    <?php 
        $matriz = array(
            array(1, 2),
            array(4, 7)
        );


        for ($linha=0; $linha<count($matriz); $linha++) {
            for ($coluna=0; $coluna<count($matriz[0]); $coluna++) {
                echo $matriz[$linha][$coluna]."  ";
            }
            echo "<br/> \n";
        }

    ?>

<h1> Questão 8 </h1>
    <?php 
        $matriz = array(
            array(1, 2),
            array(2, 1)
        );

        echo "<p> Matriz: </p>";

        for ($linha=0; $linha<count($matriz); $linha++) {
            for ($coluna=0; $coluna<count($matriz[0]); $coluna++) {
                echo $matriz[$linha][$coluna]."  ";
            }
            echo "<br/> \n";
        }

        $simetrica = true;

        for ($linha=0; $linha<count($matriz); $linha++) {
            for ($coluna=0; $coluna<count($matriz[0]); $coluna++) {
                if($matriz[$linha][$coluna] != $matriz[$coluna][$linha]) {
                    $simetrica = false;
                }
            }
            echo "<br/> \n";
        }

        if($simetrica) {
            echo "<p> É simétrica </p>";
        } else {
            echo "<p> Não é simétrica </p>";
        }
    ?>

    <h1> Questão 9 - Média </h1>
    <?php 
       $vetor = array(1, 2, 3, 4);
       $soma = 0;

        for($i = 0; $i < count($vetor); $i++) {
            $soma += $vetor[$i];
        }
        echo  $soma/count($vetor);
    ?>

    <h1> Questão 9 - Desvio Padrao </h1>
    <?php 
       $vetor = array(1, 2, 3, 4);
       $soma = 0;

        for($i = 0; $i < count($vetor); $i++) {
            $soma += $vetor[$i];
        }
        $media = $soma/count($vetor);

        $desvio = 0.0;

        for($i = 0; $i < count($vetor); $i++) {
            $desvio += pow(($i - $media), 2);
        }
        echo sqrt($desvio/count($vetor) - 1);
    ?>

    <h1> Questão 10 </h1>
    <?php 
        $char = "p";
        $string = "programacao";
        $novaString = "";

        echo "<p> Palavra inserida: " .($string). "</p>";
        echo "<p>  Caractere removido: " .($char). "</p>";

        for ($i = 0; $i < ((strlen($string))); $i++) {
            if($string[$i] != $char) {
                $novaString = $novaString.$string[$i];
            }
        }
        echo "<p> Nova palavra: " .($novaString). "</p>";
      
    ?>

</body>
</html>