//fopen() and fclose() are used to open/close a file
<?php
    //function to open file
    $myfile=fopen("example.txt", "r") or die("unable to open file");
    echo fread($myfile, filesize("example.txt"));
    fclose($myfile);
?>
    
