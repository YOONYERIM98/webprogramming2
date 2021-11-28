<?    
session_start();

if($_SESSION['id'] !="" && $_SESSION['password'] !="") {
     
     $connect = mysql_connect("localhost", "yyr", "wjsansrk");
      mysql_select_db("myinfo", $connect);
      $sql = "update customer set password = '$_POST[password]', name = '$_POST[name]', 
      address = '$_POST[address]', tel = '$_POST[tel]' where id = '$_SESSION[id]'";

    mysql_query($sql);

    mysql_close();

 
      $connect = mysql_connect("localhost", "yyr", "wjsansrk");
      mysql_select_db("myinfo", $connect);

      $sql = "select * from customer where id = '$_SESSION[id]'";

      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      $num = mysql_num_rows($result);

      if($num) {
           session_start();
	  $_SESSION['login'] ="true";
               $_SESSION['id'] = $row[id];
               $_SESSION['password'] = $row[password];
               $_SESSION['name'] = $row[name];
               $_SESSION['address'] = $row[address];
               $_SESSION['tel'] = $row[tel];
               echo "<script>
                            alert('수정했습니다.')
                            location = 'index.php';
                         </script>";

      myslq_close();
       }
      
}

else {
  echo "<script>
                     alert('로그인을 먼저 하세요');
                      location = 'login.php';
                     </script>";
}

?>