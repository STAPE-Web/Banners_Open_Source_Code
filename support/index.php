<link rel="shortcut icon" href="/icons/icon.png">

<?php 

  session_start();
  if (isset($_POST['text']) && isset($_POST['autor']) && isset($_POST['mail'])){
    
    $mail = $_POST['mail'];
    $text = $_POST['text'];
    $autor = $_POST['autor'];
    
    $db_host = "localhost"; 
    $db_user = "root"; 
    $db_password = "root"; 
    $db_base = 'support'; 
    $db_table = "message"; 
    
    try {
 
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);

        $db->exec("set names utf8");

        $data = array( 'text' => $text, 'autor' => $autor, 'mail' => $mail ); 

        $query = $db->prepare("INSERT INTO $db_table (text, autor, mail) values (:text, :autor, :mail)");
       
        $query->execute($data);
        
        $result = true;
    } catch (PDOException $e) {
       
        print "Error!: " . $e->getMessage() . "<br/>";
    }
    
    if ($result) {
      echo '<p class="message">';
      echo "Success. Your message has been sent to the moderator. You will be answered by mail.";
      echo '</p>';
    }
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="/icons/icon.png">
  <link rel="stylesheet" type="text/css" href="/assets/styles/support.css">
  <title>Banners - Support</title>
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
  <h1>Support</h1>
    <div class="container">
      <form action="" method="post">
        <input type="text" name="autor" required placeholder="Your name">
        <input type="email" name="mail" required placeholder="Your email">
        <textarea type="text" name="text" required placeholder="Your problem" maxlength="1000"></textarea>
        <input type="submit" value="OK">
      </form>
    </div>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>