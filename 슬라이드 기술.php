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
	font-family: sans-serif;
}
.container{
	width: 100%;
	height: 100vh;
	overflow: hidden;
}
.container .column{
	width: 25%;
	height: 100%;
	float: left;
	border-right: 2px solid rgba(0,0,0,.5);
	box-sizing: border-box;
	z-index: 1;
}
.container .column:last-child{
	border-right: none;
}
.container .column .content{
	position: relative;
	height: 100%;
}
.container .column .content .h1{
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	width: 100%;
	background: rgba(0,0,0,.1);
	text-align: center;
	margin: 0;
	padding: 0;
	color: rgba(255,255,255,.2);
	font-size: 15em;
	border-top: 2px solid rgba(0,0,0,.5);
	border-bottom: 2px solid rgba(0,0,0,.5);
}
.container .column .content .box{
	position: absolute;
	top: 50%;
	transform: translateY(100%);
	box-sizing: border-box;
	padding: 40px;
	background: rgba(255,255,255,1);
	text-align: center;
	transition: 0.5s;
	opacity: 0;
}
.container .column.active .content .box{
	opacity: 1;
	transform: translateY(-50%);
}
.container .column .content .box h2{
	margin: 0;
	padding: 0;
	font-size: 20px;
	color: #262626;
}
.container .column .content .box p{
	color: #262626;
	font-size: 12px;
}
.container .column .bg{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	pointer-events: none;
	z-index: -1;
}
.container .column.active .bg.bg1{
	background: url(아우디사진1.jpg);
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	transition: 0.5s;
}
.container .column.active .bg.bg2{
	background: url(아우디1.jpg);
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	transition: 0.5s;
}
.container .column.active .bg.bg3{
	background: url(아우디2.jpg);
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	transition: 0.5s;
}
.container .column.active .bg.bg4{
	background: url(아우디3.jpg);
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	transition: 0.5s;
}
</style>

<body>
	<div class="container">
		<div class="column active">
			<div class="content">
				<h2></h2>
				<div class="box">
					<h2>Lighting technology</h2>
					<p>Audi는 자동차 조명 기술 분야의 세계적인 브랜드이며 Matrix 
					레이저 헤드 라이트와 같은 새로운 솔루션은 계속해서 발전을 주도합니다. 
					그 기능 외에도 아우디 모델의 조명은 디자인 요소로서 가장 중요합니다. 
					조명은 브랜드의 핵심 가치 (진보, 스포티, 세련미)를 시각화합니다.
					</p>
				</div>
			</div>
			<div class="bg bg1"></div>
		</div>
		<div class="column">
			<div class="content">
				<h2></h2>
				<div class="box">
					<h2>The new freedom.</h2>
					<p>새로운 품질의 공간 감각을 경험하십시오. 
					60 % 더 많은 시야각을 제공하는 파노라마 유리 지붕 
					(옵션)은 수평선이 당신을 동반 할 수있게 해주 며 밝은 실내 공간을 제공합니다.
					</p>
				</div>
			</div>
			<div class="bg bg2"></div>
		</div>
		<div class="column">
			<div class="content">
				<h2></h2>
				<div class="box">
					<h2>The Audi A7 Sportback.</h2>
					<p>새로운 A7 Sportback은 스포티 한 우아함을 기념하고 
					새로운 스타일의 대사로서 자동차 아방가르드에 속한 자동차입니다. 
					날카로운 라인과 쿠페 실루엣은 강력한 감성의 표현입니다. 
					자체 A7 시그니처가있는 라이트는 프로 그레시브 외관을 강조합니다.
					</p>
				</div>
			</div>
			<div class="bg bg3"></div>
		</div>
		<div class="column">
			<div class="content">
				<h2></h2>
				<div class="box">
					<h2>Touch of a button.</h2>
					<p>버튼이 적어 편리함니다.
					혁신적인 MMI 터치 반응 작동 개념은 스마트 폰을 간단하고 
					직관적으로 제어 할 수있는 장점을 제공하며 터치 피드백 덕분에 운전 중에도 안전하게 작동합니다.
					</p>
				</div>
			</div>
			<div class="bg bg4"></div>
		</div>
		</div>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
	<script type="text/javascript">
		$(document).on('mouseover','.container .column', function(){
			$(this).addClass('active').siblings().removeClass('active')})
	</script>
</body>


</html>