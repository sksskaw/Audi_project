<!doctype htlm>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charsey="utf-8">

<title></title>

</head>

<style>

body{
	margin:0;
	padding:0;
	font-family: sans-serif;
	background: url(로그인배경.jpg) no-repeat;
	background-size: cover;
}
.login-box{
	width: 280px;
	position: absolute;
	top: 75%;
	left: 75%;
	transform: translate(-75%,-75%);
	color: white;
}
.login-box h1{
	font-size: 40px;
	border-bottom: 6px solid;
	margin-bottom: 50px;
	padding: 13px 0
}
.textbox{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid;
}
.textbox input{
	border: none;
	outline: none;
	background: none;
	color: white;
	font-size: 18px;
	width: 80%;
	float: left;
	margin: 0 10px;
}
.btn{
	width: 100%;
	background: none;
	border: 2px solid;
	color: white;
	padding: 5px;
	font-size: 18px;
	margin: 12px 0;
}
.textbox i{
	width: 26px;
	float: left;
	text-align: center;
}
</style>

<body>
<?php
require('dbConnect.php');

session_start( );
//if form submitted, inser values into the database
if (isset($_POST['user_id'])){
	$user_id = $_POST['user_id'];
	$user_password = $_POST['user_password'];
	
	$query = "SELECT * from `members` WHERE user_id='$user_id' and user_password='".md5($user_password)."'";
	$conn->set_charset("utf8");	
	$result = $conn->query($query) or die($conn->error( ));
	$rows = $result->fetch_assoc( );
	   if (isset($rows)) {
		   $_SESSION['user_name']= $rows['user_name']; //사용자명: 예, 홍길동
		   //redirect user to index2.php
		   header("Location: 네비게이터.php");//메인 홈피로 돌아가기
	   } else {
		   echo "<div>
		   <h2>User id/password is incorrect!!!.</h2>
		   <br/>
		   Click here to <a href='로그인.php'>Go to Login page again</a></div>";
	   }
} else {
	?>

<div class="login-box">
	<h1>로그인</h1>
	<form action="" method="post" >
	<div class="textbox">
		<i class="fa fa-user"></i>
		<input type="text" placeholder="Username" name="user_id" size="20" autocomplete="off" required>
	</div>
	
	<div class="textbox">
		<i class="fa fa-lock"></i>
		<input type="password" placeholder="password" name="user_password" size="20" autocomplete="off" required>
	</div>
<button class="btn" type="submit" ><strong>Sign in</strong></button>
</form>
</div>
<?php } ?>
</body>
</html>