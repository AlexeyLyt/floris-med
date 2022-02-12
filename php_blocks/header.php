<!-- ШАПКА САЙТА -->
<div class="header">
	<div class="header__wrapper">


		<div class="logo__wrapper">
			<a href="index.php"><img width="120" height="120" src="images/logo-main-5.png" alt="логотип"></a>
		</div>

    <div class="header__title-wrapper">
			<h3 class="header__title">
				<a href="index.php" class="header__title-text-1">ПАТРОНАЖНАЯ СЛУЖБА</a>
				<a href="index.php" class="header__title-text-2">ФЛОРИC-МЕД</a>
			</h3>
		</div>

		<div class="header__slogan-wrapper">
			<p class="header__slogan">Услуги сиделки в Москве и Области.</p>
			<div class="header__email-wrapper">
				<a class="header__email-link" href="mailto:floris-med@yandex.ru">
					<svg class="header__email-icon" width="24" height="24">
						<use xlink:href="#icon-email"></use>
					</svg>
					<p class="header__email-text" href="mailto:mail@htmlacademy.ru">floris-med@yandex.ru</p>
				</a>
			</div>
			<a class="header__callback-link header-callback-link-hide" href="#" data-text="Заказ обратного звонка" data-reveal-id="reveal-modal-callback" data-animation="fade">Обратный звонок</a>
			<p class="header-slogan-hide">Работаем круглосуточно</p>

		</div>

		<div class="header__contacts-wrapper">

			<div class="header__phone-wrapper">
				<svg class="header__phone-icon" width="24" height="24">
					<use xlink:href="#icon-whatsup1"></use>
				</svg>
				<a class="header__phone" href="tel:+7(965)2604613">+7 (965) 250-90-61</a>
			</div>

			<div class="header__mobile-wrapper">
				<svg class="header__mobile-icon" width="24" height="24">
							<use xlink:href="#icon-whatsup1"></use>
			</svg>
				<a class="header__mobile" href="tel:+7(964)7146093">+7 (964) 714-60-93</a>
			</div>

			<div class="header__remark-wrapper">
				<p class="header__remark">Работаем круглосуточно</p>
			</div>

			<div class="header__whatsup-wrapper">
				<svg class="header__whatsup-icon" width="24" height="24">
					<use xlink:href="#icon-phone"></use>
				</svg>
				<a class="header__whatsup" href="tel:+7(499)2888237">+7 (499) 288-82-37</a>
			</div>

			<!--<div class="header__whatsup-wrapper header__item">-->
		 <!-- 	<svg class="header__whatsup-icon" width="24" height="24">-->
		<!--      <use xlink:href="#icon-whatsup1"></use>-->
			<!--	</svg>-->
			<!--	<a class="header__whatsup" href="tel:+7(964)7146093">+7(964) 714-60-93</a>-->
		 <!--	</div>-->

		 <div class="header__phone2-wrapper">
			 <svg class="header__phone2-icon" width="24" height="24">
				 <use xlink:href="#icon-whatsup1"></use>
			 </svg>
			 <a class="header__phone" href="tel:+7(966)0310480">+7 (966) 031-04-80</a>
		 </div>

				<div class="header__callback-wrapper">
					<a class="header__callback-link" href="#" data-text="Заказ обратного звонка" data-reveal-id="reveal-modal-callback" data-animation="fade">Обратный звонок</a>
				</div>

				<div class="header__email2-wrapper">
					<a class="header__email-link header__item" href="mailto:floris-med@yandex.ru">
						<svg class="header__email-icon" width="24" height="24">
							<use xlink:href="#icon-email"></use>
						</svg>
						<p class="header__email-text">floris-med@yandex.ru</p>
					</a>
				</div>

			</div>

	</div>
</div> <!-- окончание header -->

<!--Всплывающее PopUp-окно Напишите нам -->
<section class="reveal-modal-callback">
		<div id="reveal-modal-callback" class="reveal-modal-callback__content">
			<h1 class="reveal-modal-callback__title">Свяжитесь с нами</h1>
			<form class="reveal-modal-callback__form" action="mail3.php" method="POST">
				<input class="reveal-modal-callback__inputs" type="text" name="fio" placeholder="Введите ваше имя" required=""><br>
				<input class="reveal-modal-callback__inputs" type="tel" name="phone" placeholder="Введите номер телефона" required=""><br>
				<button class="reveal-modal-callback__btn" type="submit" class="main-submit">ОТПРАВИТЬ ЗАПРОС</button>
			</form>
			<p class="reveal-modal-feedback__p">Наши менеджеры свяжутся с вами в течении 5-ти минут.</p>
			<a class="reveal-modal-callback__close">&#215;</a>
		</div>
  </section>