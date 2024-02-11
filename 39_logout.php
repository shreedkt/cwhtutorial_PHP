<?php
//Start the session and get the Data.
session_start();
session_unset();
session_destroy();
echo "<br> You have been loged out";
?>