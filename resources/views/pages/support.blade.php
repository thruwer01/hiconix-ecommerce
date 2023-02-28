@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active">Сервис и поддержка</li>
        </ol>
    </nav>
</div>

<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать:</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><a href="/support/marketing/">Маркетинговая поддержка</a></li>
				<li><a href="/support/tech/">Техническая поддержка</a></li>
				<li><a href="/support/ingeneer/">Проектная поддержка</a></li>
				<li><a href="/support/delivery/">Доставка</a></li>
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
				<li><a href="/support/delivery/">Доставка</a></li>
		</ul>
	</div>
</div>
<div class="text-center mb-2">
<a class="atuin-btn" id="showPopUp" href="#popup1">Стать партнером</a>
</div>

<div class="container">
    <div class="row support-content main-col">
        <div class="col-12 col-md-12">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h1>Поддержка</h1>
                    </div>
                </div>
            </div>
            <div class="support-inner-content">
                <div class="support-block support-block-1">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="support-block-content">
                                <div id="marketing" class="support-block-title">Маркетинговая поддержка</div>
                                <div class="support-block-text">
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Поможем продвижению интернет-магазина:
                                            выгрузим информацию для карточек товаров, предоставим фотографии климатической
                                            техники в высоком разрешении. <a
                                                href="https://hiconix.ru/publications/news/razdacha-informatsii-o-tovarakh-dlya-internet-magazinov/"
                                                class="publications-item-more">ОТПРАВИТЬ ЗАЯВКУ НА ИНТЕГРАЦИЮ ТОВАРОВ AUX
                                                ECOCLIMA ELECTROLUX</a></div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-people.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Поможем подготовить рекламные материалы:
                                            каталоги, сувенирную продукцию, брошюры и другие.</div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Поможем организовать презентации и другие
                                            промомероприятия.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="support-block-image"
                                data-bgr-webp="/local/templates/hiconix/img/support-block-image-1.jpg"
                                style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/support-block-image-1.jpg.webp?166073062384695);">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="support-block support-block-2">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="support-block-content">
                                <div id="tech" class="support-block-title">Техническая поддержка</div>
                                <div class="support-block-text">
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Выполним диагностику и отремонтируем
                                            оборудование.</div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-people.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Проконсультируем и оперативно ответим на
                                            вопросы по телефону <a href="tel:84957772366">+7 (495) 777-23-66</a>.</div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">У клиентов в Москве и Московской области
                                            проведем диагностику и устраним проблемы в работе оборудования непосредственно
                                            на месте.</div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Предоставим необходимые запчасти со
                                            склада или под заказ.</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="support-block-image"
                                data-bgr-webp="/local/templates/hiconix/img/support-block-image-2.jpg"
                                style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/support-block-image-2.jpg.webp?165968230338960);">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="support-block support-block-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="support-block-content">
                                <div id="ingeneer" class="support-block-title">Проектная поддержка</div>
                                <div class="support-block-text">
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Спроектируем систему кондиционирования
                                            для ваших клиентов.</div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-people.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Подберем решение, оптимальное по
                                            стоимости и функциональности.</div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Выполним аудит вашего проекта и дадим
                                            экспертную оценку его рациональности.</div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Предложим альтернативное оборудование
                                            наших брендов взамен обозначенного в старом проекте.</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="support-block-image"
                                data-bgr-webp="/local/templates/hiconix/img/support-block-image-3.jpg"
                                style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/support-block-image-3.jpg.webp?165968230339726);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="support-block support-block-4">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="support-block-content">
                                <div id="delivery" class="support-block-title">Доставка</div>
                                <div class="support-block-text">
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">Компания «Хиконикс» доставляет
                                            оборудование в любой регион и город РФ без задержек. Выберите транспортную
                                            компанию с подходящими условиями работы или воспользуйтесь услугами нашего
                                            постоянного ответственного партнера.</div>
                                    </div>
                                    <div class="support-block-inner-item">
                                        <div class="support-block-inner-item-icon"
                                            style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                        </div>
                                        <div class="support-block-inner-item-text">По Москве и Московской области товар,
                                            купленный у компании «Хиконикс», оперативно доставит наша служба доставки.
                                            Доверьтесь нам и получите климатическую технику на любой объект в удобное для
                                            вас время. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/delivery-image.jpg"
                                style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/delivery-image.jpg.webp?165968230318474);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection