<?php 

    $baseURL = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"] . "?") . "/";

    $baseURL2 = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"], 2) . "/";

?>