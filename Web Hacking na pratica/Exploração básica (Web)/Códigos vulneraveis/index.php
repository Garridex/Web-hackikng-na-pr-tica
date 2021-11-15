<?php
if(isset($_GET['notaeid']) and !empty($_GET['notaeid'])){

     $nota = file_get_contents("notas/".intval($_GET['notaeid']). ".txt");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>portal de notas</h2></center>
    <br>
    <center><a href="?notaeid=1">ler nota</a></center>
    <center>
        conteudo da nota:
        <br>
        <?=$nota?>
    </center>
</body>
</html>