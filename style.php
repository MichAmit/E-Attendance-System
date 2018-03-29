<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<ul class="nav nav-tabs">
   <li><a href="#a" data-toggle="tab">a</a></li>
   <li><a href="#b" data-toggle="tab">b</a></li>
   <li><a href="#c" data-toggle="tab">c</a></li>
   <li><a href="#d" data-toggle="tab">d</a></li>
</ul>

<div class="tab-content">
   <div class="tab-pane active" id="a"><div class="container-fluid">
		<div class="row">
			<div class="col-md-2" id="left"></div>
			<div class="col-md-8" id="middle"><br>
				<div id="box">
				<h4 class="text-center d6-color">ATTENDENCE</h4>
				<?php include ' attendence.php' ?>
				<hr class="hr-dark">
				
				<?php
					include 'generate_defaulters.php';	
				?>

				<!-- Tanay's news code ends -->
				</div>
			</div>
			<div class="col-md-2" id="right"></div>
		</div>
	</div>
</div>
   <div class="tab-pane" id="b"><div class="container-fluid">
		<div class="row">
			<div class="col-md-2" id="left"></div>
			<div class="col-md-8" id="middle"><br>
				<div id="box">
				<h4 class="text-center d6-color">ATTENDENCE</h4>
				<!-- Insert news code from Tanay -->
				<hr class="hr-dark">
								<?php include ' attendence.php' ?>

				<?php
					include 'generate_defaulters.php';	
				?>

				<!-- Tanay's news code ends -->
				</div>
			</div>
			<div class="col-md-2" id="right"></div>
		</div>
	</div></div>
   <div class="tab-pane" id="c"><div class="container-fluid">
		<div class="row">
			<div class="col-md-2" id="left"></div>
			<div class="col-md-8" id="middle"><br>
				<div id="box">
				<h4 class="text-center d6-color">ATTENDENCE</h4>
				<!-- Insert news code from Tanay -->
				<hr class="hr-dark">
								<?php include ' attendence.php' ?>

				
				<?php
					include 'generate_defaulters.php';	
				?>

				<!-- Tanay's news code ends -->
				</div>
			</div>
			<div class="col-md-2" id="right"></div>
		</div>
	</div></div>
   <div class="tab-pane" id="d"<div class="container-fluid">
		<div class="row">
			<div class="col-md-2" id="left"></div>
			<div class="col-md-8" id="middle"><br>
				<div id="box">
				<h4 class="text-center d6-color">ATTENDENCE</h4>
				<!-- Insert news code from Tanay -->
				<hr class="hr-dark">
				
				<?php
									<?php include ' attendence.php' ?>

				?>

				<!-- Tanay's news code ends -->
				</div>
			</div>
			<div class="col-md-2" id="right"></div>
		</div>
	</div></div>
</div>