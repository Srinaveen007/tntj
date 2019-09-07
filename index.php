<?php 
include 'admin/includes/conn.php';
$showRecordPerPage = 1;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL = "SELECT * FROM post";
$allEmpResult = mysqli_query($con, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage= $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT id
FROM `post` LIMIT $startFrom, $showRecordPerPage";
$empResult = mysqli_query($con, $empSQL);


$showRecordPerPage1 = 3;
if(isset($_GET['page1']) && !empty($_GET['page1'])){
$currentPage1 = $_GET['page1'];
}else{
$currentPage1 = 1;
}
$startFrom1 = ($currentPage1 * $showRecordPerPage1) - $showRecordPerPage1;
$totalEmpSQL1 = "SELECT * FROM post";
$allEmpResult1 = mysqli_query($con, $totalEmpSQL1);
$totalEmployee1 = mysqli_num_rows($allEmpResult1);
$lastPage1 = ceil($totalEmployee1/$showRecordPerPage1);
$firstPage1 = 1;
$nextPage1 = $currentPage1 + 1;
$previousPage1 = $currentPage1 - 1;
$empSQL1 = "SELECT header_title
FROM `post` LIMIT $startFrom1, $showRecordPerPage1";
$empResult1 = mysqli_query($con, $empSQL1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap1 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  /* padding: 14px 28px; */
  font-size: 16px;
  cursor: pointer;
}
  .info {
  border-color: #2196F3;
  color: dodgerblue
}

.info:hover {
  background: #2196F3;
  color: white;
}

.pagination {
  display: inline-block;
}

.pagination li a {
  color: black;
  float: left;
  padding: 4px 14px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
.ggg
{
  vertical-align: middle;
  width: 30px;
  height: 30px;
  border-radius: 50%;

}
.searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #101010;
    border-radius: 30px;
    padding: 10px;
    
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
     
    padding: 0 10px;
    width: 400px;
    caret-color:red;
    transition: width 0.4s linear;
    
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    }
  .lll
  {
  
  float: left;

  }
  .lll1
  {
  
  float: right;

  }
  .numberCircle {
    margin-top: 5%;
    margin-right: 2%;
  border-radius: 50%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
  width: 27px;
  height: 24px;
  padding: 1px;
  background: #fff;
  border: 2px solid #666;
  color: #666;
  text-align: center;
  font: 17px Arial, sans-serif;
  float: left;
}
  </style>
</head>
<body>

<div style="margin-bottom:0;background-color:lavender;">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:black;font-weight: bold;" href="#">Register</a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:black;font-weight: bold;" href="#">Login</a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="background-color: green;color:honeydew;font-weight: bold;padding: 5px;">Live</span><span style="padding:10px ;">Sunt in culpa qui officia deserunt</span> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black;font-weight: bold;">Contact</span>&nbsp;&nbsp;<img class="ggg" src="antique-classic-clock-face-269613.jpg">
  <img src="1.jpg" height="auto" width="100%">  
  <!-- &nbsp<span class="blink_text">New!</span> -->
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Education News</a></li>
        <li><a href="#">Gallery</a></li>
        <li> <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Search...">
            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
          </div></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Editor's Picks</h2>
     <hr style="border-top: 2px solid green;">
      <!-- <h5>Photo of me:</h5> -->
      <!-- <div class="fakeimg">Fake Image</div> -->
      <img src="clock-round-time-2182727.jpg"  height="160px" width="auto">
      <br> <br>
      <b><p>Some text about me in culpa qui officia deserunt mollit anim..</p></b>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <hr style="height:11px; visibility:hidden;">
      <button class="btn info">All Featured</button>
      <h2><br></h2>
      <ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="">
<a class="" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">&laquo;</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class=""><a class="" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class=" "><a class="active" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class=""><a class="" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="">
<a class="" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
</a>
</li>
<?php } ?>
</ul>
<!--           
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg"> -->
    </div> 
    
    <div class="col-sm-4">
            
    <h2><br></h2>
    <hr style="border-top: 2px solid green;">
    <small> <small>
  
   <ul class="nav nav-pills nav-stacked">
            
                    <li><a class="thumbnail" href="#"><b><p><img class="lll" src="antique-classic-clock-face-269613.jpg" height="68px" width="100px" style="margin-right:15px;"; ><div style="text-align: left;color :black;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 11px;font-weight: lighter;">Fri. 27 November 2015</p></p></b></a></li>
                    <li><a class="thumbnail" href="#"><b><p><img class="lll" src="antique-classic-clock-face-269613.jpg" height="68px" width="100px" style="margin-right:15px;"; ><div style="text-align: left;color :black;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 11px;font-weight: lighter;">Fri. 27 November 2015</p></p></b></a></li>
                    <li><a class="thumbnail" href="#"><b><p><img class="lll" src="antique-classic-clock-face-269613.jpg" height="68px" width="100px" style="margin-right:15px;"; ><div style="text-align: left;color :black;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 11px;font-weight: lighter;">Fri. 27 November 2015</p></p></b></a></li>
          </ul> </small></small>
          <hr style="height:58px; visibility:hidden;">
          <!-- <hr style="border-top: 2px solid green;"> -->
    </div>
    
    <!--    <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div> -->
  
  <div class="col-sm-4">
            
        <h2> Trending</h2>
        <hr size="30px" style="border-top: 2px solid green;">
       
        <ul class="nav nav-pills nav-stacked">
            
            <li><a class="" href="#"><b><p><div style="font-size: 12px;font-weight: bold;text-align: left;color :black;"><span class="numberCircle">01</span>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 8px;font-weight: lighter;margin-left: 13%;">Fri. 27 November 2015</p></p></b></a></li>
            <li><a class="" href="#"><b><p><div style="font-size: 12px;font-weight: bold;text-align: left;color :black;"><span class="numberCircle">02</span>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 8px;font-weight: lighter;margin-left: 13%;">Fri. 27 November 2015</p></p></b></a></li>
            <li><a class="" href="#"><b><p><div style="font-size: 12px;font-weight: bold;text-align: left;color :black;"><span class="numberCircle">03</span>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 8px;font-weight: lighter;margin-left: 13%;">Fri. 27 November 2015</p></p></b></a></li>
            <li><a class="" href="#"><b><p><div style="font-size: 12px;font-weight: bold;text-align: left;color :black;"><span class="numberCircle">04</span>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 8px;font-weight: lighter;margin-left: 13%;">Fri. 27 November 2015</p></p></b></a></li>
            
            
  </ul>
  <a href="#" style="color: green;">See All Trendings ></a>
           <!-- <h5>Title description, Dec 7, 2017</h5> -->
          <!-- <div class="fakeimg">Fake Image</div>
          <p>Some text..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <br>
          <h2>TITLE HEADING</h2>
          <h5>Title description, Sep 2, 2017</h5>
          <div class="fakeimg">Fake Image</div>
          <p>Some text..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div> -->
        <!-- <hr style="height:10px; visibility:hidden;"> -->
        <!-- <hr style="border-top: 2px solid green;"> -->
        
      </div>
     <div class="col-sm-12" style="margin-top:0px";>
    
     <hr size="30" style="border-top: 2px solid green;">
    </div>
    <div class="col-sm-8">
        <h3 style="font-weight: bold;">Most Recent</h3>
       

        <ul class="nav nav-pills nav-stacked">
           <li><a class="thumbnail" href="#"><p><img class="lll1" src="antique-classic-clock-face-269613.jpg" height="138px" width="100px" style="margin-right:15px;"; > <p>Editor's Picks.</p>
            <h3 style="font-weight: bold;font-size: 16px;">Some text about me in culpa qui officia deserunt mollit anim..</h3><div style="text-align: left;color :black;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 11px;font-weight: lighter;">Fri. 27 November 2015</p></p></a></li>
            <li><a class="thumbnail" href="#"><p><img class="lll1" src="antique-classic-clock-face-269613.jpg" height="138px" width="100px" style="margin-right:15px;"; > <p>Editor's Picks.</p>
              <h3 style="font-weight: bold;font-size: 16px;">Some text about me in culpa qui officia deserunt mollit anim..</h3><div style="text-align: left;color :black;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 11px;font-weight: lighter;">Fri. 27 November 2015</p></p></a></li>
              <li><a class="thumbnail" href="#"><p><img class="lll1" src="antique-classic-clock-face-269613.jpg" height="138px" width="100px" style="margin-right:15px;"; > <p>Editor's Picks.</p>
                <h3 style="font-weight: bold;font-size: 16px;">Some text about me in culpa qui officia deserunt mollit anim..</h3><div style="text-align: left;color :black;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 11px;font-weight: lighter;">Fri. 27 November 2015</p></p></a></li>
          </ul>
          <hr style="border-top: 2px solid green;">
          <ul class="pagination">
<?php if($currentPage1 != $firstPage1) { ?>
<li class="">
<a class="" href="?page1=<?php echo $firstPage1 ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">&laquo;</span>
</a>
</li>
<?php } ?>
<?php if($currentPage1 >= 2) { ?>
<li class=""><a class="" href="?page1=<?php echo $previousPage1 ?>"><?php echo $previousPage1 ?></a></li>
<?php } ?>
<li class=" "><a class="active" href="?page1=<?php echo $currentPage1 ?>"><?php echo $currentPage1 ?></a></li>
<?php if($currentPage1 != $lastPage1) { ?>
<li class=""><a class="" href="?page1=<?php echo $nextPage1 ?>"><?php echo $nextPage1 ?></a></li>
<li class="">
<a class="" href="?page1=<?php echo $lastPage1 ?>" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
</a>
</li>
<?php } ?>
</ul>
        <hr class="hidden-sm hidden-md hidden-lg"> 
    </div>
    <div class="col-sm-4">
        <h3 style="font-weight: bold;">Popular</h3>
        <hr style="border-top: 2px solid green;">
      
        <ul class="nav nav-pills nav-stacked">
          <li><a class="" href="#"><b><p><div style="font-size: 12px;font-weight: bold;text-align: left;color :black;"><span class="numberCircle">01</span>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 10px;font-weight: lighter;text-align: left;margin-left: 13%;">Fri. 27 November 2015</p></p></b></a></li>
          <li><a class="" href="#"><b><p><div style="font-size: 12px;font-weight: bold;text-align: left;color :black;"><span class="numberCircle">02</span>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 10px;font-weight: lighter;text-align: left;margin-left: 13%;">Fri. 27 November 2015</p></p></b></a></li>
          <li><a class="" href="#"><b><p><div style="font-size: 12px;font-weight: bold;text-align: left;color :black;"><span class="numberCircle">03</span>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 10px;font-weight: lighter;text-align: left;margin-left: 13%;">Fri. 27 November 2015</p></p></b></a></li>
          <li><a class="" href="#"><b><p><div style="font-size: 12px;font-weight: bold;text-align: left;color :black;"><span class="numberCircle">04</span>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temp </div><p style="font-size: 10px;font-weight: lighter;text-align: left;margin-left: 13%;">Fri. 27 November 2015</p></p></b></a></li>
            
        </ul>
        <hr class="hidden-sm hidden-md hidden-lg"> 
    </div>
</div>
<hr style="height:10px; visibility:hidden;">  
<hr style="border-top: 2px solid green;">
<footer class="blockquote footer text-center" style="margin-bottom:1px;">
<div class="container">
  <p>Copyright 2019 TNTJ<span>
    <a class="btn-floating btn-lg btn-fb face" style="margin-right: 4%;float: right;border-radius: 50%;behavior: url(PIE.htc);width: 27px;height: 26px;padding: 3px;color:green;background: #fff;border: 2px solid #666;text-align: center;font: 17px Arial, sans-serif;" type="button" role="button"><i class="fab fa-facebook-f"></i></a> </span><span>   
  <a class="btn-floating btn-lg btn-tw info"  style="margin-right: 2%;float: right;border-radius: 50%;behavior: url(PIE.htc);width: 27px;height: 26px;padding: 3px;color:green;background: #fff;border: 2px solid #666;text-align: center;font: 17px Arial, sans-serif;" type="button" role="button"><i class="fab fa-twitter"></i></a></span></p></div></footer>
</div>

</body>


<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
        currentPage : <?php echo $page;?>,
        hrefTextPrefix : 'index.php?page='
    });
    });
</script>
</html>
