/* COOKIE
* used to identify user
*small file that server embeds on user's computer
*each time user requests a page from browser th cookie file is also sent to identify user and their preferences
*/

// cookie is created with setcookie() function
//syntax: setcookie(name, value, expire, path, domain, secure, httponly);
//Only the name parameter is required. All other parameters are optional
//isset() function used to check if cookie is set or not

//program to set cookie 
<?php
    $cookie_name="user";
    $cookie_value="Nesta Archeron";
    setcookie($cookie_name, $cookie_value, time()+(60*60*24*10)); //expiry date is after 10 days
?>

//NOTE: setcookie() function must appear before html tag

<html>
    <body>
        <?php
            if(!isset($COOKIE[$cookie_name])){
                echo "cookie named ".$cookie_name." is not set\n";
            }
            else{
                echo "cookie named ".$cookie_name. "is set successfully\n";
                echo "value is: ", $COOKIE[$cookie_value];
            }
        ?>
    </body>
</html>


//to modify a cookie, just set it again using setcookie() function

//to delete a cookie, use setcookie() function with expiry date in the past
