<html>
  <head>
    <title>Home - Bloxcity</title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text" name="username" placeholder="Enter your username...">
      <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
<?php
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  if(empty($username)){
  echo "please enter your username.";
  }else{
echo "You have submitted this form.";
}
}
?>
