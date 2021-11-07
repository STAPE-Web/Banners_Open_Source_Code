<link rel="shortcut icon" href="/icons/icon.png">
<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banners - Panel</title>
    <link rel="stylesheet" type="text/css" href="/assets/styles/panel.css">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
</head>
<body>
    <ul class="navigation">
        <li><a href="/">Main</a></li>
      <li><a href="/FAQ/">FAQ</a></li>
      <li><a href="/support/">Support</a></li>
      <li><a href="/for-ads/">For Ads</a></li>
      <li><a href="/panel/premium/">Premium</a></li>
      <li><a href="/panel/finance/">For Ads</a></li>
      <li><a href="/panel/add-banners/">Add banners</a></li>
      <li><?= $_SESSION['user']['role'] ?></li>
    </ul>

    <header>
        <ul class="left">
          <li><a href="/">Main</a></li>
          <li><a href="/FAQ/">FAQ</a></li>
          <li><a href="/support/">Support</a></li>
          <li><a href="/for-ads/">For Ads</a></li>
          <li><a href="/panel/premium/">Premium</a></li>
          <li><a href="/panel/finance/">For Ads</a></li>
          <li><a href="/panel/add-banners/">Add banners</a></li>
          <li><?= $_SESSION['user']['role'] ?></li>
          <li><a href="#window"><?= $_SESSION['user']['message'] ?></a></li>
          <p class="how-mes"><?= $_SESSION['user']['howmessage'] ?></p>
        </ul>
        <div class="btns menuToggle">
            <ion-icon name="menu-outline"></ion-icon>
            <ion-icon name="close-outline"></ion-icon>
        </div>
        <ul class="right">
          <li><a href="/vendor/logout.php" class="logout">Exit</a></li>
        </ul>
    </header>
    <div class="container">
        <div class="box">
            <h2>STATISTICS</h2>
            <ul>
                <li>0 visits</li>
                <li>0 clicks</li>
                <li>0$ income</li>
                <li>0 bought a product</li>
            </ul>
        </div>
    </div>
    <div id="window">
      <div id="okno">
        <p class="window-text"><?= $_SESSION['user']['messagetext'] ?></p>
        <a href="#" class="close"><ion-icon name="close-outline"></ion-icon></a>
      </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let menuToggle = document.querySelector('.menuToggle')
        let navigation = document.querySelector('.navigation')

        menuToggle.onclick = function() {
            menuToggle.classList.toggle('active')
            navigation.classList.toggle('active')
        }
    </script>
</body>
</html>