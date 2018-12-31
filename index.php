<?php
    // RULE - USE DOUBLE QUOTES (EDITOR MAY US SINGLE QUOTES CHANGE TO DOUBLE)

    // COMMENT THESE LINES TO HIDE ERRORS.
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    // THIS LOADS ALL CONFIGURATION NEEDED TO DEPLOY APP AND CHANGE BEHAVIOUR.
    require "includes/config.php";
    // THIS HAS ALL THE FUNCTIONS STORED IN IT.
    require "includes/functions.php";

    // THIS METHOD STARTS THE APP.
    init();
 ?>
