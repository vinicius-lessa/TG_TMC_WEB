<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        //$url = "https://swapi.co/api/people/";
        $url = "http://localhost/FATEC/_GitFinal/TG_TMC_BACKEND/SERVIDOR/estoque.php/produto/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        var_dump($resultado);

        foreach ($resultado as $key => $value) {
            echo "<hr>";
            // var_dump($value);
            echo "ID: " . $value->id . "<br>";
            echo "Descrição: " . $value->descricao . "<br>";
            
            // foreach ($ator->films as $filme) {
            //     echo "Filme: " . $filme . "<br>";
            // }            
        }

        ?>
    </body>
</html>
