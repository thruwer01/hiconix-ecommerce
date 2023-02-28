@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/partner">Стать партнёром</a></li>
            <li class="breadcrumb-item active">Инжиниринговые компании</li>
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
				<li><a href="/partner/internet-magazin">Интернет-магазины</a></li>
				<li><span>Инжиниринговые компании</span></li>
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
			<li><a href="/partner/internet-magazin">Интернет-магазины</a></li>
			<li><span>Инжиниринговые компании</span></li>
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
                    <h1>Инжиниринговые компании</h1>
                    <p class="support-block-inner-item-text">Постоянным заказчикам техники «Хиконикс», которые
                        специализируются на инженерно-технических услугах, предоставляем всестороннюю поддержку в рамках
                        индивидуальной партнерской программы. Условия участия зависят от объемов и периодичности закупок,
                        особенностей поставок и других факторов.
                    </p>
                </div>
            </div>
        </div>
        <div class="support-inner-content">
            <div class="support-block support-block-1">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Преимущества партнерства в инжиниринге</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Техподдержка. Проводим <a
                                            href="https://hiconix.ru/support/tech/">диагностику и ремонт</a> всей
                                        поставляемой климатической техники. Квалифицированные специалисты быстро устраняют
                                        функциональные и конструктивные неполадки с помощью запчастей с нашего склада. В
                                        любой момент можете получить консультацию инженера «Хиконикс» по телефону.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text"><a
                                            href="https://hiconix.ru/publications/articles/modul-dlya-zagruzki-tovarov-v-internet-magazin/">Помощь
                                            в </a><a href="https://hiconix.ru/support/ingeneer/">разработке проекта</a>.
                                        Наши опытные проектировщики проконсультируют по всем вопросам проектирования,
                                        помогут на самых сложных его участках, посоветуют оптимальное решение по
                                        усовершенствованию проекта. Стоимость аудита рассчитываем индивидуально (в ряде
                                        случаев данная услуга бесплатна).</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Бесплатная помощь по замене техники. Если в
                                        вашем проекте устаревшая, низкоэффективная климатическая техника, мы бесплатно
                                        поможем заменить ее на современные аналоги с улучшенными показателями
                                        производительности.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Шеф-монтаж и пуско-наладочные работы.
                                        Установка кондиционеров, сплит-систем, <a
                                            href="https://hiconix.ru/catalog/teplovye-nasosy/montazh-teplovykh-nasosov/"
                                            target="_blank">тепловых насосов</a>, холодильников и другой климатической
                                        техники требует специального оборудования и комплектующих.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-8.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-8.jpg.webp?1659682303448782);">

                        </div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Приглашаем к сотрудничеству</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">«Хиконикс» – надежный партнер для вашего
                                        бизнеса. Заполните заявку онлайн, наш специалист свяжется с вами для согласования
                                        условий сотрудничества.</div>
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