<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
<style>
#container {
   margin : 0 auto;
   width : 600px;
   background-color : #DEF5FF;
   font-weight : bold;
   padding : 10px;
}
#submit1 {
   text-align : center;
   font-size : 25px;
}
h1 { text-align : center;}

</style>
</head>
<body>
<?php
require('dbConnect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['user_id'])){
    $user_id = $_REQUEST['user_id'];
    $user_password = $_REQUEST['user_password'];
	$user_name = $_REQUEST['user_name'];
    $user_gender = $_REQUEST['user_gender'];
    $user_email = $_REQUEST['user_email'];
	$user_phone = $_REQUEST['user_phone'];
	$user_hobby = $_REQUEST['user_hobby'];
	$user_hobby = implode(',',$user_hobby); //배열을 문자열로 표현
	$reg_date = date("Y-m-d H:i:s");
        
	$query = "INSERT into `members` (user_id, user_password, user_name, user_gender,
	                                 user_email,user_phone,user_hobby, reg_date)
         VALUES ('$user_id', '".md5($user_password)."', '$user_name','$user_gender',
		 '$user_email','$user_phone','$user_hobby', '$reg_date')";
	$conn->set_charset("utf8");	 
    $result = $conn->query($query);
    if($result){
       echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='로그인.php'>Login</a></div>";
        }
    }else{
?>
<div id="container">
<h1>회원가입 사이트</h1>
<h2>아래 항목을 채우고, 회원가입 버튼을 눌러주세요.</h2>
<br><br>
<form name="reg_form" action="" method="post">
<table>  <!-- 7행 2열의 가단한 로그인 폼 -->
<tr><td>아 이 디 :</td><td><input type="text" name="user_id" size="20" autofocus autocomplete="off"></td></tr>
<tr><td>패스 워드:</td><td><input type="password" name="user_password" size="20"  autocomplete="off"></td></tr>
<tr><td>이&nbsp;&nbsp;&nbsp;름 :</td><td><input type="text" name="user_name" size="20"  autocomplete="off"></td></tr>
<tr><td>성&nbsp;&nbsp;&nbsp;별 :</td><td><input name="user_gender" type="radio" value="male">남성
         &nbsp;&nbsp;<input name="user_gender" type="radio" value="female">여성</td></tr>
<tr><td>E-mail:</td><td><input type="email" name="user_email" size="25" maxlength="25"></td></tr>
<tr><td>전화번호:</td><td><input type="tel" name="user_phone" size="11" maxlength="11">
                         <span style="color:red; font-size:small;">주) - 없이 입력</span></td></tr>
<tr><td>취&nbsp;&nbsp;&nbsp;미 :</td>
    <td><input type="checkbox" name="user_hobby[]" value="음악">음악
	    <input type="checkbox" name="user_hobby[]" value="미술">미술
		<input type="checkbox" name="user_hobby[]" value="체육">체육
		<input type="checkbox" name="user_hobby[]" value="독서">독서</td>
	</tr>
<tr><td>가입소감:</td><td><textarea name="user_impress" cols="50" rows="4" maxlength="100" placeholder="[저장안함]100자 이내만 입력 가능함."></textarea></td></tr>
</table>

<p id="submit1"><input type="submit" value="가입하기"></p>
</form>
</div>
<?php } ?>

</body>
</html>