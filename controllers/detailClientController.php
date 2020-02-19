<?php
require '../models/Database.php';
require '../models/Admin.php';
require '../models/Client.php';
require '../models/Genre.php';
require '../models/Show.php';
require '../models/ShowType.php';
require '../models/Ticket.php';

//LOGOUT SESSION DEBUT
if (isset($_POST['logoutClient']) && !empty($_SESSION)) {
    session_reset();
    session_destroy();
    header('Location: http://colyseumv2/index.php');
};
?>