<?php
include_once("config.php");
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM customers WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$firstName = $res['FirstName'];
	$lastName = $res['LastName'];
	$address = $res['Address'];
	$email = $res['Email'];
	$city = $res['City'];
	$division = $res['Division'];
	$zipcode = $res['Zipcode'];
	$commnets = $res['Commnets'];
	$age = $res['Age'];
	$salary = $res['Salary'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>City Food!</title>
	<style>
		#add {
			margin: 50px;
			border: 1px solid gainsboro;
			padding: 20px;
		}
	</style>
  </head>
  <body>
    <section id="add">
		<div class="container">
			<h1 class="text-center mb-5 text-info">City Food Market</h1>
				<form action="update.php" method="post" name="form1"> 
					<div class="row">
						<input type="hidden" name="id" value="<?php echo $id?>">
						<div class="col-md-6">
							<div class="form-group">
								<label ></label>FIrst Name</label>
								<input type="text" name="FirstName" class="form-control" value="<?php echo $firstName?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Last Name</label>
								<input type="text" name="LastName" class="form-control" value="<?php echo $lastName?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Address</label>
								<input type="text" name="Address" class="form-control" value="<?php echo $address?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Email</label>
								<input type="text" name="Email" class="form-control" value="<?php echo $email?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >City</label>
								<input type="text" name="City" class="form-control" value="<?php echo $city?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Division</label>
								<input type="text" name="Division" class="form-control" value="<?php echo $division?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Zipcode</label>
								<input type="number" name="Zipcode" class="form-control" value="<?php echo $zipcode?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Commnets</label>
								<input type="textarea" name="Commnets" class="form-control" value="<?php echo $commnets?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Age</label>
								<input type="number" name="Age" class="form-control" value="<?php echo $age?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Salary</label>
								<input type="number" name="Salary"  class="form-control" value="<?php echo $salary?>">
							</div>
						</div>
						<div class="col-md-12">
							<button type="submit" name="update" class="btn btn-primary">Update</button>
						</div>
					</div>
				  </form>
			</div>
		</div>
	</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>