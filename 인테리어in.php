<?php
 session_start( );
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}

#myVideo {
    position: fixed;
    width: 100%;
	height: auto;
}

.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 10px;
}

#myBtn {
	float:right;
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;
}
</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="내부인테리어.mp4" type="video/mp4">
</video>

<div class="content">
  <h1>Audi A7 Interior</h1>
  <p>식별 할 수있는, 명백한, 아우디A7. 날카로운 조명에서 날카로운 빛의 시그니처까지 넓은 싱글 프레임과 쿠페 형 실루엣을 갖춘 직립 프론트, 조각 리어 엔드까지 - 아우디 A7 스포츠 백 (Sportback)은 혁신적인 디자인 언어의 대사이며 동시에 고전적인 콰트로 유전자.</p>
  <a href="내관사진.php"><button id="myBtn">사진보기</button>
</div>


</body>
</html>