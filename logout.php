<?
session_start();
        if ( $_SESSION['login']=="true")  { 

	  unset($_SESSION[login]);
               unset($_SESSION['name']);
               unset($_SESSION['id']);
               unset($_SESSION['password']);
               unset($_SESSION['address']);
               unset($_SESSION['tel']);
	
          echo "<script> 
	alert('로그-아웃 합니다.');
 	location = 'index.php';
 	</script> "; 
         
    }

          else  echo "<script> 
	alert('먼저 로그-인을 해야 합니다!');
 	location = 'index.php'; 
	</script> ";     
?>


