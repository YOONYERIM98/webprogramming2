<? 
	session_start(); 
            
            extract(array_merge($_GET, $_POST)); 

	$connect = mysql_connect("localhost", "yyr", "wjsansrk");
             mysql_select_db(myinfo, $connect);

	$sql = "select * from greet where num = $num";
             $result = mysql_query($sql);

            $row = mysql_fetch_array($result);     
	
	$item_num = $row[num];
	$item_id = $row[id];
	$item_name = $row[name];
  	$item_nick  = $row[nick];
	$item_hit = $row[hit];
            $item_date = $row[regist_day];
            $item_subject = str_replace(" ", "&nbsp;", $row[subject]);
	$item_content = $row[content];
	$is_html      = $row[is_html];

	if ($is_html!="y")
	{
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}	

	$new_hit = $item_hit + 1;

	$sql = "update greet set hit=$new_hit where num=$num";
	mysql_query($sql, $connect);
?>

<doctype html>
<html>
<head>
      <title>글보기</title>

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

      #footer { background : black;
                   height : 25%;
                   color : white;
                   overflow: hidden;
                  margin : 7% 0 0 0;}

      #notice { float : left;
                   margin : 30px 10%; }

      #information { float : right;
                          margin : 30px 10%;  }

      h2 { padding : 10px;
            text-align : center;}

      #view_title {  border-top : 1px solid;
                        height : 5%;
                        width: 70%;
                        margin : 0 auto;}

      #view_title1{ float : left;
                        margin : 3px 2%;}

      #view_title2{ float : right;
                       margin : 3px 2%;}

      #view_content {border-bottom : 1px solid;
                           width: 70%;
                           height : 50%;
                           margin : 0 auto 5%;
                           padding : 1% 1%;
                           overflow : auto;}

      #view_button { float : right;
                         margin : 2% 15% 0;}

      #ripple_writer_title { margin : 0 auto;
                                  width: 66%;}

      #writer_title1 { float : left;
                          margin : 0 0 10 0;}

      #writer_title2 { float : left;
                          margin : 0 0 10 30px;}

      #writer_title3 { float : right;
                          }

      #ripple_content { clear : both;
                             margin : 0 auto 50;
                             width: 66%;}

      #ripple_box { margin : 0 auto 50;
                        width: 70%;}

      #ripple_box3 { margin : 10px;}

      

</style>

<script>
    function del(href) 
    {
        if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                document.location.href = href;
        }
    }




  function check_input()
	{
		if (!document.ripple_form.ripple_content.value)
		{
			alert("내용을 입력하세요!");    
			document.ripple_form.ripple_content.focus();
			return;
		}
		document.ripple_form.submit();
    }
</script>

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
      <a href = "./categoryphp"> category &nbsp;&nbsp;&nbsp;|</a> 
      <a href = "./review.php"> review &nbsp;&nbsp;&nbsp;|</a >
      <a href = "./mix.php"> mix &nbsp;&nbsp;&nbsp;|</a >
      <a href = "./list.php"> board</a >
</div>

<div id = "main">
      <image src = "./image/main.jpg" id = "img" />
</div>

<br><br><br><br>
<hr>
<h2>board</h2>
<hr>
<br><br><br><br>


<div id="view_title" style=" background-color: #EEEEEE; ">
	<div id="view_title1"><?= $item_subject ?></div>
            <div id="view_title2"><?= $item_nick ?> | 조회 : <?= $item_hit ?>  | <?= $item_date ?> </div>	
</div>

<br>
<div id="view_content">
	     <?= $item_content ?>
	</div>



  <div id="ripple">
<?
	    $sql = "select * from free_ripple where parent='$item_num'";
	    $ripple_result = mysql_query($sql);

		while ($row_ripple = mysql_fetch_array($ripple_result))
		{
			$ripple_num     = $row_ripple[num];
			$ripple_id      = $row_ripple[id];
			$ripple_nick    = $row_ripple[nick];
			$ripple_content = str_replace("\n", "<br>", $row_ripple[content]);
			$ripple_content = str_replace(" ", "&nbsp;", $ripple_content);
			$ripple_date    = $row_ripple[refist_day];
?>
			<div id="ripple_writer_title">
			<ul>
			<li id="writer_title1"><?=$ripple_nick?></li>
			<li id="writer_title2"><?=$ripple_date?></li>
			<li id="writer_title3"> 
		      <? 
					if($_SESSION[id] ==$ripple_id)
			          echo "<a href='delete_ripple.php?num=$item_num&ripple_num=$ripple_num'>[삭제]</a>"; 
			  ?>
			</li>
			</ul>
			</div>
			<div id="ripple_content"><?=$ripple_content?></div>
                                      
<?
		}
?>			
			<form  name="ripple_form" method="post" action="insert_ripple.php?num=<?=$item_num?>">  
			<div id="ripple_box">
				<div id="ripple_box1"><h4>댓글쓰기</h4></div>
				<div id="ripple_box2"><textarea rows="7" cols="65" name="ripple_content"></textarea>
				</div>
				<div id="ripple_box3"><a href="#"><input type = "submit"  onclick="check_input()" value = "댓글쓰기"></a></div>
			</div>
			</form>
		</div>


<div></div>

<div id="view_button">
	<a href = "list.php?apge=<?=$page?>"><input type = "button" value = "목록"></a>&nbsp;

<? 
	if($_SESSION[id] == $item_id)
	{
?>
	        <a href="modify_form.php?num=<?=$num?>&page=<?=$page?>"><input type = "submit" value = "수정" ></a>&nbsp;
	        <a href="javascript:del('delete.php?num=<?=$num?>')"><input type = "submit" value = "삭제" ></a>&nbsp;
<?
	}
?>
<? 
	if($_SESSION[id] )
	{
?>
	       <a href="write_form.php"><input type = "submit" value = "글쓰기" ></a>
<?
	}
?>

</div>

<br><br><br><br><br><br><br><br>

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