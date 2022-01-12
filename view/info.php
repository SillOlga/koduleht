<?php
ob_start();
?>
<h1>Это страница о нас!</h1>
<h2 class="fw">Мы всегда знаем, что происходит в мире моды, следим за всеми новинками в мире моды!</h2>
<div class="container">
    <div class="row">
        <div class="col">
            <iframe width="800" height="600" src="https://www.youtube.com/embed/zsu2WRFaUoQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <h3 class="maptext">Нас найти очень просто!</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2468.2292575157!2d27.752175592761702!3d59.39886307888463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2see!4v1642005322207!5m2!1sru!2see" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>



<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>