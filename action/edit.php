<?php
require "../bootstrap.php";

$faculty = Faculty::find($_POST['id']);
$faculty->name     = $_POST['name'];
$faculty->teaching = $_POST['teaching'];
$faculty->position = $_POST['position'];
$faculty->MI       = $_POST['mi'];
$faculty->appt     = $_POST['appt'];



$faculty->baccalaureate->course         = $_POST['bacc_course']; 
$faculty->baccalaureate->major          = $_POST['bacc_major']; 
$faculty->baccalaureate->yr_grad        = $_POST['bacc_year_grad'];
$faculty->baccalaureate->name_of_school = $_POST['bacc_name_of_school'];

$faculty->masteral->graduate_program = $_POST['masteral_graduate_program'];
$faculty->masteral->major            = $_POST['masteral_major'];
$faculty->masteral->yr_grad          = $_POST['masteral_year_grad'];
$faculty->masteral->name_of_school   = $_POST['masteral_name_of_school'];


$faculty->doctoral->degree_program = $_POST['doctoral_degree_program'];
$faculty->doctoral->yr_grad        = $_POST['doctoral_year_grad'];
$faculty->doctoral->name_of_school = $_POST['doctoral_name_of_school'];

$faculty->save();
$faculty->baccalaureate->save();
$faculty->masteral->save();
$faculty->doctoral->save();

echo json_encode(['success' => true]);