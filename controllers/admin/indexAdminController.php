<?php
require '../../models/Database.php';
require '../../models/Admin.php';
require '../../models/Contact.php';
require '../../models/Show.php';
require '../../models/Client.php';
$ClientManager = new Clients();
$ShowManager = new Show();
$ContactManager = new Contact();
$listContact = $ContactManager->getListContact();
$listShows = $ShowManager->toListAll();
$listClients = $ClientManager->listClients();
?>