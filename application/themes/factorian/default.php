<?php 
$view->inc('elements/header.php');
$contenu = new Area('Contenu'); $contenu->display($c);
$view->inc('elements/footer.php'); 
?>
