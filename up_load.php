<?php


$dir= $_POST['diretorio'];
if(is_dir($dir)){
    
}else{
    mkdir($dir);
}

 
$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeF = $_FILES['userfile']['name'];
$noneFile = $_POST['nome'];
$parInfo = pathinfo("$nomeF");
$ext =$parInfo['extension'];
$extenções = array("jpeg","jpg","png");

if(in_array($ext,$extenções)){       
    
$ctr = move_uploaded_file($nomeTemp,$dir."/".$nomeF.".$ext");
}


 
 if($ctr){
    echo "Upload realizado com sucesso!";
 }else{
     echo "Upload não realizado tente realizar upload de arquivos do tipo png, jpg e jpeg!";
 }

 echo "<a href=\"galeria.php\"> <button> Visualizar Galeria </button> </a> <br>";
 echo "<a href=\"delet.php\"> <button> Deletar Imagens </button> </a>";