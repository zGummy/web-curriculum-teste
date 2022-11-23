<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
        <title>PHP ex1</title>
    </head>

<body>
<?php
    $cpf = $bairro = $cidade = $logradouro = $estado = " ";

    if(isset($_POST["CEP"]))
        $cpf = $_POST["CEP"];

    if(isset($_POST["Logradouro"]))
        $logradouro = $_POST["Logradouro"];


    if(isset($_POST["Bairro"]))
        $bairro = $_POST["Bairro"];


    if(isset($_POST["Cidade"]))
        $cidade = $_POST["Cidade"];  
    

    if(isset($_POST['Estado']))
        $estado = $_POST['Estado'];

    
    $cpf = htmlspecialchars($cpf);
    $bairro = htmlspecialchars($bairro);
    $cidade = htmlspecialchars($cidade);
    $logradouro = htmlspecialchars($logradouro);

    
    echo <<<HTML
        <div class="container">
    	    <table class="table table-striped table-hover table-bordered">
			    <tr>
			    	<td> $cpf </td>
			    	<td> $logradouro </td>
                    <td> $bairro </td>
                    <td> $cidade </td>
                    <td> $estado </td>
			    </tr>
            </table>
        </div>
HTML;

?>

</body>
</html>