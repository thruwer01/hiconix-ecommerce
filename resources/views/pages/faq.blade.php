@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQ</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="row faq-content main-col">
        <div class="col-12">
            <div class="inner-heading-block">
                <div class="row">
                    <div class="col-12">
                        <div class="inner-heading-block-content">
                            <div class="page-title">
                                <h1>FAQ</h1>
                            </div>
                            <div class="inner-heading-block-text">
                                Команда компании «Хиконикс» – крупного дистрибьютора и импортера систем вентиляции и кондиционирования – подготовила для вас ответы на часто задаваемые вопросы.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-inner-content">
                <div class="faq-accordions-wrap row justify-content-center">
                    <div class="col-12">
                        <div class="faq-accordion">
                            <div class="faq-accordion-heading accordion-heading">
                                <span class="faq-accordion-heading-icon accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="33px" height="37px"
                                        version="1.1" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 0.679 0.76"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.34 0.03c0.171,0 0.309,0.139 0.309,0.31 0,0.171 -0.138,0.309 -0.309,0.309 -0.037,0 -0.073,-0.007 -0.106,-0.019l-0.079 0.035 -0.103 0.045 0.016 -0.11 0.013 -0.09c-0.032,-0.049 -0.051,-0.107 -0.051,-0.17 0,-0.171 0.139,-0.31 0.31,-0.31z">
                                        </path>
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.249 0.272l0 -0.041c0,-0.033 0.026,-0.059 0.058,-0.059l0.064 0c0.032,0 0.058,0.026 0.058,0.059l0 0.082c0,0.013 -0.006,0.024 -0.017,0.032l-0.057 0.04c-0.01,0.007 -0.016,0.018 -0.016,0.032l0 0.016">
                                        </path>
                                        <line fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            x1="0.341" y1="0.491" x2="0.341" y2="0.547"></line>
                                    </svg>
                                </span>
                                <h2 class="faq-accordion-title accordion-title">
                                    Как сделать заказ?
                                </h2>
                            </div>
                            <div class="faq-accordion-content accordion-content">
                                <div class="faq-accordion-inner-content accordion-inner-content">
                                    <div class="faq-accordion-text">
                                        <span class="faq-accordion-content-title">Ответ:</span>
										<p>положите товар в корзину, укажите нужное количество, заполните свои данные и отправьте нам кнопкой "Отправить", наши менеджеры* оперативно свяжутся с вами в течении 30 мин. Копия заявки с ценами** так же поступит и к вам на указанную почту.</p>
										<ul>
											<li><em>* - если Вы знаете код (ID) менеджера, впишите его в соответствующее поле цифрами, и тогда вы получите две цены: РИЦ (розничная рекомендованная интернет цена) и диллерскую (оптовую) базовую.</li><br>
											<li>** - код (ID) менеджера	можно узнать у индивидуального менеджера, позвонив к нам по многоканальному телефону <a href="tel:74957772366">+7 (495) 777-23-66</a> или заполнив заявку <a class="atuin-btn" id="showPopUp" href="#popup1">Стать партнером</a>.</em></li>
										</ul>
                                        <p>Также будем рады личной встрече в нашем офисе в Москве или филиале в г. Санкт-Петербурге.</p>
                                    </div>
                                    <div class="faq-accordion-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="109px"
                                            height="120px" version="1.1" shape-rendering="geometricPrecision"
                                            text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                            fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 8.887 9.819"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                stroke-miterlimit="22.9256"
                                                d="M4.444 0.122c-2.387,0 -4.322,1.935 -4.322,4.322 0,2.386 1.935,4.321 4.322,4.321 0.519,0 1.017,-0.092 1.479,-0.26l1.109 0.487 1.428 0.627 -0.223 -1.544 -0.182 -1.257c0.449,-0.682 0.71,-1.497 0.71,-2.374 0,-2.387 -1.935,-4.322 -4.321,-4.322z">
                                            </path>
                                            <g>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.843 6.218l0.997 0c0.448,0 0.814,-0.365 0.814,-0.813l0 -1.725c0,-1.191 -0.972,-2.162 -2.162,-2.162l-0.03 0c-1.191,0 -2.162,0.971 -2.162,2.162l0 1.44 -0.419 0c-0.109,0 -0.197,-0.088 -0.197,-0.197l0 -0.82c0,-0.108 0.088,-0.196 0.197,-0.196l0.419 0">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.462 7.181l0.03 0c0.957,0 1.738,-0.781 1.738,-1.738l0 -1.228c-0.565,0.014 -0.983,-0.263 -1.129,-1.079 -0.173,0.969 -0.776,1.052 -1.291,1.079l-1.086 0 0 1.228c0,0.957 0.781,1.738 1.738,1.738z">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M6.654 5.12l0.419 0c0.108,0 0.197,-0.088 0.197,-0.197l0 -0.82c0,-0.108 -0.089,-0.196 -0.197,-0.196l-0.419 0">
                                                </path>
                                                <circle fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256" cx="4.458" cy="6.218" r="0.385"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion accordion">
                            <div class="faq-accordion-heading accordion-heading">
                                <span class="faq-accordion-heading-icon accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="33px" height="37px"
                                        version="1.1" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 0.679 0.76"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.34 0.03c0.171,0 0.309,0.139 0.309,0.31 0,0.171 -0.138,0.309 -0.309,0.309 -0.037,0 -0.073,-0.007 -0.106,-0.019l-0.079 0.035 -0.103 0.045 0.016 -0.11 0.013 -0.09c-0.032,-0.049 -0.051,-0.107 -0.051,-0.17 0,-0.171 0.139,-0.31 0.31,-0.31z">
                                        </path>
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.249 0.272l0 -0.041c0,-0.033 0.026,-0.059 0.058,-0.059l0.064 0c0.032,0 0.058,0.026 0.058,0.059l0 0.082c0,0.013 -0.006,0.024 -0.017,0.032l-0.057 0.04c-0.01,0.007 -0.016,0.018 -0.016,0.032l0 0.016">
                                        </path>
                                        <line fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            x1="0.341" y1="0.491" x2="0.341" y2="0.547"></line>
                                    </svg>
                                </span>
                                <h2 class="faq-accordion-title accordion-title">
                                    Как стать нашим партнером?
                                </h2>
                            </div>
                            <div class="faq-accordion-content accordion-content">
                                <div class="faq-accordion-inner-content accordion-inner-content">
                                    <div class="faq-accordion-text">
                                        <span class="faq-accordion-content-title">Ответ:</span>
                                        <p>Заполните заявку <a class="atuin-btn" id="showPopUp" href="#popup1">Стать партнером</a>, и в ближайшее время с вами свяжется
                                        специалист компании «Хиконикс» для детального обсуждения
                                        условий сотрудничества*.</p>
										
										<ul>
											<li><em>* - мы работаем только с юридическими лицами, с заказом от 1 единицы товара до оптовой партии</em></li>
										</ul>
										
                                    </div>
                                    <div class="faq-accordion-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="109px"
                                            height="120px" version="1.1" shape-rendering="geometricPrecision"
                                            text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                            fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 8.887 9.819"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                stroke-miterlimit="22.9256"
                                                d="M4.444 0.122c-2.387,0 -4.322,1.935 -4.322,4.322 0,2.386 1.935,4.321 4.322,4.321 0.519,0 1.017,-0.092 1.479,-0.26l1.109 0.487 1.428 0.627 -0.223 -1.544 -0.182 -1.257c0.449,-0.682 0.71,-1.497 0.71,-2.374 0,-2.387 -1.935,-4.322 -4.321,-4.322z">
                                            </path>
                                            <g>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.843 6.218l0.997 0c0.448,0 0.814,-0.365 0.814,-0.813l0 -1.725c0,-1.191 -0.972,-2.162 -2.162,-2.162l-0.03 0c-1.191,0 -2.162,0.971 -2.162,2.162l0 1.44 -0.419 0c-0.109,0 -0.197,-0.088 -0.197,-0.197l0 -0.82c0,-0.108 0.088,-0.196 0.197,-0.196l0.419 0">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.462 7.181l0.03 0c0.957,0 1.738,-0.781 1.738,-1.738l0 -1.228c-0.565,0.014 -0.983,-0.263 -1.129,-1.079 -0.173,0.969 -0.776,1.052 -1.291,1.079l-1.086 0 0 1.228c0,0.957 0.781,1.738 1.738,1.738z">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M6.654 5.12l0.419 0c0.108,0 0.197,-0.088 0.197,-0.197l0 -0.82c0,-0.108 -0.089,-0.196 -0.197,-0.196l-0.419 0">
                                                </path>
                                                <circle fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256" cx="4.458" cy="6.218" r="0.385"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion accordion">
                            <div class="faq-accordion-heading accordion-heading">
                                <span class="faq-accordion-heading-icon accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="33px" height="37px"
                                        version="1.1" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 0.679 0.76"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.34 0.03c0.171,0 0.309,0.139 0.309,0.31 0,0.171 -0.138,0.309 -0.309,0.309 -0.037,0 -0.073,-0.007 -0.106,-0.019l-0.079 0.035 -0.103 0.045 0.016 -0.11 0.013 -0.09c-0.032,-0.049 -0.051,-0.107 -0.051,-0.17 0,-0.171 0.139,-0.31 0.31,-0.31z">
                                        </path>
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.249 0.272l0 -0.041c0,-0.033 0.026,-0.059 0.058,-0.059l0.064 0c0.032,0 0.058,0.026 0.058,0.059l0 0.082c0,0.013 -0.006,0.024 -0.017,0.032l-0.057 0.04c-0.01,0.007 -0.016,0.018 -0.016,0.032l0 0.016">
                                        </path>
                                        <line fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            x1="0.341" y1="0.491" x2="0.341" y2="0.547"></line>
                                    </svg>
                                </span>
                                <h2 class="faq-accordion-title accordion-title">
                                    Как получить скидку?
                                </h2>
                            </div>
                            <div class="faq-accordion-content accordion-content">
                                <div class="faq-accordion-inner-content accordion-inner-content">
                                    <div class="faq-accordion-text">
                                        <span class="faq-accordion-content-title">Ответ:</span>
                                        Гибкая система скидок доступна нашим Партнерам. Размер скидки
                                        рассчитывается индивидуально и зависит от объема заказанной
                                        продукции, региона, в котором работает дилер, и других
                                        факторов.
                                    </div>
                                    <div class="faq-accordion-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="109px"
                                            height="120px" version="1.1" shape-rendering="geometricPrecision"
                                            text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                            fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 8.887 9.819"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                stroke-miterlimit="22.9256"
                                                d="M4.444 0.122c-2.387,0 -4.322,1.935 -4.322,4.322 0,2.386 1.935,4.321 4.322,4.321 0.519,0 1.017,-0.092 1.479,-0.26l1.109 0.487 1.428 0.627 -0.223 -1.544 -0.182 -1.257c0.449,-0.682 0.71,-1.497 0.71,-2.374 0,-2.387 -1.935,-4.322 -4.321,-4.322z">
                                            </path>
                                            <g>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.843 6.218l0.997 0c0.448,0 0.814,-0.365 0.814,-0.813l0 -1.725c0,-1.191 -0.972,-2.162 -2.162,-2.162l-0.03 0c-1.191,0 -2.162,0.971 -2.162,2.162l0 1.44 -0.419 0c-0.109,0 -0.197,-0.088 -0.197,-0.197l0 -0.82c0,-0.108 0.088,-0.196 0.197,-0.196l0.419 0">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.462 7.181l0.03 0c0.957,0 1.738,-0.781 1.738,-1.738l0 -1.228c-0.565,0.014 -0.983,-0.263 -1.129,-1.079 -0.173,0.969 -0.776,1.052 -1.291,1.079l-1.086 0 0 1.228c0,0.957 0.781,1.738 1.738,1.738z">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M6.654 5.12l0.419 0c0.108,0 0.197,-0.088 0.197,-0.197l0 -0.82c0,-0.108 -0.089,-0.196 -0.197,-0.196l-0.419 0">
                                                </path>
                                                <circle fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256" cx="4.458" cy="6.218" r="0.385"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion accordion">
                            <div class="faq-accordion-heading accordion-heading">
                                <span class="faq-accordion-heading-icon accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="33px" height="37px"
                                        version="1.1" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 0.679 0.76"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.34 0.03c0.171,0 0.309,0.139 0.309,0.31 0,0.171 -0.138,0.309 -0.309,0.309 -0.037,0 -0.073,-0.007 -0.106,-0.019l-0.079 0.035 -0.103 0.045 0.016 -0.11 0.013 -0.09c-0.032,-0.049 -0.051,-0.107 -0.051,-0.17 0,-0.171 0.139,-0.31 0.31,-0.31z">
                                        </path>
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.249 0.272l0 -0.041c0,-0.033 0.026,-0.059 0.058,-0.059l0.064 0c0.032,0 0.058,0.026 0.058,0.059l0 0.082c0,0.013 -0.006,0.024 -0.017,0.032l-0.057 0.04c-0.01,0.007 -0.016,0.018 -0.016,0.032l0 0.016">
                                        </path>
                                        <line fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            x1="0.341" y1="0.491" x2="0.341" y2="0.547"></line>
                                    </svg>
                                </span>
                                <h2 class="faq-accordion-title accordion-title">
                                    Как получить сервисные услуги?
                                </h2>
                                <h2></h2>
                            </div>
                            <div class="faq-accordion-content accordion-content">
                                <div class="faq-accordion-inner-content accordion-inner-content">
                                    <div class="faq-accordion-text">
                                        <span class="faq-accordion-content-title">Ответ:</span>
                                        Сервис и техническую поддержку получают все наши Партнеры. Мы
                                        даем технические консультации по телефону
                                        <a href="tel:74957772366">+7 (495) 777-23-66</a>,
                                        диагностируем оборудование и устраняем проблемы в его работе
                                        на объектах в Москве и МО, а также поставляем необходимые
                                        запчасти со склада или под заказ
                                    </div>
                                    <div class="faq-accordion-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="109px"
                                            height="120px" version="1.1" shape-rendering="geometricPrecision"
                                            text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                            fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 8.887 9.819"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                stroke-miterlimit="22.9256"
                                                d="M4.444 0.122c-2.387,0 -4.322,1.935 -4.322,4.322 0,2.386 1.935,4.321 4.322,4.321 0.519,0 1.017,-0.092 1.479,-0.26l1.109 0.487 1.428 0.627 -0.223 -1.544 -0.182 -1.257c0.449,-0.682 0.71,-1.497 0.71,-2.374 0,-2.387 -1.935,-4.322 -4.321,-4.322z">
                                            </path>
                                            <g>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.843 6.218l0.997 0c0.448,0 0.814,-0.365 0.814,-0.813l0 -1.725c0,-1.191 -0.972,-2.162 -2.162,-2.162l-0.03 0c-1.191,0 -2.162,0.971 -2.162,2.162l0 1.44 -0.419 0c-0.109,0 -0.197,-0.088 -0.197,-0.197l0 -0.82c0,-0.108 0.088,-0.196 0.197,-0.196l0.419 0">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.462 7.181l0.03 0c0.957,0 1.738,-0.781 1.738,-1.738l0 -1.228c-0.565,0.014 -0.983,-0.263 -1.129,-1.079 -0.173,0.969 -0.776,1.052 -1.291,1.079l-1.086 0 0 1.228c0,0.957 0.781,1.738 1.738,1.738z">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M6.654 5.12l0.419 0c0.108,0 0.197,-0.088 0.197,-0.197l0 -0.82c0,-0.108 -0.089,-0.196 -0.197,-0.196l-0.419 0">
                                                </path>
                                                <circle fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256" cx="4.458" cy="6.218" r="0.385"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion accordion">
                            <div class="faq-accordion-heading accordion-heading">
                                <span class="faq-accordion-heading-icon accordion-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="33px" height="37px"
                                        version="1.1" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 0.679 0.76"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.34 0.03c0.171,0 0.309,0.139 0.309,0.31 0,0.171 -0.138,0.309 -0.309,0.309 -0.037,0 -0.073,-0.007 -0.106,-0.019l-0.079 0.035 -0.103 0.045 0.016 -0.11 0.013 -0.09c-0.032,-0.049 -0.051,-0.107 -0.051,-0.17 0,-0.171 0.139,-0.31 0.31,-0.31z">
                                        </path>
                                        <path fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            d="M0.249 0.272l0 -0.041c0,-0.033 0.026,-0.059 0.058,-0.059l0.064 0c0.032,0 0.058,0.026 0.058,0.059l0 0.082c0,0.013 -0.006,0.024 -0.017,0.032l-0.057 0.04c-0.01,0.007 -0.016,0.018 -0.016,0.032l0 0.016">
                                        </path>
                                        <line fill="none" stroke="#12AAED" stroke-width="0.061" stroke-miterlimit="22.9256"
                                            x1="0.341" y1="0.491" x2="0.341" y2="0.547"></line>
                                    </svg>
                                </span>
                                <h2 class="faq-accordion-title accordion-title">
                                    Что такое продажа на эксклюзивных условиях?
                                </h2>
                            </div>
                            <div class="faq-accordion-content accordion-content">
                                <div class="faq-accordion-inner-content accordion-inner-content">
                                    <div class="faq-accordion-text">
                                        <span class="faq-accordion-content-title">Ответ:</span>
                                        Мы предоставляем Партнерам возможность эксклюзивно продавать
                                        климатическую технику выбранного бренда в своем регионе. Вы
                                        будете работать в условиях, свободных от конкуренции, и
                                        сможете самостоятельно устанавливать ценовую политику на это
                                        оборудование.
                                    </div>
                                    <div class="faq-accordion-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="109px"
                                            height="120px" version="1.1" shape-rendering="geometricPrecision"
                                            text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                            fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 8.887 9.819"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                stroke-miterlimit="22.9256"
                                                d="M4.444 0.122c-2.387,0 -4.322,1.935 -4.322,4.322 0,2.386 1.935,4.321 4.322,4.321 0.519,0 1.017,-0.092 1.479,-0.26l1.109 0.487 1.428 0.627 -0.223 -1.544 -0.182 -1.257c0.449,-0.682 0.71,-1.497 0.71,-2.374 0,-2.387 -1.935,-4.322 -4.321,-4.322z">
                                            </path>
                                            <g>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.843 6.218l0.997 0c0.448,0 0.814,-0.365 0.814,-0.813l0 -1.725c0,-1.191 -0.972,-2.162 -2.162,-2.162l-0.03 0c-1.191,0 -2.162,0.971 -2.162,2.162l0 1.44 -0.419 0c-0.109,0 -0.197,-0.088 -0.197,-0.197l0 -0.82c0,-0.108 0.088,-0.196 0.197,-0.196l0.419 0">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M4.462 7.181l0.03 0c0.957,0 1.738,-0.781 1.738,-1.738l0 -1.228c-0.565,0.014 -0.983,-0.263 -1.129,-1.079 -0.173,0.969 -0.776,1.052 -1.291,1.079l-1.086 0 0 1.228c0,0.957 0.781,1.738 1.738,1.738z">
                                                </path>
                                                <path fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256"
                                                    d="M6.654 5.12l0.419 0c0.108,0 0.197,-0.088 0.197,-0.197l0 -0.82c0,-0.108 -0.089,-0.196 -0.197,-0.196l-0.419 0">
                                                </path>
                                                <circle fill="none" stroke="#12AAED" stroke-width="0.245"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="22.9256" cx="4.458" cy="6.218" r="0.385"></circle>
                                            </g>
                                        </svg>
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
<script type="text/javascript">
	
window.addEventListener('load', () => {
    const allAccordions = document.querySelectorAll('.faq-accordion');

    const hideAllAccordions = () => {
        allAccordions.forEach(accordion => {
            accordion.querySelector('.accordion-content').style.display = 'none';
        });
    }

    allAccordions.forEach(accordion => {
        let isAccordionOpen = false;
        accordion.querySelector('.accordion-heading').onclick = () => {
            hideAllAccordions();
            isAccordionOpen = !isAccordionOpen;
            if (isAccordionOpen === true) accordion.querySelector('.accordion-content').style.display = 'block';
            if (isAccordionOpen === false) accordion.querySelector('.accordion-content').style.display = 'none';
        }
    });
})

</script>
@endsection