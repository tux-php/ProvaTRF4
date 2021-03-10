<?php
/*RESPOSTA LETRA C - INÍCIO*/ 
session_start();
if($_SESSION['usuario'] == null){
    header("Location:index.php");
    session_destroy();
}
/*RESPOSTA LETRA C - FIM*/ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PG1</title>
</head>
<body>
    <h1>Página 1</h1>
    Usuário=<?php echo $_SESSION['usuario'] ." ".date("d/m/Y H:i:s", $_SESSION['time']);?><br>
    <b>Pág1</b> | <a href="p2.php">Pág2</a> | <a href="index.php">Home</a>
</body>
</html>
