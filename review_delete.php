<?
   session_start();

  extract(array_merge($_GET, $_POST)); 

   $connect = mysql_connect("localhost", "yyr", "wjsansrk");
   mysql_select_db(myinfo, $connect);


   $sql = "delete from review where num = $num";
   mysql_query($sql, $connect);

   mysql_close();

   echo "
	   <script>
	    location.href = 'review.php';
	   </script>
	";

?>
