<?php 
    //include ('ses.php');
session_start();
if(isset($_SESSION['finaluser']))
{echo "<script>alert('welcome ".$_SESSION['finaluser']."');</script>";}
else
{echo "<script>alert('GET OUT'); window.location.href='login.php';</script>";}
 ?>
<html>
<head>
	<title>bookmaster</title>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear" style="padding-bottom: 16px"> 
    <div class="fl_left">
      <ul>
        <li><h6><i class="fa fa-phone"></i>(+91)8412970821</h6></li>
        <li><h6 style="text-transform: lowercase;"><i class="fa fa-envelope-o"></i>dhasyashodeep32@gmail.com</h6></li>
         <li><h6><i class="fa fa-user"></i><?php echo "Current User - ".$_SESSION['finaluser']; ?></h6></li>
      </ul>
    </div>
    <div class="fl_right">
    </div>
   </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear" style="padding-bottom: 13px"> 
    <div id="logo" class="fl_left">
      <h1 style="font-size: 36px"><strong>book master</strong></a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Contact Us:</strong><br>
          (+91)8412970821</li>
      </ul>
    </div>
   </header>
</div>
</div>
<nav class="w3-sidenav w3-black w3-animate-left" style="display:none;z-index:5">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large w3-hover-orange">Close</a>
  <a href="viewrequest.php" class="w3-hover-orange w3-black">View Book Requests</a>
  <a href="viewmagrequest.php" class="w3-hover-orange w3-black">View Magazine Requests</a>		
  <a href="displaybooks.php" class="w3-hover-orange w3-black">Check Available Books</a>		
  <a href="bookmaster.php" class="w3-hover-orange w3-black">Book Master</a>
  <a href="addingmag.php" class="w3-hover-orange w3-black">Add Magazine</a>
  <a href="visitorstud.php" class="w3-hover-orange w3-black">Visitor Student</a>		
  <a href="logout.php" class="w3-hover-ornage w3-black">Logout</a>				
</nav>

<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div>
<div class="w3-container w3-black">
<span class="w3-opennav w3-xxlarge w3-orange" onclick="w3_open()"><b>=</b></span>
</div>  
     
<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>
<style type="text/css">
  .overlay::after {
    color: inherit;
    background-color: rgba(0,0,0,.75);
  }
  .login-box {
  height: 500px;
    background: rgba(0, 0, 0, 1.5);
  }   
</style>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/book.jpg');">
  <article id="pageintro" class="hoc clear" style="padding-bottom: 480px">
    <div class="login-box">
    <form action="" method="POST">
  <h1>Book Master</h1>
    <p>Name of Book</p>
    <input type="text" name="nameofbook" placeholder="Enter book name here" required="">
    <p>Quantity</p>
    <input type="text" name="quantity" placeholder="Enter quantity here" required="">
    <p>Description</p>
    <input type="text" name="description" placeholder="Enter description here" required="">
    <input type="submit" name="submit" value="add" class="w3-purple w3-hover-black">
</form>
  </article>
</div>
<div class="wrapper row3">
  <figure class="hoc clear"> 
    <ul class="nospace group logos">
      <li class="one_quarter first"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
    </ul>
  </figure>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="heading">Library Facts</h6> 
      <p>The main goal of a library management information system is to store, organize, share and retrieve vital information needed to carry out daily operational functions of the library.</p>
      <p>LMS also facilitates the lending process by keeping records of items lent and borrowers' information.</p>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Popular Tags</h6>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
           <li><a href="#">#Read</a></li>
          <li><a href="#">#learn</a></li>
          <li><a href="#">#bookislife</a></li>
          <li><a href="#">#booklibrarian</a></li>
          <li><a href="#">#booksarewealth</a></li>
        </ul>
      </nav>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">RB tech Services</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Final Build</a></h2>
        <time class="font-xs" datetime="20159-05-25">Friday, 25<sup>th</sup> May 2019</time>
        <p>Website is intended for the Commercial use only. No one has rights to copyright except the Publisher[&hellip;]</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Modules Used</h6>
      <ul class="nospace linklist">
        <li><a href="#">Login and Registration</a></li>
        <li><a href="#">Student Book Request</a></li>
        <li><a href="#">Admin Book Issuing</a></li>
        <li><a href="#">Visitor Students</a></li>
      </ul>
    </div>
    </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved x- <a href="#">Dhas Yashodeep</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
		</form>
	</body>
</html>
<?php 
	$conn = mysqli_connect("localhost","root","","lms");
		if(isset ($_POST['submit'])) {
			$nameofbook = $_POST['nameofbook'];
			$quantity = $_POST['quantity'];
			$description = $_POST['description'];		
			$query = "insert into bookmaster(nameofbook,quantity,description,date,status)values('$nameofbook','$quantity','$description','','')";
			mysqli_query($conn, $query);
			echo "<script> alert('Book Added!');</script> ";
		}	
 ?>