<footer class="s-site-footer">
	<div class="container">
		<div class="footer">

			<div class="footer__left">
				<img src="/img/logo-white.svg" alt="logo" class="footer__logo">
				<div class="lead footer__logo-descr">Адсорбционные Газовые Системы</div>
				<div class="text-small">Инжиниринговая компания полного цикла</div>
				<div class="footer__copy text-small">(с) <?=date('Y')?> Все права защишены</div>
			</div>

			<div class="footer__nav">
				<a href="/products/">Наша продукция</a>
				<a href="/services/">Наши услуги</a>
				<a href="/cases/">Выполненные проекты</a>
				<a href="/info/">Полезная информация</a>
				<a href="/news/">Новости</a>
				<a href="/about/">О компании</a>
				<a href="/contacts/">Контакты</a>
			</div>

			<div class="footer__nav">
				<a href="/AGS_requisites.pdf" target="_blank" download>Реквизиты компании</a>
				<a href="/presentation.pdf" download="Презентация о компании AGS" target="_blank">Презентация о&nbsp;компании</a>
				<a href="https://kazan.hh.ru/employer/4190110" target="_blank">Вакансии</a>
				<a href="/AGS_policy.docx" target="_blank" download>Пользовательское соглашение</a>
			</div>

			<div class="footer__right">
				<div class="site-header__contacts">
					<a href="tel:+74955328640" class="site-header__phone">+7 495 532 86 40</a>
					<a href="mailto:info@agse.ru" class="site-header__email">info@agse.ru</a>
				</div>
				<div class="footer__social">
					<a href="https://www.facebook.com/agseing/?modal=composer" target="_blank" title="Facebook"><i class="i-fb"></i></a>
					<a href="https://www.youtube.com/channel/UC8R-uqqQxtyrqxMw7oohjWA?view_as=subscriber" target="_blank"><i class="i-yt" title="Youtube"></i></a>
					<a href="https://zen.yandex.ru/id/5ddc0d9f4b1a762d7ecbcee8?clid=300&token=" target="_blank" title="Яндекс Дзен"><i class="i-dzen"></i></a>
				</div>
			</div>

		</div>
	</div>
</footer>



<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<p class="h1 modal__title">Обратный звонок</p>
		<p class="modal__descr">Оставьте заявку на&nbsp;обратный звонок и&nbsp;мы перезвоним Вам в&nbsp;течение 5&nbsp;минут</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ обратного звонка (услуги АГС)" name="form_subject">
			<label class="input-group">
				<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
				<span class="input-group__label">Ваше имя</span>
			</label>
			<label class="input-group">
				<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
				<span class="input-group__label">Телефон*</span>
			</label>
			<button type="submit" class="btn">Заказать звонок</button>
			<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h1 modal__title">Заказать проект</p>
		<p class="modal__descr">Оставьте заявку на&nbsp;просчет проекта и&nbsp;мы свяжемся с&nbsp;Вами для&nbsp;уточнения деталей</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ поректа (услуги АГС)" name="form_subject">
			<label class="input-group">
				<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
				<span class="input-group__label">Ваше имя</span>
			</label>
			<label class="input-group">
				<input type="email" name="user_email" data-label="Email" class="input-text" data-req="true">
				<span class="input-group__label">E-mail*</span>
			</label>
			<label class="input-group">
				<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
				<span class="input-group__label">Телефон*</span>
			</label>
			<label class="style-file">
				<input type="file" name="user_file" data-multiple-caption="{count} файла(ов)" multiple>
				<i></i>
				<span class="style-file__text">Прикрепить файл</span>
				<span class="style-file__delete" title="Очистить">&#10006;</span>
			</label>
			<button type="submit" class="btn">Заказать просчет</button>
			<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
		</form>
	</div>

	<div id="modal-thanks" class="modal modal--thanks">
		<p class="h1 modal__title">Спасибо за&nbsp;обращение в&nbsp;нашу компанию</p>
		<p class="modal__descr">Мы уже&nbsp;начали работу по&nbsp;вашей заявке</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
