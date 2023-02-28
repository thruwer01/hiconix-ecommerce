@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/about">О компании</a></li>
            <li class="breadcrumb-item active" aria-current="page">О нас</li>
		</ol>
	</nav>
</div>
<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать:</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><span>О нас</span></li>
				<li><a href="/publications/news">Новости</a></li>
				<li><a href="/about/licenses">Лицензии</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="sub-menu d-none d-sm-block">
	<div class="descmenulist">
		<ul>
			<li><span>О нас</span></li>
			<li><a href="/publications/news">Новости</a></li>
			<li><a href="/about/licenses">Лицензии</a></li>
		</ul>
	</div>
</div>



<div class="container">
	<div class="partnership-content main-col">
		<div class="page-title">
			<div class="row">
				<div class="col-12">
					<h1>О нас</h1>
				</div>
			</div>
		</div>
		<div class="partnership-inner-content">
			<div class="partnership-block">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="partnership-block-content">
							<p>С 1995 года мы работаем на российском рынке в качестве крупного дистрибьютора климатической техники и предлагаем надежное оборудование от ведущих мировых производителей: <strong>AUX (Аукс), Ecoclima (Экоклима), Electrolux (Электролюкс), Panasonic (Панасоник), Komfovent (Комфовент) и Mitsubishi Electric (Митсубиси). </strong> Они делают акцент на долговечности, энергоэффективности и современном дизайне продукции. </p>
							<p>Через сеть дилеров мы реализуем свою продукцию более чем в 500 точках продаж в 30 городах России (Москве, Санкт-Петербурге, Химках, Краснодаре, Ростове-на-Дону, Екатеринбурге, Новосибирске и других), а также предлагаем индивидуальный подбор систем кондиционирования и вентиляции.</p>
							<p>Привлекаем к работе <a href="https://hiconix.ru/partner/">Партнеров</a> – для них мы подготовили специальные условия сотрудничества, сервисную и техническую поддержку, поставку запчастей, услуги штатных проектировщиков и многое другое. </p>
							<p>Команда специалистов компании «Хиконикс» нацелена на партнерские отношения и реализацию крупных совместных проектов. Вы можете быть уверены в нас: мы располагаем большим складом оборудования, всегда готовы прийти на помощь в вопросах сервисной поддержки и оказать содействие в выборе техники под запросы, потребности и ценовые ожидания ваших клиентов. </p>
							
							
						</div>
					</div>
					<div class="col-12 col-md-6 hide_mobile">
						<div class="partnership-block-image" data-bgr-webp="/local/templates/hiconix/img/partnership-block-image.jpg" style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/partnership-block-image.jpg.webp?165968230321946);">
						</div>
					</div>
				</div>
				
				<div class="partnership-block-title">Преимущества работы с нами</div>
				<div class="partnership-block-text">
					
					<div class="partnership-block-inner-item">
						<div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);"></div>
						<div class="partnership-block-inner-item-content">
							<div class="partnership-block-inner-item-title">Широкий ассортимент оборудования</div>
							<div class="partnership-block-inner-item-text">Мы осуществляем прямые поставки оборудования в Россию что гарантирует вам низкую цену</div>
						</div>
					</div>
					<div class="partnership-block-inner-item">
						<div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
						<div class="partnership-block-inner-item-content">
							<div class="partnership-block-inner-item-title">Развитая дилерская сеть</div>
							<div class="partnership-block-inner-item-text">Популярные модели всегда в наличии на складе с удобным проездом для большегрузов</div>
						</div>
					</div>
					<div class="partnership-block-inner-item">
						<div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);"></div>
						<div class="partnership-block-inner-item-content">
							<div class="partnership-block-inner-item-title">Федеральная складская программа</div>
							<div class="partnership-block-inner-item-text">Популярные модели всегда в наличии на складе с удобным проездом для большегрузов</div>
						</div>
					</div>
					<div class="partnership-block-inner-item">
						<div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);"></div>
						<div class="partnership-block-inner-item-content">
							<div class="partnership-block-inner-item-title">Техническая и маркетинговая поддержка</div>
							<div class="partnership-block-inner-item-text">Популярные модели всегда в наличии на складе с удобным проездом для большегрузов</div>
						</div>
					</div>
					<div class="partnership-block-inner-item">
						<div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);"></div>
						<div class="partnership-block-inner-item-content">
							<div class="partnership-block-inner-item-title">Широкий ассортимент оборудования</div>
							<div class="partnership-block-inner-item-text">Мы осуществляем прямые поставки оборудования в Россию что гарантирует вам низкую цену</div>
						</div>
					</div>
					<div class="partnership-block-inner-item">
					<div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
					<div class="partnership-block-inner-item-content">
				<div class="partnership-block-inner-item-title">Развитая диллерская сеть</div>
			<div class="partnership-block-inner-item-text">Популярные модели всегда в наличии на складе с удобным проездом для большегрузов</div>
			</div>
				</div>
				</div>
				
				
				
				
				
				
			</div>
		</div>
	</div>
</div>
</div>
@endsection