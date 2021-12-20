<?php ob_start() ?>
<article>
<div id="main" class="container">
    <h3>Аdmin panel</h3>
    <div class="row">
        <p>Аdmin panel</p>
    </div>
</div>
</article>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php";