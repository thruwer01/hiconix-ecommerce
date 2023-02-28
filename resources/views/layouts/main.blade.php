<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
		<link rel="shortcut icon" href="{{asset('/favicon.svg')}}" type="image/svg+xml">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://kit.fontawesome.com/1aec4fc88d.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/public/css/swiper-bundle8-4-4.min.css"/>
		<link rel="stylesheet" href="{{ asset('css/style.css?v5') }}">
		<link rel="stylesheet" href="{{ asset('css/callback.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style-site.css?v5') }}">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<meta name="theme-color" content="#12aaed" media="(prefers-color-scheme: light)">
		<meta name="theme-color" content="#12aaed" media="(prefers-color-scheme: dark)">
		<!--
			<link rel="stylesheet" href="{{ asset('/libs/slider/simple-adaptive-slider.min.css') }}">
			<script defer src="{{ asset('/libs/slider/simple-adaptive-slider.min.js') }}"></script>
		-->
		
		@yield('head')
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">
		<meta property="og:image" content="@yield('image')">
		<title>@yield('title')</title>
	</head>
	<body class="d-flex flex-column">
		<div id="preHeader" class="px-3 py-1 pre-header">
			<div class="container">
				<div class="row">
					<div class="col-6 d-block d-md-none text-nowrap">
						Кондиционеры оптом
					</div>		
					<div class="col-6 col-md-9 d-none d-md-block">
						Профессиональные климатические системы оптом. На рынке с 1995 года
					</div>
					<div></div>
					<div class="col-6 col-md-3 text-end-xk text-nowrap">
						<i class="fas fa-phone"></i> <a href="tel:+74957772366">+7 (495) 777-23-66</a>
					</div>
				</div>
			</div>
		</div>
		<header id="header" class="p-3">
			<div class="container">
				<div class="row align-items-center mt-2 mb-3">
					<div class="col-8 col-sm-6 col-md-4 col-lg-3">
						<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
							<img class="logo" src="/images/logo_standart.png" alt="Федеральный дистрибьютор Хиконикс">
						</a>
					</div>
					<div class="col-2 col-sm-2 col-md-1 col-lg-2">
						<a class="catalog-button text-decoration-none" href="#catalog" id="catalogOpenBtn">
							<i class="fa-solid fa-bars"></i>
							<span class="d-none d-lg-block">Каталог</span>
						</a>
					</div>
					<div class="col-4 d-none d-md-block col-md-4">
						<div style="position: relative;">
							<form style="margin: 0" action="/search" method="GET">
								<input type="text" value="{{isset($searchInput) ? $searchInput : null}}" name="q" class="form-control" placeholder="Н-р: код товара/модель" style="padding-left: 30px;font-style: italic;font-size: 0.9em;">
								<span class="input-group-append" style="position: absolute; top: 10px; left: 6px;">
									<button type="submit">
										<i class="fa fa-search top-search-xk"></i>
									</button>
								</span>
							</form>
						</div>
					</div>
					<div class="col-2 col-sm-2 col-md-1" style="position: relative;">
						<a href="/cart" id="cart">
							<img src="/images/basket.png" width="25px">
							<span id="cartCount">0</span>
						</a>
					</div>
					<div class="col-2 d-none d-sm-block text-end">
						<a class="catalog-button text-decoration-none" href="#">
							Войти
						</a>
					</div>
				</div>
			</div>
		</header>
		<div style="border-top: 1px solid #12abed;">
			<div class="container d-none d-md-block">
				<div class="my-2">
					<div class="row">
						<div class="col-2 text-center">
							<i class="fa-solid fa-location-dot"></i>
							<span class="fw-bold">Москва</span>
						</div>
						<div class="col-10">
							<ul class="nav" style="font-size: 14px;">
								<li class="nav-item dropdown">
									<a href="/about" class="dropdown-toggle">
										О компании
									</a>
									<ul class="dropdown-menu">
										<li><a href="/about/about-us">О нас</a></li>
										<li><a href="/about/licenses">Лицензии</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a href="/support" class="dropdown-toggle">
										Сервис и поддержка
									</a>
									<ul class="dropdown-menu">
										<li><a href="/support/marketing/">Маркетинг</a></li>
										<li><a href="/support/delivery/">Доставка</a></li>
										<li><a href="/support/ingeneer/">Проектная</a></li>
										<li><a href="/support/tech/">Техническая</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a href="/partner" class="dropdown-toggle">
										Стать партнером
									</a>
									<ul class="dropdown-menu">
										<li><a href="/partner/regionalnye-distribyutory">Региональные дистрибьюторы</a></li>
										<li><a href="/partner/optovye-klimaticheskie-kompanii">Оптовые климатические компании</a></li>
										<li><a href="/partner/roznichnye-klimaticheskie-kompanii">Розничные климатические компании</a></li>
										<li><a href="/partner/internet-magazin">Интернет-магазины</a></li>
										<li><a href="/partner/inzhiniringovye-kompanii">Инжиниринговые компании</a></li>
										<li><a href="/partner/proektnye-organizatsii">Проектные организации</a></li>
									</ul>
								</li>
								<li>
									<a href="/publications/actions">
										Акции
									</a>
								</li>
								<li>
									<a href="/publications">
										Публикации
									</a>
								</li>
								<li>
									<a href="/faq">
										FAQ
									</a>
								</li>
								<li>
									<a href="/contacts">
										Контакты
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="catmenu-bg"></div>
		<div id="catmenu">
			<div class="catmenu-in">
				<div style="position: relative;" class="d-block d-md-none">
					<form action="/search" method="GET">
						<input type="text" value="{{isset($searchInput) ? $searchInput : null}}" name="q" class="form-control" placeholder="Н-р: код товара/модель" style="padding-left: 30px;font-style: italic;font-size: 0.9em;">
						<span class="input-group-append" style="position: absolute; top: 10px; left: 6px;">
							<button type="submit">
								<i class="fa fa-search top-search-xk"></i>
							</button>
						</span>
					</form>
				</div>
				<div class="h5 mt-2">Каталог:</div>
				
				<div class="accordion" id="sidemenu">
					
					@foreach ($productGroups as $productGroupID => $productGroupInfo)
					<div class="accordion-item">
						<div class="accordion-header">	
							<a href="{{$productGroupInfo['main_info']['link']}}" data-submenu-id="{{$productGroupID}}">
								{{$productGroupInfo['main_info']['title']}}
							</a>	
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecat{{$productGroupID}}" aria-expanded="true" aria-controls="collapsecat{{$productGroupID}}">
								<i class="fas fa-chevron-down"></i>
							</button>
						</div>
						<div id="collapsecat{{$productGroupID}}" class="accordion-collapse collapse" data-bs-parent="#sidemenu">
							
							<div class="accordion-body">
								
								
								@if (isset($productGroupInfo['sub_links']))
								@foreach ($productGroupInfo['sub_links'] as $conditionerLink)
								
								<?php $ranid = rand(0,1500); ?>
								
								
								<div class="accordion" id="raz{{$ranid}}">
									
									<div class="accordion-item">
										<div class="accordion-header">	
											<a href="@if($conditionerLink['link'][0] !== "/")/@endif{{$conditionerLink['link']}}">{{$conditionerLink['name']}}</a>
											<?php $bt = 1; ?>
											@foreach ($conditionerLink['sub_links'] as $linkSubLink)
											<?php if ($bt == 1) { ?>
												<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dropcollapse{{$ranid}}" aria-expanded="true" aria-controls="dropcollapse{{$ranid}}">
													<i class="fas fa-chevron-down"></i>
												</button>
												
												<?php }
												$bt ++; 
											?>
											@endforeach
											
										</div>
										<div id="dropcollapse{{$ranid}}" class="accordion-collapse collapse" data-bs-parent="raz{{$ranid}}">
											<div class="accordion-body">
												<ul class="menuitems">
													@foreach ($conditionerLink['sub_links'] as $linkSubLink)
													<li><a href="@if($linkSubLink['link'][0] !== "/")/@endif{{$linkSubLink['link']}}">{{$linkSubLink['name']}}</a></li>
													@endforeach
												</ul>										
											</div>
										</div>
									</div>									
								</div>										
								
								@endforeach
								@endif
								
								
								
							</div>
							
							
						</div>
					</div>
					@endforeach
					<div class="h5 mt-2">Основное меню:</div>
					<div class="accordion-item">
						<div class="accordion-header">	
							<a href="/about">
								О компании
							</a>	
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
								<i class="fas fa-chevron-down"></i>
							</button>
						</div>
						<div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#sidemenu">
							<div class="accordion-body">
								<ul class="menuitems">
									<li><a href="/about/about-us">О нас</a></li>
									<li><a href="/about/licenses">Лицензии</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-header">	
							<a href="/support">
								Сервис и поддержка
							</a>
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
								<i class="fas fa-chevron-down"></i>
							</button>
						</div>
						<div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#sidemenu">
							<div class="accordion-body">
								<ul class="menuitems">
									<li><a href="/support/marketing/">Маркетинг</a></li>
									<li><a href="/support/delivery/">Доставка</a></li>
									<li><a href="/support/ingeneer/">Проектная</a></li>
									<li><a href="/support/tech/">Техническая</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-header">	
							<a href="/partner">
								Стать партнером
							</a>
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
								<i class="fas fa-chevron-down"></i>
							</button>
						</div>
						<div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#sidemenu">
							<div class="accordion-body">
								<ul class="menuitems">
									<li><a href="/partner/regionalnye-distribyutory">Региональные дистрибьюторы</a></li>
									<li><a href="/partner/optovye-klimaticheskie-kompanii">Оптовые климатические компании</a></li>
									<li><a href="/partner/roznichnye-klimaticheskie-kompanii">Розничные климатические компании</a></li>
									<li><a href="/partner/internet-magazin">Интернет-магазины</a></li>
									<li><a href="/partner/inzhiniringovye-kompanii">Инжиниринговые компании</a></li>
									<li><a href="/partner/proektnye-organizatsii">Проектные организации</a></li>
								</ul>
							</div>
						</div>
					</div> 
					
					
					
					<div class="accordion-item">
						<div class="accordion-header">	
							<a href="/publications/actions">
								Акции
							</a>
						</div>
					</div> 
					<div class="accordion-item">
						<div class="accordion-header">	
							<a href="/publications">
								Публикации
							</a>
						</div>
					</div> 
					<div class="accordion-item">
						<div class="accordion-header">	
							<a href="/faq">
								FAQ
							</a>
						</div>
					</div> 
					<div class="accordion-item">
						<div class="accordion-header">	
							<a href="/contacts">
								Контакты
							</a>
						</div>
					</div>  
				</div>
				
				<span id="catmenu-close"><i class="fas fa-times"></i></span>
			</div>			
		</div>			
		
		
		
		
		@yield('content')
		{{-- <div class="container mt-5">
			<h3>Недавно просмотренные</h3>
			<div class="row products mt-3">
				<?php for ($i = 0; $i < 4; $i++):?>
				<div class="col-3 mb-3">
					<?php echo $product;?>
				</div>
				<?php endfor; ?>
			</div>
		</div> --}}
		<div class="footer-bg mt-5 footer mt-auto">
			<div class="d-none d-md-block py-1" style="background-color:rgba(0, 0, 0, 0.014); font-size: 12px;">
				<div class="container text-muted">
					Нашли ошибку? Выделите её и нажмите Ctrl+Enter. Спасибо, что помогаете нам стать лучше!
				</div>
			</div>
			<div class="container">
				<footer class="pt-3">
					<div class="row">
						<div class="col-6 col-sm-6 col-lg-3">
							<img class="logo" src="/images/logo_white.png">
							<small class="d-block mt-3 mb-3">hiconix.ru © 2022</small>
						</div>
						<div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-5">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled mb-0">
										<li>
											<a href="/publications/actions/">Акции</a>
										</li>
										<li>
											<a href="/publications/news/">Новости</a>
										</li>
										<li>
											<a href="/about">О компании</a>
										</li>
										<li>
											<a href="/faq">FAQ</a>
										</li> 
										<li>
											<a href="/support/">Сервис и поддержка</a>
										</li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li>
											<a href="/partner">Стать партнером</a>
										</li>
										<li>
											<a id="showPopUp" href="#popup1">Подать заявку</a>
										</li>										
										
									</ul>
								</div>							
						</div>	
						
					</div>
					
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
						<div class="text-right foot-r">
							<ul class="list-unstyled">
								<li class="fs-3 text-end">
									<span class="footer-tel">
										<a href="tel:+74957772366"><i class="fas fa-phone"></i> +7 (495) 777-23-66</a>
									</span>
									</li>
								</ul>
								<ul class="social-icons-2">
									<li><a target="_blank" href="https://vk.com/hiconixcompany" title="Наше сообщество в VK - Hiconix"><i class="fab fa-vk"></i></a></li>
									<li><a target="_blank" href="https://www.youtube.com/channel/UCH_rCyk1ZmLfnpYZncTqjBA" title="Наш канал на YouTube - Hiconix"><i class="fab fa-youtube"></i></a></li>
								</ul>	
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<div type="button" class="callback-bt">
			<a class="btnPopup" id="showPopUp" href="#popup1" title="Перезвоните пожалуйста мне">
				<div class="text-call">
					<img src="/images/tel.png" alt="Заказ звонка">
					<span>Заказать<br>звонок</span>
				</div>
			</a>
		</div>
		<div id="helpWe" class="modal" style="background-color: rgba(0, 0, 0, 0.5); z-index: 9999999999999;">
			<div style="margin-top: 5%;">
				<div class="popup">
					<div class="form" id="helpWePopup">
						<form>
							<div class="form--box">
								<div class="form--header">
									<div class="form--title">Сообщение об ошибке</div>
									<p>Спасибо, что помогаете нам стать лучше!</p>
								</div>
								<div class="form--body form--body-bg">
									<div class="popup--layer">
										<div class="form--item">
											<label class="form--field">Как Вас зовут?</label>
											<input type="text" name="name" placeholder="Ваше имя">
										</div>
										<div class="form--item" id="form_input_comment">
											<label class="form--field">Сообщение об ошибке</label>
											<textarea rows="4" id="form-comment" name="comment" placeholder="Ошибка" disabled></textarea>
										</div>
										<div class="form--item">
											<label class="form--field">URL:</label>
											<input type="text" id="url" disabled>
										</div>
										<div class="form--item form--btn">
											<input type="hidden" name="theme" value="Позвонить мне">
											<label class="btn-call btn-md sendSubmit" for="submit01">Отправить</label>
											<input class="hide" id="submit01" value="Позвонить мне">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="successModal" class="modal" style="background-color: rgba(0, 0, 0, 0.5); z-index: 9999999999999;">
			<div style="margin-top: 10%;">
				<div class="popup">
					<div class="form" id="successModalPopUp">
						<div class="form--box">
							<div class="form--succes">
								<img src="/images/callback/success.png" alt="Успешно отправлено!">
								<div class="form--succes-header">Все прошло успешно!</div>
								<div class="form--succes-body">Мы свяжемся с вами в течение получаса,<br>чтобы уточнить детали</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="popupModal" class="modal" style="background-color: rgba(0, 0, 0, 0.5); z-index: 9999999999999;">
			<div style="margin-top: 5%;">
				<div class="popup" id="popup1">
					<div class="form">
						<form>
							<div class="form--box">
								<div class="form--header">
									<div class="form--title">Закажите обратный звонок</div>
									<p>Оставьте Ваши данные, и наш специалист<br> свяжется с Вами в течение 30 минут</p>
								</div>
								<div class="form--body form--body-bg">
									<div class="popup--layer">
										<div class="form--item">
											<select name="request_goal" required="required">
												<option disabled="" value="null">Выбрать цель обращения: *</option>
												<option value="retail">Разовая покупка</option>
												<option value="dealer">ОПТОМ</option>
												<option value="commerc">Директору</option>
											</select>
										</div>
										<div class="form--item">
											<input type="text" name="city" required="required" placeholder="Укажите город *">
										</div>
										<div class="form--item">
											<input type="text" name="name" placeholder="Ваше имя">
										</div>
										<div class="form--item">
											<label class="form--field required">Способ связи</label>
											<div class="form--contact-choise">
												<div class="form--radio">
													<input type="radio" value="tel" name="contact" id="contact_choise1">
													<label for="contact_choise1">Жду звонка</label>
												</div>
												<div class="form--radio">
													<input type="radio" value="msg" name="contact" id="contact_choise2">
													<label for="contact_choise2">Напишите мне</label>
												</div>
											</div>
										</div>
										<div class="form--item" style="display: none;" id="form_input_tel">
											<label class="form--field">Ваш номер телефона</label>
											<input type="tel" name="phone" class="form--phone phone-input-mask" placeholder="+7 (999) 999-99-99">
										</div>
										<div class="form--item" style="display: none;" id="form_input_email">
											<label class="form--field">Ваш E-mail</label>
											<input type="email" name="email" placeholder="ivan@ivan.ru">
										</div>
										<div class="form--item" id="form_input_comment">
											<textarea rows="4" id="form-comment" name="comment" maxlength="200" required="required" placeholder="Напишите комментарии"></textarea>
											<span style="color:red; display: none;" id="comment-error">Максимальное число символов: 200</span>
										</div>
										<div class="form--item form--btn">
											<input type="hidden" name="theme" value="Позвонить мне">
											<label class="btn-call btn-md sendSubmit" for="submit01">Позвонить мне</label>
											<input class="hide" id="submit01" value="Позвонить мне">
										</div>
										<div class="privacy">Нажимая на кнопку, вы даете согласие на  обработку своих персональных данных и соглашаетесь с <a class="btnPopup" href="/privacy-policy" target="_blank">Пользовательским соглашением</a></div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<button title="Close (Esc)" type="button" class="mfp-close">×</button>
				</div>
			</div>
		</div>
		
		
		<a class="back_to_top" title="Наверх" style="background: url(/local/templates/hiconix/img/newscroll.png) no-repeat; background-size: 100%;"></a>
		<script src="/public/js/bootstrap5-2-0.bundle.min.js"></script>
		<script src="{{asset('/js/callback-form.js')}}"></script>
		<script src="{{asset('/js/phone-mask.js')}}"></script>
		<script type="text/javascript">
			
			
			window.onscroll = function() {mysticky()};
			var header = document.getElementById("header");
			var sticky = header.offsetTop;
			function mysticky() {
				if (window.pageYOffset > sticky) {
					header.classList.add("sticky");
					document.body.style.paddingTop = '70px'
					} else {
					header.classList.remove("sticky");
					document.body.style.paddingTop = '0'
				}
			} 
			
			
			
			const catalogOpenBtn = document.getElementById('catalogOpenBtn');
			const catmenu = document.getElementById('catmenu');
			const catmenubg = document.getElementById('catmenu-bg');
			catalogOpenBtn.addEventListener("click", function(){
				catmenu.classList.add("vis");
				catmenubg.classList.add("vis");	
			});	
			document.getElementById("catmenu-close").addEventListener("click", function(){
				catmenu.classList.remove("vis");	
				catmenubg.classList.remove("vis");	
			});
			catmenubg.addEventListener("click", function(){
				catmenu.classList.remove("vis");	
				catmenubg.classList.remove("vis");	
			});
			
			
			let scrollBtn = document.querySelector('.back_to_top');
			
			const scrollBtnDisplay = function () {
				window.scrollY > window.innerHeight
				? scrollBtn.classList.add("show")
				: scrollBtn.classList.remove("show");
			};
			
			window.addEventListener("scroll", scrollBtnDisplay);
			
			const scrollWindow = function () {
				if (window.scrollY != 0) {
					window.scrollTo(0, 0);
				}
			};
			
			scrollBtn.addEventListener("click", scrollWindow);
			
			// let titles = ['Здравствуйте!', 'Это сайт Хиконикс!', 'Спасибо что зашли к нам!', 'Смотрите наши акции!', 'Следите за новостями!', 'У нас крутой и удобный каталог!']
			
			
			// let i = 0;
			// setInterval(() => {
			//     document.title = titles[i];
			//     i++
			//     if (i >= titles.length) {
			//         i = 0;
			//     }
			// }, 2000);
			
			//phones
			
			let phoneInputs = document.querySelectorAll('.phone-input-mask');
			
			phoneInputs.forEach(PHONE_INPUT => {
				PHONE_INPUT.addEventListener('keydown', onPhoneKeyDown);
				PHONE_INPUT.addEventListener('input', onPhoneInput, false);
				PHONE_INPUT.addEventListener('paste', onPhonePaste, false);
			})
			
			
			
			let imagesWithWEBP = document.querySelectorAll('img[data-webp-src]');
			
			if (imagesWithWEBP) {
				imagesWithWEBP.forEach(img => {
					img.src = img.dataset.webpSrc;
				})
			}
			
			let imagesWithWEBPBackGround = document.querySelectorAll('[data-bgr-webp]');
			
			if (imagesWithWEBPBackGround) {
				imagesWithWEBPBackGround.forEach(img => {
					// console.log(img.dataset.bgrWebp)
					img.style.backgroundImage = "url("+img.dataset.bgrWebp+")";
				})
			}
			
			function getSelectionText() {
				var text = "";
				if (window.getSelection) {
					text = window.getSelection().toString();
					} else if (document.selection && document.selection.type != "Control") {
					text = document.selection.createRange().text;
				}
				return text;
			}
			
			let formHelpWe = document.querySelector("#helpWe");
			let formHelpWeIsOpen = false;
			let formSuccess = document.querySelector("#successModal");
			let formSuccessInOpen = false;
			
			formHelpWe.querySelector('.sendSubmit').onclick = () => {
				formHelpWeIsOpen = false;
				formHelpWe.style.display = 'none';
				formSuccess.style.display = 'block';
				formSuccessInOpen = true;
			}
			
			document.addEventListener('keydown', function(e) {
				if (e.ctrlKey && e.keyCode == 13) {
					let dataForForm = {
						text: getSelectionText(),
						url: document.location.href
					}
					formHelpWeIsOpen = true;
					formHelpWe.querySelector('#form-comment').value = dataForForm.text;
					formHelpWe.querySelector('#url').value = dataForForm.url;
					formHelpWe.style.display = "block";
				}
			});
			
			const renderCart = () => {
				if (!localStorage.getItem('cart')) {
					localStorage.setItem('cart', "{}");
				}
				const cartInfo = JSON.parse(localStorage.getItem('cart'));
				// console.log(cartInfo);
				const productCount = Object.keys(cartInfo).length;
				
				document.querySelector('#cartCount').innerText = productCount;
			}
			
			const addToCart = (ids) => {
				let products = {};
				if(localStorage.getItem('cart'))
				{
					products = JSON.parse(localStorage.getItem('cart'));
				}
				ids.forEach(id => {
					products[id] ? products[id] += 1 : products[id] = 1;
				})
				localStorage.setItem('cart', JSON.stringify(products));
				renderCart();
			}
			
			const fullClearCart = () => {
				localStorage.setItem('cart', "{}");
				renderCart();
			}
			
			window.addEventListener('load', () => {
				let catalogIsOpen = false;
				
				//const openCatalogBtn = document.querySelectorAll('#catalogOpenBtn');
				const catalogMenu = document.querySelector('#main-catalog-menu');
				const showSubMenuBtn = document.querySelectorAll('#showSubMenuBtn');
				
				const inCartBtn = document.querySelectorAll('button#inCartBtn');
				
				window.pModal = {
					close: function () {
						this.node.style.display = 'none';
						this.isOpen = false;
						return this;
					},
					show: function () {
						this.node.style.display = 'block';
						this.isOpen = true;
						return this;
					},
					node: document.querySelector('#popupModal'),
					isOpen: false,
				}
				
				document.querySelectorAll("#showPopUp").forEach(btn => {
					btn.onclick = () => {
						pModal.show()
					}
				})
				
				inCartBtn.forEach(btn => {
					btn.onclick = () => {
						let inCartBtnText = btn.querySelector('span');
						addToCart(btn.dataset.productId.split(','));
						inCartBtnText.innerText = 'Перейти';
						btn.onclick = () => {
							location.href = "/cart";
						}
					}
				})
				
				document.onclick = (e) => {
					if (catalogIsOpen === true) {
						if (!e.target.closest('#main-catalog-menu') && !e.target.closest('#catalogOpenBtn')) {
							catalogMenu.style.display = 'none';
							catalogIsOpen = false;
						}
					}
					if (!e.target.closest(".popup") && !e.target.closest('#showPopUp') && pModal.isOpen === true) {
						pModal.close();
					}
					if (formHelpWeIsOpen == true && !e.target.closest('#helpWePopup')) {
						formHelpWe.style.display = 'none';
						formHelpWeIsOpen = false;
					}
					if (formSuccessInOpen == true && !e.target.closest('#successModalPopUp') && !e.target.closest('.popup')) {
						formSuccessInOpen = false;
						formSuccess.style.display = 'none';
					}
				}
				/*
					openCatalogBtn.forEach(btn => {
					btn.onclick = () => {
					catalogIsOpen = !catalogIsOpen;
					
					if (catalogIsOpen === true) {
					catalogMenu.style.display = 'block';
					}
					if (catalogIsOpen === false) catalogMenu.style.display = 'none';
					
					hideAllSubMenu();
					document.querySelector('#productSubMenu1').style.display = 'block';
					}
					})
				*/
				
				const hideAllSubMenu = () => {
					document.querySelectorAll(".catalog-sub-menu").forEach(submenu => {
						submenu.style.display = 'none';
					})
				}
				
				const showSubMenu = (subMenuID) => {
					hideAllSubMenu();
					document.querySelector(`#productSubMenu${subMenuID}`).style.display = 'block';
				}
				
				showSubMenuBtn.forEach(subMenuBtn => {
					subMenuBtn.onmouseover = (e) => {
						
						showSubMenuBtn.forEach(b => {
							b.style.color = '';
							b.style.backgroundColor = '';
						})
						
						e.target.style.color = "#0465f3";
						e.target.style.backgroundColor = "#e2e6e8";
						showSubMenu(subMenuBtn.dataset.submenuId);
					}
				})
				
				renderCart();
				
			});
			
		</script>
		@yield('footer-scripts')
		<script src="/public/js/swiper-bundle.min.js"></script>
		<script src="/public/js/theme.js?v3"></script>
	</body>
</html>