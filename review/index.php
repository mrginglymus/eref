<?php 


require_once('../base.php');

if (isset($_GET['confirmdoc']) && isset($_GET['confirmporky'])) {
  header('Location: ../thanks');
}

echo $twig->render('review.html', array(
  'subtitle'=>'Academic Reference for Miss Sarah Williams',
  'current'=>'review',
));
?>


