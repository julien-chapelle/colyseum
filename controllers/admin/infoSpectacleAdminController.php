<?php
require '../../models/Database.php';
require '../../models/Show.php';
$ShowManager = new Show();
if (isset($_GET['id']) && !empty($_GET['id']))
{
    $ShowManager->getShow($_GET['id']);

}
?>