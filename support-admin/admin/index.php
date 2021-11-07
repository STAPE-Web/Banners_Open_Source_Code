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
        <h2>Admin</h2>
        <ul>
            <li><a href="/support-admin/money-message/">Withdrawal requests</a></li>
            <li><a href="/support-admin/support-message/">Support</a></li>
            <li><a href="/support-admin/for-ads-message/">For ads</a></li>
        </ul>
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