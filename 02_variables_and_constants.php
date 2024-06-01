#VARIABLES
// variables are declared using '$' symbol ; for example:

$str="hello";      //string variable
$num=12;           //numeric variable
$floating=12.34;   //floating point variable
$bool=TRUE;        //boolean variable

//to get data type of variables, use var.dump() function
$x=5;
var.dump(x);
var.dump("hello");
var.dump(TRUE);

//assign same value to multiple variables
$x=$y=$z ="hello";

/*NOTE:
*Variable names are case sensitive
*variable names can only contain alphanumeric characters (A-Z a-z 0-9 and _ ) 
*variable names must begin with alphabet or underscore only
*/

--------------------------------------------------------------------------------------------------------------

#CONSTANTS

/* constants are defined using define() function of php which takes two arguments: name and value of constant
constant names must follow same rules as variable names except that they don'e need '$' prefix */

//unlike variables, constants are automatically global across whole script

define("GREETING","welcome to GitHub!");
echo GREETING;
