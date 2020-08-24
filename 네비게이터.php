<?php
 session_start( );
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

</head>
<style>
body{
		margin: 0;
		padding: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
		background: #000000;
}
ul{
		margin: 0;
		padding: 0;
		display: flex;
}
ul li{
		list-style: none;
		margin: 0 20px;
		transition: 0.5s;
}
ul li a{
		display: block;
		position: relative;
		text-decoration: none;
		padding: 5px;
		font-size: 18px;
		font-family: sans-serif;
		color: #fff;
		text-transform: uppercase;
		transition: 0.5s;
}
ul:hover li a{
		transform: scale(1.5);
		opacity: .2;
		filter: blur(5px);
}
ul li a:hover{
		transform: scale(2);
		opacity: 1;
		filter: blur(0); 
}
ul li a:before{
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #A4A4A4;
		transition: transform 0.5s;
		transform-origin: right;
		transform: scaleX(0);
		z-index: -1;
}
ul li a:hover:before{
		transition: transform 0.5s;
		transform-origin: left;
		transform: scaleX(1);
}

		
</style>
<body>
	<ul>
		<?php
	  if (empty($_SESSION['user_name'])) { ?>
	    <li><a href="로그인.php">Login</a> </li>
		<li><a href="memberRegistration.php">Create</a></li>
	  <?php }
	  else { ?>
        <li><a href="logout.php">Logout</a></li>
	  <?php } ?>	
		<li><a href="아우디 매인.php">About Audi</a></li>
		<li><a href="슬라이드 기술.php">Technology</a></li>
		<li><a href="인테리어in.php">Interior</a></li>
		<li><a href="인테리어ex.php">Exterior</a></li>
		<li><a href="https://www.audikoreaevent.co.kr/lms/application/applyForm.do?device=W&inflPathAclsCd=A01&inflPathBclsCd=B03&cmpnNo=&step=1" target="_blank">Test application</a></li>
	</ul>

</body>


</html>