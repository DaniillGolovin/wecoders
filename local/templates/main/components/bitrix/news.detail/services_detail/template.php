<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<!-- ДЛЯ СТРАНИЦЫ УСЛУГИ -->
<!-- Описание + картинка -->
<?php if (!empty($arResult['DISPLAY_PROPERTIES']['picture']['FILE_VALUE']['SRC'])): ?>
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1"><?= $arResult['PROPERTIES']['detail_title']['VALUE'] ?></h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                        <?= $arResult['PROPERTIES']['description']['~VALUE']['TEXT'] ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <img src="<?= $arResult['DISPLAY_PROPERTIES']['picture']['FILE_VALUE']['SRC']?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Доп. контент об услуге -->
<div class="pb-60">
    <div class="container">
        <div class="row">
            <?php if (!empty($arResult['PROPERTIES']['faq'])): ?>
                <div class="col-md-6">
                    <h3 class="mb-30">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . '/includes/services/services_faq.php'
                            )
                        );?>
                    </h3>
                    <div class="brand-accordion">
                        <div class="panel-group icon angle-icon" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php $select = 0; ?>
                            <?php foreach ($arResult['PROPERTIES']['faq']['~VALUE'] as $arFaqKey => $arFaqValue):?>
                                <div class="panel panel-default">
                                    <?php if (!empty($arResult['PROPERTIES']['faq']['DESCRIPTION'][$arFaqKey])): ?>
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a class="<?= ($select === 0) ? '' : 'collapsed' ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $arFaqKey; ?>" aria-expanded="true" aria-controls="collapseOne">
                                                    <?= $arResult['PROPERTIES']['faq']['DESCRIPTION'][$arFaqKey] ?>
                                                </a>
                                            </h4>
                                        </div>
                                    <?php endif; ?>

                                    <div id="collapse<?= $arFaqKey ?>" class="panel-collapse collapse <?= ($select === 0) ? 'in' : '' ?>" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <?= $arFaqValue['TEXT'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $select++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-6 col-md-6">
                <h3 class="mb-30">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . '/includes/services/services_stages.php'
                        )
                    );?>
                </h3>
                <?php if (!empty($arResult['PROPERTIES']['stages']['~VALUE'])): ?>
                    <div class="my-tab">
                    <!-- Nav tabs -->
                        <ul class="custom-tab mb-15" role="tablist">
                        <? $stagedSelect = 0; ?>
                        <?php foreach ($arResult['PROPERTIES']['stages']['~VALUE'] as $stagedKey => $stagesValue):?>
                                <li role="presentation" class="<?= ($stagedSelect++ == 0) ? 'active' : '' ?>"><a href="#<?= $stagedKey ?>" aria-controls="analytyc" role="tab" data-toggle="tab"><?= $arResult['PROPERTIES']['stages']['DESCRIPTION'][$stagedKey] ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                            <!-- Tab panes -->
                        <div class="tab-content">
                            <? $stagedSelect = 0; ?>
                            <?php foreach ($arResult['PROPERTIES']['stages']['~VALUE'] as $stagedKey => $stagesValue):?>
                                <div role="tabpanel" class="tab-pane fade in <?= ($stagedSelect++ == 0) ? 'active' : ''?>" id="<?= $stagedKey ?>">
                                    <p><?= $stagesValue['TEXT'] ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
    Элемент не найден
<?php endif; ?>

