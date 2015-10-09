<?php 


require_once('../base.php');

if (isset($_GET['save'])) {
  $save=true;
}

if (isset($_GET['missing_fields'])) {
  $missing_fields=true;
}

echo $twig->render('overview.html', array(
  'subtitle'=>'Academic Reference for Miss Sarah Williams',
  'current'=>'overview',
  'save'=>$save,
  'missing_fields'=>$missing_fields
));
?>


