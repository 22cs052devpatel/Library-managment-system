

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login portal</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="nav">
        <div class="bar">
        <ul class="list">
            <li>
                <img id ="pic"src="logo.png" alt="charsat">
                
            </li>
        </ul>
        </div>
        <div class="line">

        </div>
        <div class="loginop">
            <ul class="op">
                <a class="design" href="newadminlogin.php">ADMIN LOGIN

                </a><a class="design" href="index.php">USER SIGN UP

                </a><a class="design" href="sgpprojectlogin.php">USER LOGIN</a>
                
            </ul>
        </div>
        <div class="line1">
           

        </div>
        <div class="logins">
            
           <B>ADMIN LOGIN</B> 
           <br>
        <br>

            <hr>
        

        </div>
        <div class="container">
           
            <h3 id="fontcolor">ADMIN LOGIN</h3>
            <br>
            <hr>

        

            <form action="" class="border"  method="post">
               
              <div class="input-field">
                <br>
                <label for="email">Username</label>
                <input type="text1" id="email" name="username" placeholder="Enter your email">
              </div>
              <div class="input-field">
                <label for="password">Password:</label>
                <input type="password" id="password" name="Password" placeholder="Enter your password">
              </div>
              <!-- <div class="input-field">
                <label for="verification_code">Verification code:</label>
                <input type="text" id="verification_code" name="verification_code" placeholder="Enter the verification code">
              </div> -->
              <button name="login" type="submit">LOGIN</button>
            </form>
            <?php 
        session_start();
				if(isset($_POST['login'])){
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,"login");
          $query = "select * from admin where username ='$_POST[username]'";
          $query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['Password'] == $_POST['Password']){
							if($row['username'] == $_POST['username']){
								$_SESSION['username'] =  $row['username'];
                $_SESSION['s.no'] =  $row['s.no'];
								header("Location:adminportal.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
          </div>
        <!-- <div class="form"> -->
            <!-- <form>
                <div class="row g-3">
                    <div class="col">
                        <label for="form-control">First name</label>
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                      <br>
                      <br>
                    </div>
                    <div class="col">
                        <label for="form-control">Last name</label>
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                      <br>
                      <br>
                    </div>
                  </div>
                  
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <br>
                  <br>
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <div class="mb-3">
                    <br>
                    
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <br>
                <br>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> -->
        <!-- </div> -->
    </div>
    
</body>
</html>
