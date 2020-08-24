<?php
 session_start( );
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" type="css" href="css/tab.css" /-->
<script>
	var last_tab = 1;

function loadTab(tab_number)
{
	if (tab_number === last_tab) return;
	
	document.getElementById("tab" + last_tab).style.display = "none";
	document.getElementById("tab" + tab_number).style.display = "block";
	document.getElementById("tab-button" + last_tab).style.opacity = "0.5";
	document.getElementById("tab-button" + tab_number).style.opacity = "1.0";

	last_tab = tab_number;
}
</script>
<style>
body
{
	background-color: mistyrose;
}
#container {
	   width : 1000px;
	   margin : 0 auto;
	}
header {
	   font-size : 2.2em;
	   font-weight : bold;
	   width:100%px; 
       height:120px; 
       text-align:center;
	   background : Aquamarine;
       padding-top:20px; 
       color:red;
	}
header>ul>li {
      /*display:inline;*/
      list-style:none;
      padding:2px; 
      margin-right:10px;
	  font-size : 18px;
	  float : right;
	}
header>ul>li>a {
	  text-decoration : none;
}

div.tab-button-wrapper ul {
	padding: 0;
	list-style: none;
}

div.tab-button-wrapper li {
	float: left;
	background-color : darkgreen;
	text-align : center;
	border-bottom : 1px solid red;
	width : 220px; /*마음대로 조절 가능함 */
}

a.tab-button-first {
	border-radius: 5px 0 0 0;
}

a.tab-button-last {
	border-radius: 0 5px 0 0;
	border-right: none;
}

div.tab-button-wrapper a {
	display: block;
	padding: 1em;
	text-decoration: none;
	/*color: #252525; */
	color : black;
	background-color: #ffffff;
	border-right: 1px solid black;
}

a.tab-button-hidden {
	opacity: 0.5;
}

div.tab-body {
	padding: 1em;
	clear: both;
	background-color: #FFFFFF;
	height: 800px;
	border-radius: 0 3px 3px 3px;
}

div.tab-body-hidden {
	display: none;
}

</style>
</head>
<body>
<div id="container">
<header>
  젊음의 에너지, Home page!!!
   <ul> 
	<?php
	  if (empty($_SESSION['user_name'])) { ?>
	    <li><a href="loginForm.php">로그인</a> </li>
		<li><a href="memberRegistration.php"></a>회원가입</li>	
	  <?php }
	  else { ?>
        <li><a href="logout.php">로그아웃</a></li>
		<li><?php echo $_SESSION['user_name']; ?>님 안녕하세요.</li>
	  <?php } ?>
   </ul>
</header>  
<hr />
<div class="tab-button-wrapper">
		<ul>
			<li><a class="tab-button-first"
				id="tab-button1"
				href="javascript:void(0)"
				onclick="loadTab(1)"><strong>메뉴TAB 1</strong></a></li>
			<li><a class="tab-button-hidden" 
				id="tab-button2"
				href="javascript:void(0)"
				onclick="loadTab(2)"><strong>메뉴TAB 2</strong></a></li>
			<li><a class="tab-button-hidden" 
				id="tab-button3"
				href="javascript:void(0)"
				onclick="loadTab(3)"><strong>메뉴TAB 3</strong></a></li>
			<li><a class="tab-button-hidden tab-button-last" 
				id="tab-button4"
				href="javascript:void(0)"
				onclick="loadTab(4)"><strong>메뉴TAB 4</strong></a></li>
		</ul>
	</div>
	<div class="tab-body-wrapper">
		<div class="tab-body" id="tab1"><p style="text-align:center">여기에 내용 넣기 body 1<br>
<strong>꽃 </strong><br>
내가 그의 이름을 불러주기 전에는<br>
그는 다만<br>
하나의 몸짓에 지나지 않았다.<br>
<br>
내가 그의 이름을 불러주었을 때,<br>
그는 나에게로 와서<br>
꽃이 되었다.<br>
<br>
내가 그의 이름을 불러준 것처럼<br>
나의 이 빛깔과 향기에 알맞는<br>
누가 나의 이름을 불러다오.<br>
<br>
그에게로 가서 나도 <br>
그의 꽃이 되고 싶다.<br>
<br>
우리들은 모두<br>
무엇이 되고 싶다.<br>
<br>
너는 나에게 나는 너에게<br>
잊혀지지 않는<br>
하나의 눈짓이 되고 싶다<br>
		<br>김춘수 시인
		</p></div>
		<div class="tab-body tab-body-hidden" id="tab2"><p>내용넣어야 함Body 2</p></div>
		<div class="tab-body tab-body-hidden" id="tab3"><p>내용을 넣어야 함Body 3</p></div>
		<div class="tab-body tab-body-hidden" id="tab4"><p>내용을 넣어야 함Body 4</p></div>
</div>
<footer style="text-align:center">&copy; 한신대학교 정보통신학부</footer>	
</div>	
</body>