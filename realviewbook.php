




<?php   
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"login");
       $book_name = "";
       $book_no ="";
       $book_price="";


 $query = "select * from book";
 
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
            <h2>View all Book</H2>

           <br>
        <br>
<hr>
<div class="row">
<div class="table">
    <from>
    <table>
    <tr>
        <th>Book name</th>
        <th>Book nomber</th>
        <th>Book price</th>
    </tr>
    <?php
$query_run = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_run)) {
    $book_name =$row['book_name'];
    $book_no=$row['book_no'];
    $book_price =$row['book_price'];

?>
<tr>
    <td><?php echo $book_name;?></td>
    <td><?php echo  $book_no;?></td>
    <td><?php echo $book_price; ?></td>
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
