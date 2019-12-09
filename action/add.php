<?php
require "../bootstrap.php";



$faculty = Faculty::create([
	'name'     => $_POST['name'],
	'teaching' => $_POST['teaching'],
	'position' => $_POST['position'],
	'MI'       => $_POST['mi'],
	'appt'     => $_POST['appt']
]);

$faculty->baccalaureate()->create([
	'course'         => $_POST['bacc_course'], 
	'major'          => $_POST['bacc_major'], 
	'yr_grad'        => $_POST['bacc_year_grad'],
	'name_of_school' => $_POST['bacc_name_of_school'],
]);

$faculty->masteral()->create([
	'graduate_program' => $_POST['masteral_graduate_program'],
	'major'            => $_POST['masteral_major'],
	'yr_grad'          => $_POST['masteral_year_grad'],
	'name_of_school'   => $_POST['masteral_name_of_school'],
]);

$faculty->doctoral()->create([
	'degree_program' => $_POST['doctoral_degree_program'],
	'yr_grad'        => $_POST['doctoral_year_grad'],
	'name_of_school' => $_POST['doctoral_name_of_school']
]);

echo json_encode(['success' => true]);