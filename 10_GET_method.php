// simple html form with two input fields
<html>
  <body>
    <form action="welcome_get.php" method="GET">
      Name:<input type="text" name="name"><br>
      Email:<input type="text" name="email"><br>
    </form>
  </body>
</html>

//looks like:
<html>
  <body>
    Welcome <?php echo GET["name"]; ?><br>
    Your email is: <?php echo GET["email"]; ?>
  </body>
</html>
