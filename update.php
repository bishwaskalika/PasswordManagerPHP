<?php include "config/config.php" ?>

<?php
  if(isset($_GET['upd'])){
    $id = $_GET['upd'];
    $query = "SELECT * FROM users WHERE id=$id";
    $fire = mysqli_query($con,$query) or die("Cannot fetch the data" .mysqli_error($con));
    $user = mysqli_fetch_assoc($fire);
  }

?>
<?php
  if(isset($_POST['update'])){
    $fullname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE users SET fname = '$fullname' , lname = '$lastname' , email = '$email' , username = '$username', password = '$password' WHERE id=$id";
    $fire = mysqli_query($con,$query) or die("Connot Update the data");
    if($fire) header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="row">
  <div class="col-sm-12">
	<form name="signup" id="signup" method="POST" action="<?php $_SERVER['PHP_SELF']?>" >
  <br><br>
  <h1>Update Page</h1>
  <hr>
  <br>
  <div class="form-group">

    <label for="fullname">Full Name:</label>
    <input value="<?php echo $user['fname']; ?>" type="text" required="" class="form-control" name="fname" id="fullname">
  </div>
  <div class="form-group">

    <label for="fullname">Last Name:</label>
    <input value="<?php echo $user['lname']; ?>" type="text" required="" class="form-control" name="lname" id="lastname">
  </div>
  <div class="form-group">
    <label for="username">User Name:</label>
    <input value="<?php echo $user['username']; ?>" type="text" class="form-control" name="username" id="username">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input value="<?php echo $user['email']; ?>" type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input value="<?php echo $user['password']; ?>" type="password" class="form-control" name="password" id="password">
  </div>
  <button type="update" name="update" id="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
 


</div>

  
</div>
</div>
	</div>
</body>
</html>