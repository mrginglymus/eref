<?php 


require_once('../base.php');

if ($_GET['method']) {
  $method = $_GET['method'];
} else {
  $method = false;
}
if (isset($_GET['save'])) {
  $save=true;
}

echo $twig->render('reference.html', array(
  'subtitle'=>'Academic Reference for Miss Sarah Williams',
  'current'=>'reference',
  'method'=>$method,
  'save'=>$save,
));
?>


