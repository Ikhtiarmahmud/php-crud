<!doctype html>
<html>
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

    <?php
    // including the database connection file
    include_once("config.php");

    if(isset($_POST['update']))
    {	
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        
        $firstName = mysqli_real_escape_string($mysqli, $_POST['FirstName']);
        $lastName = mysqli_real_escape_string($mysqli, $_POST['LastName']);
        $address = mysqli_real_escape_string($mysqli, $_POST['Address']);
        $email = mysqli_real_escape_string($mysqli, $_POST['Email']);
        $city = mysqli_real_escape_string($mysqli, $_POST['City']);
        $division = mysqli_real_escape_string($mysqli, $_POST['Division']);
        $zipcode = mysqli_real_escape_string($mysqli, $_POST['Zipcode']);
        $comments = mysqli_real_escape_string($mysqli, $_POST['Commnets']);
        $age = mysqli_real_escape_string($mysqli, $_POST['Age']);
        $salary = mysqli_real_escape_string($mysqli, $_POST['Salary']);
            
        // checking empty fields
        if(empty($firstName) || empty($lastName) || empty($address) || empty($email) || empty($city) || empty($division) || empty($zipcode) || empty($comments) || empty($age) || empty($salary)) {
                    
            if(empty($firstName)) {
                echo "<font color='red'>firstName field is empty.</font><br/>";
            }
            
            if(empty($lastName)) {
                echo "<font color='red'>lastName field is empty.</font><br/>";
            }
            
            if(empty($address)) {
                echo "<font color='red'>address field is empty.</font><br/>";
            }

            if(empty($email)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }

            if(empty($city)) {
                echo "<font color='red'>city field is empty.</font><br/>";
            }

            if(empty($division)) {
                echo "<font color='red'>division field is empty.</font><br/>";
            }

            if(empty($zipcode)) {
                echo "<font color='red'>zipcode field is empty.</font><br/>";
            }

            if(empty($comments)) {
                echo "<font color='red'>comments field is empty.</font><br/>";
            }

            if(empty($age)) {
                echo "<font color='red'>age field is empty.</font><br/>";
            }

            if(empty($salary)) {
                echo "<font color='red'>salary field is empty.</font><br/>";
            }
            
            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            //updating the table
            $result = mysqli_query($mysqli, "UPDATE customers 
                                SET FirstName= '$firstName',
                                    LastName= '$lastName',
                                    Address= '$address',
                                    Email= '$email',
                                    City= '$city',
                                    Division= '$division',
                                    Zipcode= '$zipcode',
                                    Comments= '$comments',
                                    Age= '$age',
                                    Salary= '$salary' 
                                    WHERE id= $id" );
            
            //redirectig to the display page. In our case, it is index.php
            //display success message
            echo "<div class='mt-5 mb-3 ml-3'><span class='alert alert-success mt-5'>Data Updated Successfully.</span></div>";
            echo "<div class='ml-3'><a class='btn btn-danger text-decoration-none' href='index.php'>View Result</a></div>";
        }
    }
    ?>

</section>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>