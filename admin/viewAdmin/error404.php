<?php ob_start() ?>
<h2>404 error  </h2>
<article>

    <h3>404 error - what is it?</h3>
<p>  The page could not be found at the requested URL
</p>

</article>
<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php";
