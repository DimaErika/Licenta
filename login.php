<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sigma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/main.js" defer></script>
</head>
<body>

<?php
include("inc/parts/header.php");
?>

<div class="body-login">
    <div class="login-container">
        <form class="login-form">
          <h2>Login</h2>
           <div class="input-group">
              <input type="email" id="email" name="email" placeholder="Email" required>
           </div>
          <div class="input-group">
              <input type="password" id="password" name="password" placeholder="Password" required>
           </div>
           <div class="forgot-password">
               <a href="#">Forgot Password?</a>
           </div>
           <button type="submit">Login</button>
     </form>
    </div>
</div>

<?php
include("inc/parts/footer.php");
?>

</body>
</html>
