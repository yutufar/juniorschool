<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $conn=mysqli_connect('localhost','yutufar','hb1486hb','video');
    $sql="SELECT * FROM VideoList";
    $result=mysqli_query($conn,$sql);
    $list="";
    $descript="https://www.youtube.com/embed/4tbr7-fKl08?rel=0";
    while($row=mysqli_fetch_array($result)){
    $list=$list."<li><a href=\"home.php?des={$row['description']}\">{$row['title']}</a></li>";

    }

  if(isset($_GET['des'])){
 $descript=$_GET['des'];

  }
     ?>
    <title>JESUS SCHOOL</title>
<link href="https://fonts.googleapis.com/css?family=Faster+One|Rammetto+One" rel="stylesheet">
    <style>

  .container{
    background-color: #90FF82;

  }
  header div.home_btn {
    position: relative;
    background-image: url("junior.png");
    width: 500px;
    height: 100px;

    }
header #create{
      color: white;
      position: absolute;
      top: 0;
      right:0;
      margin: 40px;
      padding: 0px 10px 0px 10px;
      text-decoration: none;
      font-size: 40px;
      border-radius: 20px;
      background-color: #9EFFC6;
      border-bottom: 5px solid #00C953;
}
header #create:active{
  transform: translatey(10px);
  border-bottom: 1px solid #00C953;
}
header{
    text-align: center;
    background-color: #00FF87;
    border-bottom: 1px solid black;
  }
  footer{
   border-bottom: 1px solid green;
   background-color: green;

  }
  .content{
    display: flex;
    flex-direction: row;

  }
  .content nav{
opacity: 0.85;
display: flex;
border: none;
flex-direction: column;
  }
#video-title{
font-family: 'Shadows Into Light', cursive;
background-color:#636363;
color: white;
font-size: 40px;
}
.video-content{
overflow: scroll;
display:block;
width: 300px;
height: 670px;
background-color: #6C6B6C;
  }
.video-content ul li a{
  border-radius: 10px;
  padding: 3px;
  padding-left: 10px;
  font-family: 'Dancing Script', cursive;
display: block;
text-decoration: none;
font-size: 15px;
color: white;
margin: 2px auto;
background-color: #4A4A4A;

}
.video-content ul li a:hover{
background-color: #363434;
}
.content main{
width: 1200px;
height: 800px;

}

    </style>
  </head>
  <body
<div class="container">
<header>
  <a href="home.php"><div class="home_btn"></div></a>
<a href="check_password.php"id="create">+</a>
</header>
<section class="content">
<nav>
  <div id="video-title">VideoList</div>
<div class="video-content">
<ul>
  <?=$list?>

</ul>
  </div>
</nav>
 <main>
<iframe width="1000" height="800" src="<?php echo $descript; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</main>
</section>
<footer>


</footer>

  </body>
</html>
