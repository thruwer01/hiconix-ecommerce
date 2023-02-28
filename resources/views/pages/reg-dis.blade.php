@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/partner">Стать партнёром</a></li>
            <li class="breadcrumb-item active">Региональные дистрибьюторы</li>
        </ol>
    </nav>
</div>

<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать:</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><span>Региональные дистрибьюторы</span></li>
				<li><a href="/partner/optovye-klimaticheskie-kompanii">Оптовые климатические компании</a></li>
				<li><a href="/partner/roznichnye-klimaticheskie-kompanii">Розничные климатические компании</a></li>
				<li><a href="/partner/internet-magazin">Интернет-магазины</a></li>
				<li><a href="/partner/inzhiniringovye-kompanii">Инжиниринговые компании</a></li>
				<li><a href="/partner/proektnye-organizatsii">Проектные организации</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="sub-menu d-none d-sm-block">
	<div class="descmenulist">
		<ul>
			<li><span>Региональные дистрибьюторы</span></li>
			<li><a href="/partner/optovye-klimaticheskie-kompanii">Оптовые климатические компании</a></li>
			<li><a href="/partner/roznichnye-klimaticheskie-kompanii">Розничные климатические компании</a></li>
			<li><a href="/partner/internet-magazin">Интернет-магазины</a></li>
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
                    <h1>Региональные дистрибьюторы</h1>
                    <p class="support-block-inner-item-text">Сотрудничаем с дистрибьюторами во всех регионах России на
                        взаимовыгодных условиях комиссии. Партнеры получают эксклюзивное право без капиталовложений и от
                        своего имени продавать климатическую технику выбранного бренда, с соблюдением условий логистики с
                        нашей стороны.
                    </p>
                </div>
            </div>
        </div>
        <div class="support-inner-content">
            <div class="support-block support-block-1">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Схема работы с дистрибьюторами</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Бесплатно предоставляем оборудование на
                                        реализацию.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Вы размещаете и храните технику на своем
                                        складе до момента продажи.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Реализуете на свободных от конкуренции
                                        условиях (опт, розница).</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Участие в бонусной программе – получайте
                                        дополнительный доход по результатам годовых продаж.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Остатки оборудования, которые не продали, в
                                        конце сезона можете сдать нам обратно.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-1.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-1.jpg.webp?165968230371978);">

                        </div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Преимущества для партнера-дистрибьютора</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Рост товарооборота при минимуме финансовых
                                        вложений. Вы избавлены от необходимости замораживать крупные суммы средств при
                                        создании складских запасов.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Покупатели довольны. Все популярные модели
                                        техники всегда у вас на складе и доступны для заказа. Клиенту не нужно ждать неделю,
                                        чтобы купить у вас сразу три кондиционера.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Всесторонняя <a
                                            href="https://hiconix.ru/support/marketing/">маркетинговая поддержка</a>.
                                        Совместно с партнерами разрабатываем рекламные проекты (бюджет 50/50), готовим
                                        различные информационные материалы.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Полная <a
                                            href="https://hiconix.ru/support/tech/">техническая поддержка</a>. Помогаем <a
                                            href="https://hiconix.ru/support/ingeneer/">в проектировании</a>, выборе и
                                        диагностике оборудования, предоставляем гарантийный сервис, поставляем запчасти со
                                        склада, под заказ.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Оперативность обработки ваших заказов. Для
                                        каждого партнера у нас персональный менеджер и индивидуальный подход. <a
                                            href="https://hiconix.ru/support/delivery/">Отправляем со складов</a> в течение
                                        1–2 дней.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Большой ассортимент доступного оборудования.
                                        Вы сами выбираете нишу и можете закупать по каталогам в любых объемах и с удобной
                                        вам периодичностью.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-2.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-2.jpg.webp?165968230345074);">

                        </div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="ingeneer" class="support-block-title">Как стать дистрибьютором «Хиконикс»</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Предложение действует для физических и
                                        юридических лиц, которые занимается продажей, монтажом и проектированием систем
                                        кондиционирования.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text"><a
                                            href="https://hiconix.ru/partner/">Свяжитесь с нами</a>, будем рады обсудить
                                        индивидуальные условия сотрудничества.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image"
                            data-bgr-webp="/local/templates/hiconix/img/partnership-block-image.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/partnership-block-image.jpg.webp?165968230321946);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection