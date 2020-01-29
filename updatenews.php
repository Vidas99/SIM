<?php
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$news_text = $_POST['news_text'];

if (!$title || !$subtitle || !$news_text){
    echo "Preenche os espaços";
}
else{

    $sql = "insert into news (title, subtitle, news_text) values('$title','$subtitle','$news_text')";

    if ($db->query($sql)) {
        echo "Noticia introduzida com sucesso";
    } else {
        echo "Ocorreu um erro;
    }
}
?>