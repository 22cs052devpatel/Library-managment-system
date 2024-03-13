
<?php
session_start();
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,"login");
          $fname ="";
          $lname ="";
          $email="";

          $query = "select * from input where Email_address ='$_SESSION[Email_address]'";
          $query_run = mysqli_query($connection,$query);
      
					while ($row = mysqli_fetch_assoc($query_run))
                    {
                        $fname =$row['First_name'];
                        $lname =$row['Last_name'];
                        $email =$row['Email_address'];

                    }   
                    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library managment website</title>
    <link rel="stylesheet" href="navi.css">
    <style>
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>

<body>
    
  
    <!-- <div class="div">
        Dashboard
    </div> -->
    <div class="golbal">
        <div class="sticker">
        <div class="anime">
            <p id="move">welcome to Library managment system</p> <img src="bookpic.png" alt="bookpic">
        </div>
        <div class="nav">
            <ul class="navlist">
                <li>
                    <img id="charusat" src="logo.png"
                        alt="charusat">
                </li>
                <li     id="list">
                    <a id="logout1" href="#">
                        <div class="logout">
                            LOG ME OUT
                        </div>
                    </a>
                </li>
            
            </ul>

        </div>
        </div>
        
        <div class="line3">

        </div>
        
            <div class="container">
        <div class="navbar">
            <!-- <div class="div">
        Dashboard
    </div> -->
            <ul>
                <li>
            <div class="align">
            <a id="size1" href="#"
            <i class="bi bi-speedometer2">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="28" fill="#551A8BF4" class="bi bi-speedometer2" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
              </svg>    
            </a>
           </i>
           <div class="dashboard">
            <a id="dash" href="#linkdash">Dashboard</a>
           </div>
        
        </div>
    </li>
    <li>
        <br><br>
        <div class="book1">
       
       <a href="#">
        <i class="bi bi-book">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="28" fill="#551A8BF4" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
              </svg></a>
            </i>    
            <div class="book">
                
                <a id="book" href="#bookid">Issuedbook</a>
            </div>
        </div>

    
    </li>
    <li>
        <br><br>
        <div class="profile1">
       
       <a href="#">
             <i class="bi bi-person-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="28" fill="#551A8BF4" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg></a>
            </i>    
            <div class="profile">
                
                <a id="profile" href="#dev">Profile</a>
            </div>
        </div>

    
    </li>

    </ul>
         <div id="line4">
 
    </div>
 
  </div>

<div class="dashb" >

    <br>   <br> <div class="dashs" id="linkdash">
    <h2 >User Dashboard</h2><br><hr width="900px">
</div>
    <br>   <br> 
    <div class="container4">
    <div class="box">
        <div class="bookpic">
           <img src="bookremoved.png" alt="bookimage" width="100px" height="100px">
        </div>
                <div class="bookissued">
            Book issued

        </div>
        <div class="booknumber">
            5
        </div>
    </div>
    <div class="box2">
        <div class="returned">
            <i class="bi bi-recycle">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                    <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z"/>
                  </svg>
            </i>
        </div>
        <br>
        <div class="bookreturned">
            Book returned

        </div>
        <div class="bookreturned1">
            5
        </div>

    </div>
   
  
</div>

<div class="boxisseued" >
<div class="bookissuedb" id="bookid">
    <h2>Book issued </h2> 
     <hr width="900px"> 
 </div> 


 <div class="table">
    <br><br>  
    <table>
    <tr>
        <th>Name</th>
        <th>Author</th>
        <th>Price</th>
        <th>Date when issued</th>
    </tr>
    <tr>
        <td>Atomic Habits</td>
   
    <td>James Clear</td>
    <td>500 </td>
    <td>23/24</td>
</tr>
<tr>
    <td>xyz</td>

<td>xyz</td>
<td>500 </td>
<td>02/24</td>
</tr>

<tr>
    <td>Own Your Body</td>

<td>Shruti Arora</td>
<td>400 </td>
<td>09/24</td>
</tr>
<tr>
    <td>Project Hail Mary</td>

<td>Andy Weir</td>
<td>300 </td>
<td>07/24</td>
</tr>
</table>  
 </div>
 <div class="profilemain">

    <h2>User Profile </h2><hr width="900px">
    <div class="profile123" id= "dev">
        <div class="profile10">
            <img  id="profilemain" src="profilepic-removebg-preview.png" alt="profilemain">
        </div>
        <div class="atributes"> 
            <h3>Name : <?php echo $fname;?> <?php echo $lname;?></h3>
            <h3>Email address: <?php echo $email;?></h3>
        </div>
        </div>
        
 </div>
</div>

</div>
<!-- <div class="about">
    <h2>About</h2><hr>  
</div> -->

</div>

</div>
<footer class="site-footer">
    <div class="container9">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <br>
          <p class="text-justify">Welcome to our Library Management System (LMS), a comprehensive solution <br> designed to streamline library 
             operations and enhance the user experience <br> for librarians and patrons alike.At charusat library managment our mission <br> is to empower libraries of all sizes and types to efficiently manage their <br> collections, serve their patrons, and promote a love for reading and learning. <br> We strive to provide innovative tools and exceptional support to help <br> libraries thrive in the digital age.
            <br><br> 
              </p>
<br>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Map</h6>
       <map name="charusat"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14733.897040662521!2d72.8229914!3d22.5987585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e50c43cdea6c7%3A0x5074fe9e0c1c8bd!2sCharotar%20University%20of%20Science%20and%20Technology%20(CHARUSAT)!5e0!3m2!1sen!2sin!4v1708886571504!5m2!1sen!2sin" width="350px" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></map>

        </div>
        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <br>
          <ul class="footer-links">
            <li><a href="https://charusat.ac.in/documents/pdfs/data_1/Code_Of_Conduct/Employee%20Code%20of%20Conduct.pdf">Code of conduct</a></li>
            <li><a href="https://drive.google.com/file/d/1W4PSsjJBvykZu3YiS6dtRYKyZRuXYwNR/view?usp=sharing">Privacy Policy</a></li>
          </ul> <br>
          <div class="con"><h6>contact us :</h6> +91 2697 265011/12 </div>
        <br>
        <div class="mail"><h6>Mail us :</h6>info@charusat.ac.in</div>
        </div>
        </div>
      </div>
      <hr>
    </div>
    <div class="container10">
      <div class="row1">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by 
       <a href="#">Charusat</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class= "faebook" href="https://www.instagram.com/thecharusat/?hl=en"><img  id="insta" src="instagram (3).png" alt=""></a> </li>
            <li><a class="twitter" href="https://twitter.com/thecharusat?lang=en"> <img  id="tweet" src="twitter.png" alt=""></a></li>
            <li><a class="dribbble" href="https://www.facebook.com/thecharusat/"><img  id="face" src="facebook.png" alt=""></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com/school/charotar-university-of-science-&-technology-charusat-"><img  id="link" src="linkdin.png" alt=""></a></li>   
          </ul>
        </div>
      </div>
    </div>
</footer>
     
</body>


</html>
