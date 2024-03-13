









<?php   
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,"login");
 $book_name= "";
 $book_autor ="";
 $book_no="";
 $student_name="";


 $query = "select issued_book.book_name,issued_book.book_author,issued_book.book_no,input.First_name,input.Last_name from issued_book left join input on issued_book.student_id = input.s_no where issued_book.status = 1";
 
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
        <th>Book name</th>
        <th>Author name</th>
        <th>Book number</th>
        <th>Student name</th>
    </tr>
    <?php
	$query_run = mysqli_query($connection,$query);

    while ($row = mysqli_fetch_assoc($query_run)) {
        $book_name =$row['book_name'];
        $book_author =$row['book_author'];
        $book_no =$row['book_no'];
        $student_name =$row['First_name'];



        
    
    ?>
    <tr>
    <td><?php echo $row['book_name'];?></td>
							<td><?php echo $row['book_author'];?></td>
							<td><?php echo $row['book_no'];?></td>
							<td><?php echo $row['First_name'];?></td>
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


