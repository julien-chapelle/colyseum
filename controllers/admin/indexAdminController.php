<?php
require '../../models/Database.php';
require '../../models/Admin.php';
require '../../models/Contact.php';
$ContactManager = new Contact();
$listContact = $ContactManager->getListContact();
?>