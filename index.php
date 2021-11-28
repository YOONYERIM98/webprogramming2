<doctype html>
<html>
<head>
      <title>메인 홈페이지</title>

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

      #span { float : right;
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

   
      #f1 { margin : 0px 0 40 100px ; 
             float : left;}

      #f2 { margin : 10px 0 0 40px ;}

      #f3 { margin : 0 auto;
             width : 200px;}

      #f4 { margin : -137px 110px  0 0 ; 
             float : right;}

      #f5 { margin : 0 auto 80px;
             width : 80%;}

      #f6,#f7,#f8 { padding : 30px;}

       #footer { background : black;
                   height : 25%;
                   color : white;
                   clear : both;
                   overflow: hidden;}

      #notice { float : left;
                   margin : 30px 0 30px 10%;}

      #information { float : right;
                         margin : 30px 10% 30px 0;} 

      #f6 img:hover { opacity : 0.1;
                           animation-name: f; 
                           animation-duration: 5s;
                           animation-iteration-count: infinite;  
                       }

      @keyframes f { 
                            0% { width: 320px; height: 230px; opacity  : 0.1; } 
                            100% { width: 350px; height: 250px; opacity : 1; }
                         }

      #c1 { text-align : center;
             animation-name: f1; 
             animation-duration: 3s;
             animation-iteration-count: infinite;              
             }


      @keyframes f1{ 0% { color: #ff2a2a; }
                          15% { color: #ff7a2a; }
                          30% { color: #ffc52a; }
                          45% { color: #43ff2a; }
                          60% { color: #2a89ff; }
                          75% { color: #202082; }
                          90% { color: #6b2aff; } 
                          100% { color: #e82aff; }
                        } 


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
         <span id = 'span'>{$_SESSION['name']}님 환영합니다&nbsp;&nbsp;&nbsp;</span>
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

<br><br><br>

<h1 id = "c1">☆개인차이 있습니다☆</h1>

<br><br><br><hr><br><br><br><br>


<div id = "content">

    <div id = "f1">
              ▷좋은 맛집 구별 법!!
                             <ul id = "f2">
                                <li>맛</li>
                                <li>서비스</li>
                                <li>가격</li>
                                <li>음식의 질</li>
                                <li>기성비</li>
                              </ul>
               </div>
    <div id = "f3">
              ▷맛집 TOP5
                             <ol id = "f2">
                                <li>양대감</li>
                                <li>돌판구이</li>
                                <li>설가</li>
                                <li>경화분식</li>
                                <li>너구리식당</li>
                              </ol>
            

   </div>

      <div id = "f4">
              ▷최근 게시물
                             <ol id = "f2">
                                <li>설가</li>
                                <li>해뜨는마을</li>
                                <li>왕뚜껑</li>
                                <li>김밥천국</li>
                                <li>81멘옥</li>
                              </ol>
            

   </div>

</div>

<div style = "clear : both;"></div><br><hr>
<br><br><br><br>

<div id = "f5">
     <span id = "f6"> <img src="./image/프레임.gif" style = "width: 350px; height: 250px;"/> </span>
     <span id = "f6"> <img src="./image/프레임1.gif" style = "width: 350px; height: 250px;"/> </span> 
     <span id = "f6"> <img src="./image/양대감.gif" style = "width: 350px; height: 250px;"/> </span>
</div>

<div style = "clear : both;"></div><hr>
<br><br><br><br>

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