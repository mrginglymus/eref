<?php 


if ($_GET['pin'] == '123456') {
  header('Location: ../overview');
} elseif (isset($_GET['pin'])) {
  $error = array(
    'title'=>'Unable to log in',
    'message'=>'Please you the link and pin you were sent in the email to login',
  );
}

require_once('../base.php');

echo $twig->render('login.html', array(
  'subtitle'=>'Log in',
  'error'=>$error,
));
?>


