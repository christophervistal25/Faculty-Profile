<?php include_once './layouts/header.php' ?>
<?php 
	$faculty = Faculty::find($_GET['id']);
?>
		<div class="container mt-5">
			<form method="POST" id="editFacultyForm">
				<div class="form-row">
					<input type="hidden" name="id" value="<?php echo  $faculty->id ?>">
					<div class="form-group col-md-4">
						<label for="name">Name</label>
						<input required type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo  $faculty->name ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="mi">MI</label>
						<input required type="text" name="mi" class="form-control" id="mi" placeholder="MI" value="<?php echo  $faculty->MI ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="teaching">Teaching</label>
						<input required type="text" name="teaching" class="form-control" id="teaching" placeholder="Teaching" value="<?php echo  $faculty->teaching ?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="position">Position</label>
						<input required type="text" name="position" class="form-control" id="position" placeholder="Position" value="<?php echo  $faculty->position ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="appt">Appt.</label>
						<input required type="text" name="appt" class="form-control" id="Appt" placeholder="Appt." value="<?php echo  $faculty->appt ?>">
					</div>
				</div>
				<h5>Baccalaureate Degree</h5>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="course">Course</label>
						<input required type="text" placeholder="Course" name="bacc_course" class="form-control" id="course" value="<?php echo  $faculty->baccalaureate->course ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="major">Major</label>
						<input required type="text" placeholder="Major" name="bacc_major" class="form-control" id="major"  value="<?php echo  $faculty->baccalaureate->major ?>">
					</div>
					
				</div>	
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="year_grad">Yr. Grad.</label>
						<input required type="text" placeholder="Year Graduate" name="bacc_year_grad" class="form-control" id="Yr. Grad"  value="<?php echo  $faculty->baccalaureate->yr_grad ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="name_of_school">Name of school</label>
						<input required type="text" placeholder="Name of school" class="form-control" id="name_of_school" name="bacc_name_of_school"  value="<?php echo  $faculty->baccalaureate->name_of_school ?>">
					</div>
				</div>
				<h5>Masteral Program</h5>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="course">Graduate Program</label>
						<input required type="text" placeholder="Graduate Program" name="masteral_graduate_program" class="form-control" id="graduate_program"  value="<?php echo  $faculty->masteral->graduate_program ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="major">Major</label>
						<input required type="text" placeholder="Major" name="masteral_major" class="form-control" id="major"  value="<?php echo  $faculty->masteral->major ?>">
					</div>
					
				</div>	
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="year_grad">Yr. Grad.</label>
						<input required type="text" placeholder="Year Graduate" name="masteral_year_grad" class="form-control" id="Yr. Grad"  value="<?php echo  $faculty->masteral->yr_grad ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="name_of_school">Name of school</label>
						<input required type="text" placeholder="Name of school" class="form-control" id="name_of_school" name="masteral_name_of_school"  value="<?php echo  $faculty->masteral->name_of_school ?>">
					</div>
				</div>	
				<h5>Doctoral Program</h5>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="course">Degree Program</label>
						<input required type="text" placeholder="Degree Program" name="doctoral_degree_program" class="form-control" id="degree_program"  value="<?php echo  $faculty->doctoral->degree_program ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="year_grad">Yr. Grad.</label>
						<input required type="text" placeholder="Year Graduate" name="doctoral_year_grad" class="form-control" id="Yr. Grad" value="<?php echo  $faculty->doctoral->yr_grad ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="name_of_school">Name of school</label>
						<input required type="text" placeholder="Name of school" name="doctoral_name_of_school" class="form-control" id="name_of_school" value="<?php echo  $faculty->doctoral->name_of_school ?>">
					</div>
					
				</div>	
				<button type="submit" class="btn btn-success float-right">Update Faculty</button>
			</form>
		</div>
		<script src="/faculty/assets/scripts/jquery.min.js"></script>
		<script src="/faculty/assets/scripts/swal.min.js"></script>
		<script>
			$(document).ready(function () {
				$('#editFacultyForm').submit(function (e) {
					e.preventDefault();
					let data = $(this).serialize();
					$.ajax({
						url : '/faculty/action/edit.php',
						data : data,
						type : 'POST',
						success : function (response) {
							response = JSON.parse(response);
							if (response.success) {
								swal("Updated!", "Succesfully update this faculty information.", "success");
							}
						}
					});
				});
			});
		</script>
	</body>
</html>