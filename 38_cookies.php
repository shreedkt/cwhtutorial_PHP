<?php
echo "Welcome to the world of cookies! <br>";

// Cookies and Sessions diffrence?
/* 
Basically store less secure data on user device . Sessions store more sensitive information on server using Cookies.
 * A cookie is a small piece of data that is sent from a website and stored on the user's computer. It can be used to store information about the visitor, such as preferences
*/
//Syntex to setup cookies
setcookie("category",  "Books", time()+ 86400, "/"); //name, value, expire time(optional)
echo "The cookie is set<br>";

?>