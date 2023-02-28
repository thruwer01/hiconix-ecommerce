@extends('layouts.main')

@section('title'){{$title}}@endsection
@section('content')
<style>
	:root{
    scroll-behavior:smooth
	}   	
	
	@media (min-width:992px) {	
	.main-bg,
	.main-bg-map {
	background-image: url(/public/images/bg.jpg);
	background-position: center top;
	background-size: cover;
	background-repeat: no-repeat;
	position: absolute;
	top: 0;
	left: 0;
	width: 100vw;
	height: 100vh;
	z-index: -1;
	}
	
	.main-bg-map {
	background-image: url(/public/images/map.png);
	background-size: contain;
	background-position: left center;
	transform: translate(0,0);
	transition: transform 0.1s;
	margin: 20vh;
	width: 60vw;
	height: 60vh;
	}
	}
	#header {
	background: rgba(255,255,255, 0.5)!important;
	}
	#header.sticky {
	background: rgba(255,255,255, 1)!important;
	}
	.top-brand img {
	width: 100%;
	padding: 10px;
	}	
	.top-head-1 {
	text-transform: uppercase;
	color: #5c6e7b;
	font-size: 29px;
	font-weight: bold;
	text-shadow: 0 0 12px rgba(255,255,255,0.2), 0 2px 6px rgba(255,255,255,0.3);
	font: 20pt Aristotelica Display Trial;
    font-weight: bold;
	}
	.top-head-1 img {
	padding: 30px 0;
	}
	.top-head-2 {
	color: #000;
	font-size: 19px;
	}
	.page-title h1 {
	text-transform: uppercase;
	color: #12aaed;
	font-size: 84px;	
	font-weight: bold;
	text-shadow: 0 0 12px rgba(255,255,255,0.2), 0 2px 6px rgba(255,255,255,0.3);
	font: 72pt Aristotelica Display Trial;
    font-weight: bold;
	}
	.page-title h1:first-letter {
	color: #db4123;
	}
	.why-us-top {
	padding: 10px;
	background: rgba(255,255,255,0.4);
	border: 2px solid #FFF;
	border-radius: 10px;
	line-height: 20px;
	margin: 20px 0;
	}
	.why-us-top img {
	height: 60px;
	}
	.why-us-top .row {
	width: 100%;
	}
	
	.arrow-7 {
    margin: 10px auto 20px;
	width: 38px;
	height: 60px;
	}
	.arrow-7 span {
    display: block;
    width: 30px;
    height: 30px;
    border-bottom: 5px solid #0062ae;
    border-right: 5px solid #db4123;
    transform: rotate(45deg);
    margin: -16px 0;
    animation: arrow-7 1s infinite;
	}
	.arrow-7 span:nth-child(2){
    animation-delay: -0.2s;
	}
	@keyframes arrow-7 {
    0%{
	opacity: 0;
	transform: translate(0,-20px) rotate(45deg);
	}
    50%{
	opacity: 1;
	}
    100%{
	opacity: 0;
	transform: translate(0,20px) rotate(45deg);
	}
	}
	#mb {
	position: relative;
	top: -70px;
	}
	@media (max-width:991px) {	
	.page-title {
	margin: 50px 0 40px;
	}
	.mai-container {
	background-image: url(/public/images/bg-1.jpg);
	background-position: center top;
	background-size: cover;
	background-repeat: no-repeat;	
	}
	.why-us-top {
	margin: 30px 0;
	}
	.main-arrow {
	display: none;
	}
	}
	@media (max-width:576px) {	
	.top-head-1 {
	font-size: 17px;
	}
	.top-head-2 {
	color: #000;
	font-size: 16px;
	}
	.page-title {
	text-align: center;	
	}
	.page-title h1 {
	font-size: 50px;	
	}
	.top-brand {
	margin: 0 5px;
	}
	.top-brand img {
	padding: 6px;
	}	
	}
	
	
	
</style>
<!-- Slider -->



<div class="main-bg"></div>
<div class="main-bg-map"></div>
<div class="mai-container">
	<div class="container">
		<div class="row align-items-center" style="min-height: calc(100vh - 140px)">
			<div class="col-lg-7">
				<div class="page-title">
					<div class="top-head-1"><img alt="Хиконикс" src="/public/images/logo.png"></div>
					<div class="top-head-2">Официальный представитель климатических брендов в России и СНГ</div>
				</div>
				<div class="row top-brand align-items-center">
					<div class="col-3 titul-xk col-sm-3">
						<a href="/kondicionery/aux/">
							<img src="/images/brands/auxair.png">
						</a>
					</div>
					<div class="col-3 titul-xk col-sm-3">
						<a href="/kondicionery/ecoclima/">
							<img src="/images/brands/ecoclima.png">
						</a>
					</div>
					<div class="col-3 titul-xk col-sm-3">
						<a href="/kondicionery/electrolux/">
							<img src="/images/brands/electrolux.png">
						</a>
					</div>
					<div class="col-3 titul-xk col-sm-3">
						<a href="/kondicionery/panasonic/">
							<img src="/images/brands/panasonic.png">
						</a>
					</div>
					<div class="col-3 titul-xk col-sm-3">
						<a href="/ventilyaciya/komfovent/">
							<img src="/images/brands/komfovent.png">
						</a>
					</div>					
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-4">
				<div class="why-us-top">
					<div class="row pl-md-3">
						<div class="row mt-2 mb-2 align-items-center">
							
							<div class="col-4 text-center mb-2">
								<img height="70px" src="/images/index_page/image_partners.png">
							</div>
							<div class="col-8">
								<span class="counter" data-counter-speed="10" data-counter-autoincrement="4550">
									0
								</span> Партнеров <br> на Российском рынке и СНГ
							</div>
							
						</div>
			 			<div class="row mt-2 mb-2 align-items-center">
							
							<div class="col-4 text-center mb-2">
								<img height="70px" src="/images/index_page/image_ingeners.png">
							</div>
							<div class="col-8">
								<span class="counter" data-counter-speed="25" data-counter-autoincrement="350">
									0
								</span> инженеров <br> и специалистов помогут с подбором
							</div>
							
						</div>
						<div class="row mt-2 mb-2 align-items-center">
							<div class="col-4 text-center mb-2">
								<img height="70px" src="/images/index_page/image_word.png">
							</div>
							<div class="col-8">
								<span class="counter" data-counter-speed="35" data-counter-autoincrement="100">
									0
								</span> стран <br> представляют наши бренды
							</div>
						</div>
						<div class="row mt-2 mb-2 align-items-center">
							<div class="col-4 text-center mb-2">
								<img height="70px" src="/images/index_page/image_years.png">
							</div>
							<div class="col-8">
								<span class="counter" data-counter-speed="85" data-counter-autoincrement="27">
									0
								</span>
								лет на оптовом <br> рынке климатической техники
							</div>
						</div>
						<div class="row mt-2 mb-2 align-items-center">
							
							<div class="col-4 text-center mb-2">
								<img height="70px" src="/images/index_page/image_billion.png">
							</div>
							<div class="col-8">
								<span class="counter" data-counter-speed="75" data-counter-autoincrement="20">
									0
								</span> городов-миллионников
							</div>
							
						</div>
						
					</div>		
				</div>	
			</div>
			
			<div class="col-12">
				<div class="text-center">	
					<a class="atuin-btn" id="showPopUp" href="#popup1">Стать партнером</a>			
				</div>			
				
				
				<div class="text-center main-arrow">	
					
					<a href="#mb">				
						<div class="arrow-7">
							<span></span>
							<span></span>
						</div>				
					</a>				
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- Slider -->
<div id="mb"></div>
<diV class="container pt-5">
	<div class="mainSwiper-container">
		<div class="swiper mainSwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="/publications/actions/khellouin-vmeste-s-aux-i-ecoclima-2022/"><img src="/images/slider/action/11-2022/haloween_-7_01-01.jpg"></a>
				</div>
				<div class="swiper-slide">
					<a href="/partner/"><img src="/images/slider/ecoclima.jpg"></a>
				</div>
				<div class="swiper-slide">
					<a href="/partner/"><img src="/upload/iblock/e62/nesx0wvpp93go9rmffhhffr074rcf6q0.jpg"></a>
				</div>
				<div class="swiper-slide">
					<a href="#"><img src="/upload/iblock/8eb/g0xag57nhhks2gh4uw4n44xrb1f7z5rv.jpg"></a>
				</div>	  
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</div>
<!--
	<div class="slider">
    <div class="itcss__wrapper">
	<div class="itcss__items" style="max-height: 390px;">
	<div class="itcss__item">
	<a href="/publications/actions/khellouin-vmeste-s-aux-i-ecoclima-2022/"><img src="/images/slider/action/11-2022/haloween_-7_01-01.jpg" width="100%"></a>
	</div>
	<div class="itcss__item">
	<a href="/partner/"><img src="/images/slider/ecoclima.jpg" width="100%"></a>
	</div>
	<div class="itcss__item">
	<a href="/partner/"><img src="/upload/iblock/e62/nesx0wvpp93go9rmffhhffr074rcf6q0.jpg" width="100%"></a>
	</div>
	<div class="itcss__item">
	<a href="#"><img src="/upload/iblock/8eb/g0xag57nhhks2gh4uw4n44xrb1f7z5rv.jpg" width="100%"></a>
	</div>
	</div>
	<a class="itcss__control itcss__control_prev" href="#" role="button"></a>
	<a class="itcss__control itcss__control_next" href="#" role="button"></a>
    </div>
	</div>
-->
<!-- Imidj-block -->

<!-- Features -->
<div class="container pt-5">
    <h2 class="pb-2">О нас</h2>
    <div class="row pt-3">
        <div class="col-md-6 order-2 order-md-1">
            Компания «Хиконикс» – крупный поставщик климатического оборудования. Более 25 лет мы успешно сотрудничаем с дистрибьюторами и оптовыми покупателями со всей России. Мы – эксклюзивные представители бренда <b>AUX (Аукс) и Ecoclima (Экоклима)</b> на территории РФ. Также предлагаем климатическое оборудование мировых производителей: <b>Electrolux (Электролюкс), Panasonic (Панасоник), Komfovent (Комфовент) и Mitsubishi Electric (Митсубиси)</b>. Эти компании делают акцент на надежности своей продукции, энергоэффективности, современном дизайне и используют инновационный подход при разработке систем вентиляции и кондиционирования воздуха.
		</div>
        <div class="col-md-6 order-1 order-md-2 pb-2">
            <img src="/images/catalog/main-heading-block-image.jpg" width="100%">
		</div>
	</div>
	
	
	<div class="featureSwiper-container">
		<div class="swiper featureSwiper">
			
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="feature col">
						<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
							<div class="main-advantages-slider-item-image" data-bgr-webp="/upload/iblock/0b8/0b89ed2b237646923addeab20a0ce117.png"></div>
							<i class="fa-solid fa-people-group"></i>
						</div>
						<h2>Развитая дистрибьюция</h2>
						<p>Наши кондиционеры продаются в 500 торговых точках 30 городов России - Москва, Химки, Санкт-Петербург и др.</p>
					</div>
				</div>
				<div class="swiper-slide">	
					<div class="feature col">
						<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
							<div class="main-advantages-slider-item-image" data-bgr-webp="/upload/iblock/70a/70a982b811682d85aa23f22fd863fc50.png"></div>
							<i class="fa-solid fa-warehouse"></i>
						</div>
						<h2>Кондиционеры со склада</h2>
						<p>Удобные склады с подъездом для большегрузов. Популярные модели всегда в наличии.</p>
					</div>
				</div>	
				<div class="swiper-slide">		
					<div class="feature col">
						<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
							<div class="main-advantages-slider-item-image" data-bgr-webp="/upload/iblock/b74/b74a43d6a147481cd6a8b656c9f9369d.png"></div>
							<i class="fa-solid fa-truck"></i>
						</div>
						<h2>Доставка по РФ</h2>
						<p>Отправляем товар транспортной компанией во все города РФ. По Москве и МО работает служба доставки.</p>
					</div>
				</div>		
				<div class="swiper-slide">		
					<div class="feature col">
						<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
							<div class="main-advantages-slider-item-image" data-bgr-webp="/upload/iblock/34b/34bd851748c20edcd57062e6aec5248f.png"></div>
							<i class="fa-solid fa-gears"></i>
						</div>
						<h2>Сервисная поддержка</h2>
						<p>Оказываем техническую поддержку по телефону, email и в онлайн-чате.  Обслуживаем по гарантии (от 3 до 5 лет)</p>
					</div>
				</div>	
				<div class="swiper-slide">		
					<div class="feature col">
						<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
							<div class="main-advantages-slider-item-image" data-bgr-webp="/upload/iblock/9d8/9d862657642dd06b59b30c4d80454e69.png"></div>
							<i class="fa-solid fa-user"></i>
						</div>
						<h2>Индивидуальный подбор</h2>
						<p>Инженеры проектного отдела предложат оборудование, которое соответствует всем необходимым критериям.</p>
					</div>
				</div>		
				<div class="swiper-slide">		
					<div class="feature col">
						<div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
							<div class="main-advantages-slider-item-image" data-bgr-webp="/upload/iblock/cb3/cb351e8df1232c843cbf1ac5aed9b7fc.png"></div>
							<i class="fa-solid fa-screwdriver"></i>
						</div>
						<h2>База запчастей</h2>
						<p>Поставляем любые запчасти, которые помогут быстро восстановить работоспособность климатической техники.</p>
					</div>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>	
	</div>	
</div>
<!-- S kem mi rabotaem -->
<div class="container pt-5">
	<div class="description">
		<h2>С кем мы работаем</h2>
		<div class="row pt-3">
			<div class="col-md-6 order-2 order-md-1">
				<p>Партнеры «Хиконикс» покупают надежное климатическое оборудование со скидками, получают доступ к программе кредитования и продают нашу технику на эксклюзивных условиях в своем регионе.</p>
				<p>Мы оказываем партнерам сервисную поддержку, в их распоряжении наш склад запчастей и услуги проектного отдела. Будем рады видеть вас в команде «Хиконикс»!</p>
			</div>
			<div class="col-md-6 order-1 order-md-2 pb-2">
				<img width="100%" src="/local/templates/hiconix/img/partn-small-bg.png" alt="Региональные дистрибьюторы">
			</div>
		</div>	
	</div>
	
	
	<div class="variable-partnership">
		<div class="row">
			<div class="col-6 col-sm-4 col-md-4 col-lg-2">
				<a href="/partner/regionalnye-distribyutory/" class="slide" title="Региональные дистрибьюторы">
					<img src="/upload/iblock/baa/baa79a38ad86ca25a4fef533bbd92048.png" alt="Региональные дистрибьюторы">
					<p>Региональные дистрибьюторы</p>
				</a>
			</div>		
			<div class="col-6 col-sm-4 col-md-4 col-lg-2">	
				
				<a href="/partner/optovye-klimaticheskie-kompanii/" class="slide" title="Оптовые климатические компании">
					<img src="/upload/iblock/686/6864fdb8b96edac6c96ef7a4b87ceca9.png" alt="Оптовые климатические компании">
					<p>Оптовые климатические компании</p>
				</a>
			</div>		
			<div class="col-6 col-sm-4 col-md-4 col-lg-2">	
				<a href="/partner/roznichnye-klimaticheskie-kompanii/" class="slide" title="Розничные климатические компании">
					<img src="/upload/iblock/eb6/eb6d7d24923f0488b749b8ee171efdac.png" alt="Розничные климатические компании">
					<p>Розничные климатические компании</p>
				</a>
			</div>		
			<div class="col-6 col-sm-4 col-md-4 col-lg-2">	
				<a href="/partner/internet-magazin/" class="slide" title="Интернет-магазины">
					<img src="/upload/iblock/c4f/c4f0dd83a3fe6db4b5d6f81f4c9c2619.png" alt="Интернет-магазины">
					<p>Интернет-магазины</p>
				</a>
			</div>		
			<div class="col-6 col-sm-4 col-md-4 col-lg-2">	
				<a href="/partner/inzhiniringovye-kompanii/" class="slide" title="Инжиниринговые компании">
					<img src="/upload/iblock/c0b/c0b18bbd399e547a67772196b8a3a5fb.png" alt="Инжиниринговые компании">
					<p>Инжиниринговые компании</p>
				</a>
			</div>		
			<div class="col-6 col-sm-4 col-md-4 col-lg-2">	
				<a href="/partner/proektnye-organizatsii/" class="slide" title="Проектные организации">
					<img src="/upload/iblock/bf5/bf53f509d0a3706ea79c1ca4287945e2.png" alt="Проектные организации">
					<p>Проектные организации</p>
				</a>
			</div>
		</div>
	</div>
</div>	
<!-- Brands -->
<div class="container pt-5 mb-5">
	<h2 class="pb-2">Официальный представитель климатических брендов:</h2>
	
	<div class="brandSwiper-container">
		<div class="swiper brandSwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide text-center mt-3">
					<a href="/kondicionery/aux/">
						<img src="/images/brands/auxair.png">
					</a>
				</div>
				<div class="swiper-slide text-center mt-3">
					<a href="/kondicionery/ecoclima/">
						<img src="/images/brands/ecoclima.png">
					</a>
				</div>
				<div class="swiper-slide text-center mt-3">
					<a href="/kondicionery/electrolux/">
						<img src="/images/brands/electrolux.png">
					</a>
				</div>
				<div class="swiper-slide text-center mt-3">
					<a href="/kondicionery/panasonic/">
						<img src="/images/brands/panasonic.png">
					</a>
				</div>
				<div class="swiper-slide text-center mt-3">
					<a href="/ventilyaciya/komfovent/">
						<img src="/images/brands/komfovent.png">
					</a>
				</div>
				
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>					
		</div>
	</div>
</div>

<!-- Popular categoryes -->
<div class="container pt-5" style="position: relative;">
	<h2 class="pb-2">Популярные категории</h2>
	<div class="popSwiper-container">
		<div class="swiper popSwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="/kondicionery/bytovye-kondicionery/" style="text-decoration: none; color: black;">
						<div style="width: 100%; height: 150px; color: white; font-weight: bold; background-color: hsl(207, 66%, 38%); border-radius: 20px;">
							<div class="text-center pt-4">
								<img src="/images/categories/bit.png" height="60px">
							</div>
							<div style="position: absolute; width: 60%; bottom: 15px; left: 0; right: 0; margin: auto;">
								<div class="text-center">
									Бытовые кондиционеры
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/polupromyshlennye-kondicionery-optom/" style="text-decoration: none; color: black;">
						<div style="width: 100%; height: 150px; color: white; font-weight: bold; background-color: hsl(207, 66%, 38%); border-radius: 20px;">
							<div class="text-center pt-4">
								<img src="/images/categories/commerc.png" height="60px">
							</div>
							<div style="position: absolute; width: 60%; bottom: 15px; left: 0; right: 0; margin: auto;">
								<div class="text-center">
									Коммерческие кондиционеры
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/vrf-vrv-arv-sistemy/multizonalnye-sistemy-vrf-vrv-arv/" style="text-decoration: none; color: black;">
						<div style="width: 100%; height: 150px; color: white; font-weight: bold; background-color: hsl(207, 66%, 38%); border-radius: 20px;">
							<div class="text-center pt-4">
								<img src="/images/categories/vrf-arv.png" height="60px">
							</div>
							<div style="position: absolute; width: 60%; bottom: 15px; left: 0; right: 0; margin: auto;">
								<div class="text-center">
									Мультизональные системы VRF-VRV-ARV
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/promyshlennoe-oborudovanie/" style="text-decoration: none; color: black;">
						<div style="width: 100%; height: 150px; color: white; font-weight: bold; background-color: hsl(207, 66%, 38%); border-radius: 20px;">
							<div class="text-center pt-4">
								<img src="/images/categories/prom.png" height="60px">
							</div>
							<div style="position: absolute; width: 60%; bottom: 15px; left: 0; right: 0; margin: auto;">
								<div class="text-center">
									Промышленное оборудование
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/ventilyaciya/" style="text-decoration: none; color: black;">
						<div style="width: 100%; height: 150px; color: white; font-weight: bold; background-color: hsl(207, 66%, 38%); border-radius: 20px;">
							<div class="text-center pt-4">
								<img src="/images/categories/vent.png" height="60px">
							</div>
							<div style="position: absolute; width: 60%; bottom: 15px; left: 0; right: 0; margin: auto;">
								<div class="text-center">
									Вентиляция
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>			
		</div>
	</div>
</div>
<!-- Popular categoryes (Daniil)-->
<!--
	<div class="container pt-5" style="position: relative;">
	<h2 class="pb-2">Популярные категории</h2>
	<div>
	<div class="row">
	@foreach ($categories as $category)
	<div class="col-3">
	<a href="{{$category->link}}" style="text-decoration: none; color: black;">
	<div style="width: 100%; height: 150px; color: white; font-weight: bold; background-color: hsl(207, 66%, 38%); border-radius: 20px;">
	<div class="text-center pt-4">
	<img src="{{$category->img_preview_path}}" height="60px">
	</div>
	<div style="position: absolute; width: 60%; bottom: 15px; left: 0; right: 0; margin: auto;">
	<div class="text-center">
	{!!str_replace(" ", " ", $category->title)!!}
	</div>
	</div>
	</div>
	</a>
	</div>
	@endforeach
	</div>
	</div>
</div>-->

<!-- Popular goods -->
<div class="popularProducts container pt-5 mb-5" style="position: relative;">
	<h2 class="pb-2">Популярные товары</h2>
	
	<div class="popprSwiper-container">
		<div class="swiper popprSwiper">
			<div id="popularProducts" class="products swiper-wrapper">
				
				
				
				
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>	
</div>
<!-- Akcii-anons (Daniil)-->
<!--
	<div class="container pt-5">
	<div class="row">
	<div class="col">
	<h2 class="pb-2">Выгодные акции</h2>
	</div>
	<div class="col text-end mt-4">
	<a href="/publications/actions" class="d-inline">смотреть все</a>
	</div>
	</div>
	<div class="row">
	@foreach($actions as $action)
	<div class="col-4">
	<a href="/publications/{{$action->group}}/{{$action->code}}" style="text-decoration: none; color: black;">
	<div style="background: url('/images/products/no-photo.jpeg'); background-position: center; background-size: cover; width: 100%; height: 250px; border-radius: 20px;"></div>
	<div class="action-title" style="min-height: 4rem;">
	{!! mb_substr(trim($action->h1), 0, 54)!!}@if(strlen(trim($action->h1)) > 54)..@endif
	</div>
	<div class="text-muted mt-2">
	{!! trim(mb_substr(strip_tags(htmlspecialchars_decode($action->html)), 0 , 220))!!}..
	</div>
	</a>
	</div>
	@endforeach
	
	</div>
	</div>
-->


<script type="text/javascript">
	let bg = document.querySelector('.main-bg-map');
	window.addEventListener('mousemove', function(e) {
		let x = e.clientX / window.innerWidth;
		let y = e.clientY / window.innerHeight;  
		bg.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
	});		
	document.addEventListener('DOMContentLoaded', async () => {
		let fromCount = 10;
		
		let popBtnLeft = document.querySelector("#popularBtnLeft");
		let popBtnRight = document.querySelector("#popularBtnRight");
		/*
			new ItcSimpleSlider('.slider', {
			loop: true,
			autoplay: true,
			interval: 4000,
			swipe: true,
			});
		*/
		const allCounters = document.querySelectorAll('[data-counter-autoincrement]')
		
		
		const renderCounterValue = (counter, thisValue = 0) => {
			if (thisValue == 0) {
				let thisValue = parseInt(counter.innerText);
			}
			let maxValue = parseInt(counter.dataset.counterAutoincrement);
			let speed = parseInt(counter.dataset.counterSpeed);
			if (thisValue < maxValue) {
				thisValue += 1;
				setTimeout(() => {
					counter.innerText = thisValue;
					renderCounterValue(counter, thisValue);
				}, speed);
			}
			
		}
		
		let popularProducts = null;
		
		allCounters.forEach(counter => {
			renderCounterValue(counter);
		});
		
		async function getProducts()
		{
			let requestURL = `/api/prod/get_popular`;
			const response = await fetch(`${requestURL}`)
			return await response.json();
		}
		
		async function getPopularProducts() {
			await getProducts().then((data) => {
				popularProducts = data.data;
			})
		}
		
		await getPopularProducts();
		
		let productsList = document.querySelector("#popularProducts");
		
		const renderPopularProducts = (from) => {
			productsList.innerHTML = "";
			let toCount = from+10; 
			/*
				const screenWidth = window.outerWidth;
				if (screenWidth > 1199) {
				toCount = from+4;
				} else if ((screenWidth < 1200) && (screenWidth > 991)) {
				toCount = from+3;
				} else if ((screenWidth < 992) && (screenWidth > 767)) {
				toCount = from+2;
				} else {
				toCount = from+1;
				}
			*/
			
			for (let i = fromCount; i < toCount; i++) {
				
				let product = Object.values(popularProducts)[i];
				let productNode = document.createElement('div');
				//productNode.className = 'col-xl-3 col-lg-4 col-md-6 col-sm-12';
				productNode.className = 'swiper-slide';
				productNode.innerHTML = `
				<div class="p-2 mb-3 border product-main" style="min-height: 540px; position: relative;">
				<div class="product-code mb-3">
				Код: ${product.article === null ? "" : product.article}
			</div>
			<div style="position: absolute; columns: 1; top: 10px; right: 20px; z-index: 9999;" id="marketingBadges">
			</div>
			<div class="text-center product-anons-img" style="position:relative;">
				<img id="images" src="${product.images && product.images.length > 0 ? "https://erc.hiconix.ru/storage/" + product.images[0].path + product.images[0].name + "." + product.images[0].extension : "/images/products/no-photo.jpeg"}" loading="lazy" alt="${product.category.product_prefix} ${product.brand.name} ${product.model} ${product.squere ? product.squere : ""} ${product.squere ? "м²" : ""}">
				</div>
				<div class="main-info pt-2">
				<div class="group-name" style="font-size: 12px;">
					${product.category.product_prefix}
				</div>
				<div style="font-size: 15px;">
					<a href="/products/${product.slug}" class="name">${product.brand.name} ${product.model} ${product.squere ? product.squere : ""} ${product.squere ? "м²" : ""}</a>
				</div>
			</div>
			<div class="product-properties">
				<ul id="props">
				</ul>
			</div>
			<div class="mt-3">
				<div id="statuses">
				</div>
			</div>
			<div style="position: absolute; bottom: 10px; width: calc(100% - 20px);">
				<div class="product-price pb-3" style="${product.status == 0 ? `text-decoration:line-through` : ``}">
					${product.text_price == null ? product.ric_current + " руб." : product.text_price}
				</div>
				<div class="product-buttons" style="font-size: 12px; display: flex; position: relative; justify-content: space-between; width: 100%;">
					<div><button class="p-2 px-4 p-info" onclick='location.href="/products/${product.slug}"'>Подробнее</button></div>
					<div><button id="inCartBtn" data-product-id="${product.prodInCart}" class="p-2 px-4 in-cart active" ${product.status == 0 ? `disabled style="cursor: not-allowed;"` : ``}><i class="fas fa-shopping-cart"></i> <span>Добавить</span></button></div>
				</div>    
			</div>
		</div>`;
		
		const inCartBtn = productNode.querySelector('button#inCartBtn');
		const statusNodes = productNode.querySelector('div#statuses');
		
		product.statuses.map(status => {
		statusNodes.innerHTML += status.html;
		if (status.withStock == true) {
		statusNodes.innerHTML += product.stock_html
		}
		});
		
		let props = [];
		
		//images
		const imageNode = productNode.querySelector('#images');
		
		const marketingBadges = productNode.querySelector('#marketingBadges');
		
		if (product.badges.length > 0) {
		let msgHelper;
		
		product.badges.forEach(badge => {
		let badgeNode = document.createElement('div');
		badgeNode.style.position = 'relative';
		badgeNode.style.display = 'block';
		badgeNode.style.width = "64px";
		badgeNode.innerHTML = "";
		if (badge.text_html) {
		badgeNode.innerHTML += badge.text_html;
		}
		badgeNode.innerHTML += `<img src="${badge.img}" style="display: block; z-index: 99999;" width="64px">`;
		
		badgeNode.onmouseover = (e) => {
		let target = e.target;
		
		msgHelper = document.createElement('div');
		msgHelper.className = 'msg-helper';
		msgHelper.innerHTML = badge.title;
		
		document.body.append(msgHelper);
		
		let coords = target.getBoundingClientRect();
		
		let left = coords.left + (target.offsetWidth - msgHelper.offsetWidth) / 2;
		if (left < 0) left = 0;
		
		let top = coords.top - msgHelper.offsetHeight - 5;
		if (top < 0) { 
		top = coords.top + target.offsetHeight + 5;
		}
		
		msgHelper.style.left = left + 'px';
		msgHelper.style.top = top + 'px';
		}
		
		badgeNode.onmouseout = function(e) {
		
		if (msgHelper) {
		msgHelper.remove();
		msgHelper = null;
		}
		
		};
		
		marketingBadges.appendChild(badgeNode);
		})
		}
		
		if (product.images.length > 2) {
			let prodImages = [];
			for (let i = 2; i < product.images.length; i++) {
			prodImages.push('https://erc.hiconix.ru/storage/' + product.images[i].path + product.images[i].name + "." + product.images[i].extension)
			}
			imageNode.dataset.hoverSlides = JSON.stringify(prodImages);
			}
			
			inCartBtn.onclick = () => {
				let inCartBtnText = inCartBtn.querySelector('span');
				addToCart(product.prodInCart.split(','));
				inCartBtnText.innerText = 'Перейти';
				inCartBtn.onclick = () => {
				location.href = "/cart";
				}
				}
				
				let propsList = productNode.querySelector("#props");
				
				props.push({
				title: "Бренд",
				value: product.brand.name
				});
				if ((product.parentCategory == "23" || product.parentCategory == "26" || product.parentCategory == "1") && product.block_type_id !== "3") {
				if (product.squere != 0) {
				props.push({
				title: "Площадь, м<sup>2</sup>",
				value: product.squere
				});
				}
				}
				//anons props
				product.anons_props.forEach(prop => {
				if ((product.parentCategory == "23" || product.parentCategory == "26" || product.parentCategory == "1") && product.block_type_id !== "3") {
				if (prop.property_id == 16) {
				if (prop.property_value && prop.property_value !== "0") {
				props.push({
				title: "Произв. холод, кВт",
				value: prop.property_value
				});
				}
				}
				if (prop.property_id == 27) {
				if (prop.property_value && prop.property_value !== "0") {
				props.push({
				title: "Длина трассы, м",
				value: prop.property_value
				});
				}   
				}
				}
				if ((product.parentCategory == "3" || product.parentCategory == "2") && product.block_type_id !== 3) {
				if (prop.property_id == 16) {
				if (prop.property_value && prop.property_value !== "0") {
				props.push({
				title: "Произв. холод, кВт",
				value: prop.property_value
				});
				}
				}
				if (prop.property_id == 27) {
				if (prop.property_value && prop.property_value !== "0") {
				props.push({
				title: "Длина трассы, м",
				value: prop.property_value
				});
				}
				}
				if (prop.property_id == 26) {
				if (prop.property_value && prop.property_value !== "0") {
				props.push({
				title: "Max. кол-во внутр. блоков",
				value: prop.property_value
				});
				}
				}
				}
				})
				
				props.forEach(prop => {
				let propLi = document.createElement('li');
				propLi.innerHTML = `<span class="prop-name">${prop.title}</span><span class="prop-value">${prop.value}</span>`;
				propsList.appendChild(propLi);
				});
				
				
				productsList.appendChild(productNode);
				}
				}
				
				renderPopularProducts(fromCount);
				
				const renderPopularPlus = () => {
				if (fromCount+5 > 19) {
				fromCount = 0;
				} else {
				fromCount = fromCount+1;
				}
				renderPopularProducts(fromCount);
				}
				
				const renderPopularMinus = () => {
				if (fromCount-1 < 0) {
				fromCount = 16;
				} else {
				fromCount = fromCount-1;
				}
				renderPopularProducts(fromCount);
				}
				
				//popBtnLeft.addEventListener('click', renderPopularMinus);
				//popBtnRight.addEventListener('click', renderPopularPlus);
				});
				
				</script>
				@endsection																																																					