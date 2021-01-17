<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Winnie's Resume</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>
  

  <!--CSS File -->
  <link rel="stylesheet" href="login.css">

</head>

<body>

  <div class="login">
    <form class="form" method="post" action="api/login.php">
      <h2>Login</h2>

      <div class="group">
        <label for="acc">Account：</label>
        <input type="text" name="acc" id="acc">
      </div>

      <div class="group">
        <label for="pw">Password：</label>
        <input type="password" name="pw" id="pw">
      </div>


      <div class="forget" >
      <a href="#" style="color:#eee;  text-decoration:none;">lose the password</a> || <a href="#" style="color:#eee;  text-decoration:none;">first time here</a>
      </div>

      <div class="btn-group">
        <button class="btn" type='submit'>Login</button>
        <button class="btn">Cancel</button>


      </div>


    </form>

  </div>


   </body>
 </html>