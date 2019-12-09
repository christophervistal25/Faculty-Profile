<?php include_once './layouts/header.php' ?>
<div class="row text-center">
	<div class="col-lg-4">
		<div class="align-middle mt-5">
			<img  width="150" src="https://upload.wikimedia.org/wikipedia/en/8/88/Surigao_del_Sur_State_University.png" alt="">
		</div>
	</div>
	<div class="col-lg-4 mt-5">
		<span>Republic of the Philippines</span>
		<h3>Surigao del Sur State University</h3>
		<span>Rosario, Tandag City Surigal del Sur 8300</span>
		<br>
		<span>Telefax No. 086-211-4221</span>
		<br>
		<span>Website: sdssu.edu.ph</span>
		<br>
		<span>As of <?php echo date('M d, Y') ?></span>
	</div>
	<div class="col-lg-4 mt-5">
		<span>Document : <br> Code : FM-HRD-005Q</span>
		<br>
		<span>Revision Date : OOO</span>
		<br>
		<span>Effective Date : 08/01/2018</span>
		<br>
		<span>Page : 1 of 1</span>

	</div>
</div>

<div class="container-fluid mt-5">
	<a class="btn btn-primary mb-2" href="/faculty/print.php">PRINT</a>
	<table class="table table-bordered">
		<tr>
			<th rowspan="4" class="align-middle text-center">No.</th>
			<th colspan="2" class="text-center text-uppercase">Name</th>
			<th colspan="1" rowspan="4" class="text-center align-middle">Position</th>
			<th colspan="1" rowspan="3" class="text-center align-middle">Status Of</th>
			<th colspan="11" rowspan="1" class="text-center text-uppercase">Educational Qualification</th>
		</tr>
		<tr>
			<th colspan="1" rowspan="3" class="text-center align-bottom">Teaching</th>
			<th colspan="1" rowspan="3" class="text-center align-bottom">M.I.</th>
			<th class="text-center text-uppercase align-middle" colspan="4" rowspan="2">Baccalaureate Degree</th>
			<th class="text-center text-uppercase" colspan="7">Post Graduate</th>
		</tr>
		<tr>
			<th class="text-center" colspan="4">Masteral Program</th>
			<th class="text-center" colspan="3">Doctoral Program</th>
		</tr>
		<tr>
			<th class="text-center">Appt.</th>
			<th class="text-center">Course</th>
			<th class="text-center">Major</th>
			<th class="text-center">Yr. Grad.</th>
			<th class="text-center">Name of school</th>
			<th class="text-center">Graduate Program</th>
			<th class="text-center">Major</th>
			<th class="text-center">Yr. Grad.</th>
			<th class="text-center">Name of School</th>
			<th class="text-center text-uppercase">Degree Program</th>
			<th class="text-center">Yr. Grad.</th>
			<th class="text-center">Name of school</th>
		</tr>
		<?php foreach (Faculty::with(['baccalaureate', 'masteral', 'doctoral'])->get() as $index => $faculty): ?>
			<tr>
				<td class="text-center"><?php echo $index + 1 ?></td>
				<td class="text-center"><?php echo $faculty->teaching ?></td>
				<td class="text-center"><?php echo $faculty->MI ?></td>
				<td class="text-center"><?php echo $faculty->position ?></td>
				<td class="text-center"><?php echo $faculty->appt ?></td>
				<td class="text-center"><?php echo $faculty->baccalaureate->course ?></td>
				<td class="text-center"><?php echo $faculty->baccalaureate->major ?></td>
				<td class="text-center"><?php echo $faculty->baccalaureate->yr_grad ?></td>
				<td class="text-center"><?php echo $faculty->baccalaureate->name_of_school ?></td>
				<td class="text-center"><?php echo $faculty->masteral->graduate_program ?></td>
				<td class="text-center"><?php echo $faculty->masteral->major ?></td>
				<td class="text-center"><?php echo $faculty->masteral->yr_grad ?></td>
				<td class="text-center"><?php echo $faculty->masteral->name_of_school ?></td>
				<td class="text-center"><?php echo $faculty->doctoral->degree_program ?></td>
				<td class="text-center"><?php echo $faculty->doctoral->yr_grad ?></td>
				<td class="text-center"><?php echo $faculty->doctoral->name_of_school ?></td>
				<td class="text-center"><a class="btn btn-success"href="/faculty/edit.php?id=<?php echo $faculty->id ?>">EDIT</a></td>
				<td class="text-center"><a class="btn btn-danger"href="/faculty/action/delete.php?id=<?php echo $faculty->id ?>">DELETE</a></td>
			</tr>
		<?php endforeach ?>

	</table>
</tbody>
</table>
</div>