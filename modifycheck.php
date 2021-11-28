<?
    session_start();

if($_SESSION['id'] !="" && $_SESSION['password'] !="") {
   if($_POST[password] !="") {
     
      if($_SESSION['password']==$_POST[password]) {
     
      $connect = mysql_connect("localhost", "yyr", "wjsansrk");
      mysql_select_db("myinfo", $connect);
      $sql = "select * from customer where password = '$_POST[password]'";
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      $num = mysql_num_rows($result);

      mysql_close($connect);


               $_SESSION['modify'] ="true";
               $_SESSION['login'] ="true";
               $_SESSION['name'] = $row[name];
               $_SESSION['id'] = $row[id];
               $_SESSION['password'] = $row[password];
               $_SESSION['address'] = $row[address];
               $_SESSION['tel'] = $row[tel];
               echo "<script>
              location = 'modifypage.php';
                         </script>";
    }
       
       else {
                echo "<script>
                     alert('비밀번호 오류');
                      location = 'modify.php';
                     </script>";
        }
}

                  else {
                echo "<script>
                     alert('비밀번호 오류');
                      location = 'modify.php';
                     </script>";
        }

          }

else {
  echo "<script>
                     alert('로그인을 먼저 하세요');
                      location = 'login.php';
                     </script>";
}
?>
