<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
        <title>PHP ex2</title>
    </head>

<body>
<?php 
$nomes = ["Banana","Maçã","Melancia","Jurubeba","Alface","Tomate","Limão","Uva","Pera","Morango"];
$descricao = ["Maduro","Verde","Estragado","Amargo","Comestivel","Podre","Brilhante","Gostosa","Saborosa","Doce"];
$qte = "";

if(isset($_GET["qte"])){
    $qte = $_GET["qte"];
}

$qte = htmlspecialchars($qte);

for($i=0; $i < $qte; $i++){
    $nRand = rand(0,9);
    echo <<<HTML
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <td>$i</td>
            <td>$nomes[$nRand]</td>
            <td>$descricao[$nRand]</td>
        </tr>
    </table>
HTML;
}
?>

</body>
</html>