
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 31/07/2018
 * Time: 9:30 PM
 */
<?php
$submitted = isset($_POST['username']) && isset($_POST['password']);
if ($submitted) {
  setcookie('username', $_POST['username']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bookstore</title>
</head>
<body>
<?php if ($submitted): ?>
  <p>la informacion de su login es</p>
  <ul>
    <li><b>username</b>: <?php echo $_POST['username']; ?></li>
    <li><b>password</b>: <?php echo $_POST['password']; ?></li>
  </ul>
<?php else: ?>
  <p>Usted no ha mandado nada.</p>
<?php endif; ?>
</body>
</html>
