<?php
    // ALL THE FUNCTION THAT WILL BE REQUIRED BY THE Yaf_Application
    // NEEDS TO BE DEFINED HERE

    // RULES 1 - METHOD NAME : CAMEL CASE (eg. camelCase() )
    //       2 - VARIABLE NAME : SNAKE CASE (eg. snake_case = ; )
    //       3 - USE DOUBLE QUOTES (EDITOR MAY US SINGLE QUOTES CHANGE TO DOUBLE)

    // STARTS EVERYTHING AND DISPLAY ALL APP CONTENT
    function init() {
        require config("structure_path") . "/structure.php";
    }
    // GIVES PAGE TITLE
    function pageTitle() {
        $page = isset($_GET["page"]) ? str_replace("-"," ",$_GET["page"]) : "Home";
        return $page;
    }
    // GIVES SITE NAME DEFINED IN config.php
    function siteName() {
        return config("name");
    }
    // GIVES SITE URL DEFINED IN config.php
    function siteURL()
    {
        return config("url");
    }
    // GIVES SITE VERSION DEFINED IN config.php
    function siteVersion()
    {
        return config("version");
    }
    function updatePlayer($value = '')
    {
        echo "<p>Hello</P>";
    }
    function updateInformation($value = '')
    {
        // code...
    }
    function updateMain($value = '')
    {
        // code...
    }
 ?>
