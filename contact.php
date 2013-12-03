<?php
    $title = "Contact";
    include 'header.php';
?>

    <div class="container">

		<div class="page-header">
		  <h1>Contact Form <small>Subtext for contact</small></h1>
		</div>

		<div class="col-md-6">
			<form role="form" class="form-horizontal">
			  <div class="form-group">
				<label for="exampleFirstName">First Name</label>
				<input type="email" class="form-control" id="exampleFirstName" placeholder="First Name">
			  </div>
			  <div class="form-group">
				<label for="exampleLastName">Last Name</label>
				<input type="email" class="form-control" id="exampleLastName" placeholder="Last Name">
			  </div>
			  <div class="form-group">
				<label for="email">Email</label>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon">@</span>
				  <input type="text" id="email" class="form-control" placeholder="email">
				</div>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
				<div class="btn-group">
				  <button type="submit" class="btn btn-primary">Submit</button>
				  <button class="btn btn-danger">Cancel</button>
				</div>
			  </div>
			
			</form>
		</div>
		
		
		
    </div> <!-- /container -->

<?php
    include 'footer.php';
?>