<?
session_start();

if($_SESSION['id'] !="" && $_SESSION['password'] !="") {

      $connect = mysql_connect("localhost", "yyr", "wjsansrk");
      mysql_select_db("myinfo", $connect);
      $sql = "select * from customer where id ='$_SESSION[id]' and password = '$_SESSION[password]'and name = '$_SESSION[name]'";
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      $num = mysql_num_rows($result);
      mysql_close();

      if(!$num) {
?>

        <br><h2>아이디 또는 암포 오류<h2><br>
        <a href = ./index.php><button type="button" >홈페이지 이동</button> </a>

<?
       }
       else {

         $connect = mysql_connect("localhost", "yyr", "wjsansrk");
         mysql_select_db("myinfo", $connect);

         $sql = "delete from customer where id ='$_SESSION[id]' and password = '$_SESSION[password]'";
         mysql_query($sql, $connect);
         mysql_close();

	 session_start();
	  unset($_SESSION[login]);
               unset($_SESSION['name']);
               unset($_SESSION['id']);
               unset($_SESSION['password']);
               unset($_SESSION['address']);
               unset($_SESSION['tel']);


            ?>

                <br><h2 style = "text-align : center; margin : 150px 0 0 0;">탈퇴하셨습니다. <h2><br>
                <div style = "width: 100px; margin : 0 auto; height : 40px;" ><a href = ./index.php ><button type="button" style = "height : 30px;" >홈페이지 이동</button> </a></div>
<?
        }

}
else {
 ?>

       <br><h2>로그인을 먼저 하세요.<h2><br>
       <a href = ./index.php><button type="button" >홈페이지 이동</button> </a>
<?
}
?>
