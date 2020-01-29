<?php
require('db.php');

$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$news_text = $_POST['news_text'];
$image = $_FILES['image'];

if (!$title || !$subtitle || !$news_text || !$image){
    echo "Preenche os espaços";
    exit;
}
else{
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true) {
        move_uploaded_file($file_tmp,"uploads/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }

    $sql = "insert into news (title, subtitle, news_text, image) values('$title','$subtitle','$news_text', '$file_name' )";
    if ($db->query($sql)) {
        echo "Noticia introduzida com sucesso";
    } else {
        printf("Connect failed: %s\n", $db->connect_error);
    }
}
$db->close();
?>