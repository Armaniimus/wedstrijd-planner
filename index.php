<?php
Require_once "config.php";
Require_once "autoloader.php";

//  $Datahandler = new DatahandlerOriginal();
// $Datahandler = new Datahandler(SERVERNAME, PASS, USER, DATABASE);

$Router = new Router(ROOT);
if ($Router->run() === false) {
    $main = new Index_controller();
    $main->home();
}

?>
