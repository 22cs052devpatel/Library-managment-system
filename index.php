<?php
	session_start();
?>
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
            
           <B>USER SIGN UP</B> 
           <br>
        <br>

            <hr>
        

        </div>
        <div class="container">
           
            <h3 id="fontcolor">USER SIGN UP</h3>
            <br>
            <hr>

        
   <form method="post" action="register.php">
                <div class="row g-3">
                    <div class="col">
                        <label for="form-control">First name</label>
                      <input type="text"  name="First_name" class="form-control" placeholder="First name" aria-label="First name" required>
                      <br>
                      <br>
                    </div>
                    <div class="col">
                        <label for="form-control">Last name</label>
                      <input type="text"  name="Last_name" class="form-control" placeholder="Last name" aria-label="Last name" required>
                      <br>
                      <br>
                    </div>
                  </div>
                  
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email1"  name="Email_address"class="form-control1" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <div class="mb-3">
                    <br>
                    
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password"  name="Password"class="form-control3" id="exampleInputPassword1" required>
                </div>
                <br>
                
                <div class="mb-3 form-check">
                  
                  <label class="form-check-label" for="exampleCheck1"><input  type="checkbox" class="form-check-input" id="exampleCheck1">Check box </label>
                </div>  
                <button type="submit"  name="login" class="btn btn-primary">Submit</button>
              </form>
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
