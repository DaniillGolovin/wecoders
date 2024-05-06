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

<?php if (!empty($arResult)): ?>
    <div class="row">
        <?php foreach ($arResult['ITEMS'] as $arItems):?>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="<?= SITE_TEMPLATE_PATH?>/assets/img/team/<?= $arItems['PREVIEW_PICTURE']['ORIGINAL_NAME'] ?? '' ?>" alt=""/>
                        <div class="team-text">
                            <h4><?= $arItems['PROPERTIES']['description']['~DESCRIPTION'] ?? '' ?></h4>
                            <p><?= $arItems['PROPERTIES']['description']['VALUE']['TEXT'] ?? '' ?></p>
                            <div class="team-icon">
                                <?php foreach ($arItems['PROPERTIES']['social']['icons'] as $icon):?>
                                    <a href="/contacts/"><i class="fa fa-<?= $icon ?? '' ?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="team-name text-center">
                        <h4><?= $arItems['NAME'] ?? '' ?></h4>
                        <h5><?= $arItems['PREVIEW_TEXT'] ?? '' ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>