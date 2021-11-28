<?
     session_start(); 

             extract(array_merge($_GET, $_POST)); 

             $subject=$_POST['subject'];
	$content=$_POST['content'];
	
	if(!$_SESSION['id']) {
		echo("
		<script>
	    	 alert('로그인 후 이용해 주세요.')
	    	 history.go(-1)
	   	</script>
		");
		exit;
	}
	if(!$subject) {
		echo("
		   <script>
	 	    window.alert('제목을 입력하세요.')
	   	  history.go(-1)
		   </script>
		");
		 exit;
	}
	if(!$content) {
		echo("
	 	  <script>
	 	    window.alert('내용을 입력하세요.')
	  	   history.go(-1)
		   </script>
		");
		 exit;
	}session_start(); 

 	$connect = mysql_connect("localhost", "yyr", "wjsansrk");
	mysql_select_db("myinfo", $connect);

	$regist_day = date("Y/m/d");

	if ($mode=="modify")
	{
		$sql = "update review set subject='$subject', content='$content' where num=$num";
	}
	else
	{
		if ($html_ok=="y")
		{
			$is_html = "y";
		}
		else
		{
			$is_html = "";
			$content = htmlspecialchars($content);
		}

		$sql = "insert into review (id, name, nick, subject, content, regist_day, hit, is_html) ";
		$sql .= "values('$_SESSION[id]', '$_SESSION[name]', '$_SESSION[id]', '$subject', '$content', '$regist_day', 0, '$is_html')";
	}


	mysql_query($sql, $connect);
	mysql_close();  

	echo "
	   <script>
	    location.href = 'review.php?page=$page';
	   </script>
	";
?>
