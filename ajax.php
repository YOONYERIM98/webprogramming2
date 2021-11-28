<doctype html>
<html>
<head>
      <title>회원탈퇴</title>

<style>

      * { box-sizing : border-box ;
          margin : 0;
          padding : 0; }

  
      body { position : relative;}

      #top_menu { background : black; 
                        height : 40px;
                        padding : 10px; 
                         }

      #main_menu { background : #626262; 
                          height : 50px;
                          padding : 15px;
                          text-align : center; }

      #main_menu a { color: white;
                            padding: 20px;
                            font-size: 15px;
                            text-decoration : none; 
                            font-family : Lucida Console; }

      #top_menu1 { float : right;
                         color: white;
                         text-decoration : none; 
                         font-size: 13px;}


      #mainlogo { margin : 0 0 0 0%;}

      span { float : right;
               color: white;
               text-decoration : none; 
               font-size: 13px; }

      #title { text-align : center;} 

      h1 { text-align : center;
            margin : 50px 0px 30px ;
            font-family: "Nanum Gothic", sans-serif;
            font-size: 40px;
            font-weight: 800;
          }

      h5 { text-align : center;
            font-family: sans-serif; 
            margin : 0px 0px 60px;
           }


      img {  margin : 3% 45%;}

      h3 { text-align : center;
            font-family: "Nanum Gothic", sans-serif;
            font-size: 20px;
            font-weight: 500;}

      #button { width : 200px;
                   margin : 0 auto;
                   padding : 30px;
                   height : 100px;}

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


<div id="demo"> 

<h1> 회원탈퇴 </h1>

<h5>회원님의 소중한 정보를 안전하게 관리하세요. </h5> 
<hr>

    <image src = "./image/탈퇴.png" />

   <h3>정말 탈퇴하시겠습니까?</h3> 
  <h3>탈퇴하면 되돌릴수 없습니다</h3>

<div id = "button">

	<button type="button" onclick="loadDoc()" style = "height : 30px;">탈퇴하기</button> 
	<button type="button" onclick="loadDoc1()" style = "height : 30px;">취소하기</button> 
</div>

</div>     
</body>
</html>

<script>
 function loadDoc() {
    var xhttp = new XMLHttpRequest(); 
    xhttp.onreadystatechange = function() { 
          if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML =  this.responseText;
                document.getElementById("demo").innerHTML =  this.responseText;
            } 
   }; 
   xhttp.open("GET", "modify_delete.php", true); 
   xhttp.send(); 
} 


function loadDoc1() {
   location = "./index.php";
} 
</script>