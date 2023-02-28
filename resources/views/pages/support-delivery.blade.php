@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/support/">Сервис и поддержка</a></li>
            <li class="breadcrumb-item active">Доставка</li>
		</ol>
	</nav>
</div>

<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><a href="/support/marketing/">Маркетинговая поддержка</a></li>
				<li><a href="/support/tech/">Техническая поддержка</a></li>
				<li><a href="/support/ingeneer/">Проектная поддержка</a></li>
				<li><span>Доставка</span></li>
			</ul>
		</div>
	</div>
</div>

<div class="sub-menu d-none d-sm-block">
	<div class="descmenulist">
		<ul>
				<li><a href="/support/marketing/">Маркетинговая поддержка</a></li>
				<li><a href="/support/tech/">Техническая поддержка</a></li>
				<li><a href="/support/ingeneer/">Проектная поддержка</a></li>
				<li><span>Доставка</span></li>
		</ul>
	</div>
</div>


<div class="container">
    <div class="page-title">
        <div class="row">
            <div class="col-12">
                <h1>Доставка</h1>
				<div class="row">
				<div class="col-md-8">
                <p>Компания «Хиконикс» доставляет климатическую технику по Москве, Московской области, а также в любой
                    регион и город России. У нас своя курьерская служба с новым автотранспортом, мы сотрудничаем с надежными
				перевозчиками, поэтому клиенты получают оборудование в короткие сроки.</p>				
				</div>
				<div class="col-md-4 mb-3">
					 <img src="/upload/support-ingeneer.jpg" data-webp-src="/upload/support-ingeneer.jpg"
				alt="Доставка по Москве, Московской области, а также в любой регион и город России">
				</div>
				</div>
				
                <h2>Как работает наша служба доставки</h2>
                <ul>
                    <li>Вместе с клиентом менеджеры подбирают оптимальный вариант отправки товара. Покупатели в Москве или
                        области могут воспользоваться услугой самовывоза – забрать продукцию с нашего склада. Возможен и
					другой вариант – получить технику с курьером.</li>
                    <li>Клиенты из регионов выбирают транспортную компанию с подходящими условиями работы.</li>
                    <li>В ближайшие 1–2 дня оборудование отправят в ваш город.</li>
				</ul>				
               

                <h2>Преимущества сотрудничества с нами</h2>
                <ul>
                    <li>Бесплатная доставка по Москве при любом объеме заказа.</li>
                    <li>Сроки доставки нашей курьерской службой – 1–2 дня.</li>
                    <li>Ответственные, опытные водители и вежливые курьеры, которые прошли инструктаж по транспортировке
					габаритной и тяжеловесной продукции, требующей бережного отношения.</li>
                    <li>Автопарк регулярно обновляется, машины проходят техосмотры, служба доставки работает без простоев.
					</li>
                    <li>Мы сотрудничаем с любыми транспортными компаниями на территории Москвы.</li>
                    <li>Работаем с ведущими российскими перевозчиками ПЭК и «Деловые линии». В случае выбора этих компаний
					готовы предложить льготные условия отправки.</li>
                    <li>Транспортируем товар любого размера и веса.</li>
                    <li>Наши консультанты заблаговременно сориентируют вас по стоимости услуги при сотрудничестве с
					выбранным перевозчиком.</li>
				</ul>
                <p>Если качественная климатическая техника нужна оперативно, оформляйте заказ, менеджер перезвонит и
				подберет для вас оптимальный вариант доставки. </p>
			</div>
		</div>
	</div>
</div>
@endsection