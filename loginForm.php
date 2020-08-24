<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>Login</title>
<style>
#loginform {
     width : 360px;
	 margin : 0 auto;
	 font-weight : bold;
	 font-size : 20px;
	 background-color : lightgreen;
	 padding : 10px;
	 border : 1px solid green;
	 margin-top : 100px;
	 }
h1 {color : Blue;	 
input{
    font-size : 18px;
	line-height : 25px;
}
button {
    font-size : 18px;
}
</style>
</head>
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
		   Click here to <a href='loginForm.php'>Go to Login page again</a></div>";
	   }
} else {
	?>
<div id="loginform">
<h1 style="text-align : center">로그인 창</h1>
<br/>

  <fieldset >  <!-- style="border-color:red"  : 이것은 둘레 선의 색을 지정함-->
    <legend align="center" style="font-size:20px">아이디/비밀번호 로그인</legend>
	<br/>
    <label><input type="text" placeholder="Username" name="user_id" size="20" autocomplete="off" required></label><br><br/>
    <label><input type="text" placeholder="password" name="user_password" size="20"  autocomplete="off" required><label>
    <br><br>
    <center><button type="submit" ><strong>로그인하기</strong></button>
	<button type="reset" ><strong>초기화</strong></button>
	</center>
  </fieldset>

</div>
<?php } ?>
</body>
</html>
