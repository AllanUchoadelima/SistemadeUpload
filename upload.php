<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Uploads de Arquivos</title>
</head>
<body>
    <h2> Faça o Upload dos arquivos </h2>
    <form enctype="multipart/form-data" method="post" action="up_load.php">
        <p>Nome do diretório: <input type="text" name="diretorio"></p>
        <p>Digite o nome do Cômodo da casa: <input type="text" name="nome"></p>
        <p><input name="userfile" type="file" /></p>
        <p><button type="submit"> Enviar Arquivo </button></p>
    </form>
</body>
</html>