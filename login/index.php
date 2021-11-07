<link rel="shortcut icon" href="/icons/icon.png">
<?php
session_start();

if ($_SESSION['user']) {
    header('Location: /panel/');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banners - Signin</title>
    <link rel="stylesheet" type="text/css" href="/assets/styles/login.css">
</head>
<body>
  <header>
    <ul class="left">
      <li><a href="/panel/">Panel</a></li>
      <li><a href="/FAQ/">FAQ</a></li>
      <li><a href="/support/">Support</a></li>
      <li><a href="/for-ads/">For Ads</a></li>
    </ul>
    <ul class="right">
      <li><a href="/login/">Log in</a></li>
    </ul>
  </header>
  <h1>Sign in</h1>
  <div class="container">
    <form action="/vendor/signin.php" method="post">
        <input type="text" name="login" placeholder="Enter your login">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="Sign in">
        <p>
            Don't have an account? - <a href="/reg/">sign up</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="message"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
   </div>
</body>
</html>