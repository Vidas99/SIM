<?php require('db.php');?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="updatenews.php" method="post" role="form" class="form-inline" enctype="multipart/form-data">
                <div class="form-group">

                    <label >
                        Titulo
                    </label>
                    <input type="text" name="title" class="form-control" id="title" />
                </div>
                <div class="form-group">

                    <label>
                        Subtitulo
                    </label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" />
                </div>
                <div class="form-group">

                    <label>
                        Noticia
                    </label>
                    <textarea type="text" name="news_text" class="form-control" id="news_text"></textarea>
                </div>
                <div class="form-group">

                    <label>
                        Imagem
                    </label>
                    <input type="file" name="image" class="form-control-file" id="image" />
                    <p class="help-block">
                    </p>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>
<?php
$sql = "SELECT title, subtitle, news_text FROM news ";
if ($result = $db->query($sql)){
    echo '<table border="1">';
    echo '<tr><td>TITULO</td><td>SUBTITULO</td><td>Eliminar?</td></tr>';
    while($news = $result->fetch_object()) {
        echo '<tr>';
        echo '<td>'.$news->title.'</td>';
        echo '<td>'.$news->subtitle.'</td>';
        echo '<td><a href="deletebackoffice.php?title='.$news->title.'">SIM</a></td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
        </div>
    </div>
</div>

