<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form role="form" class="form-inline">
                <div class="form-group">

                    <label >
                        Titulo
                    </label>
                    <input type="text" class="form-control" id="title" />
                </div>
                <div class="form-group">

                    <label>
                        Subtitulo
                    </label>
                    <input type="text" class="form-control" id="subtitulo" />
                </div>
                <div class="form-group">

                    <label>
                        Noticia
                    </label>
                    <textarea type="text" class="form-control" id="news_text"></textarea>
                </div>
<!--                <div class="form-group">-->
<!---->
<!--                    <label>-->
<!--                        Imagem-->
<!--                    </label>-->
<!--                    <input type="file" class="form-control-file" id="exampleInputFile" />-->
<!--                    <p class="help-block">-->
<!--                        Example block-level help text here.-->
<!--                    </p>-->
<!--                </div>-->

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>
<?php
require('db.php');
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

