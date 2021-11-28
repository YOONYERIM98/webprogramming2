<doctype html>
<html>
<head>
      <title>회원정보 수정</title>

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

      #input { margin : 3% 35%  2%;
                 height : 30px;
                 width: 30%; }

      #submit {  margin : 0% 0% 0% 35.3%;
                    height : 30px;
                    width: 14.5%; }

      #reset {  height : 30px;
                  width: 14.5%; }

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

<div id = 'main'>

<h1> 회원정보 수정 </h1>

<h5>회원님의 소중한 정보를 안전하게 관리하세요. </h5> 
<hr>

<form method = "post" action = "modifycheck.php">
  <div id = "main">
      <image src = "./image/modify_main.png" />
      <h3>회원정보를 수정하시려면 비밀번호를 입력하셔야 합니다.</h3>

     <input type = "password" name = "password" id = "input" />
     <input type = "submit" name = "check" id = "submit" value = "확인" >
     <input type = "reset"  id = "reset" value = "최소" ><br><br><br><br><br>
  </div>     
</form>

</div>

</body>
</html>