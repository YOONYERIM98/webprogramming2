<doctype html>
<html>
<head>
      <title>category</title>

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

      #footer { background : black;
                   height : 25%;
                   color : white;
                   overflow: hidden;}

      #notice { float : left;
                   margin : 30px 0 30px 10%;}

      #information { float : right;
                         margin : 30px 10% 30px 0;} 

      #content { margin : 0 auto 10%;
                     width: 70%;}
 
      legend { margin : 0 0 0 30px;}

      #image {  margin : 0 auto 2%;
                   width: 50%; }

     p { padding : 20px;}

      #footer { background : black;
                   margin : 10% 0 0 0;
                   width : 100%;
                   height : 25%;
                   color : white;
                   overflow: hidden;}

      #notice { float : left;
                   margin : 30px 10%; }

      #information { float : right;
                          margin : 30px 10%;  }

      #h2 { padding : 10px;
            text-align : center;}

 
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
       </div>


<br>
<div id = 'title'>
     <a href = './index.php'> <image src = './image/mainlogo.png' id = 'mainlogo'/></a>
</div>
<br>

<div id = 'main_menu'>
      <a href = './category.php'> category &nbsp;&nbsp;&nbsp;|</a> 
      <a href = './review.php'> review &nbsp;&nbsp;&nbsp;|</a >
      <a href = './mix.php'> mix &nbsp;&nbsp;&nbsp;|</a >
      <a href = './list.php'> board</a >
</div>";

}
else{ echo "<script> 
            alert('먼저 로그-인을 해야 합니다!');
 	location = 'login.php'; 
	</script> ";     

}
?>

<div id = "main">
      <image src = "./image/main.jpg" id = "img" />
</div>

<br><br><br><br><hr><br><br><br><br>
<hr>
<h2 id = "h2">category</h2>
<hr>
<br><br>
<div id = "content">

    <form>

	<fieldset>
	      <legend> <h2>한식 </h2></legend>
		<p>한국 요리는 한국에서 발달한 고유하고도 전통적인 음식을 뜻한다. 
                                복잡한 궁중 요리에서부터 지방의 특색 요리와 현대의 맛있는 요리에 이르기까지 재료와 조리법이 매우 다양하다. 
                                전통적인 한국 정식은 밥, 국, 김치와 함께 나오는 많은 반찬들로 이루어진다. 한국 요리는 주로 쌀을 기반으로.
                                일반적으로 사용되는 성분 포함 참기름, 들기름, 고추장, 된장, 간장, 소금, 마늘, 생강, 고춧가루, 다시마 국물 등으로 맛을 낸다. 
                                김치는 거의 항상 모든 음식에서 제공된다. 
                                식단은 계절별로 다양한데, 전통적으로 겨울 동안에는 마당에 구멍을 파고 땅 속에 묻어 놓은 장독에 저장된 김치와 그 밖에 절인 채소들에 많이 의존했다. 
                                그러나 현재는 계절에 상관없이 대부분의 식단을 맛볼 수 있다. <br><br>
                                예를 들어 비빔밥, 불고기, 김치<br><br>
                               <div id= "image">
                               <image src = "./image/비빔밥.gif"/ style = "width : 460px; height : 300px;"> </div></p>
	</fieldset>

<br><br><br><br>
	<fieldset>
	      <legend> <h2>중식 </h2></legend>
		<p>중화 요리는 전 세계로 널리 퍼져 각지 특성에 맞게 현지화 된 사례도 많기 때문에 
                               중국 본토에서 볼 수 없는 요리도 존재한다. 더욱이 중화권이라고 하면 중국 본토 뿐만이 아니라 대만, 
                               각지의 화교 및 차이나타운까지 포괄하므로 이를 구분하기 위해 중국 현지 요리는 중국 요리로 명명하였다. 
                               그렇다고 하더라도 한국식 중화 요리를 "본토 중국과는 스타일이 다르니, 중국 요리가 아니다"라고 무시하기는 어렵다. 
                               한국식 중화 요리는 엄연히 화교들이 중국 본토 요리들을 한국인의 입맛에 맞게 변형한 것이 주류이다. 
                               어차피 중국 본토 안에서도 각 성마다 요리 스타일이 상이하기 때문에, 
                               한국식 중화 요리와 미국식 중화 요리 등도 이런 관점에서 보면 편하다. <br><br>
                               예를 들어 꿔바로우, 짜장면, 짬뽕 <br><br>
                               <div id= "image">
                               <image src = "./image/짬뽕.gif"/ style = "width : 460px; height : 300px;"> </div></p>
	</fieldset>

<br><br><br><br>
	<fieldset>
	      <legend> <h2>일식 </h2></legend>
		<p>일본 요리는 해외에서 들여온 요리 방식이나 재료로 만든 음식을 포함하지만 저만의 일본식으로 개발해 냈다는 것에 그 의의가 있다. 
                               현재, 일본인이 먹는 식사 중에서, 다른 나라의 요리로서의 성격이 강한 것을 제외한 나머지를 "일본 요리"라고 부르는 경우가 많다.
                               예를 들어, 규동이나 니쿠쟈가(肉じゃが)는 양념으로서 간장이랑 국, 미림 등 일본 특유의 조미료를 사용한 것이므로, 
                               일본요리라고 여겨진다. 일본 요리는 재료의 품질과 외양을 위해 음식이 나오는 시기를 중요하게 생각한다. <br><br>
                               예를 들어 스시, 라멘, 스키야키 <br><br>
                               <div id= "image">
                               <image src = "./image/스키야키.gif"/ style = "width : 460px; height : 300px;"> </div></p>
	</fieldset>

<br><br><br><br>
	<fieldset>
	      <legend> <h2>양식 </h2></legend>
		<p>양식은 일반적으로 서양식 요리라고 부르기도 하며 유럽 및 서양 나라들의 요리들을 말한다.
                              유럽 요리 또는 '서양 요리'에는 러시아를 포함한 유럽의 전통 요리는 물론, 넓게는 북아메리카, 
                              오스트레일리아와 라틴아메리카의 요리, 즉 유럽의 이주민들이 아주 큰 영향을 끼친 이주민 요리도 포함된다. 
                              '서양 요리'라는 표현은 동아시아 사람들이 '동양 요리', 또는 아시아식 요리와 대조하여 부르는 용도에 쓰인다. 
                              예를 들어 파스타, 퀘사디아<br><br>
                               <div id= "image">
                               <image src = "./image/파스타.gif"/ style = "width : 460px; height : 300px;"> </div></p>
	</fieldset>

    </form>
       
                           

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
<body/>
</html>