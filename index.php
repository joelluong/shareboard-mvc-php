<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 5/11/2018
 * Time: 1:44 PM
 */
// Start Session
session_start();
// Include Config
require ('config.php');

require ('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');
require ('classes/Messages.php');

require ('controllers/home.php');
require ('controllers/shares.php');
require ('controllers/users.php');

require ('models/home.php');
require ('models/share.php');
require ('models/user.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller){
    $controller->executeAction();
}
