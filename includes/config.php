<?php

    /***********************************************************************
     * config.php
     * Configures pages.
     **********************************************************************/

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    date_default_timezone_set('Asia/Calcutta');

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();


?>
