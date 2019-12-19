<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <?php
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/style.css');

    CJSCore::Init(['jquery']);

    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/libs.js');

    Asset::getInstance()
        ->addString('<link rel="icon" type="image/x-icon" href="' . DEFAULT_TEMPLATE_PATH . '/assets/img/favicon.ico">');
    ?>

    <?php $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel() ?>
</div>
<header class="header header_shadow">
    <div class="container header__inner">
        <div class="nav-toggle header__m-menu">
            <div class="nav-toggle__bar"></div>
        </div>

        <div class="mobile-nav">
            <? $APPLICATION->IncludeComponent("bitrix:menu", "mobile_menu", Array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "N",    // Учитывать права доступа
                "ROOT_MENU_TYPE" => "mobile",    // Тип меню для первого уровня
                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            ); ?>

            <a href="#" class="mobile-nav__email email-link"><?= CONTACTS_EMAIL; ?></a>
        </div>

        <div class="header__logo">
            <a href="<?= SITE_DIR ?>" class="logo">
                <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/logo.svg" class="logo__img" alt=""/>
            </a>
            <span class="header__desc">Мастерская коучинга <br/>и тренинга Леонида Кроля</span>
        </div>

        <div class="header__nav">
            <div class="header__contacts">
                <a href="#" class="btn">Свяжитесь со мной</a>
                <a href="tel:<?= HREF_PHONE_VALUE; ?>" class="phone-link"><?= CONTACTS_PHONE; ?></a>
                <a href="mailto:<?= CONTACTS_EMAIL; ?>" class="email-link"><?= CONTACTS_EMAIL; ?></a>

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

            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top_menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "top_menu"
                ),
                false
            ); ?>
        </div>

        <a href="#" class="header__m-phone"><?= CONTACTS_PHONE; ?></a>
    </div>
</header>

<div
        class="wrapper
        <?= ($APPLICATION->GetCurDir() === '/contacts/') ? 'p-map' : ''; ?>
        <?= ($APPLICATION->GetCurDir() === '/schedule/') ? 'p-schedule' : ''; ?>
        <?= ($APPLICATION->GetCurDir() === '/trainings/') ? 'p-corp' : ''; ?>">

    <?php if (($APPLICATION->GetCurDir() === '/trainings/')): ?>
    <div class="corp-head">
    <?php endif; ?>

    <?php if ($APPLICATION->GetCurDir() !== '/'): ?>
        <div class="container <?= ($APPLICATION->GetCurDir() === '/contacts/') ? 'p-map__inner' : ''; ?>">
            <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "top_navigate", Array(
                "PATH" => "",
                // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                "SITE_ID" => "s1",
                // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                "START_FROM" => "0",
                // Номер пункта, начиная с которого будет построена навигационная цепочка
            ),
                false
            ); ?>

            <h1
                    class="title title_h1 title_center
                    <?= ($APPLICATION->GetCurDir() !== '/contacts/') ? 'title_blue p-about__title' : ''; ?>
                    <?= ($APPLICATION->GetCurDir() === '/trainings/') ? 'title_white p-corp__title' : ''; ?>">
                <?= $APPLICATION->ShowTitle(false); ?>
            </h1>

            <?php if ($APPLICATION->GetCurDir() === '/contacts/'): ?>
                <div class="p-map__content">
                    <div class="footer-cell footer-cell_large">
                        <svg class="footer-cell__icon">
                            <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-phone"></use>
                        </svg>
                        <a href="tel:<?= HREF_PHONE_VALUE; ?>" class="footer-cell__link"><?= CONTACTS_PHONE; ?></a>
                    </div>

                    <br>

                    <div class="footer-cell">
                        <svg class="footer-cell__icon">
                            <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-mail"></use>
                        </svg>
                        <a href="mailto:info@leonidkroll.com" class="footer-cell__link"><?= CONTACTS_EMAIL; ?></a>
                    </div>

                    <br>

                    <div class="footer-cell">
                        <svg class="footer-cell__icon">
                            <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-location"></use>
                        </svg>
                        <a href="mailto:info@leonidkroll.com" class="footer-cell__link">
                            <?= CONTACTS_ADDRESS; ?>
                        </a>
                    </div>

                    <ul class="social-list p-map__social">
                        <li class="social-list__item">
                            <a href="<?= CONTACTS_FACEBOOK; ?>" class="social-list__link social-list__link_fb">
                                <svg class="social-list__icon social-list__icon_fb">
                                    <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-fb"></use>
                                </svg>
                            </a>
                        </li>

                        <li class="social-list__item">
                            <a href="<?= CONTACTS_VK; ?>" class="social-list__link social-list__link_vk">
                                <svg class="social-list__icon social-list__icon_vk">
                                    <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-vk"></use>
                                </svg>
                            </a>
                        </li>

                        <li class="social-list__item">
                            <a href="<?= CONTACTS_OK; ?>" class="social-list__link social-list__link_ok">
                                <svg class="social-list__icon social-list__icon_ok">
                                    <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-ok"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <h5 class="title title_h5">Как добраться</h5>
                    <p>
                        <?= CONTACTS_WHERE; ?>
                    </p>
                </div>
            <?php endif; ?>

            <?php if ($APPLICATION->GetCurDir() === '/trainings/'): ?>
                <div class="container container_little corp-head__content">
                    <div class="corp-head__text">
                        <p>
                            <?= TRAININGS_DESC_TOP; ?>
                        </p>
                        <p>
                            <?= TRAININGS_DESC_BOTTOM; ?>
                        </p>
                    </div>

                    <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/pictures/corp-photo.jpg" class="corp-head__img" alt="" />
                </div>
            <?php endif; ?>
        </div>
        <?php if (($APPLICATION->GetCurDir() === '/trainings/')): ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
