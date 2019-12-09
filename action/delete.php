<?php
require "../bootstrap.php";

$faculty = Faculty::find($_GET['id']);
$faculty->baccalaureate->delete();
$faculty->masteral->delete();
$faculty->doctoral->delete();
$faculty->delete();



header("Location:/faculty/list.php");