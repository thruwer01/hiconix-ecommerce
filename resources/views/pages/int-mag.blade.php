@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/partner">Стать партнёром</a></li>
            <li class="breadcrumb-item active">Интернет-магазины</li>
        </ol>
    </nav>
</div>

<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать:</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><a href="/partner/regionalnye-distribyutory">Региональные дистрибьюторы</a></li>
				<li><a href="/partner/optovye-klimaticheskie-kompanii">Оптовые климатические компании</a></li>
				<li><a href="/partner/roznichnye-klimaticheskie-kompanii">Розничные климатические компании</a></li>
				<li><span>Интернет-магазины</span></li>
				<li><a href="/partner/inzhiniringovye-kompanii">Инжиниринговые компании</a></li>
				<li><a href="/partner/proektnye-organizatsii">Проектные организации</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="sub-menu d-none d-sm-block">
	<div class="descmenulist">
		<ul>
			<li><a href="/partner/regionalnye-distribyutory">Региональные дистрибьюторы</a></li>
			<li><a href="/partner/optovye-klimaticheskie-kompanii">Оптовые климатические компании</a></li>
			<li><a href="/partner/roznichnye-klimaticheskie-kompanii">Розничные климатические компании</a></li>
			<li><span>Интернет-магазины</span></li>
			<li><a href="/partner/inzhiniringovye-kompanii">Инжиниринговые компании</a></li>
			<li><a href="/partner/proektnye-organizatsii">Проектные организации</a></li>
		</ul>
	</div>
</div>
<div class="text-center mb-2">
<a class="atuin-btn" id="showPopUp" href="#popup1">Стать партнером</a>
</div>
<div class="container">
    <div class="row support-content main-col">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h1>Интернет-магазины</h1>
                    <p class="support-block-inner-item-text">
                        Для интернет-продавцов условия партнерской программы «Хиконикс»
                        предусматривают всестороннюю
                        <a href="https://hiconix.ru/support/">маркетинговую поддержку</a>, в
                        которую входят баннер, модуль для загрузки товаров на сайт магазина,
                        промоматериалы и другие рекламные инструменты.
                    </p>
                </div>
            </div>
        </div>
        <div class="support-inner-content">
            <div class="support-block support-block-1">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon" style="
                        background-image: url(/local/templates/hiconix/img/icon-forklift.svg);
                    "></div>
                                    <div class="support-block-inner-item-text">
                                        Баннер по индивидуальным размерам. Заинтересовывает
                                        покупателей, формирует имидж вашего магазина, обеспечивает
                                        узнаваемость. Специалисты «Хиконикс» предложат для баннера
                                        уникальный дизайн, который будет способствовать развитию
                                        вашего бизнеса, мотивировать посетителей сайта совершать
                                        покупки, оставлять заявки.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon" style="
                        background-image: url(/local/templates/hiconix/img/icon-people.svg);
                    "></div>
                                    <div class="support-block-inner-item-text">
                                        <a
                                            href="https://hiconix.ru/publications/articles/modul-dlya-zagruzki-tovarov-v-internet-magazin/">Модуль
                                            загрузки товаров</a>. Существенно ускоряет и упрощает импорт, а также обновление
                                        сотен товарных позиций с развернутыми техническими
                                        характеристиками. Исключает неточности в описаниях и связанный
                                        с ними риск претензий покупателей.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-6.jpg" style="
                background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-6.jpg.webp?165968230335622);
                "></div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">
                                Преимущества партнерства с «Хиконикс»
                            </div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon" style="
                        background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);
                    "></div>
                                    <div class="support-block-inner-item-text">
                                        Предоставляем базу товарных карточек с фото климатической
                                        техники в высоком разрешении. Вы скачиваете ее и загружаете на
                                        сайт магазина, следуя нашей подробной инструкции по работе с
                                        модулем.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon" style="
                        background-image: url(/local/templates/hiconix/img/icon-approved.svg);
                    "></div>
                                    <div class="support-block-inner-item-text">
                                        После добавления новых товаров каталог вашего магазина
                                        расширится, на его страницах будут созданы новые товарные
                                        позиции. Настройте на свое усмотрение автоматическое изменение
                                        цен и ряда других параметров из базы «Хиконикс». При работе с
                                        сотнями артикулов вы получаете этим существенную экономию
                                        времени.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-7.jpg" style="
                background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-7.jpg.webp?1659682303242804);
                "></div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="ingeneer" class="support-block-title">
                                Как стать партнером в интернет-продажах
                            </div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon" style="
                        background-image: url(/local/templates/hiconix/img/icon-people.svg);
                    "></div>
                                    <div class="support-block-inner-item-text">
                                        Предлагаем торговым организациям интересные схемы
                                        сотрудничества на индивидуальных условиях.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon" style="
                        background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);
                    "></div>
                                    <div class="support-block-inner-item-text">
                                        Став заказчиком-партнером «Хиконикс», вы быстрыми темпами
                                        входите в климатический бизнес, расширяете перспективы
                                        электронной торговли.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon" style="
                        background-image: url(/local/templates/hiconix/img/icon-approved.svg);
                    "></div>
                                    <div class="support-block-inner-item-text">
                                        Заполните онлайн-заявку, наш специалист свяжется с вами для
                                        обсуждения деталей партнерства.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image"
                            data-bgr-webp="/local/templates/hiconix/img/partnership-block-image.jpg" style="
                background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/partnership-block-image.jpg.webp?165968230321946);
                "></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection