<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  </style>
  <body>

  	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand"></a>
	    
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="index.php">Register</a>
	        <a class="nav-link" href="view.php">View</a>
	        
	      </div>
	    </div>
	  </div>
	</nav>
	

	<h6>Task 1(Customer)</h6>


  	<br><br>

  	<div class="mx-auto" style="width: 700px;">
  		
  		<form method="post">
		  <div class="form-group">
		    <label>Title</label>
		    <select class="form-control" name="title" required>
		      <option>Mr</option>
		      <option>Mrs</option>
		      <option>Miss</option>
		      <option>Dr</option>
		    </select>
		  </div>

		  <br>
		  <div class="form-group">
		    <label>First Name</label>
		    <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
		  </div>

      <br>
		  <div class="form-group">
		    <label>Middle Name</label>
		    <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
		  </div>

		  <br>
		  <div class="form-group">
		    <label>Last Name</label>
		    <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
		  </div>

		  <br>
		  <div class="form-group">
		    <label>Contact Number</label>
		    <input type="text" class="form-control" name="contact" placeholder="Contact Number" maxlength="10" required>
		  </div>

		  <br>
		  <div class="form-group">
		    <label>District</label>
		    <input type="text" class="form-control" name="district" placeholder="District" required>
		  </div>

		  <br>

		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    	</form>

  </body>
</html>

<?php

include_once 'database.php';
if(isset($_POST['submit']))
{  
   $title = $_POST['title'];
   $firstname = $_POST['firstname'];
   $middlename = $_POST['middlename'];
   $lastname = $_POST['lastname'];
   $contact = $_POST['contact'];
   $district = $_POST['district'];
   $sql = "INSERT INTO customer (title,first_name,middle_name,last_name,contact_no,district)
   VALUES ('$title','$firstname','$middlename','$lastname','$contact','$district')";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>