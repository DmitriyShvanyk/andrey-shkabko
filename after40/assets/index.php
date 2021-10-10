<?
include_once 'timer.php';

$arr = array('utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'ID_VK', 'cid');

foreach($arr as $name){

	$data = (!empty($_GET[$name])) ? $_GET[$name] : '';
	$input_text = htmlspecialchars($data);

	if(!empty($input_text)){
		setcookie("s_".$name, $input_text, time() + 2592000, '/', $_SERVER['SERVER_NAME']);
	}
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Как женщине тренироваться после 40 лет, чтобы похудеть без изнуряющих нагрузок и вреда для здоровья</title>
	<meta charset="utf-8">
	<meta name="keywords"
		content='Как женщине тренироваться после 40 лет, чтобы похудеть без изнуряющих нагрузок и вреда для здоровья'>
	<meta name="description"
		content='Как женщине тренироваться после 40 лет, чтобы похудеть без изнуряющих нагрузок и вреда для здоровья'>
	<meta name="format-detection" content="telephone=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<!-- favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- preload style -->
	<link rel="preload" href="css/style.min.css?v=10" as="style">

	<!-- main style -->
	<link href="css/style.min.css?v=10" rel="stylesheet">
</head>

<body>

	<!--root.begin-->
	<div class="root">

		<!--header.begin-->
		<header class="header">
			<div class="container header__container">

				<div class="header__content">
					<div class="header__event">Бесплатный мастер&#8209;класс</div>

					<h1 class="header__title f-bebas">
						Как женщине <span>тренироваться после 40 лет</span>,
						чтобы похудеть без изнуряющих нагрузок и вреда для здоровья
					</h1>
					<div class="header__date">
						<img class="header__date-icon" loading="lazy" src="img/header/clock.svg" alt="">
						<span class="header__date-text">
							<span><?php echo $day?> <?php echo $txtm ?></span> в 19:00 по МСК
						</span>
					</div>

					<ul class="header__list">
						<li class="header__list-item">
							<img class="header__list-icon" loading="lazy" src="img/header/i1.svg" alt="">
							Свободное участие
						</li>
						<li class="header__list-item">
							<img class="header__list-icon" loading="lazy" src="img/header/i2.svg" alt="">
							Онлайн из любой точки мира
						</li>
					</ul>
				</div>

				<div class="header__women">
					<div class="header__author">
						<div class="header__author-inner">
							мастер&#8209;класс<br>
							<strong>Наталии Прохоровой</strong>
						</div>
					</div>
					<img class="header__women-img" loading="lazy" src="img/header/women.png"
						srcset="img/header/women@2x.png 2x" alt="">
					<img class="header__ked" loading="lazy" src="img/header/ked.png" srcset="img/header/ked@2x.png 2x"
						alt="">
				</div>

			</div>
		</header>
		<!--header.end-->

		<!--content.begin-->
		<main class="main">

			<!--section 1-->
			<section class="s1">
				<div class="container s1__container">
					<div class="alert s1__alert">
						<div class="alert__content">
							<div class="alert__caption">Новая молодость за <strong>15 минут</strong> в день</div>
							<div class="btn-container text-center">
								<a data-fancybox data-src="#hidden-content" href="javascript:;" class="btn btn--active">
									<span class="btn__inner">
										<span class="btn__icon">
											<img class="btn__icon-img" loading="lazy" src="img/icons/doc.svg" alt="">
										</span>
										Занять своё место на&nbsp;мастер&#8209;классе
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--section 1-->

			<!--section 2-->
			<section class="s2">
				<div class="container s2__container">
					<h2 class="title s2__title">
						Фраза <span>«После 40 жизнь только начинается»</span>
						набила оскомину, но вы по-прежнему не понимаете, что это значит?
					</h2>
					<p class="lead s2__lead">
						Предположу, что...
					</p>
					<div class="blocks s2__blocks">
						<img class="block__decor" loading="lazy" src="img/s2/decor1.png" alt="">
						<div class="blocks__inner">
							<div class="row">
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i1.svg" alt="">
										<div class="block__caption">
											Дети уже подросли, но времени на восстановление прежних форм не хватает;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i6.svg" alt="">
										<div class="block__caption">
											Вы заметили, что заниматься и поддерживать стройную фигуру с годами стало
											сложнее;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i2.svg" alt="">
										<div class="block__caption">
											В юности вы не занимались спортом и теперь боитесь начать;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i7.svg" alt="">
										<div class="block__caption">
											Хочется избавиться от лишних килограммов и привести тело в тонус;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i3.svg" alt="">
										<div class="block__caption">
											Переживаете, что фитнес — это большие траты, и хотите их избежать;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i8.svg" alt="">
										<div class="block__caption">
											Шоппинг больше не радует, потому что одежда «не сидит».
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i4.svg" alt="">
										<div class="block__caption">
											100 раз начинали и бросали, потому что спорт — это скучно, травматично,
											тяжело;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i9.svg" alt="">
										<div class="block__caption">
											Вам не хватает мотивации тренироваться регулярно;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i5.svg" alt="">
										<div class="block__caption">
											В медкарте длинный список противопоказаний, однако вы понимаете, что
											физическая нагрузка необходима;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s2/i10.svg" alt="">
										<div class="block__caption">
											Покупали дорогостоящие программы, но не увидели результата;
										</div>
									</div>
								</div>
							</div>
						</div>
						<img class="block__decor" loading="lazy" src="img/s2/decor2.png" alt="">
					</div>
				</div>
			</section>
			<!--section 2-->

			<!--section 3-->
			<section class="s3">
				<div class="container s3__container">
					<h2 class="title s3__title">
						На мастер&#8209;классе <span>я&nbsp;расскажу:</span>
					</h2>
					<div class="s3__items">
						<div class="s3__item">
							<div class="s3__num">1</div>
							<div class="s3__text">
								Как эффективно бороться со стрессом и восстанавливать энергию?
							</div>
						</div>
						<div class="s3__item">
							<div class="s3__num">2</div>
							<div class="s3__text">
								Особенности женского организма после 40: как обрести и сохранить новую молодость?
							</div>
						</div>
						<div class="s3__item">
							<div class="s3__num">3</div>
							<div class="s3__text">
								Чем опасен классический фитнес и групповые тренировки в зале?
							</div>
						</div>
						<div class="s3__item">
							<div class="s3__num">4</div>
							<div class="s3__text">
								Как выбрать спорт, который не навредит и подходит лично вам?
							</div>
						</div>
						<div class="s3__item">
							<div class="s3__num">5</div>
							<div class="s3__text">
								Чем отличаются тренировки в 20 и в 40 лет?
							</div>
						</div>
						<div class="s3__item">
							<div class="s3__num">6</div>
							<div class="s3__text">
								Как тренироваться, имея ограничения по здоровью?
							</div>
						</div>
						<div class="s3__item">
							<div class="s3__num">7</div>
							<div class="s3__text">
								Выбор нагрузки с учетом медицинских показани и гормональных изменений.
							</div>
						</div>
						<div class="s3__item">
							<div class="s3__num">8</div>
							<div class="s3__text">
								Как улучшить здоровье, фигуру и качество жизни за 15 минут в день?
							</div>
						</div>
						<img class="s3__women" loading="lazy" src="img/s3/women.png" srcset="img/s3/women@2x.png 2x"
							alt="">
					</div>
				</div>
			</section>
			<!--section 3-->

			<!--section 4-->
			<section class="s4">
				<div class="container s4__container">
					<div class="alert s4__alert">
						<div class="alert__content">
							<div class="alert__caption">Приходите, это <strong>бесплатно!</strong></div>
							<div class="btn-container text-center">
								<a data-fancybox data-src="#hidden-content" href="javascript:;" class="btn btn--active">
									<span class="btn__inner">
										<span class="btn__icon">
											<img class="btn__icon-img" loading="lazy" src="img/icons/doc.svg" alt="">
										</span>
										записаться на мастер класс
									</span>
								</a>
							</div>
							<div class="alert__push">
								<img class="alert__push-arrow" loading="lazy" src="img/icons/arrow.svg" alt="">
								<span class="alert__push-text">Кликните на кнопку</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--section 4-->

			<!--section 5-->
			<section class="s5">
				<div class="container s5__container">
					<h2 class="title s5__title">
						Несколько <span>ярких результатов</span>
					</h2>
					<div class="swiper-container reviews__swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img class="reviews__img" loading="lazy" src="img/s5/01.png"
									srcset="img/s5/01@2x.png 2x" alt="">
							</div>
							<div class="swiper-slide">
								<img class="reviews__img" loading="lazy" src="img/s5/02.png"
									srcset="img/s5/02@2x.png 2x" alt="">
							</div>
							<div class="swiper-slide">
								<img class="reviews__img" loading="lazy" src="img/s5/03.png"
									srcset="img/s5/03@2x.png 2x" alt="">
							</div>
						</div>
						<div class="swiper-pagination d-block d-md-flex"></div>
					</div>
				</div>
				<img class="s5__decor-1" loading="lazy" src="img/s5/decor1.png" alt="">
				<img class="s5__decor-2" loading="lazy" src="img/s5/decor2.png" alt="">
			</section>
			<!--section 5-->

			<!--section 6-->
			<section class="s2 s6">
				<div class="container s2__container">

					<h2 class="title s2__title">
						Я уверена, это <span>должна знать<br> каждая женщина</span> после 40, ведь...
					</h2>

					<div class="blocks s2__blocks">
						<div class="blocks__inner">
							<div class="row">
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s6/i1.svg" alt="">
										<div class="block__caption">
											Организм активно перестраивается, но никто не выдаёт инструкций к нашей
											новой версии;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s6/i2.svg" alt="">
										<div class="block__caption">
											Мы повзрослели и уже не готовы мириться с дискомфортом — физическим,
											психологическим, материальным;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s6/i3.svg" alt="">
										<div class="block__caption">
											Со временем все сложнее сохранять здоровье и привлекательность;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s6/i4.svg" alt="">
										<div class="block__caption">
											Все синицы давно в руках: дети подросли, карьера на пике, дом — «полная
											чаша»;
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block">
										<img class="block__icon" loading="lazy" src="img/s6/i5.svg" alt="">
										<div class="block__caption">
											По-прежнему хочется внимания, флирта, невзирая на социальные ярлыки
											«это уже не для тебя», «так вести себя не солидно»;
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!--section 6-->

			<!--section 7-->
			<section class="s7">
				<div class="container s7__container">

					<div class="s7__time">
						<img class="s7__time-img" loading="lazy" src="img/s7/h.png" srcset="img/s7/h@2x.png 2x" alt="">
						<div class="s7__time-text">Самое время поймать журавля — наслаждаться отражением в зеркале,
							легкостью, путешествиями, свиданиями, комплиментами.</div>
					</div>

					<h2 class="title s7__title f-bebas">
						Самое время быть собой!
					</h2>

					<div class="s7__15min">
						Чтобы вернуть уверенность и получить Новую молодость,
						<strong>достаточно 15 минут</strong> в день: конкретные шаги на мастер&#8209;классе
						<img class="s7__15min-arrow" loading="lazy" src="img/s7/arrow.svg" alt="">
					</div>

					<div class="alert s7__alert">
						<div class="alert__content">
							<div class="btn-container text-center">
								<a data-fancybox data-src="#hidden-content" href="javascript:;"
									class="btn btn--active-white btn--active">
									<span class="btn__inner">
										<span class="btn__icon">
											<img class="btn__icon-img" loading="lazy" src="img/icons/doc-white.svg"
												alt="">
										</span>
										записаться на мастер класс
									</span>
								</a>
							</div>
						</div>
						<img class="s7__alert-bg" loading="lazy" src="img/s7/alert-bg.png" alt="">
					</div>

				</div>
				<img class="s7__decor-1" loading="lazy" src="img/s7/decor1.png" alt="">
				<img class="s7__decor-2" loading="lazy" src="img/s7/decor2.png" srcset="img/s7/decor2@2x.png 2x" alt="">
			</section>
			<!--section 7-->

			<!--section 8-->
			<section class="s8">
				<div class="container s8__container">
					<h2 class="title s8__title">
						<span>Познакомимся</span> поближе?
					</h2>

					<div class="s8__box">
						<div class="row">
							<div class="col-lg-6">
								<div class="s8__pict">
									<img class="s8__img" loading="lazy" src="img/s8/women.png"
										srcset="img/s8/women@2x.png 2x" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="s8__content">
									<div class="s8__desc">
										<h2 class="title s8__title-2 f-bebas">
											Наталия Прохорова
										</h2>
										<p class="lead s8__lead">ваш персональный тренер</p>
									</div>
									<img class="s8__img-arrow" loading="lazy" src="img/s8/arrow.png" alt="">

									<ul class="s8__list">
										<li class="s8__list-item">
											<img class="s8__list-icon" loading="lazy" src="img/s8/star.svg" alt="">
											Мастер спорта по лыжным гонкам
										</li>
										<li class="s8__list-item">
											<img class="s8__list-icon" loading="lazy" src="img/s8/star.svg" alt="">
											Педагогический стаж 20 лет
										</li>
										<li class="s8__list-item">
											<img class="s8__list-icon" loading="lazy" src="img/s8/star.svg" alt="">
											Многократная чемпионка России по легкой атлетике
										</li>
										<li class="s8__list-item">
											<img class="s8__list-icon" loading="lazy" src="img/s8/star.svg" alt="">
											Персональный офлайн и онлайн-тренер
										</li>
										<li class="s8__list-item">
											<img class="s8__list-icon" loading="lazy" src="img/s8/star.svg" alt="">
											Помогла обрести вторую молодость сотням женщин
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="how">
						<div class="how__content">
							<h2 class="title how__title">Как все пройдет?</h2>
							<h3 class="how__date f-bebas"><?php echo $day?> <?php echo $txtm ?> в 19:15 по Москве </h3>
							<p class="lead how__lead">
								Я проведу онлайн-трансляцию:<br>
								смотрите на любом устройстве с выходом в интернет
							</p>

							<div class="how__push">
								<img class="how__push-arrow" loading="lazy" src="img/s7/arrow.svg" alt="">
								Просто жмите на кнопку и&nbsp;<strong>регистрируйтесь на мастер&#8209;класс</strong>
							</div>

							<div class="btn-container text-center">
								<a data-fancybox data-src="#hidden-content" href="javascript:;" class="btn btn--active">
									<span class="btn__inner">
										<span class="btn__icon">
											<img class="btn__icon-img" loading="lazy" src="img/icons/doc.svg" alt="">
										</span>
										Участвовать
									</span>
								</a>
							</div>
						</div>
						<img class="how__pc" src="img/how/pc.png" loading="lazy" srcset="img/how/pc@2x.png" alt="">
					</div>

				</div>
				<img class="s8__decor" src="img/s8/decor.png" loading="lazy" alt="">
			</section>
			<!--section 8-->

			<!--start.begin-->
			<section class="start">
				<div class="container start__container">
					<h2 class="title start__title">
						Трансляция <span>начнется через...</span>
					</h2>
					<!--<div class="countdown start__countdown"></div>-->

					<div class="clock">
						<div class="column-time days">
							<div class="timer" id="days">00</div>
							<div class="text-time">Дней</div>
						</div>
						<div class="column-time">
							<div class="timer" id="hours">00</div>
							<div class="text-time">Часов</div>
						</div>
						<div class="column-time">
							<div class="timer" id="minutes">00</div>
							<div class="text-time">Минут</div>
						</div>
						<div class="column-time">
							<div class="timer" id="seconds">00</div>
							<div class="text-time">Секунд</div>
						</div>
					</div>
				</div>
			</section>
			<!--start.end-->

			<!--reviews.begin-->
			<section class="reviews">
				<div class="container reviews__container">
					<h2 class="title reviews__title">
						Еще несколько <span>результатов учеников</span>
					</h2>

					<div class="after-before d-none d-md-block">
						<div class="row">
							<div class="col-sm-3">
								<div class="after-before__pict">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/01.png" alt="">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="after-before__pict">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/02.png" alt="">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="after-before__pict">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/03.png" alt="">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="after-before__pict">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/04.png" alt="">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="after-before__pict">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/05.png" alt="">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="after-before__pict">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/06.png" alt="">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="after-before__pict">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/07.png" alt="">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="after-before__pict">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/08.png" alt="">
								</div>
							</div>
						</div>
					</div>

					<div class="ab d-block d-md-none">
						<div class="swiper-container ab__swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/01.png" alt="">
								</div>
								<div class="swiper-slide">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/02.png" alt="">
								</div>
								<div class="swiper-slide">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/03.png" alt="">
								</div>
								<div class="swiper-slide">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/04.png" alt="">
								</div>
								<div class="swiper-slide">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/05.png" alt="">
								</div>
								<div class="swiper-slide">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/06.png" alt="">
								</div>
								<div class="swiper-slide">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/07.png" alt="">
								</div>
								<div class="swiper-slide">
									<img class="after-before__img" loading="lazy" src="img/afterbefore/08.png" alt="">
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				<img class="reviews__decor-1" loading="lazy" src="img/afterbefore/decor1.png" alt="">
				<img class="reviews__decor-2" loading="lazy" src="img/afterbefore/decor2.png" alt="">
			</section>
			<!--reviews.end-->

		</main>
		<!--content.end-->

		<!--footer.begin-->
		<footer class="footer">
			<img class="d-block w-100" loading="lazy" src="img/footer.png" alt="">
		</footer>
		<!--content.end-->

	</div>
	<!--root.end-->

	<!--modal1.begin-->
	<div style="display:none;" id="hidden-content">
		<div class="header-popup">
			<div class="progres-bar-wrap">
				<div class="progres-bar-descr">50% ЗАВЕРШЕНО</div>
				<div class="lp-progressbar-react__bar lp-progressbar-animation">
					<div class="bar-completed">
						<div class="is-animating"></div>
					</div>
				</div>
			</div>
			<div class="left-popup-seide">
				<img class="lazyload" loading="lazy" src="#" data-src="images/key.png" alt="">
			</div>
			<div class="right-popup-side">
				<div class="title-form">
					Займите свое место пока они еще&nbsp;есть!
				</div>
				<?
				$arr = array('utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'ID_VK', 'cid');
				$add = '';
				foreach($arr as $name){
					$data = (!empty($_GET[$name])) ? $_GET[$name] : '';
					$input_text = htmlspecialchars($data);
					$add .= '&'.$name.'='.$input_text;
				}
				?>

				<form class="one-form" id="ltForm5993854"
					action="https://online.kizos.ru/pl/lite/block-public/process-html?id=1076353851" method="post"
					data-open-new-window="0">
					<input type="hidden" name="formParams[setted_offer_id]">
					<input name="formParams[userCustomFields][578217]" type="hidden" value="<?=$_GET['ID_VK']?>">
					<input name="formParams[userCustomFields][578218]" type="hidden" value="<?=$_GET['utm_source']?>">
					<input name="formParams[userCustomFields][578219]" type="hidden" value="<?=$_GET['utm_medium']?>">
					<input name="formParams[userCustomFields][578220]" type="hidden" value="<?=$_GET['utm_campaign']?>">
					<input name="formParams[userCustomFields][578221]" type="hidden" value="<?=$_GET['utm_content']?>">
					<input name="formParams[userCustomFields][578222]" type="hidden" value="<?=$_GET['utm_term']?>">
					<input name="formParams[userCustomFields][578223]" type="hidden" value="<?=$_GET['cid']?>">
					<label>
						<input type="text" maxlength="60" data-validation="email" placeholder="Введите свой E-mail"
							name="formParams[email]" value="">
					</label>
					<button type="submit" id="button5725871" class="feedback"
						onclick="if(window['btnprs60cb361349dd3']){return false;}window['btnprs60cb361349dd3']=true;setTimeout(function(){window['btnprs60cb361349dd3']=false},6000);return true;">
						Зарегистрироваться!
					</button>
					<input type="hidden" id="42136460cb3613384d0" name="__gc__internal__form__helper"
						class="__gc__internal__form__helper" value="">
					<input type="hidden" id="42136460cb3613384d0ref" name="__gc__internal__form__helper_ref"
						class="__gc__internal__form__helper_ref" value="">
					<input type="hidden" name="requestTime" value="1623930387">
					<input type="hidden" name="requestSimpleSign" value="19be2214284f2bbb5b98955b9af324d1">
					<input type="hidden" name="isHtmlWidget" value="1" />
				</form>
				<script>
					window.addEventListener('load', function () {
						let loc = document.getElementById("42136460cb3613384d0");
						loc.value = window.location.href;
						let ref = document.getElementById("42136460cb3613384d0ref");
						ref.value = document.referrer;

						let statUrl = "https://online.kizos.ru/stat/counter?ref=" + encodeURIComponent(document.referrer) +
							"&loc=" + encodeURIComponent(document.location.href);
						document.getElementById('gccounterImgContainer').innerHTML =
							"<img width=1 height=1 style='display:none' id='gccounterImg' src='" + statUrl + "'/>";
					});
				</script>
				<div class="privacy-police">
					Отправляя форму, вы&nbsp;соглашаетесь с&nbsp;действующей <a
						href="https://shkolaketo.ru/docs/privacy.html" target="_blank">политикой&nbsp;приватности</a>.
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--modal1.end-->

	<!--script.begin-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="vendor/fancybox/jquery.fancybox.min.js"></script>
	<script defer src="vendor/swiper/swiper-bundle.min.js"></script>
	<script defer src="js/main.js?v=10"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.4/moment-timezone-with-data.min.js"></script>
	<script>
        $(function(){
            function timer(settings){
                var config = {
                    endDate: '<?php echo $date->format('Y-m-d');?> 19:00',
                    timeZone: 'Europe/Moscow',
                    hours: $('#hours'),
                    minutes: $('#minutes'),
                    seconds: $('#seconds'),
                    newSubMessage: 'and should be back online in a few minutes...'
                };
                function prependZero(number){
                    return number < 10 ? '0' + number : number;
                }
                $.extend(true, config, settings || {});
                var currentTime = moment();
                var endDate = moment.tz(config.endDate, config.timeZone);
                var diffTime = endDate.valueOf() - currentTime.valueOf();
                var duration = moment.duration(diffTime, 'milliseconds');
                var days = duration.days();
                var interval = 1000;
                var subMessage = $('.sub-message');
                var clock = $('.clock');
                if(diffTime < 0){
                    endEvent(subMessage, config.newSubMessage, clock);
                    return;
                }
                if(days > 0){
                    $('#days').text(prependZero(days));
                    $('.days').css('display', 'inline-block');
                }
                var intervalID = setInterval(function(){
                    duration = moment.duration(duration - interval, 'milliseconds');
                    var hours = duration.hours(),
                    minutes = duration.minutes(),
                    seconds = duration.seconds();
                    days = duration.days();
                    if(hours  <= 0 && minutes <= 0 && seconds  <= 0 && days <= 0){
                        clearInterval(intervalID);
                        endEvent(subMessage, config.newSubMessage, clock);
                        window.location.reload();
                    }
                    if(days < 0){
                        $('.days').hide();
                    }
                    $('#days').text(prependZero(days));
                    config.hours.text(prependZero(hours));
                    config.minutes.text(prependZero(minutes));
                    config.seconds.text(prependZero(seconds));
                }, interval);
            }
            function endEvent($el, newText, hideEl){
                $el.text(newText);
                hideEl.hide();
            }
            timer();

            
            let roistat_visit_val = 0;

            window.roistatVisitCallback = function (visitId) {
                roistat_visit_val = visitId;

                if (roistat_visit_val !== 0 && roistat_visit_val.length > 2) {
                    $('#roistat_visit').val(roistat_visit_val);
                }
            }

            var inputCID = document.querySelector(' input[name="formParams[userCustomFields][578223]"]');
            var inputRoistat = document.querySelector(' input[name="formParams[userCustomFields][276653]"]');

            window.roistatVisitCallback = function (visitId) {
                //console.log( 'Сработка роистат' );
                let roistat_visit_val = visitId;

                // если значение в поле input roistat пустое и мы нашли roistat, то записываем в поле
                if (inputRoistat.value == '' && /^\d*$/.test(roistat_visit_val)) {
                    inputRoistat.value = roistat_visit_val;
                    //console.log( roistat_visit_val );
                } else {
                    // console.log('Roistat не найден!');
                }
            }

            let setCookie = setInterval(function () {
                // если значение в поле input cid пустое и мы нашли cid из куки, то записываем в поле
                if (inputCID.value == '' && /^\d*\.\d*$/.test(findCID())) {
                    inputCID.value = findCID();
                    //console.log( findCID() );

                    // удаляем повторяющийся вызов
                    clearInterval(setCookie);

                } else {
                    //console.log('Куки не найдены!');
                }

            }, 300)


            function findCID() {
                var match = document.cookie.match('(?:^|;)\\s*_ga=([^;]*)');
                var raw = (match) ? decodeURIComponent(match[1]) : null;
                if (raw) {
                    match = raw.match(/(\d+\.\d+)$/);
                }
                var gacid = (match) ? match[1] : null;
                if (gacid) {
                    return gacid;
                }
            }

			function setEventDate(){
				const dateEl = document.querySelectorAll('.js-date');
				const months = ['января', 'февраля', 'марта', 'апреля','мая', 'июня', 'июля', 'августа','сентября', 'октября', 'ноября', 'декабря'];
				const d = new Date();

				if(d.getHours() < 19){
					dateEl.forEach(el => el.textContent = `${d.getDate()} ${months[d.getMonth()]}`);
				}
				else {
					dateEl.forEach(el => el.textContent = `${d.getDate() + 1} ${months[d.getMonth()]}`);					
				}
			}

			setEventDate();
        });        
    </script>
	<!--script.end-->

</body>

</html>