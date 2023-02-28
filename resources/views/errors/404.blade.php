@extends('layouts.main')

@section('content')

<style>
.main-404 {
	position: relative;
	margin: 0 auto;
	width: 800px;
	height: 600px;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
}
.main-404 img {
	max-width: 100%;
}
.main-404 .img-404-2 {
	position: absolute;
	width: 150px;
	bottom: 134px;
	right: 140px;
	z-index: 2;
}
.main-404 .img-404-2:after {
	content: "";
	background: #FFF;
	position: absolute;
	width: 150px;
	/*height: 260px;*/
	bottom: 100px;
	right: 0;
	z-index: -1;
}
.main-404 .img-404-3 {
	position: absolute;
	bottom: 140px;
	left: 20px;
	width: 300px;
	z-index: 2;
}
.main-404 .img-404-3:after {
	content: "";
	background: #FFF;
	position: absolute;
	width: 140px;
	height: 260px;
	bottom: 100px;
	left: 0;
	z-index: -1;
}
.txt-404-1,
.txt-404-2 {
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
}
.txt-404-1 {
	top: 0;
}
.txt-404-1 h1 {
	font-size: 70px;
}
.txt-404-2 {
	font-size: 30px;
	top: 100px;
}
.down-text-404 {
	margin-top: -100px;
	position: relative;
	z-index: 10;
	line-height: 1.4;
}
.txt-404-3 {
	font-size: 18px;
	text-align: center;
	padding-bottom: 20px;
}
.txt-404-4 {
	font-size: 16px;
	text-align: center;
	margin-bottom: 50px;
}

@media (max-width:991px){
    .main-404{
		transform: scale(0.8) translateX(-10%);
		
	}
}
@media (max-width:767px){
    .main-404{
		transform: scale(0.6) translateX(-30%);
		margin: -100px auto;
	}
	.down-text-404 {
		margin-top: -160px;
	}
	.txt-404-3 {
		font-size: 15px;
	}
	.txt-404-4 {
		font-size: 13px;
	}	
}
@media (max-width:575px){
    .main-404 {
		transform: scale(0.4) translateX(-125%);
		position: relative;
		left: 50%;
		margin: -150px auto;
	}
	.down-text-404 {
		margin-top: -200px;
	}
	.txt-404-3 {
		font-size: 13px;
	}
	.txt-404-4 {
		font-size: 11px;
	}
}


	</style>

<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">404 - страница не найдена</li>
        </ol>
    </nav>
</div>
<section class="page-404">
<div class="container">
<div class="main-404">
	<div class="txt-404-1"><h1>404</h1></div>
	<div class="txt-404-2">Страница не найдена</div>
	<div class="img-404-1"><img src="/public/images/404/dribbble.gif" alt="404"></div>
	<div class="img-404-2"><img src="/public/images/404/img1.png" alt="img-404"></div>
	<div class="img-404-3"><img src="/public/images/404/img2.png" alt="img-404"></div>

</div>
<div class="down-text-404">
	<div class="txt-404-3"><b>Страница, которую вы ищете, это "древний век" - более не актуальна</b></div>
	<div class="txt-404-4">Ее либо больше не существует, либо вы ошиблись адресом. Попробуйте воспользоваться каталогом. Компания "Хиконикс" предлагает юридическим лицам: подрядчикам, агентам и оптовикам - лучшие диллерские условия и цены! Позвоните нам или нажмите дребезжащий звонок!</div>	
</div>
</div>
</section>

@endsection