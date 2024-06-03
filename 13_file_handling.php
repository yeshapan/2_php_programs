//fopen() and fclose() are used to open/close a file
//fread() function reads from an open file.

<?php
    //function to open file
    $myfile=fopen("example.txt", "r") or die("unable to open file");
    echo fread($myfile, filesize("example.txt"));
    fclose($myfile);
?>

//fgets() function is used to read a single line from a file.
//NOTE: After a call to the fgets() function, the file pointer has moved to the next line.
//feof() function checks if the "end-of-file" (EOF) has been reached. it is useful for looping through data of unknown length
    
<?php
    //read file using fgets
    $myfile=fopen("example.txt","r") or die("Unable to open file");
    while(!feof($myfile)){
        echo fgets($myfile).<br>
            }
    fclose($myfile);
?>
