<?php
session_start(); //start The Session
session_unset(); //unset The data

session_destroy(); //Destroy session 

header('Location:index.php');

exit();