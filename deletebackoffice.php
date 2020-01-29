<?php
if( isset($_GET["title"]) ){
    require('db.php');
    $sql = "DELETE FROM news WHERE title='".$_GET["title"]."'";
    if ($result = $db->query($sql)){
        echo 'Noticia apagada com sucesso!';
    } else {
        echo 'Ocorreu um erro ao apagar a noticia!';
    }
}
?>
