<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
  .content{
text-align: center;
    }
.content form{
margin-top: 300px;
}
.input{

background-color:#90EE90;

}
#submit{
  border-radius: 30px;
  color: skyblue;
  background-color: #9EFFC6;
}
  </style>
  </head>
  <body
<div class="container">
<header>
  <a href="home.php"><div class="home_btn"></div></a>
  <a href="create.php"id="create">+</a>
</header>
<section class="content">
<form action="process_create.php" method="post">
  <p><input class="input" type="text" name="title" placeholder="title"></p>
  <p><textarea class="input" name="description" placeholder="video link"></textarea></p>
  <p><input id="submit"type="submit"></p>

</form>

</section>


  </body>
</html>
