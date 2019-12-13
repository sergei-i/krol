<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

    <div class="poster">
        <div
                class="poster__content"
                style="background-image: url('<?= DEFAULT_TEMPLATE_PATH; ?>/assets/pictures/about.jpg')">
        </div>
    </div>

    <div class="container">
        <div class="content p-about__content">

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "about_company",
                    "PATH" => "/about/"
                )
            );?>

            <div class="p-about__btns">
                <a href="#" class="btn p-about__btn">
                    <svg class="btn__icon btn__icon_calendar">
                        <use xlink:href="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/img/icons.svg#icon-calendar"></use>
                    </svg>
                    Расписание
                </a>

                <a href="#" class="btn p-about__btn">Корпоративные тренинги</a>
            </div>
        </div>
    </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>