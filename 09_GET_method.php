//the PHP superglobals $_GET and $_POST are used to collect form-data.

//example of a simple html form with two input fiels and submit button
<html>
  <body>
    <form action="welcome.php" method="post">
      Name:<input type="text" name="name"><br>
      Email:<input type="text" name="email"><br>
      <input type=submit>
    </form>
  </body>
</html>
