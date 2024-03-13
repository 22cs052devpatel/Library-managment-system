





<?php   
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"login");
       $fname = "";
       $lname ="";
       $email="";
       $password="";


 $query = "select * from input";
 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login portal</title>
    <link rel="stylesheet" href="login.css">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 2px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

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
                <a class="design" href="#">Dashboard

                </a><a class="design" href="#">Book

                </a><a class="design" href="#">Category</a>
                </a><a class="design" href="#">Author</a>
                </a><a class="design" href="#">Issued book</a>
                
            </ul>
        </div>
        <div class="line1">
           

        </div>
        <div class="logins">
            <h2>Registered users</H2>

           <br>
        <br>
<hr>
<div class="row">
<div class="table">
    <from>
    <table>
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
    </tr>
    <?php
$query_run = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_run)) {
    $fname =$row['First_name'];
    $lname=$row['Last_name'];
    $email =$row['Email_address'];

?>
<tr>
    <td><?php echo $fname;?></td>
    <td><?php echo  $lname;?></td>
    <td><?php echo $email; ?></td>
</tr>
<?php
}
?>
</table>  
</form>
 </div>
 </div>
    </div>
</div>
    
</body>
</html>

