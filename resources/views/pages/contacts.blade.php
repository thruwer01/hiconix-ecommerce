@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Контакты</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="row contacts-content main-col">
        <div class="col-12">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h1>Наши контакты</h1>
                    </div>
                </div>
            </div>
            <div class="contacts-inner-content">
                <div class="contacts-page-heading">
                    <div class="contacts-page-heading-top-wrap">
                        <a href="tel:+74957772366" onclick="ym(17832283, &#39;reachGoal&#39;, &#39;telefon&#39;);"
                            class="contacts-page-item an-tel"> <span class="contacts-page-item-icon"> </span> <span
                                class="contacts-page-item-title an-tel"
                                onclick="ym(17832283, &#39;reachGoal&#39;, &#39;telefon&#39;);">8 (495)777-23-66</span> </a>
                        <a href="mailto:info@hiconix.ru" onclick="ym(17832283, &#39;reachGoal&#39;, &#39;pochta&#39;);"
                            class="contacts-page-item"> <span class="contacts-page-item-icon"> </span> <span
                                class="contacts-page-item-title"
                                onclick="ym(17832283, &#39;reachGoal&#39;, &#39;pochta&#39;);">info@hiconix.ru</span> </a>
                        <!--<a href="mailto:ceo@hiconix.ru" onclick="ym(17832283, 'reachGoal', 'pochta');" class="contacts-page-item"> <span class="contacts-page-item-icon"> </span> <span class="contacts-page-item-title">Написать Генеральному директору: <span class="custom-text">ceo@hiconix.ru</span></span> </a> -->
                    </div>
                    <div class="contacts-page-heading-bottom-wrap">
                        <div class="contacts-page-block">
                            <div class="contacts-page-block-icon">
                            </div>
                            <div class="contacts-page-block-content">
                                <div class="contacts-page-block-title">
                                    Отдел дилерских продаж
                                </div>
                                <a href="mailto:dealer@hiconix.ru"
                                    onclick="ym(17832283, &#39;reachGoal&#39;, &#39;pochta&#39;);"
                                    class="contacts-page-block-link"> <span class="contacts-page-block-link-icon"> </span>
                                    <span class="contacts-page-block-link-title">dealer@hiconix.ru</span> </a>
                            </div>
                        </div>
                        <div class="contacts-page-block">
                            <div class="contacts-page-block-icon">
                            </div>
                            <div class="contacts-page-block-content">
                                <div class="contacts-page-block-title">
                                    Гарантийно-сервисная служба
                                </div>
                                <a href="tel:+74956680832" class="contacts-page-block-link"> <span
                                        class="contacts-page-block-link-icon"> </span> <span
                                        class="contacts-page-block-link-title"
                                        onclick="ym(17832283, &#39;reachGoal&#39;, &#39;telefon&#39;);">8(495) 668-08-32
                                        (доб. 1)</span> </a> <a href="mailto:service@hiconix.ru"
                                    onclick="ym(17832283, &#39;reachGoal&#39;, &#39;pochta&#39;);"
                                    class="contacts-page-block-link"> <span class="contacts-page-block-link-icon"> </span>
                                    <span class="contacts-page-block-link-title">service@hiconix.ru</span> </a>
                            </div>
                        </div>
                        <div class="contacts-page-block">
                            <div class="contacts-page-block-icon">
                            </div>
                            <div class="contacts-page-block-content">
                                <div class="contacts-page-block-title">
                                    Продажа запасных частей
                                </div>
                                <a href="tel:+74956680832" class="contacts-page-block-link"> <span
                                        class="contacts-page-block-link-icon"> </span> <span
                                        class="contacts-page-block-link-title"
                                        onclick="ym(17832283, &#39;reachGoal&#39;, &#39;telefon&#39;);">8(495) 668-08-32
                                        (доб. 2)</span> </a> <a href="mailto:parts@hiconix.ru"
                                    onclick="ym(17832283, &#39;reachGoal&#39;, &#39;pochta&#39;);"
                                    class="contacts-page-block-link"> <span class="contacts-page-block-link-icon"> </span>
                                    <span class="contacts-page-block-link-title">parts@hiconix.ru</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-page-heading-bottom-wrap">
                        <div class="contacts-page-block">
                            <div class="contacts-page-block-icon">
                            </div>
							<div class="contacts-page-adress-item-adress">
								<div class="contacts-page-adress-item-adress-icon"></div>
								<div class="contacts-page-adress-item-adress-content">
									<a href="https://yandex.ru/maps/-/CBFh7-rKwC" rel="nofollow" target="_blank" class="contacts-page-adress-item-adress-title">Офис</a>
									<div class="contacts-page-adress-item-adress-text">
											 г. Химки, ул. Ленинградская, д. 1
									</div>
									<a href="https://yandex.ru/maps/-/CBFh7-rKwC" rel="nofollow" target="_blank" class="contacts-page-adress-item-adress-link">Открыть на Яндекс картах</a> 
									<a href="/local/templates/hiconix/img/map-office.jpeg" onclick="ym(17832283, 'reachGoal', 'shema_proezda');" target="_blank" class="contacts-page-adress-item-adress-link">Скачать схему проезда</a>
									<div class="contacts-page-adress-item-adress-worktime">
										<p>
												 Пн.-Пт. с 9-00 до 18-00, без перерыва
										</p>
										<p>
												 Сб. Вс. - Выходной
										</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="contacts-page-heading-bottom-wrap">
                        <div class="contacts-page-block">
                            <div class="contacts-page-block-icon">
                            </div>
							<div class="contacts-page-adress-item-adress">
								<div class="contacts-page-adress-item-adress-icon">
								</div>
								<div class="contacts-page-adress-item-adress-content">
									<a href="https://yandex.ru/maps/-/CBFlABFG9C" rel="nofollow" target="_blank" class="contacts-page-adress-item-adress-title">Склад "Шереметьево 1"</a>
									<div class="contacts-page-adress-item-adress-text">
											 Около а/п Шереметьево-1 , д, Дубровки
									</div>
									<a href="https://yandex.ru/maps/-/CBFlABFG9C" rel="nofollow" target="_blank" class="contacts-page-adress-item-adress-link">Открыть на Яндекс картах</a> 
									<a href="/local/templates/hiconix/img/map-storage-1.jpg" onclick="ym(17832283, 'reachGoal', 'shema_proezda');" target="_blank" class="contacts-page-adress-item-adress-link">Скачать схему проезда</a>
									<div class="contacts-page-adress-item-adress-worktime">
										<p>
												 Пн.-Пт. с 8-00 до 18-00, без перерыва
										</p>
										<p>
												 Сб. Вс. - Выходной
										</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="contacts-page-heading-bottom-wrap">
                        <div class="contacts-page-block">
                            <div class="contacts-page-block-icon">
                            </div>
							<div class="contacts-page-adress-item-adress">
								<div class="contacts-page-adress-item-adress-icon">
								</div>
								<div class="contacts-page-adress-item-adress-content">
									<a href="https://yandex.ru/maps/-/CBRDfRASlD" rel="nofollow" target="_blank" class="contacts-page-adress-item-adress-title">Склад "Шереметьево 2"</a>
									<div class="contacts-page-adress-item-adress-text">
											 Около а/п Шереметьево, рядом с грузовым терминалом Sheremetevo Cargo
									</div>
									<a href="https://yandex.ru/maps/-/CBRDfRASlD" rel="nofollow" target="_blank" class="contacts-page-adress-item-adress-link">Открыть на Яндекс картах</a> 
									<a href="/local/templates/hiconix/img/map-storage-2.jpg" onclick="ym(17832283, 'reachGoal', 'shema_proezda');" target="_blank" class="contacts-page-adress-item-adress-link">Скачать схему проезда</a>
									<div class="contacts-page-adress-item-adress-worktime">
										<p>
												 Пн.-Пт. с 8-00 до 17-00, без перерыва
										</p>
										<p>
												 Сб. Вс. - Выходной
										</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="contacts-page-heading-bottom-wrap">
                        <div class="contacts-page-block">
                            <div class="contacts-page-block-icon">
                            </div>
							<div class="contacts-page-adress-item-adress">
								<div class="contacts-page-adress-item-adress-icon">
								</div>
								<div class="contacts-page-adress-item-adress-content">
									<a href="https://yandex.ru/maps/-/CBFlAYHicC" rel="nofollow" target="_blank" class="contacts-page-adress-item-adress-title">Техцентр</a>
									<div class="contacts-page-adress-item-adress-text">
											 г. Химки, ул. 9 Мая, д.17
									</div>
									<a href="https://yandex.ru/maps/-/CBFlAYHicC" rel="nofollow" target="_blank" class="contacts-page-adress-item-adress-link">Открыть на Яндекс картах</a> <a href="/local/templates/hiconix/img/map-techcentr.jpg" onclick="ym(17832283, 'reachGoal', 'shema_proezda');" target="_blank" class="contacts-page-adress-item-adress-link">Скачать схему проезда</a>
									<div class="contacts-page-adress-item-adress-worktime">
										<p>
												 Пн.-Пт. с 9-00 до 18-00, без перерыва
										</p>
										<p>
												 Сб. Вс. - Выходной
										</p>
									</div>
								</div>
							</div>
						</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection