<?php include_once './layouts/header.php' ?>
		<div class="container mt-5">
			<form method="POST" id="addFacultyForm">
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="name">Name</label>
						<input required type="text" name="name" class="form-control" id="name" placeholder="Name">
					</div>
					<div class="form-group col-md-4">
						<label for="mi">MI</label>
						<input required type="text" name="mi" class="form-control" id="mi" placeholder="MI">
					</div>
					<div class="form-group col-md-4">
						<label for="teaching">Teaching</label>
						<input required type="text" name="teaching" class="form-control" id="teaching" placeholder="Teaching">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="position">Position</label>
						<input required type="text" name="position" class="form-control" id="position" placeholder="Position">
					</div>
					<div class="form-group col-md-6">
						<label for="appt">Appt.</label>
						<input required type="text" name="appt" class="form-control" id="Appt" placeholder="Appt.">
					</div>
				</div>
				<h5>Baccalaureate Degree</h5>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="course">Course</label>
						<input required type="text" placeholder="Course" name="bacc_course" class="form-control" id="course">
					</div>
					<div class="form-group col-md-6">
						<label for="major">Major</label>
						<input required type="text" placeholder="Major" name="bacc_major" class="form-control" id="major">
					</div>
					
				</div>	
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="year_grad">Yr. Grad.</label>
						<input required type="text" placeholder="Year Graduate" name="bacc_year_grad" class="form-control" id="Yr. Grad">
					</div>
					<div class="form-group col-md-6">
						<label for="name_of_school">Name of school</label>
						<input required type="text" placeholder="Name of school" class="form-control" id="name_of_school" name="bacc_name_of_school">
					</div>
				</div>
				<h5>Masteral Program</h5>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="course">Graduate Program</label>
						<input required type="text" placeholder="Graduate Program" name="masteral_graduate_program" class="form-control" id="graduate_program">
					</div>
					<div class="form-group col-md-6">
						<label for="major">Major</label>
						<input required type="text" placeholder="Major" name="masteral_major" class="form-control" id="major">
					</div>
					
				</div>	
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="year_grad">Yr. Grad.</label>
						<input required type="text" placeholder="Year Graduate" name="masteral_year_grad" class="form-control" id="Yr. Grad">
					</div>
					<div class="form-group col-md-6">
						<label for="name_of_school">Name of school</label>
						<input required type="text" placeholder="Name of school" class="form-control" id="name_of_school" name="masteral_name_of_school">
					</div>
				</div>	
				<h5>Doctoral Program</h5>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="course">Degree Program</label>
						<input required type="text" placeholder="Degree Program" name="doctoral_degree_program" class="form-control" id="degree_program">
					</div>
					<div class="form-group col-md-4">
						<label for="year_grad">Yr. Grad.</label>
						<input required type="text" placeholder="Year Graduate" name="doctoral_year_grad" class="form-control" id="Yr. Grad">
					</div>
					<div class="form-group col-md-4">
						<label for="name_of_school">Name of school</label>
						<input required type="text" placeholder="Name of school" name="doctoral_name_of_school" class="form-control" id="name_of_school">
					</div>
					
				</div>	
				<button type="submit" class="btn btn-primary float-right">Add Faculty</button>
			</form>
		</div>
		<script src="/faculty/assets/scripts/jquery.min.js"></script>
		<script src="/faculty/assets/scripts/swal.min.js"></script>
		<script>
			$(document).ready(function () {
				$('#addFacultyForm').submit(function (e) {
					e.preventDefault();
					let data = $(this).serialize();
					$.ajax({
						url : '/faculty/action/add.php',
						data : data,
						type : 'POST',
						success : function (response) {
							response = JSON.parse(response);
							if (response.success) {
								swal("Created!", "Succesfully add new faculty.", "success");
								$('#addFacultyForm')[0].reset();
							}
						}
					});
				});
			});
		</script>
	</body>
</html>