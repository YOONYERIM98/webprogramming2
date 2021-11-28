<doctype html>
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

      #mainlogo { margin : 0 0 0 0%;}            h2 { padding : 10px;            text-align : center;}       table { width: 85%;        	   border-top: 1px solid;    	   border-collapse: collapse;    	   margin : 15px 0 0 100px; }       th, td { border-bottom: 1px solid ;}        .col1 { background : #EEEEEE;            padding: 19px 70px 19px 70px;            font-weight : bold;            text-align : center;}       .col2 { padding: 10px 50px 10px 50px;}
      #write_button { float : right;                           margin : 0 8%;}         #submit {width: 50px;                  background :black;                   border: 1px solid black; color:white;}      #list { width: 50px;}     #footer { background : black;                   margin : 15% 0 0 0;                   width : 100%;                   height : 25%;                   color : white;                   overflow: hidden;}      #notice { float : left;                   margin : 30px 10%; }      #information { float : right;                          margin : 30px 10%;  }
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


<div id = "wrap"><hr><h2>board</h2><hr><br><div id="col2">     		<div id="write_form_title"><table>      <tr style=" background-color: #EEEEEE; ">	<th></th>	<th style="padding:10px;">글쓰기</th>	<th></th>		<th></th>				<th></th>	<th></th>	<th></th>	</tr></div><form  name="board_form" method="post" action="insert.php">         <div id="write_form">	     <div id="write_row1">		<tr><td class="col1"> 닉네임 </td>		<td class="col2"><?echo "{$_SESSION['id']}";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="html_ok" value="y"> HTML 쓰기</td>		<td class="col3"></td>		<td></td>		<td></td>		<td></td>		<td></td>		</tr>	     </div>	     <tr><td id="write_row2"><div class="col1"> 제목   </td>		<td class="col2"><input type="text" name="subject" size=90 ></td>		<td></td>		<td></td>		<td></td>		<td></td>		<td></td>		</tr>	     </div>		<div id="write_row3">			<tr><td class="col1"> 내용   </td>			      <td class="col2"><textarea rows="15" cols="90" name="content"></textarea></td>			<td></td>			<td></td>			<td></td>			<td></td>			<td></td>			</tr>		</div>		</div></table><br>		<div id="write_button">		<input type="submit" value="완료" id = submit>&nbsp;                         <a href="list.php?page=<?echo"$page";?>">		<input type="button" value="목록" id = list></a>		</div>		</form>			</div></div>

<div id = "footer"><div id = "notice">NOTICE & EVENT</div><div id = "information">ADDRESS : (55069) 전라북도 전주시 완산구 천잠로 303 전주대학교<br>TEL : +82-1577-7177 <br>FAX : + 82-63-220-2462<br>E-MAIL : webmaster@jj.ac.kr<br>UPDATE : 2019년 6월 20일<br></div></div>


<body/>
</html>