﻿
<html>
<head>
      <title>글쓰기</title>

<style>
     
      * { box-sizing : border-box ;
          margin : 0;
          padding : 0; }

  
      body { position : relative;}

      #top_menu { background : black; 
                        height : 40px;
                        padding : 10px; 
                         }

       #top_menu1 { float : right;
                          color: white;
                          text-decoration : none; 
                           font-size: 13px;}

      span { float : right;
               color: white;
               text-decoration : none; 
               font-size: 13px; }

      #title { text-align : center;} 
  


      h1 { padding : 16px; }

      #main_menu { background : #626262; 
                          height : 50px;
                          padding : 15px;
                          text-align : center; }

       #main_menu a { color: white;
                             padding: 20px;
                             font-size: 15px;
                             text-decoration : none; 
                             font-family : Lucida Console; }

      #img { height : 70%;
                 width: 100%;}

      #mainlogo { margin : 0 0 0 0%;}
      #write_button { float : right;
</style>
</head>

<body>
      </audio src = "./music/알라딘.mp3" autoplay loop ></audio>

<?
session_start();
 if ( $_SESSION['login']=="true") {
 echo "<div id = 'top_menu'> 
      {$_SESSION['name']}님은 로그-인 되었습니다
      <a href = './modify.php'  id = 'top_menu1' > 마이페이지 &nbsp; &nbsp;&nbsp;</a >
      <a href = './logout.php' id = 'top_menu1' > 로그아웃 &nbsp; &nbsp;&nbsp;</a >
      <span>{$_SESSION['name']}님 환영합니다&nbsp;&nbsp;&nbsp;</span>
       </div>";

}
else{
echo "<div id = 'top_menu'> 
      <a href = './join.php' id = 'top_menu1'> 회원가입  </a>
      <a href = './modify.php' id = 'top_menu1' > 마이페이지 &nbsp; &nbsp;&nbsp;</a >
      <a href = './login.php' id = 'top_menu1' > 로그인 &nbsp; &nbsp;&nbsp;</a >
      </div>";

}
?>

<br>
<div id = "title">
     <a href = "./index.php"> <image src = "./image/mainlogo.png" id = "mainlogo"/></a>
</div>
<br>

<div id = "main_menu">
      <a href = "./category.php"> category &nbsp;&nbsp;&nbsp;|</a> 
      <a href = "./review.php"> review &nbsp;&nbsp;&nbsp;|</a >
      <a href = "./mix.php"> mix &nbsp;&nbsp;&nbsp;|</a >
      <a href = "./list.php"> board</a >
</div>

<div id = "main">
      <image src = "./image/main.jpg" id = "img" />
</div>
<br><br><br><br><br><br><br><br>


<div id = "wrap">

<div id = "footer">


<body/>
</html>