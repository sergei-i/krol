<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<footer class="footer">
    <div class="subscription">
        <span class="subscription__title">Подписаться <br/>На рассылку</span>

        <form class="subscription__form">
            <input type="text" placeholder="Введите e-mail" class="subscription__input">

            <div class="subscription__btn">
                <button class="subscription__submit btn">Подписаться</button>
                <span class="subscription__warning">Нажимая на кнопку, Вы соглашаетесь с условиями обработки данных</span>
            </div>
        </form>
    </div>

    <div class="footer__contacts">
        <div class="footer__inner container">
				<span class="footer-cell footer-cell_large">
					<svg class="footer-cell__icon"><use
                                xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-phone"/></svg>
					<a href="tel:<?= HREF_PHONE_VALUE; ?>" class="footer-cell__link"><?= CONTACTS_PHONE; ?></a>
				</span>

            <span class="footer-cell">
					<svg class="footer-cell__icon"><use
                                xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-mail"/></svg>
					<a href="mailto:<?= CONTACTS_EMAIL; ?>" class="footer-cell__link"><?= CONTACTS_EMAIL; ?></a>
				</span>

            <span class="footer-cell">
					<svg class="footer-cell__icon"><use
                                xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-location"/></svg>
					<a href="mailto:<?= CONTACTS_EMAIL; ?>" class="footer-cell__link">
                        <?= CONTACTS_ADDRESS; ?>
                    </a>
				</span>

            <ul class="social-list">
                <li class="social-list__item">
                    <a href="<?= CONTACTS_FACEBOOK; ?>" class="social-list__link social-list__link_fb">
                        <svg class="social-list__icon social-list__icon_fb">
                            <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-fb">
                        </svg>
                    </a>
                </li>

                <li class="social-list__item">
                    <a href="<?= CONTACTS_VK; ?>" class="social-list__link social-list__link_vk">
                        <svg class="social-list__icon social-list__icon_vk">
                            <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-vk">
                        </svg>
                    </a>
                </li>

                <li class="social-list__item">
                    <a href="<?= CONTACTS_OK; ?>" class="social-list__link social-list__link_ok">
                        <svg class="social-list__icon social-list__icon_ok">
                            <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-ok">
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer__copyright container">
			<span class="footer__left">
				<span class="footer__copy">2018 © Мастерская коучинга и тренинга Леонида Кроля</span>
				<a href="#" class="footer__link">Политика конфиденциальности</a>
			</span>

        <span class="footer__right">
				Разработка сайта -
            <a href="#" class="footer__link">
                <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/letsrock.svg" class="footer__lr"
                     alt=""/>
            </a>
			</span>
    </div>
</footer>

<div class="modals">
    <div class="modals__back"></div>
    <div class="modal modal_size-s" data-modal="modal-request">
        <button class="modal__close"></button>
        <h3 id="modal-header" class="title title_h3 title_blue title_upper title_center title_modal"></h3>
        <div class="modal__content">
            <p id="trening"></p>
            <form class="form" id="modalform">
                <input type="hidden" id="raspid" name="raspid" value="">
                <input type="hidden" id="type-modal" name="modal" value="">
                <input type="hidden" id="trainer-id" name="trainer-id" value="">
                <div class="form__line">
                    <label class="field">
                        <span>Имя</span>
                        <input name="name" type="text">
                    </label>
                    <label class="field">
                        <span>Фамилия</span>
                        <input name="surname" type="text">
                    </label>
                </div>
                <div class="form__line">
                    <label class="field">
                        <span>Телефон (с кодом страны и города)</span>
                        <input id="phone" name="phone" type="text">
                    </label>
                    <label class="field">
                        <span>E-mail</span>
                        <input name="email" type="text">
                    </label>
                </div>
                <div class="form__line">
                    <label class="field field_full">
                        <span>Удобный способ связи</span>
                        <select name="method" class="select">
                            <option>Звонок</option>
                            <option>SMS</option>
                            <option>E-mail</option>
                            <option>WhatsApp</option>
                            <option>Telegram</option>
                        </select>
                    </label>
                </div>
                <div class="form__line">
                    <label class="field field_full">
                        <span>Комментарий</span>
                        <textarea name="comment"></textarea>
                    </label>
                </div>
                <div class="form__line">
                    <label class="checkbox checkbox_form form__checkbox">
                        <input type="checkbox" checked
                               class="checkbox__input" id="soglasen" name="agreement" value="Да">
                        <span class="checkbox__text">
                            Принимаю условия обработки данных и получение подтверждения брони на почту
                        </span>
                    </label>
                    <label class="checkbox checkbox_form form__checkbox">
                        <input type="checkbox" class="checkbox__input" name="subscription" value="Да">
                        <span class="checkbox__text">Хочу получать новости</span>
                    </label>
                </div>
                <div class="button" style="display: flex;">
                    <button id="modal-butt" class="btn btn_shadow btn_center btn_submit" type="submit">
                        Отправить заявку
                    </button>
                    <p style=" margin-left: 50px; color: #0a962f"></p>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="/local/assets/js/main.js"></script>
</body>
</html>