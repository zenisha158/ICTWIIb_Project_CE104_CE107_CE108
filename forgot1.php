<?php
session_start();
$showErrorAlert=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
include "connection.php";
$username=$_POST['username'];
$sl="SELECT * FROM `users` WHERE `username`='$username'";
$ret=mysqli_query($conn,$sl);
$row= mysqli_num_rows($ret);
 if($row==1)
 {          
    
    $_SESSION['userame']=$username;
    header('location: newpass.php');
 }
 else{
     
    $showErrorAlert="Enter vaild username";
}
 
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        <style>
        body{
            background-color:rgb(255, 216, 71);
        }
            .container-login2 small,
            label,
            h1 {
                margin-left: 10px;
            }
            
            .container-login2 input {
                margin-left: 10px;
                border: 4px solid white;
                border-radius: 6px;
            }
            
            .container-login2 h2 {
                text-align: center;
            }
            .container-login2 h1{
                margin-bottom:14px;
                margin-top:5px;
            }
            
            .container-login2 {
                border: 3px solid white;
                background-color:rgb(255, 216, 71);
                border-radius: 20px;
                margin: auto;
                margin-top: 130px;
                width: 500px;
                position: relative;
                height: auto;
                color: white;
                text-align: left;
                font-family: 'Arial';
            }
            
            .container-login2 .login-btn {
                width: 140px;
                height: 30px;
                margin-left: 80px;
                border-radius: 25px;
                margin-bottom: 20px;
                border-color: white;
                font-size: 17px;
                font-weight: 600;
                border-style: solid;
            }
        </style>
    </head>

    <body>
        <?php
     if($showErrorAlert){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong>'.$showErrorAlert.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    
    ?>
            <form action="forgot1.php" method="post">
                <div class="container-login2">
                    <h1>
                       <b> Password Recovery</b>
                    </h1>
                    <h3 style="color:rgb(111, 180, 158)
;">Enter the username through  which you sign up your self in  our website</h3>
                    
                    <label for="username"style="margin-top:5px;"><h1>Username</h1></label><br>
                    <input type="text" name="username" height="20px" size="50px" placeholder="Username" required>
                    <br><br>
                    <input type="submit" class="login-btn" value="Next" name="send"></input><br>
                    
                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>
    </html>