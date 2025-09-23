<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Echo</h1>
    <?php echo "Escrevendo na tela"; ?>
 
    <?php echo "Miguel Angelo"; ?>
 
    <?php
        if($nome == "Miguel Angelo")
        {
            echo "É o Miguel certo"
        }else{
            echo "Não é o Miguel certo"
        }
 
    ?>
<h2>Listas,Array chave valor</h2>
<?php

    $minhaLista = [];
    $minhaLista = [] = "Item 1";
    $minhaLista = [] = "Laranja";
    $minhaLista = [] = "Gol 1.6";
    $minhaLista = [] = "Casa Container";

    echo "<pre>";
    print_r($minhaLista);
    echo "</pre>";

    echo "<col>";
    for ($i = 0; $i <count($minhaLista); $1++)
    {
        echo "<li> $minhaLiasta[$1] </li>";
    }
    echo "</ol>";

    $i =0;
    while ($i < count($minhaLiasta))
    {
        echo "<h3> $minhaLIsta[$i]</h3>";
        $i++;
    }

    echo "<table border='2'>";
    foreach($minhaLiasta as $item)
    {
        echo "<tr><td>&item</td></tr>";
    }
    echo "</table>";
    
    $professores = []
    $professores[] = ["Id"=>"1",
                    "nome"=>"Fernando",
                    "Ativo"=>"1",
                    ];

$professores[] = ["Id"=>"2",
                    "nome"=>"Paula",
                    "Ativo"=>"2",
                    ];
echo "<table border= '2'>";
foreach($professores as $professores)
{
    echo "<tr>
            <td>$professor[Id]</td>
            <td>$professor[Nome]</td>
            <td>$professor[Ativo]</td>
        </tr>";
}
echo"</table>;
?>


</body>
</html>
