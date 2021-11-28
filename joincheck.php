<?

if($_POST[id] !="" && $_POST[password] !="" && $_POST[password1]!="") {
  if($_POST[password] == $_POST[password1]) {
      $connect = mysql_connect("localhost", "yyr", "wjsansrk");
      mysql_select_db("myinfo", $connect);
      $sql = "select * from customer where id ='$_POST[id]'";
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      $num = mysql_num_rows($result);
    
      if($num) {
            echo "<script>
                     alert('이미 있는 아이디 입니다. ');
                     history.go(-1);
                     </script>";
                     exit;
       }
       else {

               $sql = "insert into customer (id, password, name, address, tel) 
                         values ('$_POST[id]', '$_POST[password]', '$_POST[name]', '$_POST[address]', '$_POST[tel]')";
	    
                         $result = mysql_query($sql);             
       
               echo "<script>
                             alert('회원가입을 성공했습니다. ');
                            location = 'index.php';
                         </script>";

            mysql_close($connect);
          

               $connect = mysql_connect("localhost", "yyr", "wjsansrk");
               mysql_select_db("myinfo", $connect);
               $sql = "select * from customer where id ='$_POST[id]'";
               $result = mysql_query($sql);
               $row = mysql_fetch_array($result);

              session_start();
	  $_SESSION['login'] ="true";
               $_SESSION['name'] = $row[name];
               $_SESSION['id'] = $row[id];
               $_SESSION['password'] = $row[password];
               $_SESSION['address'] = $row[address];
               $_SESSION['tel'] = $row[tel];
        }
     }


      else {
           echo "<script>
              alert('비밀번호를 확인해 주십쇼. ');
              location = 'join.php';
               </script>";
         }

}

 else {
           echo "<script>
           alert('아이디와 비밀번호를 확인해 주십쇼. ');
           location = 'index.php';
            </script>";
       }

