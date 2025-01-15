<?php 
$dsn = 'mysql:host=localhost;dbname=leoni';
$user = 'root';
$psswd = '';

try {
  $dbb = new PDO($dsn, $user, $psswd);
} catch (Exception $e) {
  echo "Failed: " . $e->getMessage();
}

$admin_email = 'saidkhayate@gmail.com';
$admin_password = 'ks1003';

if (isset($_POST['email'], $_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  if ($email == $admin_email && $password == $admin_password) {
    header('Location: main.php');
    exit();
  } else {
    $error_message = "Invalid email or password";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <style>
    .notification {
      display: none; /* Masqué par défaut */
      position: fixed;
      top: 10px;
      right: 10px;
      background-color: #f8d7da;
      color: #721c24;
      padding: 10px;
      border: 1px solid #f5c6cb;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div><img src="imgstock/leoni logo.jpg" alt="logo"></div>
  <div class="container-0">
    <div>
      <img class="img-sign" src="imgstock/log in page.jpg" alt="">
    </div>
    <div class="container--1">
      <div class="intro">
        <h1>Hello!</h1>
        <br>
        <h3>Log in to get all the updates</h3>
      </div>
      <br><br>
      <form method="post" action="index.php">
        <label>E-mail<sup class="et">*</sup></label><br>
        <input type="email" name="email" placeholder="Your Email" class="mail" required><br><br>
        <label class="label0">Password<sup class="et">*</sup></label><br>
        <input type="password" name="password" placeholder="Your password" class="pswd" required><br>
        <button type="submit" class="log-btn">Log in</button><br>
        <input type="checkbox" name="remember me">
        <label class="reme">Remember me</label>
      </form>
    </div>
  </div>
  <br><br>
  <div class="notification" id="notification">Invalid email or password.</div>
  <script>
    let errorMessage = "<?php echo isset($error_message) ? $error_message : ''; ?>";
    if (errorMessage) {
      let notification = document.getElementById('notification');
      notification.style.display = 'block';
      notification.textContent = errorMessage;
    }
  </script>
</body>
</html>
