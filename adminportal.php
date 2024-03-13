





<?php
require('functions.php');

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
            
           <B>Admin portal</B> 
           <br>
        <br>

            <hr>
            <br>
        <br>
        <div class="globalcard">
        <div class="maincard1">
           <div class="card1">
            <div class="mar">Registred user    </div>
          
           </div>
           <div class="card1d">
            
           <div class="mar2">No of users: <?php echo get_user_count();?></div> 
           <div class="viewreg">
            <div class="mar4">
           <a class="mar3" href="reguser.php" target="">View Registered Users</a>
          </div>
          </div>
           </div>
          </div>
          <div class="maincard1">
            <div class="card1">
             <div class="mar">Total books </div>
           
            </div>
            <div class="card1d">
             
            <div class="mar2">No of books available: <?php echo get_book_count();?></div> 
            <div class="viewreg1">
             <div class="mar4">
            <a class="mar3" href="realviewbook.php" target="">View all books</a>
           </div>
           </div>
            </div>
           </div>
           <div class="maincard1">
            <div class="card1">
             <div class="mar">Registred catagories    </div>
           
            </div>
            <div class="card1d">
             
            <div class="mar2">No of books catagories:<?php echo get_cat_count();?></div> 
            <div class="viewreg2">
             <div class="mar4">
            <a class="mar3" href="categories.php" target="">View catagories</a>
           </div>
           </div>
            </div>
           </div>
           <div class="maincard1">
            <div class="card1">
             <div class="mar">No. of author  </div>
           
            </div>
            <div class="card1d">
             
            <div class="mar2">No of author:<?php echo get_author_count();?></div> 
            <div class="viewreg3">
             <div class="mar4">
            <a class="mar3" href="viewauthors.php" target="">View author</a>
           </div>
           </div>
            </div>
            <br><br><br><br>
           </div>
         
           </div>
           <div class="maincard1">
            <div class="card1">
             <div class="mar">Book issued  </div>
           
            </div>
            <div class="card1d">
             
            <div class="mar2">No of book issued:<?php echo get_issued_book_count();?></div> 
            <div class="viewreg5">
             <div class="mar4">
            <a class="mar3" href="viewissuedbook.php" target="">View issued book</a>
           </div>
           </div>
            </div>
           </div>
           
        </div>
      
       
    </div>
    
</body>
</html>
