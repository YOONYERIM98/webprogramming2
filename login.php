<doctype html>
<html>
<head><title>로그인 페이지</title></head>
<style>

      body { position : relative;}

      table{ width : 30%;
        border : 1px solid #444444; 
       padding : 40px; }

      input { height : 35px;
         margin :5px 5px 5px 0px;
          padding : 8px; }

      div { margin:100px 0px 0px 200px; }

      #form { width : 350px;}

</style>
<body>

<div>

<h1>로그인</h1>

<form method = post action = "logincheck.php">
         <table>
  	<tr><td>회원가입</td><td></td><tr>
	<tr><td><input type = "text" value = "아이디" name = "id" size="20"/></td>
	<td rowspan = "2"><input type = "submit" value = "로그인" /></td></tr></tr></tr>
	<tr><td><input type = "password" value = "비밀번호" name = "password" size="21"/></td></tr>

        </table>
</form>

<hr>

<form method = post action = "join.php" id = "form">
        <input type = "submit" value = "회원가입" />
	<a href = "./idserch.php"><input type = "submit" size =20 value = "아이디 찾기" /></a>
	<a href = "./idserch.php"><input type = "submit" size = 20 value = "비밀번호 찾기" /></a>
</form>

</div>
</body>
</html>

