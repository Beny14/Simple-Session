<?php

  session_start();

  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Do not Subscriber';

  echo 'Hello<b> ' . $name . '</b><br>';
  echo 'You have a email: <b>' . $email . '<b><br><br>';

  echo "<a href='pag3.php'> Go to Page 3";
?>
