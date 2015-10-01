<?php 


require_once('../base.php');

if (isset($_GET['method'])) {
  $method = $_GET['method'];
} else {
  $method = false;
}
if (isset($_GET['save'])) {
  $save=true;
}

if (isset($_GET['type'])) {
  $type = $_GET['type'];
} else {
  $type = 'academic';
}

$subtitle = ucwords($type) . ' Reference for Miss Sarah Williams';

echo $twig->render('reference.html', array(
  'subtitle'=>$subtitle,
  'current'=>'reference',
  'method'=>$method,
  'save'=>$save,
  'type'=>$type,
));
?>


