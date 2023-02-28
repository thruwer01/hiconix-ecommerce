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
                </div>
            </div>
        </div>
    </div>
</div>



<link rel="stylesheet" href="/local/templates/hiconix/partners/partners.css">



<div class="contacts-top d-none d-lg-block">
	<div class="contacts-top-tabs">
		<a href="/contacts/">Контакты Хиконикс</a>
		<a class="active" href="/partners/">Наши партнёры</a>
	</div>
	<a href="/partner/" class="contacts-top-partners">Стать партнёром</a>
</div>

<div class="partners">
	<div class="container~">
		<div class="row">
			<div class="col-xs-12 col-lg-5">
				
				<div class="partners-title d-none d-lg-block">Партнёры «Хиконикс» по всей России:</div>
				
				<input type="hidden" value="" id="geoCity">
				
				<div class="partners-filter-top d-lg-none">
					<div class="partners-filter-top-title">Наши партнеры</div>
					<div class="partners-filter-top-arrow" id="partnersToggle"></div>
					<div class="partners-filter-top-text" id="cityText">Москва</div>
					<div class="partners-filter-top-text" id="cityBrand">Бренды: 0</div>
				</div>
				
				<div class="partners-filter d-none d-lg-block">
					<div class="container~">
						<div class="row">
							<div class="col-xs-12 col-lg-7">
								<div class="partners-filter-block">
									<div class="d-none d-lg-block partners-filter-title">Выберите населенный пункт<!-- (определенение города: )--></div>
									<!-- 															<select class="partners-filter-input" name="" id="city">
										<option value="">Вся Россия</option>
										<option value="Владивосток">Владивосток</option>
										<option value="Воронеж">Воронеж</option>
										<option value="Екатеринбург">Екатеринбург</option>
										<option value="Казань">Казань</option>
										<option value="Калининград">Калининград</option>
										<option value="Краснодар">Краснодар</option>
										<option value="Махачкала">Махачкала</option>
										<option value="Москва">Москва</option>
										<option value="Московская область">Московская область</option>
										<option value="Нижний Новгород">Нижний Новгород</option>
										<option value="Новороссийск">Новороссийск</option>
										<option value="Одинцово">Одинцово</option>
										<option value="Пермь">Пермь</option>
										<option value="Ростов-на-дону">Ростов-на-дону</option>
										<option value="Самара">Самара</option>
										<option value="Санкт-Петербург">Санкт-Петербург</option>
										<option value="Саратов">Саратов</option>
										<option value="Сочи">Сочи</option>
										<option value="Ставрополь">Ставрополь</option>
										<option value="Тюмень">Тюмень</option>
										<option value="Химки">Химки</option>
										<option value="Ярославль">Ярославль</option>
									</select> -->
									<div class="filter-wrapper filter-city-wrapper">
										<input type="text" id="city" placeholder="Поиск по городу" value="Вся Россия">
										<div class="filter-list filter-city-list">
											<div class="filter-element filter-city-element">Вся Россия</div>
											<div class="filter-element filter-city-element">Владивосток</div>
											<div class="filter-element filter-city-element">Воронеж</div>
											<div class="filter-element filter-city-element">Екатеринбург</div>
											<div class="filter-element filter-city-element">Казань</div>
											<div class="filter-element filter-city-element">Калининград</div>
											<div class="filter-element filter-city-element">Краснодар</div>
											<div class="filter-element filter-city-element">Махачкала</div>
											<div class="filter-element filter-city-element">Москва</div>
											<div class="filter-element filter-city-element">Московская область</div>
											<div class="filter-element filter-city-element">Нижний Новгород</div>
											<div class="filter-element filter-city-element">Новороссийск</div>
											<div class="filter-element filter-city-element">Одинцово</div>
											<div class="filter-element filter-city-element">Пермь</div>
											<div class="filter-element filter-city-element">Ростов-на-дону</div>
											<div class="filter-element filter-city-element">Самара</div>
											<div class="filter-element filter-city-element">Санкт-Петербург</div>
											<div class="filter-element filter-city-element">Саратов</div>
											<div class="filter-element filter-city-element">Сочи</div>
											<div class="filter-element filter-city-element">Ставрополь</div>
											<div class="filter-element filter-city-element">Тюмень</div>
											<div class="filter-element filter-city-element">Химки</div>
											<div class="filter-element filter-city-element">Ярославль</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-lg-5">
								<div class="partners-filter-block">
									<div class="d-none d-lg-block partners-filter-title">Выберите бренд</div>
									<!-- 															<select multiple class="partners-filter-input" name="" id="brand">
										<option value="">Все бренды</option>
										<option value="AUX">AUX</option>
										<option value="Electrolux">Electrolux</option>
										<option value="Komfovent">Komfovent</option>
										<option value="Mitsubishi Electric">Mitsubishi Electric</option>
									</select> -->
									<div class="filter-wrapper filter-brand-wrapper">
										<input type="text" id="brand" placeholder="Отметьте нужные" value="Любой бренд">
										<div class="filter-list filter-brand-list">
											<label class="filter-element filter-brand-element">
												<input type="checkbox">
												<span>AUX</span>
											</label>
											<label class="filter-element filter-brand-element">
												<input type="checkbox">
												<span>Electrolux</span>
											</label>
											<label class="filter-element filter-brand-element">
												<input type="checkbox">
												<span>Komfovent</span>
											</label>
											<label class="filter-element filter-brand-element">
												<input type="checkbox">
												<span>Mitsubishi Electric</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="d-lg-none col-xs-12 col-sm-12">
								<a href="/partner/" class="contacts-top-partners">Стать партнёром</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-xs-12 col-lg-7">
				<div class="contacts-page-map-block" id="YMapsID">
					<div class="map-overlay">
						<span>Перемещайте карту<br>двумя пальцами<br>
							<i class="overlayAgree">Понятно</i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-lg-5">
				<div class="partners-list">
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Хиконикс СПб</div>
							<div class="partners-element-address">г. Санкт-Петербург , ул.Решетникова, дом 15. офис 505</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/a98/a9873a2bd4d6695710746d1f259a4b86.png.webp?16596823011500" data-webp-src="/upload/iblock/a98/a9873a2bd4d6695710746d1f259a4b86.png" alt="Хиконикс СПб">
								</div>
								<div class="partners-big-text">
									<span>Хиконикс СПб</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Санкт-Петербург , ул.Решетникова, дом 15. офис 505</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(812)300-90-90</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@hiconix-spb.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://www.hiconix-spb.ru" rel="nofollow"><span>http://www.hiconix-spb.ru</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Виктел-Самара</div>
							<div class="partners-element-address">г. Самара ул. Авроры, д.63 (угол Партизанской), 1 этаж</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/512/5123f94aa8ea8d0ddb6767a1f95e448a.png.webp?16596823023406" data-webp-src="/upload/iblock/512/5123f94aa8ea8d0ddb6767a1f95e448a.png" alt="Виктел-Самара">
								</div>
								<div class="partners-big-text">
									<span>Виктел-Самара</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Самара ул. Авроры, д.63 (угол Партизанской), 1 этаж</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(846)379-53-53</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>63@victel63.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.victel63.ru/" rel="nofollow"><span>https://www.victel63.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Сплит-64</div>
							<div class="partners-element-address">г. Саратов</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Сплит-64</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Саратов</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(8452)40-55-53</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>split-64@yandex.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://www.split-64.ru" rel="nofollow"><span>http://www.split-64.ru</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">АБСОЛЮТ</div>
							<div class="partners-element-address">г. Сочи ул. Пластунская, 81, БЦ &quot;ГРАНД&quot;, 2 этаж</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/4f7/4f7bb8719acad4ea52958acd8e82935b.jpg.webp?16596823029306" data-webp-src="/upload/iblock/4f7/4f7bb8719acad4ea52958acd8e82935b.jpg" alt="АБСОЛЮТ">
								</div>
								<div class="partners-big-text">
									<span>АБСОЛЮТ</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Сочи ул. Пластунская, 81, БЦ &quot;ГРАНД&quot;, 2 этаж</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(967)696-97-70, +7(967)323-39-99</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>absclimat@mail.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://teploholodsochi.ru/" rel="nofollow"><span>https://teploholodsochi.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Амегаклимат</div>
							<div class="partners-element-address">г. Ставрополь ул.Тухачевского, 7а, 2 этаж</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/6e3/6e3155fe60edfc0ad6e8e0fab398f958.png.webp?1659682302802" data-webp-src="/upload/iblock/6e3/6e3155fe60edfc0ad6e8e0fab398f958.png" alt="Амегаклимат">
								</div>
								<div class="partners-big-text">
									<span>Амегаклимат</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Ставрополь ул.Тухачевского, 7а, 2 этаж</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(962)402-64-64, +7(8652)94-40-94</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@amegaklimat.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://amegaklimat.ru/" rel="nofollow"><span>https://amegaklimat.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Климат ДВ</div>
							<div class="partners-element-address">г. Владивосток ул. Днепровская, 98Д</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Климат ДВ</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Владивосток ул. Днепровская, 98Д</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(423)209-06-06, +7(908)988-03-87</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>climate-dv@mail.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://www.klimat-dv.ru" rel="nofollow"><span>http://www.klimat-dv.ru</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Компания Айвенго</div>
							<div class="partners-element-address">г. Воронеж, ул. Урицкого, 92 (вход с ул. Варейкиса)</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Компания Айвенго</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Воронеж, ул. Урицкого, 92 (вход с ул. Варейкиса)</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(473)22-11-000, +7(920)467-74-47</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>567251@mail.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="" rel="nofollow"><span></span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Вента проф</div>
							<div class="partners-element-address">Екатеринбург</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/142/142e7eec0ecc523b76b3e4afd5fc6725.png.webp?16596823011738" data-webp-src="/upload/iblock/142/142e7eec0ecc523b76b3e4afd5fc6725.png" alt="Вента проф">
								</div>
								<div class="partners-big-text">
									<span>Вента проф</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Екатеринбург</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(343)319-48-04</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>venta@ventaprof.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://ventaprof.ru" rel="nofollow"><span>http://ventaprof.ru</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">ИнтерСофт</div>
							<div class="partners-element-address">г. Казань, ул.Гагарина, д. 28Б</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>ИнтерСофт</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Казань, ул.Гагарина, д. 28Б</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (843) 211-78-33</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>mail@gc-intersoft.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://gc-intersoft.ru" rel="nofollow"><span>http://gc-intersoft.ru</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Альтернативные Климатические Решения</div>
							<div class="partners-element-address">г. Калининград ул. Гаражная, 2</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Альтернативные Климатические Решения</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Калининград ул. Гаражная, 2</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(4012)52-77-72</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>sales@akr39.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="" rel="nofollow"><span></span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">t-al.ru</div>
							<div class="partners-element-address">г. Москва, ул. Самуила Маршака, д. 8</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/fff/ffff58799bb3460cc936bfc1490460b9.png.webp?16596823021394" data-webp-src="/upload/iblock/fff/ffff58799bb3460cc936bfc1490460b9.png" alt="t-al.ru">
								</div>
								<div class="partners-big-text">
									<span>t-al.ru</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Москва, ул. Самуила Маршака, д. 8</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (495) 776-38-43</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@t-al.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://t-al.ru/" rel="nofollow"><span>https://t-al.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Арктика</div>
							<div class="partners-element-address">Санкт-Петербург, Разъезжая ул., д. 12</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/ba6/ba6e6e34e4130cdaeaffb3e5bf5fdf2e.png.webp?16596823022486" data-webp-src="/upload/iblock/ba6/ba6e6e34e4130cdaeaffb3e5bf5fdf2e.png" alt="Арктика">
								</div>
								<div class="partners-big-text">
									<span>Арктика</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Санкт-Петербург, Разъезжая ул., д. 12</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8 (812) 441-35-30</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>arktika@spb-arktika.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://spb-arktika.ru/" rel="nofollow"><span>http://spb-arktika.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Ваш Климат</div>
							<div class="partners-element-address">г. Москва, ул. Ижорская, д. 7</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/cd0/cd0e1152437550a882f4ac0ced8506ee.png.webp?16596823028714" data-webp-src="/upload/iblock/cd0/cd0e1152437550a882f4ac0ced8506ee.png" alt="Ваш Климат">
								</div>
								<div class="partners-big-text">
									<span>Ваш Климат</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Москва, ул. Ижорская, д. 7</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (495) 585-70-90</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>5171852@mail.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.klimat4you.ru/" rel="nofollow"><span>https://www.klimat4you.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Москлимат</div>
							<div class="partners-element-address">Москва, Рязанский проспект, 8а, строение 1, офис 538. (Бизнес-центр «Рязанский»)</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/e9f/e9f008385ec7b4eee227ba89a7b6a1be.png.webp?16596823012020" data-webp-src="/upload/iblock/e9f/e9f008385ec7b4eee227ba89a7b6a1be.png" alt="Москлимат">
								</div>
								<div class="partners-big-text">
									<span>Москлимат</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Москва, Рязанский проспект, 8а, строение 1, офис 538. (Бизнес-центр «Рязанский»)</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+ 7 (495) 154-26-39</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@lmc.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://www.lmc.ru/contacts/" rel="nofollow"><span>http://www.lmc.ru/contacts/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">LGK</div>
							<div class="partners-element-address">г. Москва, ул. Марксистская, д.22</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/3aa/3aad75debd3161d8dafd88d88eb428ef.png.webp?16596823023184" data-webp-src="/upload/iblock/3aa/3aad75debd3161d8dafd88d88eb428ef.png" alt="LGK">
								</div>
								<div class="partners-big-text">
									<span>LGK</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Москва, ул. Марксистская, д.22</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8 (495) 565-31-02</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>mail@lkg.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.lkg.ru/cond/" rel="nofollow"><span>https://www.lkg.ru/cond/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Красная Армия</div>
							<div class="partners-element-address">Москва, ул. Авиамоторная д. 30</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/342/3423f556fd1b999077893ac0eb404c7f.png.webp?16596823013868" data-webp-src="/upload/iblock/342/3423f556fd1b999077893ac0eb404c7f.png" alt="Красная Армия">
								</div>
								<div class="partners-big-text">
									<span>Красная Армия</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Москва, ул. Авиамоторная д. 30</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8(495) 256-34-50</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>armia@list.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://www.redarmy.ru/" rel="nofollow"><span>http://www.redarmy.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Центр Индустрии Климата</div>
							<div class="partners-element-address">г. Химки, пр. Юбилейный, д. 6а, оф. 705, 7 этаж</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/f33/f3385ca2946d29e28db60a48739dde92.png.webp?16596823021052" data-webp-src="/upload/iblock/f33/f3385ca2946d29e28db60a48739dde92.png" alt="Центр Индустрии Климата">
								</div>
								<div class="partners-big-text">
									<span>Центр Индустрии Климата</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Химки, пр. Юбилейный, д. 6а, оф. 705, 7 этаж</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (495) 646-02-13; +7 (800) 555-03-13 </span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>mail@cik-centr.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://cik-centr.ru/" rel="nofollow"><span>https://cik-centr.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">On-Lineclimat</div>
							<div class="partners-element-address">Москва, Нахимовский проспект, д.24 Павильон 2, ряд  2, место 57</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
									<img src="/upload/delight.webpconverter/upload/iblock/28b/28b8cb98f8e7006f7ef50ee22d184c07.png.webp?16596823012236" data-webp-src="/upload/iblock/28b/28b8cb98f8e7006f7ef50ee22d184c07.png" alt="On-Lineclimat">
								</div>
								<div class="partners-big-text">
									<span>On-Lineclimat</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Москва, Нахимовский проспект, д.24 Павильон 2, ряд  2, место 57</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8 (800) 600-59-14</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>mail@on-lineclimat.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="" rel="nofollow"><span></span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">ИнтерСофт</div>
							<div class="partners-element-address">г. Пермь, ул. Малкова, д. 12, офис 117</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>ИнтерСофт</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Пермь, ул. Малкова, д. 12, офис 117</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(342)299-9973</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>dm@gc-intersoft.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://gc-intersoft.ru" rel="nofollow"><span>http://gc-intersoft.ru</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric, Electrolux, AUX</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">ЯрКлимат</div>
							<div class="partners-element-address">150001, Ярославская обл., г. Ярославль, Малая Пролетарская ул., д.22, литер 3</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>ЯрКлимат</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>150001, Ярославская обл., г. Ярославль, Малая Пролетарская ул., д.22, литер 3</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8-800-234-68-70 </span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>mail@748877.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://ярклимат.рф/" rel="nofollow"><span>http://ярклимат.рф/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Конди</div>
							<div class="partners-element-address">Махачкала, ул. М. Ярагского, 71</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Конди</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Махачкала, ул. М. Ярагского, 71</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (8722)56-24-24</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>condi2006@mail.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.firmacondi.ru/" rel="nofollow"><span>https://www.firmacondi.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">ХИКОНИКС-ЮГ</div>
							<div class="partners-element-address">г. Краснодар ул. Строителей 5 офис 3</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>ХИКОНИКС-ЮГ</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Краснодар ул. Строителей 5 офис 3</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (861) 225-10-99</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@hiconix-ug.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://www.hiconix-ug.ru/" rel="nofollow"><span>http://www.hiconix-ug.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">ХИКОНИКС-ЮГ</div>
							<div class="partners-element-address">г. Новороссийск пр-кт Дзержинского, дом 211 модуль, литер У1</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>ХИКОНИКС-ЮГ</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Новороссийск пр-кт Дзержинского, дом 211 модуль, литер У1</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (988) 134-16-00</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>nvrsk@hiconix-ug.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://www.hiconix-ug.ru/" rel="nofollow"><span>http://www.hiconix-ug.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Технологии Климата</div>
							<div class="partners-element-address">г.Тюмень, ул. Александра Логунова, 11/13</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Технологии Климата</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г.Тюмень, ул. Александра Логунова, 11/13</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (3452) 69-59-81</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@ntcklimat.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://ntcklimat.ru/" rel="nofollow"><span>https://ntcklimat.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">MirCli</div>
							<div class="partners-element-address">г. Москва, Ленинградский проспект, д. 80, корпус Г</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>MirCli</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Москва, Ленинградский проспект, д. 80, корпус Г</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8 800 775-22-19</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@mircli.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://mircli.ru/" rel="nofollow"><span>https://mircli.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">СУПЕРМАРКЕТ КЛИМАТА</div>
							<div class="partners-element-address">г.Москва, поселение Московский, 22-ой км Киевского шоссе, корпус Г, подъезд №11, второй этаж, офис №223Г</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>СУПЕРМАРКЕТ КЛИМАТА</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г.Москва, поселение Московский, 22-ой км Киевского шоссе, корпус Г, подъезд №11, второй этаж, офис №223Г</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (495) 104-3404</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>sale@klima-t.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.klima-t.ru/" rel="nofollow"><span>https://www.klima-t.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Лайт Климат</div>
							<div class="partners-element-address">г. Москва, Огородный проезд д.6 стр.1</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Лайт Климат</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Москва, Огородный проезд д.6 стр.1</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(495) 668-65-11</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@laitklimat.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://laitklimat.ru/" rel="nofollow"><span>https://laitklimat.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Мир Климата</div>
							<div class="partners-element-address">г. Краснодар, ул. Ростовское шоссе 34/3</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Мир Климата</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Краснодар, ул. Ростовское шоссе 34/3</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (861) 944-22-13</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>mkr@mirclimata.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.mirclimata.ru/" rel="nofollow"><span>https://www.mirclimata.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Мир Климата</div>
							<div class="partners-element-address">г. Краснодар, ул. Стасова, 178, ТК &quot;Медиаплаза&quot;</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Мир Климата</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Краснодар, ул. Стасова, 178, ТК &quot;Медиаплаза&quot;</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (905) 402 28 82</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>mp2@mirclimata.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.mirclimata.ru/" rel="nofollow"><span>https://www.mirclimata.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Мир Климата</div>
							<div class="partners-element-address">г. Новороссийск, ул. Энгельса, 66</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Мир Климата</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Новороссийск, ул. Энгельса, 66</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (964) 921-44-49</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>nen@mirclimata.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.mirclimata.ru/" rel="nofollow"><span>https://www.mirclimata.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Мир Климата</div>
							<div class="partners-element-address">г. Сочи,  ул.Транспортная 5, БЦ &quot;Фаворит&quot;</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Мир Климата</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Сочи,  ул.Транспортная 5, БЦ &quot;Фаворит&quot;</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (966) 775-71-21</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>sochi@mirclimata.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.mirclimata.ru/" rel="nofollow"><span>https://www.mirclimata.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Мир Климата</div>
							<div class="partners-element-address">г. Ростов-на-дону, ул. Вавилова, 68</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Мир Климата</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Ростов-на-дону, ул. Вавилова, 68</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8 (863) 206-72-80</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>rnd@mirclimata.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.mirclimata.ru/" rel="nofollow"><span>https://www.mirclimata.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Мир Климата</div>
							<div class="partners-element-address">г. Воронеж, Московский проспект, 11</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Мир Климата</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Воронеж, Московский проспект, 11</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8 (800) 333-08-64</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span></span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.mirclimata.ru/" rel="nofollow"><span>https://www.mirclimata.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Центр Климат</div>
							<div class="partners-element-address">Москва, ул. Лавочкина, д. 23 стр. 1. 2 этаж</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Центр Климат</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Москва, ул. Лавочкина, д. 23 стр. 1. 2 этаж</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8 (495) 150-69-19</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>zakaz@centrclimat.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.centrclimat.ru/" rel="nofollow"><span>https://www.centrclimat.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Аксеон-групп</div>
							<div class="partners-element-address">Москва г, ул. Михалковская. Д. 63Б, стр. 2, эт. 2, оф. 51</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Аксеон-групп</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Москва г, ул. Михалковская. Д. 63Б, стр. 2, эт. 2, оф. 51</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7(495) 777-19-37</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@kond.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://kond.ru/" rel="nofollow"><span>https://kond.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Vozduhoff.Ru</div>
							<div class="partners-element-address">г. Москва, Рязанский проспект, д 22к2 8 эт. каб 28 </div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Vozduhoff.Ru</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Москва, Рязанский проспект, д 22к2 8 эт. каб 28 </span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>8 (495) 532-87-78</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>vozduhoff@yandex.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://www.vozduhoff.ru/" rel="nofollow"><span>https://www.vozduhoff.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">АРАТТА</div>
							<div class="partners-element-address">г. Химки, ул. Жуковского, д.10, оф. 12</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>АРАТТА</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Химки, ул. Жуковского, д.10, оф. 12</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (499) 490 47 40</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@eco-conditioner.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://eco-conditioner.ru/" rel="nofollow"><span>https://eco-conditioner.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Техностор</div>
							<div class="partners-element-address">Одинцовский р-н, пос. Трёхгорка, ул. Трёхгорная, д. 12, офис 1</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Техностор</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Одинцовский р-н, пос. Трёхгорка, ул. Трёхгорная, д. 12, офис 1</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (499) 520-10-91</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>shop@technostor.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://technostor.ru/" rel="nofollow"><span>https://technostor.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">spli.ru</div>
							<div class="partners-element-address">Москва, Алтуфьевское шоссе, дом 48, корпус 2</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>spli.ru</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Москва, Алтуфьевское шоссе, дом 48, корпус 2</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+74952668265</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@spli.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://spli.ru/" rel="nofollow"><span>https://spli.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">Альфа Климат</div>
							<div class="partners-element-address">г. Нижний Новгород, ул. Полтавская, д.5, корп.1</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>Альфа Климат</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г. Нижний Новгород, ул. Полтавская, д.5, корп.1</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>(831)228-08-82 доб.1</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>poltavskaya@ak-nn.com</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="https://ak-nn.com/" rel="nofollow"><span>https://ak-nn.com/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: Komfovent</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">i-conder</div>
							<div class="partners-element-address">Москва, ТК &quot;Митинский радиорынок&quot;, Пятницкое шоссе, дом 18</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>i-conder</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>Москва, ТК &quot;Митинский радиорынок&quot;, Пятницкое шоссе, дом 18</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (495) 991-07-84</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>i-conder@mail.ru</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://i-conder.ru/" rel="nofollow"><span>http://i-conder.ru/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="partners-element">
						<div class="partners-element-small">
							<div class="partners-element-image"><img src="/upload/delight.webpconverter/local/templates/hiconix/img/mark.png.webp?1659682303656" data-webp-src="/local/templates/hiconix/img/mark.png" alt="метка"></div>
							<div class="partners-element-title">МВ-ГРУПП</div>
							<div class="partners-element-address">г.Химки, ул. Бабакина д.5А</div>
						</div>
						<div class="partners-big">
							<div class="partners-big-back partnersBack">
								<span class="pc">&lt; Назад</span>
								<span class="mobile">Назад к списку</span>
							</div>
							<div class="partners-big-top">
								<div class="partners-big-image">
								</div>
								<div class="partners-big-text">
									<span>МВ-ГРУПП</span>
								&nbsp;															</div>
							</div>
							<div class="partners-big-main">
								<div class="partners-big-row">
									<i class="partners-addres"></i>
									<span>г.Химки, ул. Бабакина д.5А</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-phone"></i>
									<span>+7 (495) 108-05-31</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-email"></i>
									<span>info@mv-group.su</span>
								</div>
								<div class="partners-big-row">
									<i class="partners-site"></i>
									<a href="http://mv-group.su/" rel="nofollow"><span>http://mv-group.su/</span></a>
								</div>
								<div class="partners-big-row">
									<i class="partners-brands"></i>
									<span>Бренды: AUX, Electrolux, Mitsubishi Electric</span>
								</div>
							</div>
						</div>
					</div>
					<div class="lazyShowMore"><span>Показать еще 10</span></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<link rel="stylesheet" href="/local/templates/hiconix/js/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css">

<script src="/local/templates/hiconix/js/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/local/templates/hiconix/partners/partners.js?3" type="text/javascript"></script>



@endsection