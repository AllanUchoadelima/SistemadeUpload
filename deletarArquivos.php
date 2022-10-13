<form action="deletarArquivos.php" method="post">
    <p> Escreva o comodo da casa para ser deletado <input type="text" name="Deletar"></p>
    <?php
    $delet = $_POST['Deletar'];
    if(is_dir($delet)){
        $nova = scandir($deletarArquivos);
        array_shift($nova);
        array_shift($nova);
        foreach($nova as $novaV){
            unlink("$deletar/$novaV");
        }
        rmdir($delet);
    }
    ?>
    <button type="submit"> Deletar </button>
</form>