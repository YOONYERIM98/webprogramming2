<doctype html>
<html>
<head>
      <title>음식 조합</title>

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


      h2 { padding : 10px;
            text-align : center;}



      #footer { background : black;
                   margin : 10% 0 0 0;
                   width : 100%;
                   height : 25%;
                   color : white;
                   overflow: hidden;}

      #notice { float : left;
                   margin : 30px 10%; }

      #information { float : right;
                          margin : 30px 10%;  }

      #mix { width : 180px; 
               height : 180px;}

      #food { float : left;
                 margin : 5px;}

      #food1 { width : 280px;
                  margin :15 auto 230;} 

      #content { width : 370px;
                     margin : 7% auto;}

      h1 { border-radius : 15px; 
            background :#FFCD12;
            padding : 5px;
            height : 50px;
            text-align : center;
            color : white;}
</style>
</head>

<body>

<?
session_start();

 if ( $_SESSION['login']=="true") {
 echo "<div id = 'top_menu'> 
      {$_SESSION['name']}님은 로그-인 되었습니다
      <a href = './modify.php'  id = 'top_menu1' > 마이페이지 &nbsp; &nbsp;&nbsp;</a >
      <a href = './logout.php' id = 'top_menu1' > 로그아웃 &nbsp; &nbsp;&nbsp;</a >
      <span>{$_SESSION['name']}님 환영합니다&nbsp;&nbsp;&nbsp;</span>
       </div>


<br>
<div id = 'title'>
     <a href = './index.php'> <image src = './image/mainlogo.png' id = 'mainlogo'/></a>
</div>
<br>

<div id = 'main_menu'>
      <a href = './category.php'> category &nbsp;&nbsp;&nbsp;|</a> 
      <a href = './review.php'> review &nbsp;&nbsp;&nbsp;|</a >
      <a href = './mix.php'> mix &nbsp;&nbsp;&nbsp;|</a >
      <a href = './list.php'> board</a >
</div>";

}
else{ echo "<script> 
            alert('먼저 로그-인을 해야 합니다!');
 	location = 'login.php'; 
	</script> ";     

}
?>

<div id = "main">
      <image src = "./image/main.jpg" id = "img" /><br><br><br><br><br><br><br><br>
</div>


<hr>
<h2>food mix</h2>
<hr>
<br><br>
<div id = "content">

      <image src = "./image/피자.gif" id = "mix" />
      <image src = "./image/맥주.gif" id = "mix" />
      <div id = "food1">
              <h1 id = "food"> 피자</h1>
              <image src = "./image/플러스.gif" style = "width : 40; height : 40;" id = "food"/>
              <h1 id = "food"> 맥주</h1>
      </div>


      <image src = "./image/닭발.gif" id = "mix" />
      <image src = "./image/와인.gif" id = "mix" />
      <div id = "food1">
              <h1 id = "food"> 닭발</h1>
              <image src = "./image/플러스.gif" style = "width : 40; height : 40;" id = "food"/>
              <h1 id = "food"> 와인</h1>
      </div>


      <image src = "./image/치킨.gif" id = "mix" />
      <image src = "./image/밥.gif" id = "mix" />
      <div id = "food1">
              <h1 id = "food"> 치킨</h1>
              <image src = "./image/플러스.gif" style = "width : 40; height : 40;" id = "food"/>
              <h1 id = "food"> 밥</h1>
      </div>


      <image src = "./image/간장게장.gif" id = "mix" />
      <image src = "./image/밥.gif" id = "mix" />
      <div id = "food1">
              <h1 id = "food"> 간장게장</h1>
              <image src = "./image/플러스.gif" style = "width : 40; height : 40;" id = "food"/>
              <h1 id = "food"> 밥</h1>
      </div>



      <image src = "./image/비빔면.gif" id = "mix" />
      <image src = "./image/삼겹살.gif" id = "mix" />
      <div id = "food1">
              <h1 id = "food"> 비빔면</h1>
              <image src = "./image/플러스.gif" style = "width : 38; height : 38;" id = "food"/>
              <h1 id = "food"> 삼겹살</h1>
      </div>

</div>

<div id = "footer">
<div id = "notice">
NOTICE & EVENT
</div>
<div id = "information">
ADDRESS : (55069) 전라북도 전주시 완산구 천잠로 303 전주대학교<br>
TEL : +82-1577-7177 <br>
FAX : + 82-63-220-2462<br>
E-MAIL : webmaster@jj.ac.kr<br>
UPDATE : 2019년 6월 20일<br>
</div>
</div>

<body/>
</html>