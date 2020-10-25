<?php

  if (isset($_POST['submit'])) {
    session_start();

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];

    header("Location: pag2.php");
  }

?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Session</title>
  </head>
  <body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <input type="text" name="name" placeholder="Numele D-voastra">
      <input type="email" name="email" placeholder="Email-ul D-voastra">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
