
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>JESUS SCHOOL</title>
        <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Faster+One|Rammetto+One" rel="stylesheet">

        <?php
        $conn=mysqli_connect('localhost','yutufar','hb1486hb','video');
        $sql= "
        INSERT INTO videolist(title,description,created)
        VALUES(
          '{$_POST['title']}',
          '{$_POST['description']}',
          NOW()
        )
        ";

        $result=mysqli_query($conn,$sql);
        ?>
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
        #back {
          font-size: 30px;
          color: skyblue;
          background-color: #9EFFC6;
          border-radius: 20px;
          font-family: 'Faster One', cursive;
          text-decoration: none;
          margin: 10px;
          border-bottom: 5px solid #00C953;
        }
      #back:active{
        margin-top: 300px;
        transform: translatey(15px);
        border-bottom: 1px solid #00C953;
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
   <p><a id="back" href ="home.php">돌아가기</a></p>
    </section>
      </body>
    </html>
