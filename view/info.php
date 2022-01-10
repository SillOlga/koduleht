<?php
ob_start();
?>
<h1>Это страница о нас!</h1>
<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>