<?
   session_start();

    extract(array_merge($_GET, $_POST));  


   if(!$_SESSION['id']) {
     echo("
	   <script>
	     alert('로그인 후 이용하세요.')
	     history.go(-1)
	   </script>
	 ");
	 exit;
}


           else {

            

             $connect = mysql_connect("localhost", "yyr", "wjsansrk");
	mysql_select_db("myinfo", $connect);

   $regist_day = date("Y-m-d (H:i)");

  $sql = "insert into free_ripple (parent, id, name, nick, content, refist_day) ";
  $sql .= "values($num, '$_SESSION[id]', '$_SESSION[name]', '$_SESSION[id]', '$ripple_content', '$regist_day')";
   
   mysql_query($sql, $connect); 
   mysql_close();      

   echo "
	   <script>
	    location.href = 'view.php?num=$num';
	   </script>
	";
}


?>


