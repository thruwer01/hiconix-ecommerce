@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">О компании</li>
		</ol>
	</nav>
</div>


<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><a href="/about/about-us">О нас</a></li>
				<li><a href="/publications/news">Новости</a></li>
				<li><a href="/about/licenses">Лицензии</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="sub-menu d-none d-sm-block">
	<div class="descmenulist">
		<ul>
			<li><a href="/about/about-us">О нас</a></li>
			<li><a href="/publications/news">Новости</a></li>
			<li><a href="/about/licenses">Лицензии</a></li>
		</ul>
	</div>
</div>




<div class="main-content">
	<div class="about-content main-col">
		<div class="about-inner-content">
			<div class="about-heading-block">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="about-heading-block-content">
								<div class="page-title">
									<h1>Компания Хиконикс - надёжный советник и партнёр</h1>
								</div>
								<div class="about-heading-block-inner-content">
									<div class="about-heading-block-title-under">25 лет вместе с Вами!</div>
									<div class="about-heading-block-text">Благодаря многолетнему опыту, который
										составляет уже более 25 лет, мы выработали оптимальную схему работы с нашими
										партнерами. Компания «Хиконикс» не просто поставщик оборудования, но и
										надежный партнер для вашего бизнеса. Мы поможем вам подобрать нужное
										оборудование, в короткие сроки <a href="/support/delivery/">доставим</a>
										его, а также при необходимости произведем диагностику. В нашем каталоге
										более 10 000 наименований запчастей. Нашим партнерам мы предлагаем выгодные
										программы кредитования и эксклюзивные условия для продажи оборудования в
									своем регионе.</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="about-heading-block-image"
							data-bgr-webp="/local/templates/hiconix/img/about-heading-block-image.png"
							style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/about-heading-block-image.png.webp?166135009412926);">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="advantagesSwiper-container">
					<div class="swiper advantagesSwiper">
						<div class="swiper-wrapper pt-3 pb-3">
							<div class="swiper-slide">
								
								<div class="about-advantages-slider-item">
									<div class="about-advantages-slider-item-icon"
									style="background-image: url(/upload/iblock/fd4/fd4efe5a3dca011f5dc3326e40411524.svg);">
									</div>
									<div class="about-advantages-slider-item-title">
									Техническая и маркетинговая поддержка </div>
									<div class="about-advantages-slider-item-text">Полная проектная, техническая
										и гарантийная поддержка, помощь в подборе оборудования, рекламные
									материалы для продвижения</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="about-advantages-slider-item">
									<div class="about-advantages-slider-item-icon"
									style="background-image: url(/upload/iblock/481/481eb26b29634aa53bb16df4cfdbaccf.svg);">
									</div>
									<div class="about-advantages-slider-item-title">
									Служба доставки </div>
									<div class="about-advantages-slider-item-text">Популярные модели всегда в
									наличии на складе с удобным подъездом для большегрузов </div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="about-advantages-slider-item">
									<div class="about-advantages-slider-item-icon"
									style="background-image: url(/upload/iblock/cb1/cb1bd92608bca607c63d6964fbf4420a.svg);">
									</div>
									<div class="about-advantages-slider-item-title">
									Федеральная складская программа </div>
									<div class="about-advantages-slider-item-text">По всей России доставляем
										грузы любой транспортной компанией, по Москве и области - собственной
									службой доставки.</div>
								</div>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>						
					</div>
				</div>
			</div>
			
			
			<!-- Brands -->
			<div class="container pt-5 mb-5">
				<h2 class="pb-2">Партнеры</h2>
				
				<div class="brandSwiper-container">
					<div class="swiper brandSwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide text-center mt-3">
								<a href="/kondicionery/aux/">
									<img src="/images/brands/auxair.png">
								</a>
							</div>
							<div class="swiper-slide text-center mt-3">
								<a href="/kondicionery/ecoclima/">
									<img src="/images/brands/ecoclima.png">
								</a>
							</div>
							<div class="swiper-slide text-center mt-3">
								<a href="/kondicionery/electrolux/">
									<img src="/images/brands/electrolux.png">
								</a>
							</div>
							<div class="swiper-slide text-center mt-3">
								<a href="/kondicionery/panasonic/">
									<img src="/images/brands/panasonic.png">
								</a>
							</div>
							<div class="swiper-slide text-center mt-3">
								<a href="/ventilyaciya/komfovent/">
									<img src="/images/brands/komfovent.png">
								</a>
							</div>
							
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>					
					</div>
				</div>
			</div>			
			
			<!--
			<div class="container pt-5 mb-5">
				<h2 class="pb-2">Компания Хиконикс в лицах</h2>
				
				<div class="persSwiper-container">
					<div class="swiper persSwiper">
						<div class="swiper-wrapper">
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/894/894e9f15effd6b2328ca2fe4b796ff3f.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/894/894e9f15effd6b2328ca2fe4b796ff3f.jpg.webp?16596823014572);"></div>
									<div class="our-faces-slider-item-title">Василий Крошка</div>
									<div class="our-faces-slider-item-text">Генеральный директор</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/6eb/6eb29d74e4ecfbb24f9cbeff915492c2.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/6eb/6eb29d74e4ecfbb24f9cbeff915492c2.jpg.webp?16596823024828);"></div>
									<div class="our-faces-slider-item-title">Дмитрий Макеев</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>					
							</div>
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/5ad/5ad8292ae7ba8656404f1f92c802cbcc.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/5ad/5ad8292ae7ba8656404f1f92c802cbcc.jpg.webp?16596823023402);"></div>
									<div class="our-faces-slider-item-title">Михаил Ижицкий</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/c10/c1004eef976a13df9fc48c6c353271bd.jpg" style="background-image: url(/upload/iblock/c10/c1004eef976a13df9fc48c6c353271bd.jpg);"></div>
									<div class="our-faces-slider-item-title">Борис Кузьмин</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>				
							</div>
							
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/a8e/a8e5ad1c0d6a867aa70378018ac3e735.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/a8e/a8e5ad1c0d6a867aa70378018ac3e735.jpg.webp?16596823024120);"></div>
									<div class="our-faces-slider-item-title">Виталий Федотов</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/967/967820ffb0604c437f95d61bf1bf0e57.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/967/967820ffb0604c437f95d61bf1bf0e57.jpg.webp?16596823014332);"></div>
									<div class="our-faces-slider-item-title">Анатолий Чугреев</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>				
							</div>
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/fed/fed792afc15df8784e51077d9de8e46b.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/fed/fed792afc15df8784e51077d9de8e46b.jpg.webp?16596823024860);"></div>
									<div class="our-faces-slider-item-title">Ревшен Бердиев</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/be5/be57f12adab319b873b95f3f6fb6abbd.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/be5/be57f12adab319b873b95f3f6fb6abbd.jpg.webp?16596823014248);"></div>
									<div class="our-faces-slider-item-title">Олег Афанасьев</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>				
							</div>
							
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/c06/c06f68e1be78b888dec951cd8fa7e430.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/c06/c06f68e1be78b888dec951cd8fa7e430.jpg.webp?16596823015762);"></div>
									<div class="our-faces-slider-item-title">Елена Москвина</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/530/530157c715facdd72e5976db9b7ff59f.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/530/530157c715facdd72e5976db9b7ff59f.jpg.webp?16596823023906);"></div>
									<div class="our-faces-slider-item-title">Александр Толстов</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>				
							</div>
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/798/7985ab44fd82073fb489862ddecb85fc.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/798/7985ab44fd82073fb489862ddecb85fc.jpg.webp?16596823024386);"></div>
									<div class="our-faces-slider-item-title">Сергей Разумовский</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/982/9828366b4a2c8b023627431c20478950.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/982/9828366b4a2c8b023627431c20478950.jpg.webp?16596823024100);"></div>
									<div class="our-faces-slider-item-title">Ангелина Злобина</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>				
							</div>
							
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/520/52043aa44765910b5743a9812e04c997.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/520/52043aa44765910b5743a9812e04c997.jpg.webp?16596823025110);"></div>
									<div class="our-faces-slider-item-title">Юлия Яговкина</div>
									<div class="our-faces-slider-item-text">Менеджер отдела продаж</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/cf5/cf57f04f771ff97eed9b090a56b86f9e.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/cf5/cf57f04f771ff97eed9b090a56b86f9e.jpg.webp?16596823013680);"></div>
									<div class="our-faces-slider-item-title">Игорь Шушвалов</div>
									<div class="our-faces-slider-item-text">Коммерческий директор</div>
								</div>				
							</div>
							
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/c10/c1004eef976a13df9fc48c6c353271bd.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/c10/c1004eef976a13df9fc48c6c353271bd.jpg.webp?165968230322658);"></div>
									<div class="our-faces-slider-item-title">Фарид Мустафин</div>
									<div class="our-faces-slider-item-text">Директор по маркетингу</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/413/413e39b365431493d83f29ebaf83900d.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/413/413e39b365431493d83f29ebaf83900d.jpg.webp?16596823013122);"></div>
									<div class="our-faces-slider-item-title">Михаил Малинин</div>
									<div class="our-faces-slider-item-text">Юрисконсульт</div>
								</div>				
							</div>
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/781/78197e7ae368e8ceddffd52105e135c7.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/781/78197e7ae368e8ceddffd52105e135c7.jpg.webp?16596823014574);"></div>
									<div class="our-faces-slider-item-title">Евгений Сторонкин</div>
									<div class="our-faces-slider-item-text">Менеджер по продукту Electrolux</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/e35/e352f481788ba2566693f133eca815f0.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/e35/e352f481788ba2566693f133eca815f0.jpg.webp?16596823023356);"></div>
									<div class="our-faces-slider-item-title">Александр Ивлев</div>
									<div class="our-faces-slider-item-text">Менеджер по продукту Mitsubishi Electric</div>
								</div>				
							</div>
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/a26/a26f4cf3fca79ac1eed44cb0b21456e1.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/a26/a26f4cf3fca79ac1eed44cb0b21456e1.jpg.webp?16596823014202);"></div>
									<div class="our-faces-slider-item-title">Елена Ершова</div>
									<div class="our-faces-slider-item-text">Главный бухгалтер</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/8aa/8aa6d4a31a9d6cb339f5ce9ba87ead0f.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/8aa/8aa6d4a31a9d6cb339f5ce9ba87ead0f.jpg.webp?16596823024252);"></div>
									<div class="our-faces-slider-item-title">Екатерина Созонтова</div>
									<div class="our-faces-slider-item-text">Менеджер по продукту AUX</div>
								</div>				
							</div>
							
							
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/daf/daf66ec179bd3426d89e33ba53357625.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/daf/daf66ec179bd3426d89e33ba53357625.jpg.webp?16596823013802);"></div>
									<div class="our-faces-slider-item-title">Павел Николаев</div>
									<div class="our-faces-slider-item-text">Директор по развитию</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/618/6183d7f001526afadc6382efde684131.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/618/6183d7f001526afadc6382efde684131.jpg.webp?16596823014868);"></div>
									<div class="our-faces-slider-item-title">Илья Сидорин</div>
									<div class="our-faces-slider-item-text">Менеджер отдела развития</div>
								</div>				
							</div>
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/0de/0de693bd7b6f91359e11c31832fa099c.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/0de/0de693bd7b6f91359e11c31832fa099c.jpg.webp?16596823024294);"></div>
									<div class="our-faces-slider-item-title">Юлия Савина</div>
									<div class="our-faces-slider-item-text">Секретарь</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/1ae/1ae3b3249cbcddf28ff36b2170c34e1a.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/1ae/1ae3b3249cbcddf28ff36b2170c34e1a.jpg.webp?16596823035430);"></div>
									<div class="our-faces-slider-item-title">Ляйсан Кузьмина</div>
									<div class="our-faces-slider-item-text">Специалист отдела развития</div>
								</div>				
							</div>
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/1b6/1b6c6df1d0aa9700be084b1d42f882fa.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/1b6/1b6c6df1d0aa9700be084b1d42f882fa.jpg.webp?16596823023768);"></div>
									<div class="our-faces-slider-item-title">Артём Козеев</div>
									<div class="our-faces-slider-item-text">Арт-директор</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/98c/98c2f7ad972eed45d0d6fbfe66788b97.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/98c/98c2f7ad972eed45d0d6fbfe66788b97.jpg.webp?16596823014614);"></div>
									<div class="our-faces-slider-item-title">Алексей Бурдаев</div>
									<div class="our-faces-slider-item-text">Инженер</div>
								</div>				
							</div>
							
							
							
							
							
							<div class="swiper-slide">
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/c10/women-icon.jpg" style="background-image: url(/upload/iblock/c10/women-icon.jpg);"></div>
									<div class="our-faces-slider-item-title">Рабовская Кристина</div>
									<div class="our-faces-slider-item-text">Секретарь</div>
								</div>
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/beb/beba0cb8e9be315ced7b70b876d50c47.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/beb/beba0cb8e9be315ced7b70b876d50c47.jpg.webp?16596823024458);"></div>
									<div class="our-faces-slider-item-title">Дмитрий Афонин</div>
									<div class="our-faces-slider-item-text">Специалист сервисной службы</div>
								</div>				
							</div>
							
							
							
							
							<div class="swiper-slide">
							
								<div class="our-faces-slider-item">
									<div class="our-faces-slider-item-image" data-bgr-webp="/upload/iblock/28c/28cdb939276b05db63864e284ce0cdf8.jpg" style="background-image: url(/upload/delight.webpconverter/upload/iblock/28c/28cdb939276b05db63864e284ce0cdf8.jpg.webp?16596823013824);"></div>
									<div class="our-faces-slider-item-title">Павел Максимов</div>
									<div class="our-faces-slider-item-text">Руководитель инженерной группы</div>
								</div>				
							</div>
							
							
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>					
					</div>
				</div>
			</div>		
			-->
			
			
		</div>
	</div>
</div>

@endsection