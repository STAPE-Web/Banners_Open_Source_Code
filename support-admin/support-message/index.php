<link rel="shortcut icon" href="/icons/icon.png">
<?php 

  $connection = mysqli_connect("localhost", "root", "root", "support");

  if($connection == false){
    echo "Error!";
    echo mysqli_connect_errno();
    exit();
  }

  $query = mysqli_query($connection, "SELECT * FROM  message ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/assets/styles/messages.css">
  <title>Banners</title>
  <meta name="description" content="Banner advertising service banners provides you with a very large functionality so that you can start earning.">
  <meta name="keywords" content="banners, banner, advertising, ads, money, income">
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
    <div class="container">
    <?php 

      while($article = mysqli_fetch_assoc($query)){
      echo '<a href="page.php?id='.$article['id'].'">';
        echo '<h1 class="mail">';
        echo $article['mail'].'<br>';
        echo '</h1>';

        echo '<p class="text">';
        echo $article['text'].'<br>';
        echo '</p>';

        echo '<h3 class="autor">';
        echo $article['autor'].'<br>';
        echo '</h3>';
        echo '<br>';
      echo '</a>';
    }

    ?>
  </div>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>