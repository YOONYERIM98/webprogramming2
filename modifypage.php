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
             margin : 80px 0px 30px ;
             font-family: "Nanum Gothic", sans-serif;
             font-size: 30px;
             font-weight: 800; }

      #main { border : 1px solid #626262;
                 height : 150%;
                 padding : 4% 7%; 
                 margin : 5% 10% 0;
                 }

      hr { margin : 5%;} 
    
      pre { font-family: "Nanum Gothic", sans-serif;
        font-size: 15px;}

      input { height : 35px;
                 width: 20%;}


      #submit {  margin : 0px 0px 0px 35%;
                     height : 30px;
                     width: 14.5%; }

      #reset {  height : 30px;
                  width: 14.5%; }

      #delete { width: 6%;
                   margin : 0 0 0 70%;}

</style>

</head>

<body>

<?
session_start();

 if($_SESSION['id'] !="" && $_SESSION['password'] !="") {

    if ( $_SESSION['modify']=="true") {

   unset($_SESSION['modify']);

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
      <a href = './board.php'> board</a >
</div>";

}
   else {
                echo "<script>
                     alert('비밀번호 오류');
                      location = 'modify.php';
                     </script>";
         }
    }

                 
else {
  echo "<script>
                     alert('로그인을 먼저 하세요');
                      location = 'login.php';
                     </script>";
}
?>

<h1> 회원정보 수정 </h1>
<pre>
<? echo "
<div id = 'main'> 
<form method = post action = 'modifypage1.php'>
<h3>프로필</h3><br>

            이름                                      <input type = 'text' name = 'name' value = '{$_SESSION['name']}'><hr>
            아이디                                   {$_SESSION['id']}<hr>
            비밀번호                                <input type = 'text' name = 'password' value = '{$_SESSION['password']}'><hr>
            주소                                      <input type = 'text' name = 'address' value = '{$_SESSION['address']}'><hr>
            전화번호                                <input type = 'text' name = 'tel' value = '{$_SESSION['tel']}'><hr>

 <input type = 'submit' name = 'submit' value = '수정' id = 'submit'/> <input type = 'reset' name = 'reset' value = '되돌리기' id = 'reset'/>

</form>
</div>";

?>

<form method = post action = 'ajax.php'>
      <input type = 'submit' name = 'delete' value = '탈퇴' id = 'delete'/> 
</form>
</pre>


</body>
</html>