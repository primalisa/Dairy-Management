

<?php
    // Clear login data
    session_start();
    
    // remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy(); 
    
    // Start session again
    session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dairy Managment</title>

<style>
.navbar
{
height:50px;
background-color:#393e46; ;


}

.bgcolor
{

background-color:#8cd5ff;

}
  .aa{
                width: 300px;
                margin: auto;
            }

.co
{
color:white;
}
.center
{
margin-left:480px;

}
</style>

 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <link rel="stylesheet" href="project.css">

  </head>

  <body class="bgcolor">


 <nav class="navbar navbar-expand-lg ">
<div class="center">

<h3 class="co">Dairy Management System</h3> 

</div>
</nav>
 <h4><a style="color:black" href="register.php">Home page</a></h4>


 
<div class="backgroundimage">
<center>
  <img src="logo1.png" alt="Image">
</center>
</div>
<center>
<div class="aa">       
            <h1> User Login </h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <p> User name:<br /><input type="text" name="user"/></p>
                <p> Password:<br /><input type="password" name="password"/></p>
                <p> <input style="background-color: orange" type="submit" value="Login"/> <input style="background-color: orange" type="reset" value="Clear"/></p>
            </form>
        </div>
</center>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST["user"];
            $password = $_POST["password"];

            if ($user && $password) {
                
                $mysql = mysqli_connect("localhost", "root", "");
                mysqli_select_db($mysql, "dms");
                
                $result1 = mysqli_query($mysql, "SELECT * FROM login WHERE user='$user' and password='$password'");
                $count = mysqli_num_rows($result1);
                mysqli_free_result($result1);
                if ($count == 1) {
                    $_SESSION['User'] = $user;
                    header("location:index.php");
                } else {
                    echo "Wrong username or password";
                }
            }
        }
        ?>


</body >
</html>