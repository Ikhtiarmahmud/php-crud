<!-- Query Part Start -->
<?php
//including the database connection file
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM customers ORDER BY id DESC"); // using mysqli_query instead
?>

<!-- Query Part End -->

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
	<a href="add.html" class="btn btn-success text-decoration-none">Add New Data</a>
		<div class="container">
			<h1 class="text-center mb-5 text-info">City Food Market</h1>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th scope="col">Sl</th>
							<th scope="col">First Name</th>
							<th scope="col">Last Name</th>
							<th scope="col">Address</th>
							<th scope="col">Email</th>
							<th scope="col">City</th>
							<th scope="col">Division</th>
							<th scope="col">Zip Code</th>
							<th scope="col">Comment</th>
							<th scope="col">Age</th>
							<th scope="col">Salary</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						while($res = mysqli_fetch_array($result)) {
						echo "<tr>";
							echo    "<th scope='row'>".$i++."</th>";
							echo 	"<td>".$res['FirstName']."</td>";
							echo 	"<td>".$res['LastName']."</td>";
							echo 	"<td>".$res['Address']."</td>";
							echo 	"<td>".$res['Email']."</td>";
							echo 	"<td>".$res['City']."</td>";
							echo 	"<td>".$res['Division']."</td>";
							echo 	"<td>".$res['Zipcode']."</td>";
							echo 	"<td>".$res['Commnets']."</td>";
							echo 	"<td>".$res['Age']."</td>";
							echo 	"<td>".$res['Salary']."</td>";
							echo 	"<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
						echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
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