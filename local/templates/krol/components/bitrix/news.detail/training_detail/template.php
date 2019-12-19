<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="training-info">
    <div class="container">
        <div class="training-info__text">

            <?php if (!empty($arResult['PROPERTIES']['TOP_DESC']['VALUE'])): ?>
                <p class="training-info__desc">
                    <?= $arResult['PROPERTIES']['TOP_DESC']['VALUE'] ?>
                </p>
            <?php endif; ?>

            <?php if (!empty($arResult['PROPERTIES']['TOP_DATE_PRICE']['VALUE'])): ?>
                <span class="training-info__date">
                <?= $arResult['PROPERTIES']['TOP_DATE_PRICE']['VALUE'] ?>
            </span>
            <?php endif; ?>

            <?php if (!empty($arResult['PROPERTIES']['TOP_TRAINING_DURATION']['VALUE'])): ?>
                <strong class="training-info__duration">Продолжительность:
                    <?= $arResult['PROPERTIES']['TOP_TRAINING_DURATION']['VALUE'] ?>
                </strong>
            <?php endif; ?>

        </div>

        <?php if (!empty($arResult['PROPERTIES']['PHOTOS'])): ?>
            <div class="training-slider">
                <div class="training-slider__for slider-for">
                    <?php foreach ($arResult['PROPERTIES']['PHOTOS'] as $photo): ?>
                        <div class="training-slider__item"
                             style="background-image: url('<?= $photo['SRC']; ?>');"></div>
                    <?php endforeach; ?>
                </div>

                <div class="training-slider__nav slider-nav">
                    <?php foreach ($arResult['PROPERTIES']['PHOTOS'] as $photo): ?>
                        <div class="training-slider__n-item"
                             style="background-image: url('<?= $photo['SRC']; ?>');"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="training-info__booking">
            <div class="b-booking">
                <div class="b-booking__photo"
                     style="background-image: url('<?= $arResult['TRAINER']['PICTURE'] ?>');">
                    <span class="b-booking__label">Тренер <strong><?= $arResult['TRAINER']['NAME']; ?></strong></span>
                </div>

                <div class="b-booking__inner">
                    <div class="b-booking__cell">
                        <div class="b-booking__item">
                            <span class="b-booking__title">Дата</span>

                            <span class="b-booking__title">
                                <?= $arResult['TRAINER']['CORRECTED_DATE'] ?>
                            </span>
                        </div>

                        <div class="b-booking__item">
                            <span class="b-booking__title">Время</span>
                            <span class="b-booking__title">
                                <?= $arResult['PROPERTIES']['TIME']['VALUE'] ?>
                            </span>
                        </div>
                    </div>

                    <div class="b-booking__content">
                        <span class="b-booking__info">При оплате за 14 дней до тренинга</span>
                        <span class="b-booking__price">
                             <?= $arResult['PROPERTIES']['PRICE_WITH_DISCOUNT']['VALUE'] ?>
                        </span>
                        <span class="b-booking__sale">
                             <?= $arResult['PROPERTIES']['PRICE_WITHOUT_DISCOUNT']['VALUE'] ?>
                        </span>
                    </div>

                    <a href="#"
                       class="btn btn_shadow b-booking__btn"
                       data-open="modal-request"
                       data-id="<?= $arResult['ID']; ?>">
                        Забронировать
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="training-lists">
    <div class="container">

        <?php if (!empty($arResult['PROPERTIES']['RED_BORDER_TEXT']['VALUE'])): ?>
            <div class="b-quote">
                <?= $arResult['PROPERTIES']['RED_BORDER_TEXT']['VALUE'] ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($arResult['PROPERTIES']['TRAINING_LEARN_TEXT']['VALUE'])): ?>
            <div class="training-lists__checked">
                <h2 class="title title_h2 title_blue title_upper title_center training-lists__title">
                    На тренинге вы научитесь
                </h2>

                <ul class="checked-list">
                    <?php foreach ($arResult['PROPERTIES']['TRAINING_LEARN_TEXT']['VALUE'] as $keyLearn => $learnText): ?>
                        <li class="checked-list__item">
                        <span class="checked-list__title">
                            <?= $arResult['PROPERTIES']['TRAINING_LEARN_TEXT']['DESCRIPTION'][$keyLearn]; ?>
                        </span>
                            <p class="checked-list__text">
                                <?= $learnText; ?>
                            </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php if (!empty($arResult['PROPERTIES']['ALSO_KNOW_TEXT']['VALUE'])): ?>
    <div class="b-list-bg" style="background-image: url('<?= DEFAULT_TEMPLATE_PATH ?>/assets/img/training-list.jpg');">
        <div class="container b-list-bg__inner">
            <h2 class="title title_h2 title_white title_upper b-list-bg__title">Еще вы узнаете:</h2>

            <ul class="b-list">
                <?php foreach ($arResult['PROPERTIES']['ALSO_KNOW_TEXT']['VALUE'] as $alsoText): ?>
                    <li class="b-list__item"><?= $alsoText; ?></li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
<?php endif; ?>

<?php if (!empty($arResult['PROPERTIES']['YOURS_TRAINING_TEXT']['VALUE'])): ?>
    <div class="b-whoareyou">
        <div class="container">
            <h2 class="title title_h2 title_blue title_upper title_center b-whoareyou__head">Вам подходит этот тренинг,
                если
                вы</h2>

            <ul class="b-whoareyou__list">
                <?php foreach ($arResult['PROPERTIES']['YOURS_TRAINING_TEXT']['VALUE'] as $keyYour => $yourText): ?>
                    <li class="b-whoareyou__item">
                        <div class="b-whoareyou__inner">
                    <span class="b-whoareyou__title">
                         <?= $arResult['PROPERTIES']['YOURS_TRAINING_TEXT']['DESCRIPTION'][$keyYour]; ?>
                    </span>
                            <span class="b-whoareyou__text">
                        <?= $yourText; ?>
                    </span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

<div class="b-trainer">
    <div class="container">
        <div class="b-trainer__inner">
            <div class="b-trainer__photo">
                <img src="<?= $arResult['TRAINER']['PICTURE']; ?>" class="b-trainer__img" alt=""/>
            </div>

            <div class="b-trainer__content">
                <div class="b-trainer__container">
                    <h2 class="title title_h2 title_blue title_upper">Тренинг проводит</h2>

                    <span class="b-trainer__title b-trainer__title_big">
                        <?= $arResult['TRAINER']['NAME']; ?>
                    </span>

                    <p class="b-trainer__text">
                        <?= $arResult['TRAINER']['TEXT']; ?>
                    </p>

                    <span class="b-trainer__title">Специализация</span>
                    <p class="b-trainer__text">
                        <?= $arResult['TRAINER']['SPECIALIZATION']; ?>
                    </p>

                    <span class="b-trainer__title">Сфера практики</span>
                    <p class="b-trainer__text">
                        <?= $arResult['TRAINER']['PRACTICE']; ?>
                    </p>

                    <br>

                    <a href="/trainers/" class="btn">Подробнее о тренере</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="b-blog">
    <div class="container b-blog__inner">
        <h2 class="title title_h2 title_white title_upper title_center">Публикации тренера в блоге</h2>

        <div class="b-blog__items">
            <?php if (!empty($arResult['BLOG']['NAME'])): ?>
                <?php foreach ($arResult['BLOG']['NAME'] as $key => $value): ?>
                    <div class="blog-item">
                        <a href="#" class="blog-item__img"
                           style="background-image: url('<?= $arResult['BLOG']['PICTURE'][$key] ?>');"></a>

                        <div class="blog-item__inner">
                            <div class="blog-item__content">
                                <a href="#" class="blog-item__title"><?= $value; ?></a>
                                <p class="blog-item__desc"><?= $arResult['BLOG']['TEXT'][$key] ?></p>
                            </div>

                            <span class="blog-item__date"><?= $arResult['BLOG']['DATE'][$key] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="b-blog__btn">
            <a href="/blog/" class="btn btn_shadow">Все публикации</a>
        </div>
    </div>
</div>