/* SESSION
*$_SESSION is superglobal variable
*way to store and share information across pages in browser
*unlike cookie, session not stored on user's computer
*session is temporary variable, i.e., stays only till browser is closed (stored in database for permanent storage
*for eg browsers store stuff like login info (username, etc) or cart information on shopping websites (eg product name, price etc)
*we can still see cart information on sites like amazon when we login next time coz it is stored in database
*/

<?php
    //start the session
    session_start();
?>
// start session before html tag
<!DOCTYPE html>
<html>
    <body>
        <?php
        //set session varables
        $_SESSION["fav_car"]="porsche";
        $_SESSION["fav_color"]="pink";
        echo "session variables have been set";
        ?>
    </body>
</html>
    
