<doctype html>
<html>
<head>
      <title>게시판</title>

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


      h2 { padding : 10px;
            text-align : center;}


      #list_search { margin : 50px; 0px 0px 0px;}

      #list_search1 {  float : left;
                           padding: 4 0 0 80px;}

      #list_search2 {  float : right;
                           padding: 4 10px 0 0;}

      #list_search3 {  float : right;
                           padding: 0 10px 0 0;}

      #list_search4 {  float : right;
                           padding: 0 155px 0 0;}
      


       table {width: 75%;
               border-top: 1px solid ;
               border-collapse: collapse;
               margin : 2px 0 0 10%;  
               text-align : center;}

      #list_title1 { padding: 15px 0px 15px 30px ; }
      #list_title2 { padding: 15px 70px 15px 70px ;}
      #list_title3 { padding: 15px 0px 15px 0px ;}
      #list_title4 { padding: 15px 0px 15px 0px ;}
      #list_title5 { padding: 15px 10px 15px 0px ;}

  
       th, td { border-bottom: 1px solid;
                border-top : 1ps solid;
                padding: 10px; }


      #list_item1 { padding: 15px 0px 15px 0px ;}
      #list_item2 { padding: 15px 70px 15px 70px ;}
      #list_item3 { padding: 15px 0px 15px 0px ;}
      #list_item4 { padding: 15px 0px 15px 0px ;}
      #list_item5 { padding: 15px 10px 15px 0px ;}


      #button { float : left;
                    margin : 10 0 0 200px;}

      #pag_button { float : left;
                         margin : 10 0 0 43.3%;}

      #footer { background : black;
                   margin : 30% 0 0 0;
                   width : 100%;
                   height : 25%;
                   color : white;
                   overflow: hidden;}

      #notice { float : left;
                   margin : 30px 10%; }

      #information { float : right;
                          margin : 30px 10%;  }
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
      <image src = "./image/main.jpg" id = "img" /><br><br><br><br><br><br><br><br>
</div>

<div id = "list">

<? 
            $connect = mysql_connect("localhost", "yyr", "wjsansrk");
            mysql_select_db("myinfo", $connect);


        $scale = 10;

          if (mode == "seach")
	{
		if(!$search)
		{
			echo("<script>
				 alert('검색할 단어를 입력해 주세요!');
			             history.go(-1);
				</script>
			");
			exit;
		}

		$sql = "select * from review where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from review order by num desc";
	}

	$result = mysql_query($sql, $connect);

	$total_record=mysql_num_rows($result);

	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)             
		$page = 1;             
 
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;



?>

<hr>
<h2>review</h2>
<hr>


<div id = "content">

<form name = "board_form" method = "psot" action ="list.php">
      <input type = hidden mode = "search">
           <div id = "list_search">
                       <div id="list_search4">&nbsp;<input type="submit" value="검색"></div>

                       <div id="list_search3">&nbsp;<input type="text" name = "search"></div> 

                       <div id = "list_search2">
                                <select name = "frind">
                                 <option value='subject'>제목</option>
                                <option value='content'>내용</option>
                                <option value='name'>이름</option>
                                </select></div>
        
                       <div id="list_search1">▷ 총 <? echo"{$total_record}"; ?> 개의 게시물이 있습니다.  </div>
	        
           </div>
</form>
<br><br><br>


              <table >
                      <tr >
		<th id="list_title1">번호</th>
		<th id="list_title2">제목</th>
		<th id="list_title3">작성자</th>
		<th id="list_title4">등록일</th>
		<th id="list_title5">조회</th>
	         </tr>



<div id="list_content"  colspan=4>

<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysql_data_seek($result, $i);       

      $row = mysql_fetch_array($result);       
	
	  $item_num     = $row[num];
	  $item_id      = $row[id];
              $item_nick      = $row[nick];
	  $item_name    = $row[name];
	  $item_hit     = $row[hit];

      	  $item_date    = $row[regist_day];

	  $item_date = substr($item_date, 0, 10);  

	  $item_subject = str_replace(" ", "&nbsp;", $row[subject]);

?>
	<tr>
	     <td id="list_item1"><? echo"$number"; ?></td>
	     <td id="list_item2"><a href="review_view.php?num=<?echo"$item_num";?>&page=<?echo"$page";?>"><?echo"$item_subject"; ?></a></td>
                 <td id="list_item3"><?echo"$item_nick"; ?></td>
	    <td id="list_item4"><? echo"$item_date"; ?></td>
	    <td id="list_item5"><?echo" $item_hit"; ?></td>
	</tr>
<?	
   	   $number--;
   }
?>

              </table>

<br><br>

<div id = "pag_button" >
<idv id = "page_num">
	◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp; 
<?
 for ($i=1; $i<=$total_page; $i++)
   {
	if ($page == $i)    {
	    echo "<b> $i </b>";
	}
	else{ 
	       echo "<a href='list.php?page=$i'> $i </a>";
                   }      
   }
?>

	&nbsp;&nbsp;&nbsp;&nbsp;다음 ▶	
</div>

<div id = "button">
       <a href="review.php?page=<?=$page;?>"><input type="submit" value="목록" ></a>&nbsp;
	


<? 
	if($_SESSION['id']==admin){

	  echo " <a href='./review_write_form.php'><input type='submit'  value='글쓰기' ></a>";
	}
?>	

</div>
</div>
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