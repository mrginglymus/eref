<?php 


require_once('../base.php');

if (isset($_GET['save'])) {
  $save=true;
}

if (isset($_GET['complete'])) {
  $complete=true;
}

if (isset($_GET['missing_fields'])) {
  $missing_fields=true;
}

echo $twig->render('your_details.html', array(
  'subtitle'=>'Academic Reference for Miss Sarah Williams',
  'current'=>'your_details',
  'save'=>$save,
  'missing_fields'=>$missing_fields,
  'complete'=>$complete
));
?>


