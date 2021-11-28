<?
session_start();

if($_SESSION['id']=="" && $_SESSION['password']=="") {
   if($_POST[id] !="" && $_POST[password] !="") {
      $connect = mysql_connect("localhost", "yyr", "wjsansrk");
      mysql_select_db("myinfo", $connect);
      $sql = "select * from customer where id ='$_POST[id]' and password = '$_POST[password]'";
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      $num = mysql_num_rows($result);
    
      if(!$num) {
            echo "<script>
                     alert('아이디 또는 암포 오류');
                     history.go(-1);
                     </script>";
                     exit;
       }
       else {
	session_start();
	  $_SESSION['login'] ="true";
               $_SESSION['name'] = $row[name];
               $_SESSION['id'] = $row[id];
               $_SESSION['password'] = $row[password];
               $_SESSION['address'] = $row[address];
               $_SESSION['tel'] = $row[tel];
               echo "<script>
                            location = 'index.php';
                         </script>";
        }

mysql_close();
}

                 else {
                         echo "<script>
                            location = 'login.php';
                         </script>";
                         }

          }

else {
    echo "<script>
                  location = 'index.php';
             </script>";
             exit; 
}
?>
