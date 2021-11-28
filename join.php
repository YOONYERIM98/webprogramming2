<docy type>
<html>
<head> <title>회원가입</title> </head>

<style>

      body { position : relative;}

      input { height : 40px;
                margin :5px 5px 5px 0px;
                padding : 8px; }


      div { width : 150px;
            margin : 100px auto 0px; }

      #button { width : 200px;
                    margin : 0 auto;
                    padding : 30px;
                    height : 100px; }

      #c1 { margin : 0 0 0 35px;}

</style>

<body>


  <div>
     <h1 style = "text-align : center;">회원가입</h1>  <hr>
      <form method = post action = "joincheck.php">
         아이디<br>
         <input type = 'text' name = 'id'> <br><br>
         비밀번호<br>
         <input type = 'password' name = 'password'> <br><br>
         비밀번호 재확인<br>
         <input type = 'password' name = 'password1'> <br><br>
         이름<br>
         <input type = 'text' name = 'name'> <br><br>
         거주지<br>
         <input type = 'text' name = 'address'> <br><br>
         전화번호<br>
         <input type = 'text' name = 'tel' value = '-를 입력해 주세요'> <br><br>
     </div>
         
         <div id = 'button'>
            <input type = 'submit' value = '회원가입' id = "c1" > 
            <input type = 'reset' value = '다시쓰기'  >
         </div>
     </div>

<br><br>
</body>
</html>