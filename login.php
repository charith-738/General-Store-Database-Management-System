<?php
 session_start();
 if(isset($_POST['Submit'])){
    include "dbcon.php";
    $username=$_POST['Username'];
    $Password=$_POST['Password'];

    $user_search="SELECT Emp_id,Password from Employee where Username='$username'";
    $query=mysqli_query($conn,$user_search);
    
    if(mysqli_num_rows($query)){
        $res=mysqli_fetch_assoc($query);
        if($Password==$res['Password']){
            echo '<script>alert("Sucessfully logged in");</script>';
            $_SESSION['Emp_id']=$res['Emp_id'];
            echo '<script>location.replace("main.php");</script>';
        }else{
            echo '<script>alert("Wrong Password");</script>';
        }
    }else{
        echo '<script>alert("Invalid Username.");</script>';
    }
 }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "links.php" ?>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <title>Login :: Sai krishna store</title>   
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <h1 class="h3 mb-3 fw-normal"><b>SAI KRISHNA GENERAL STORE</b></h1>
          
            <div class="container">
            <div class="drop">
            <div class="content">
                <h3>Sign-In</h3>
                <form>
<div class="inputBox">
    <input type="text" placeholder="Username" name="Username">
</div>
<div class="inputBox">
    <input type="password" placeholder="Password" name="Password">
</div>
<button class="w-50 btn btn-lg btn-primary" type="submit" name="Submit">Sign in</button>
                </form>
            </div>
        </div>
</div>
           </form> 
        <?php include "footer.php" ?>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>
</html>