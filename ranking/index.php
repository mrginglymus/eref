<?php 


require_once('../base.php');

if (isset($_GET['save'])) {
  $save=true;
}

if (isset($_GET['type'])) {
  $type = $_GET['type'];
} else {
  $type = 'academic';
}

$subtitle = ucwords($type) . ' Reference for Miss Sarah Williams';

echo $twig->render('ranking.html', array(
  'subtitle'=>$subtitle,
  'current'=>'ranking',
  'save'=>$save,
  'type'=>$type,
));
?>


