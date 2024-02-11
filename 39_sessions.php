<?php
/*what is sessions
 used to manage information across diffrent pages.
 Sessions always Keep on Top above the html Code 
*/
// Verify the user login info
//Here we set the sessions.
session_start();
$_SESSION['username'] = "Deepak";
$_SESSION['favCat'] ="Books";
echo "We have saved your session ";
?>