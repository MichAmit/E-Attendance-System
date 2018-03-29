






<h3 class="text-center d6-color">Marksheet</h3>
<hr class="hr-dark">
<form method="POST" enctype="multipart/form-data" action="marks_upload.php">
	<h3 class="d6-color">Insert Marksheet</h3>
	<br>
	<input class="form-control" placeholder="Enter Rollno of the student" type="text" name="rollno" maxlength="225" required>
	<br>
	<input class="form-control" type="file" name="file" maxlength="225" required>
	<br>
	<div class="text-center">
		<input class="btn btn-danger" type="submit" value="Upload">
	</div>
</form>
<br>
<hr>
<br>

<h3 class="d6-color">Delete Marksheet</h3>
<br>
<input class="form-control" placeholder="Enter Rollno of the student" type="text" name="rollno" maxlength="225" required>

<br>
<div class="text-center">
	<br>
<input class="btn btn-danger" type="submit" value="Delete">
</div>
</form>
</div>
</body>
