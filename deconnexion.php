<?php
session_start();
$_SESSION = array();
session_destroy();
header('Location: index.php');
/* salut moi c'est bibi */
